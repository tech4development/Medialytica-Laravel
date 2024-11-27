<!DOCTYPE html>
<html>

<head>
 <title>New Advertiser Account Notification</title>
</head>

<body>
 <h2>New Advertiser Account Created</h2>
 <p><strong>Advertiser Name:</strong> {{ $advertiser }}</p>
 <p><strong>Email Address:</strong> {{ $email }}</p>
 <p><strong>Publisher Website:</strong> {{ $website }}</p>
 <p><strong>Order Total:</strong> KES {{ number_format($price, 2) }}</p>

 <p>Please review the advertiser's account and ensure everything is in order.</p>

 <p>Regards,<br>Your Team</p>
</body>

</html>
