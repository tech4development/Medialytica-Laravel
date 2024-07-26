<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publisher Details</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="container mx-auto p-6 bg-white-smoke max-w-4xl">
        <h1 class="text-2xl font-bold mb-4">Publisher Details</h1>
        <div class="bg-white shadow-md rounded-md p-4">
            <div class="mb-4">
                <strong class="text-gray-700">Website Name:</strong>
                <p class="text-gray-600">{{ $publisher->website_name }}</p>
            </div>
            <div class="mb-4">
                <strong class="text-gray-700">Website URL:</strong>
                <p class="text-gray-600"><a href="{{ $publisher->website_url }}" target="_blank" class="text-blue-500">{{ $publisher->website_url }}</a></p>
            </div>
            <!-- Add other publisher details here -->

            <a href="{{ route('publishers.edit', $publisher) }}" class="inline-block mt-4 bg-indigo-600 text-white px-4 py-2 rounded-md">Edit</a>
            <form action="{{ route('publishers.destroy', $publisher) }}" method="POST" class="inline-block ml-2">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded-md">Delete</button>
            </form>
        </div>
    </div>
</body>
</html>
