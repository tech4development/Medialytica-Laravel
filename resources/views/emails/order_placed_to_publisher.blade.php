<!-- resources/views/emails/order_placed_to_publisher.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Order Placed</title>
</head>
<body>
    <h1>New Order Placed</h1>
    <p>Order Number: {{ $order->order_number }}</p>
    <p>User Name: {{ $order->user_name }}</p>
    <p>User Email: {{ $order->user_email }}</p>
    <p>Publisher Website Name: {{ $order->publisher_website_name }}</p>
    <p>Publisher Website URL: {{ $order->publisher_website_url }}</p>
    <p>Price: ${{ $order->price }}</p>
</body>
</html>
