{{-- @extends('layouts.app')

@section('content') --}}
<div class="bg-white p-6 rounded-lg shadow-lg">
    <h2 class="text-lg font-bold text-[#004466]">Cart</h2>

    @if(session('message'))
        <div class="bg-green-500 text-white p-4 rounded-md mb-4">
            {{ session('message') }}
        </div>
    @endif

    <div class="overflow-x-auto border border-gray-300 rounded-md mt-4">
        <table class="min-w-full table-auto border-collapse">
            <thead class="bg-[#004466]">
                <tr>
                    <th class="px-2 py-2 border border-gray-300 text-left text-xs font-medium text-gray uppercase tracking-wider">Publisher</th>
                    <th class="px-2 py-2 border border-gray-300 text-left text-xs font-medium text-gray uppercase tracking-wider">Price</th>
                    <th class="px-2 py-2 border border-gray-300 text-left text-xs font-medium text-gray uppercase tracking-wider">Action</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($cart as $publisher)
                    <tr>
                        <td class="px-2 py-2 border border-gray-300 whitespace-nowrap">{{ $publisher->website_url }}</td>
                        <td class="px-2 py-2 border border-gray-300 whitespace-nowrap">{{ $publisher->price }}</td>
                        <td class="px-2 py-2 border border-gray-300 whitespace-nowrap">
                            <a href="{{ route('checkout') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                Proceed to Checkout
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
{{-- @endsection --}}
