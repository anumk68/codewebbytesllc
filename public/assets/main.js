const reviewWrap = document.getElementById("reviewWrap");
const leftArrow = document.getElementById("leftArrow");
const rightArrow = document.getElementById("rightArrow");
const imgDiv = document.getElementById("imgDiv");
const personName = document.getElementById("personName");
const profession = document.getElementById("profession");
const description = document.getElementById("description");
const surpriseMeBtn = document.getElementById("surpriseMeBtn");
const chicken = document.querySelector(".chicken");

let isChickenVisible = false;
let autoSlideInterval;

let people = [
  {
    photo: 'url("https://cdn.pixabay.com/photo/2018/03/06/22/57/portrait-3204843_960_720.jpg")',
    name: "Susan Smith",
    profession: "WEB DEVELOPER",
    description:
      "Cheese and biscuits chalk and cheese fromage frais. Cheeseburger caerphilly cheese slices chalk and cheese cheeseburger mascarpone danish fontina rubber cheese. Squirty cheese say cheese manchego jarlsberg lancashire taleggio cheese and wine squirty cheese. Babybel pecorino feta macaroni cheese brie queso everyone loves gouda. Cheese and biscuits camembert de normandie fromage fromage macaroni cheese"
  },
  {
    photo: "url('https://cdn.pixabay.com/photo/2019/02/11/20/20/woman-3990680_960_720.jpg')",
    name: "Anna Grey",
    profession: "UFC FIGHTER",
    description:
      "I'm baby migas cornhole hell of etsy tofu, pickled af cardigan pabst. Man braid deep v pour-over, blue bottle art party thundercats vape. Yr waistcoat whatever yuccie, farm-to-table next level PBR&B. Banh mi pinterest palo santo, aesthetic chambray leggings activated charcoal cred hammock kitsch humblebrag typewriter neutra knausgaard. Pabst succulents lo-fi microdosing portland gastropub Banh mi pinterest palo santo"
  },
  {
    photo: "url('https://cdn.pixabay.com/photo/2016/11/21/12/42/beard-1845166_960_720.jpg')",
    name: "Branson Cook",
    profession: "ACTOR",
    description:
      "Radio telescope something incredible is waiting to be known billions upon billions Jean-François Champollion hearts of the stars tingling of the spine. Encyclopaedia galactica not a sunrise but a galaxyrise concept of the number one encyclopaedia galactica from which we spring bits of moving fluff. Vastness is bearable only through love paroxysm of global death concept"
  },
  {
    photo: "url('https://cdn.pixabay.com/photo/2014/10/30/17/32/boy-509488_960_720.jpg')",
    name: "Julius Grohn",
    profession: "PROFESSIONAL CHILD",
    description:
      "Biscuit chocolate pastry topping lollipop pie. Sugar plum brownie halvah dessert tiramisu tiramisu gummi bears icing cookie. Gummies gummi bears pie apple pie sugar plum jujubes. Oat cake croissant bear claw tootsie roll caramels. Powder ice cream caramels candy tiramisu shortbread macaroon chocolate bar. Sugar plum jelly-o chocolate dragée tart chocolate marzipan cupcake gingerbread."
  }
];

let currentPerson = 0;

// Initial setup
function showPerson(index) {
  imgDiv.style.backgroundImage = people[index].photo;
  personName.innerText = people[index].name;
  profession.innerText = people[index].profession;
  description.innerText = people[index].description;
}
showPerson(currentPerson);

// Slide transition animation
function slide(whichSide, personNumber) {
  const reviewWrapWidth = reviewWrap.offsetWidth + "px";
  const descriptionHeight = description.offsetHeight + "px";
  const side1symbol = whichSide === "left" ? "" : "-";
  const side2symbol = whichSide === "left" ? "-" : "";

  const tl = gsap.timeline();

  if (isChickenVisible) {
    tl.to(chicken, { duration: 0.4, opacity: 0 });
  }

  tl.to(reviewWrap, {
    duration: 0.4,
    opacity: 0,
    translateX: `${side1symbol + reviewWrapWidth}`
  });

  tl.to(reviewWrap, {
    duration: 0,
    translateX: `${side2symbol + reviewWrapWidth}`
  });

  setTimeout(() => {
    imgDiv.style.backgroundImage = people[personNumber].photo;
    description.style.height = descriptionHeight;
    personName.innerText = people[personNumber].name;
    profession.innerText = people[personNumber].profession;
    description.innerText = people[personNumber].description;
  }, 400);

  tl.to(reviewWrap, { duration: 0.4, opacity: 1, translateX: 0 });

  if (isChickenVisible) {
    tl.to(chicken, { duration: 0.4, opacity: 1 });
  }
}

// Left (next)
function setNextCardLeft() {
  currentPerson = (currentPerson + 1) % people.length;
  slide("left", currentPerson);
  resetAutoSlide();
}

// Right (previous)
function setNextCardRight() {
  currentPerson = (currentPerson - 1 + people.length) % people.length;
  slide("right", currentPerson);
  resetAutoSlide();
}

// Event listeners
leftArrow.addEventListener("click", setNextCardLeft);
rightArrow.addEventListener("click", setNextCardRight);

// Surprise chicken button
surpriseMeBtn.addEventListener("click", () => {
  if (chicken.style.opacity === "0" || !chicken.style.opacity) {
    chicken.style.opacity = "1";
    imgDiv.classList.add("move-head");
    surpriseMeBtn.innerText = "Remove the chicken";
    surpriseMeBtn.classList.remove("surprise-me-btn");
    surpriseMeBtn.classList.add("hide-chicken-btn");
    isChickenVisible = true;
  } else {
    chicken.style.opacity = "0";
    imgDiv.classList.remove("move-head");
    surpriseMeBtn.innerText = "Surprise me";
    surpriseMeBtn.classList.add("surprise-me-btn");
    surpriseMeBtn.classList.remove("hide-chicken-btn");
    isChickenVisible = false;
  }
});

// Resize fix
window.addEventListener("resize", () => {
  description.style.height = "100%";
});

// ✅ Auto Slide Functionality
function startAutoSlide() {
  autoSlideInterval = setInterval(() => {
    setNextCardLeft(); // Auto move left every few seconds
  }, 5000); // 5 seconds (adjust as needed)
}

function stopAutoSlide() {
  clearInterval(autoSlideInterval);
}

function resetAutoSlide() {
  stopAutoSlide();
  startAutoSlide();
}

// Start auto slide on load
startAutoSlide();
