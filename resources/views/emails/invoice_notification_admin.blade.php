<!DOCTYPE html>
<html>
<head>
    <title>Invoice Notification</title>
</head>
<body>
    <h1>New Invoice Sent</h1>
    <p>Hello Admin,</p>
    <p>An invoice has been sent to the advertiser. Below are the details:</p>
    <ul>
        <li>Order Number: {{ $invoice->order_number }}</li>
        <li>User Name: {{ $invoice->user_name }}</li>
        <li>User Email: {{ $invoice->user_email }}</li>
        <li>Publisher Website Name: {{ $invoice->publisher_website_name }}</li>
        <li>Publisher Website URL: {{ $invoice->publisher_website_url }}</li>
        <li>Amount: ${{ number_format($invoice->amount, 2) }}</li>
    </ul>
    <p>Best regards,<br>Your Company</p>
</body>
</html>
