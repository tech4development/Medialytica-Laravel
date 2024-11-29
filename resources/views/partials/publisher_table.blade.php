 <div class="mx-auto flex w-[97%] max-w-full flex-col">
  <div class="overflow-x-auto pb-2">
   <div class="inline-block min-w-full align-middle">
    <div class="overflow-hidden rounded-lg border border-gray-300 shadow-sm">
     <form action="{{ route('cart.add') }}" method="POST">
      @csrf
      <table class="min-w-full table-fixed divide-y divide-gray-300 text-sm">
       <thead class="bg-gray-50">
        <tr>
         <th class="w-1/20 truncate px-2 py-3 text-left font-semibold text-gray-900" scope="col">
          <input id="select-all" type="checkbox" />
         </th>
         <th class="w-1/10 truncate px-2 py-3 text-left font-semibold text-gray-900" scope="col">URL</th>
         <th class="w-1/10 truncate px-2 py-3 text-left font-semibold text-gray-900" scope="col">Niches</th>
         <th class="w-1/10 truncate px-2 py-3 text-left font-semibold text-gray-900" scope="col">DA</th>
         <th class="w-1/10 truncate px-2 py-3 text-left font-semibold text-gray-900" scope="col">DR</th>
         <th class="w-1/10 truncate px-2 py-3 text-left font-semibold text-gray-900" scope="col">Traffic</th>
         <th class="w-1/10 truncate px-2 py-3 text-left font-semibold text-gray-900" scope="col">Country</th>
         <th class="w-1/10 truncate px-2 py-3 text-left font-semibold text-gray-900" scope="col">Type</th>
         <th class="w-1/10 truncate px-2 py-3 text-left font-semibold text-gray-900" scope="col">Time</th>
         <th class="w-1/10 truncate px-2 py-3 text-left font-semibold text-gray-900" scope="col">Price</th>
         <th class="w-1/10 truncate px-2 py-3 text-left font-semibold text-gray-900" scope="col">Action</th>
        </tr>
       </thead>
       <tbody class="divide-y divide-gray-200 bg-white">
        @foreach ($publishers as $publisher)
         <tr class="hover:bg-gray-50">
          <td class="px-2 py-1">
           <input name="publisher_ids[]" type="checkbox" value="{{ $publisher->id }}">
          </td>
          <td class="truncate whitespace-nowrap px-2 py-1 font-medium text-gray-900">
           <span class="text-[#004466]">{{ Str::limit($publisher->website_url, 15) }}</span>
          </td>
          <td class="truncate whitespace-nowrap px-2 py-1 text-gray-500">
           {{ Str::limit($publisher->niches, 15) }}
          </td>
          <td class="truncate whitespace-nowrap px-2 py-1 text-gray-500">
           {{ $publisher->moz_da }}</td>
          <td class="truncate whitespace-nowrap px-2 py-1 text-gray-500">
           {{ $publisher->ahref_dr }}</td>
          <td class="truncate whitespace-nowrap px-2 py-1 text-gray-500">
           {{ $publisher->traffic }}</td>
          <td class="truncate whitespace-nowrap px-2 py-1 text-gray-500">
           {{ $publisher->country }}</td>
          <td class="truncate whitespace-nowrap px-2 py-1 text-gray-500">
           {{ Str::limit($publisher->link_type, 7) }}</td>
          <td class="truncate whitespace-nowrap px-2 py-1 text-gray-500">
           {{ $publisher->publishing_time }}</td>
          <td class="truncate whitespace-nowrap px-2 py-1 text-gray-500">
           {{ $publisher->price }}</td>
          <td class="truncate whitespace-nowrap px-2 py-1 text-right">
           <form action="{{ route('cart.add') }}" method="POST">
            @csrf
            <input name="publisher_id" type="hidden" value="{{ $publisher->id }}">
            <button class="rounded bg-[#b78700] px-2 py-1 text-xs text-white hover:bg-[#004466]" type="submit">
             Order
            </button>
           </form>
          </td>
         </tr>
        @endforeach
       </tbody>
      </table>
      <div class="mt-2 flex w-full justify-center">
       <button class="rounded bg-[#b78700] px-4 py-2 text-white hover:bg-[#004466]" type="submit">
        Add Selected to Cart
       </button>
      </div>
     </form>
    </div>
   </div>
  </div>
 </div>
