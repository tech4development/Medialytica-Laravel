  <div class="flex flex-col">
                <div class="overflow-x-auto pb-2">
                    <div class="inline-block min-w-full align-middle">
                        <div class="overflow-hidden border rounded-lg border-gray-300 shadow-sm">
                            <form action="{{ route('cart.add') }}" method="POST">
                                @csrf
                                <table class="min-w-full divide-y divide-gray-300 text-[0.6rem] table-fixed">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col" class="w-1/20 py-2 px-1 text-left font-semibold text-gray-900 truncate">
                                                <input type="checkbox" id="select-all" />
                                            </th>
                                            <th scope="col" class="w-1/10 py-2 px-1 text-left font-semibold text-gray-900 truncate">URL</th>
                                            <th scope="col" class="w-1/10 py-2 px-1 text-left font-semibold text-gray-900 truncate">Niches</th>
                                            <th scope="col" class="w-1/10 py-2 px-1 text-left font-semibold text-gray-900 truncate">DA</th>
                                            <th scope="col" class="w-1/10 py-2 px-1 text-left font-semibold text-gray-900 truncate">DR</th>
                                            <th scope="col" class="w-1/10 py-2 px-1 text-left font-semibold text-gray-900 truncate pr-0">Traffic</th>
                                            <th scope="col" class="w-1/10 py-2 px-1 text-left font-semibold text-gray-900 truncate pl-0">Country</th>
                                            <th scope="col" class="w-1/10 py-2 px-1 text-left font-semibold text-gray-900 truncate">Type</th>
                                            <th scope="col" class="w-1/10 py-2 px-1 text-left font-semibold text-gray-900 truncate">Time</th>
                                            <th scope="col" class="w-1/10 py-2 px-1 text-left font-semibold text-gray-900 truncate">Price</th>
                                            <th scope="col" class="w-1/10 py-2 px-1 text-left font-semibold text-gray-900 truncate">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-200 bg-white">
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
                                    </tbody>
                                </table>
                                <div class="mt-2 flex justify-center w-full">
                                    <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700">
                                        Add Selected to Cart
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
