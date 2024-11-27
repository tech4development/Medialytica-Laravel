<!DOCTYPE html>
<html>

<head>
 <title>Welcome to Our Platform</title>
 <style>
  body {
   font-family: Arial, sans-serif;
   line-height: 1.6;
  }

  .container {
   max-width: 600px;
   margin: 0 auto;
   padding: 20px;
   border: 1px solid #ddd;
   border-radius: 5px;
   background-color: #f9f9f9;
  }

  .header {
   text-align: center;
   padding: 10px 0;
   border-bottom: 1px solid #ddd;
  }

  .content {
   padding: 20px;
  }

  .footer {
   text-align: center;
   font-size: 0.9em;
   color: #666;
   margin-top: 20px;
  }
 </style>
</head>

<body>
 <div class="container">
  <div class="header">
   <h2>Welcome to Our Platform</h2>
  </div>
  <div class="content">
   <p>Dear {{ $name }},</p>
   <p>We are thrilled to welcome you as a new advertiser on our platform!</p>
   <p>Your account has been successfully created. You can now log in to your dashboard using the email address you
    registered with:</p>
   <ul>
    <li>Email: {{ $email }}</li>
   </ul>
   <p>We’re excited to help you connect with publishers and achieve your advertising goals.</p>
   <p>If you have any questions or need assistance, feel free to contact our support team.</p>
   <p>Thank you for choosing us!</p>
   <p>Best regards,<br> The Team</p>
  </div>
  <div class="footer">
   <p>&copy; {{ date('Y') }} Your Company Name. All rights reserved.</p>
  </div>
 </div>
</body>

</html>
