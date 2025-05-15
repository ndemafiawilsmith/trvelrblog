<div class="container relative">

    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        @for ($i = 0; $i < 4; $i++)
        <div class="animate-pulse space-y-2">
            <div class="h-32 bg-gray-200 rounded"></div>
            <div class="h-4 bg-gray-300 rounded w-3/4"></div>
            <div class="h-4 bg-gray-300 rounded w-1/2"></div>
        </div>
        @endfor
    </div>
</div>
