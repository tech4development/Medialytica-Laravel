<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Tracking</title>
    @vite('resources/css/app.css') <!-- Tailwind CSS -->
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md">
        <h1 class="text-2xl font-bold mb-4">Track Your Order</h1>
        <form id="trackOrderForm">
            @csrf
            <label for="order_number" class="block text-gray-700">Order Number:</label>
            <input type="text" id="order_number" name="order_number" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
            <button type="submit" class="mt-4 bg-indigo-600 text-white px-4 py-2 rounded-md">Track</button>
        </form>
        <div id="orderStatus" class="mt-4"></div>
    </div>

    <script>
        document.getElementById('trackOrderForm').addEventListener('submit', async function(event) {
            event.preventDefault();
            const orderNumber = document.getElementById('order_number').value;

            const response = await fetch('/order/track', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
                },
                body: JSON.stringify({ order_number: orderNumber })
            });

            const data = await response.json();
            document.getElementById('orderStatus').textContent = `Order Status: ${data.status}`;
        });
    </script>
</body>
</html>
