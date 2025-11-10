 
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>New Contact Form Submission</title>
</head>
<body>
    <h2>New Contact Request</h2>
    <p><strong>Service:</strong> {{ $data['service'] }}</p>
    <p><strong>Website:</strong> {{ $data['website'] }}</p>
    <p><strong>First Name:</strong> {{ $data['fname'] }}</p>
    <p><strong>Last Name:</strong> {{ $data['lname'] ?? 'N/A' }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Phone:</strong> {{ $data['countrycode'] }} {{ $data['number'] }}</p>
</body>
</html>
