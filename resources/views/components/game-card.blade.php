<div class="game mt-8">
    <div class="flex-none relative inline-block">
        <a href="{{ route('games.show', $game['slug']) }}">
            <img src="{{ $game['cover_big_url'] }}"
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
                {{ $game['rating'] }}
            </div>
        </div>
    </div>
    <a href="{{ route('games.show', $game['slug']) }}" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
        {{ $game['name'] }}
    </a>
    <div class="text-gray-400 mt-1">
        {{ $game['platforms'] }}
    </div>
</div>
