<div wire:init="load" class="popular-games text-sm grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 xl:grid-cols-6 gap-12 border-b border-gray-800 pb-16">

    @forelse($games as $game)
        <div class="game mt-8">
            <div class="flex-none relative inline-block">
                <a href="{{ route('games.show', $game['slug']) }}">
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
            <a href="{{ route('games.show', $game['slug']) }}" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                {{ $game['name'] }}
            </a>
            <div class="text-gray-400 mt-1">
                @foreach($game['platforms'] as $platform)
                    {{ $platform['abbreviation'] }}
                @endforeach
            </div>
        </div>
    @empty
        @foreach(range(1, 12) as $key)
            <div class="game mt-8">
                <div class="bg-gray-800 w-44 h-64">
                    {{-- IMAGE HERE --}}
                </div>
                <div class="text-transparent text-lg bg-gray-700 leading-tight rounded mt-4">
                    Game Title Here
                </div>
                <div class="inline-block text-transparent bg-gray-700 rounded mt-3">
                    PS4, PC, Switch
                </div>
            </div>
        @endforeach
    @endforelse

</div> {{--End Popular Games--}}
