<div wire:init="load" class="popular-games text-sm grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 xl:grid-cols-6 gap-12 border-b border-gray-800 pb-16">

    @forelse($games as $game)
        <div class="game mt-8">
            <div class="flex-none relative inline-block">
                <a href="#">
                    <img src="{{ str_replace('thumb', 'cover_big', $game['cover']['url']) }}"
                         alt="{{ $game['name'] }}'s cover"
                         class="hover:opacity-75 transition ease-in-out duration-150 h-64"
                    >
                </a>
                <div
                    class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                    style="right:-20px; bottom:-20px"
                >
                    <div
                        class="font-semibold text-xs flex justify-center items-center h-full"
                    >
                        {{ round($game['rating'], 0).'%' }}
                    </div>
                </div>
            </div>
            <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                {{ $game['name'] }}
            </a>
            <div class="text-gray-400 mt-1">
                @foreach($game['platforms'] as $platform)
                    {{ $platform['abbreviation'] }}
                @endforeach
            </div>
        </div>
    @empty
        <div>
            <img src="/images/oval.svg" alt="Loading Spinner" class="animate-spin h-7 w-7 mt-12">
        </div>
    @endforelse

</div> {{--End Popular Games--}}
