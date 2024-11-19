<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Invoice</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }
        .container {
            width: 80%;
            margin: auto;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .invoice-details {
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Invoice</h1>
        </div>
        <div class="invoice-details">
            <p><strong>Invoice Number:</strong> {{ $invoice->id }}</p>
            <p><strong>Order Number:</strong> {{ $order->id }}</p>
            <p><strong>Date:</strong> {{ $invoice->created_at->format('Y-m-d') }}</p>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Description</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $order->description ?? 'Order' }}</td>
                    <td>${{ number_format($order->price, 2) }}</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th>Total</th>
                    <td>${{ number_format($order->price, 2) }}</td>
                </tr>
            </tfoot>
        </table>
        <div class="footer">
            <p>Thank you for your business!</p>
        </div>
    </div>
</body>
</html>
