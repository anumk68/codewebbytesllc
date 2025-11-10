<!-- resources/views/emails/payment-success.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Payment Successful</title>
</head>
<body>
    <h2>Payment Successful</h2>
    <p>Dear {{ $first_name }} {{ $last_name }},</p>
    <p>Thank you for your payment. Below are the details:</p>
    <ul>
        <li><strong>Package Name:</strong> {{ $package }}</li>
        <li><strong>Plan Name:</strong> {{ $plan }}</li>
        <li><strong>Amount:</strong> {{ $amount }} {{ $currency }}</li>
        <li><strong>Payment Status:</strong> Successful</li>
    </ul>
    <p>We appreciate your business!</p>
    <p>Best regards,<br>The CodeWebBytes Team</p>
</body>
</html>
