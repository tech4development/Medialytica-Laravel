@foreach($publishers as $publisher)
<tr class="hover:bg-gray-50">
    <td class="w-1/20 py-1 px-1">
        <input type="checkbox" name="publisher_ids[]" value="{{ $publisher->id }}">
    </td>
    <td class="w-1/10 whitespace-nowrap py-1 px-1 font-medium text-gray-900 truncate">
        <span class="text-indigo-600" style="pointer-events: none; user-select: none;">
            {{ Str::limit($publisher->website_url, 15) }}
        </span>
    </td>
    <td class="w-1/10 whitespace-nowrap py-1 px-1 text-gray-500 truncate">{{ Str::limit($publisher->niches, 15) }}</td>
    <td class="w-1/10 whitespace-nowrap py-1 px-1 text-gray-500 truncate">{{ $publisher->moz_da }}</td>
    <td class="w-1/10 whitespace-nowrap py-1 px-1 text-gray-500 truncate">{{ $publisher->ahref_dr }}</td>
    <td class="w-1/10 whitespace-nowrap py-1 px-1 text-gray-500 truncate">{{ $publisher->traffic }}</td>
    <td class="w-1/10 whitespace-nowrap py-1 px-1 text-gray-500 truncate">{{ $publisher->country }}</td>
    <td class="w-1/10 whitespace-nowrap py-1 px-1 text-gray-500 truncate">{{ Str::limit($publisher->link_type, 7) }}</td>
    <td class="w-1/10 whitespace-nowrap py-1 px-1 text-gray-500 truncate">{{ $publisher->publishing_time }}</td>
    <td class="w-1/10 whitespace-nowrap py-1 px-1 text-gray-500 truncate">{{ $publisher->price }}</td>
    <td class="w-1/10 whitespace-nowrap py-1 px-1 text-right text-sm font-medium truncate">
        <form action="{{ route('cart.add') }}" method="POST">
            @csrf
            <input type="hidden" name="publisher_id" value="{{ $publisher->id }}">
            <button type="submit" class="px-1 py-0.5 bg-indigo-600 text-white rounded text-[0.6rem] hover:bg-indigo-700">
                Order
            </button>
        </form>
    </td>
</tr>
@endforeach
