<div class="container pt-32 pb-56 flex flex-col gap-10">
     <div class="flex justify-center gap-3 mt-5 w-full">
                <form action="{{ route('search') }}" method="GET" class="w-full ">
                   
                    <div class="flex justify-between bg-white border-2 border-gray-200 rounded-lg ">
                        <div class="flex items-center gap-2 px-3 flex-1">
                            <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                <path fill-rule="evenodd" d="M10.5 3.75a6.75 6.75 0 1 0 0 13.5 6.75 6.75 0 0 0 0-13.5ZM2.25 10.5a8.25 8.25 0 1 1 14.59 5.28l4.69 4.69a.75.75 0 1 1-1.06 1.06l-4.69-4.69A8.25 8.25 0 0 1 2.25 10.5Z" clip-rule="evenodd" />
                            </svg>
                            <input name="query" class=" w-full text-[#1e1e1e] focus:ring-0 focus:outline-none focus:border-none border-none outline-none" placeholder="Places to explore..." />
                        </div>

                        <div class="flex gap-1">
                            <div class='flex justify-center items-center'>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#086233" class="size-6">
                                    <path fill-rule="evenodd" d="M2 4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V4Zm10.5 5.707a.5.5 0 0 0-.146-.353l-1-1a.5.5 0 0 0-.708 0L9.354 9.646a.5.5 0 0 1-.708 0L6.354 7.354a.5.5 0 0 0-.708 0l-2 2a.5.5 0 0 0-.146.353V12a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5V9.707ZM12 5a1 1 0 1 1-2 0 1 1 0 0 1 2 0Z" clip-rule="evenodd" />
                                </svg>

                            </div>

                            <div class="search-btn-wrap">
                                <button type="submit" class="Subscribe-btn">
                                    <a href="/get-started" class="text-sm">Search</a>
                                </button>
                            </div>
                        </div>
                    </div>

                </form>
     </div>


    <div class="">
        <h1>Search Results for "{{ $query }}"</h1>
        @if($results->isEmpty())
            <p>No results found.</p>
        @else
            <ul>
                @foreach($results as $item)
                    <li><strong>{{ $item->title }}</strong>: {{ $item->description }}</li>
                @endforeach
            </ul>
        @endif
    </div>

    <a href="{{ route('landing') }}">Back to Home</a>

    
{{-- grid component --}}
<x-mason-grid />

</div>

