<div wire:init="load" class="most-popular-container space-y-10 mt-8">
    @forelse($games as $game)
        <div class="game flex">
            <a href="{{ route('games.show', $game['slug']) }}">
                <img src="{{ str_replace('thumb', 'cover_small', $game['cover']['url']) }}"
                     alt="game cover"
                     class="w-16 hover:opacity-75 transition ease-in-out duration-150"
                >
            </a>
            <div class="ml-4">
                <a href="{{ route('games.show', $game['slug']) }}" class="hover:text-gray-300">{{ $game['name'] }}</a>
                <div class="text-gray-400 text-sm mt-1">
                    {{ Carbon\Carbon::createFromTimestamp($game['first_release_date'])
                        ->toFormattedDateString() }}
                </div>
            </div>
        </div>
    @empty
        @foreach(range(1, 4) as $key)
            <div class="game flex">
                <div class="bg-gray-800 w-16 h-20">
                    {{-- IMAGE HERE --}}
                </div>
                <div class="ml-4">
                    <div class="inline-block text-transparent text-base bg-gray-700 rounded leading-tight">
                        Gamer Title Here
                    </div>
                    <div class="inline-block text-transparent text-sm bg-gray-700 rounded leading-tight mt-2">
                        Long Date Here
                    </div>
                </div>
            </div>
        @endforeach
    @endforelse
</div>
