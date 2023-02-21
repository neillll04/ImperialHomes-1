@props(['listing'])
<x-dashlayout>
  @include('partials._dashnav')
  
  <div class="w-full overflow-x-hidden border-t flex flex-col">
    <main class="w-full flex-grow p-6">
      <h1 class="text-3xl text-black pb-6">Dashboard</h1>

      <div class="w-full mt-12">
        <p class="text-xl pb-3 flex items-center">
          <i class="fas fa-list mr-3"></i> Latest Reports
        </p>
        <div class="bg-white overflow-auto">
          <table class="min-w-full bg-white">
            <thead class="bg-gray-800 text-white">
              <tr>
                @unless($listings->isEmpty())
                <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">
                  Property Name
                </th>
                <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">
                  Property Type
                </th>
                <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">
                  Location
                </th>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">
                  Model
                </th>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">
                  Price
                </th>
                <th class="text-center py-3 px-4 uppercase font-semibold text-sm">
                  Status
                </th>
              </tr>
            </thead>
            @foreach($listings as $listing)
            <tbody class="text-gray-700">
              <tr>
                <td class="w-1/3 text-left py-3 px-4 border-b border-grey-light"> {{$listing->propertyName}} </td>
                <td class="w-1/3 text-left py-3 px-4 border-b border-grey-light">{{ $listing->propertyType }}</td>
                <td class="text-left py-3 px-4 border-b border-grey-light"> {{ $listing->location }}</td>
                <td class="text-left py-3 px-4 border-b border-grey-light"> {{ $listing->model }}</td>
                <td class="w-1/3 text-left py-3 px-4 border-b border-grey-light">{{ $listing->price }}</td>
                {{-- For tags not yet defined --}}
                {{-- <td class="w-1/3 text-left py-3 px-4"><x-listing-tags :tagsCsv="$dashboards-> tags"/></td> --}}
              </tr>
              @endforeach
              @else
                <p class="text-center text-white text-2xl p-5 pt-5">No Listings Found</p>  
              @endunless
            </tbody>
          </table>
        </div>
      </div>
    </main>
    <footer class="w-full bg-white text-right p-4">
      Built by <a target="_blank" href="#" class="underline">WonderBoys</a>.
    </footer>
  </div>
</x-dashlayout>
