<div wire:init="load" class="most-anticipated-container space-y-10 mt-8">
    @forelse($games as $game)
        <div class="game flex">
            <a href="#">
                <img src="{{ str_replace('thumb', 'cover_small', $game['cover']['url']) }}"
                     alt="game cover"
                     class="w-16 hover:opacity-75 transition ease-in-out duration-150"
                >
            </a>
            <div class="ml-4">
                <a href="#" class="hover:text-gray-300">{{ $game['name'] }}</a>
                <div class="text-gray-400 text-sm mt-1">
                    {{ Carbon\Carbon::createFromTimestamp($game['first_release_date'])
                        ->toFormattedDateString() }}
                </div>
            </div>
        </div>
    @empty
        <div>
            <img src="/images/oval.svg" alt="Loading Spinner" class="animate-spin h-5 w-5 mt-12">
        </div>
    @endforelse
</div>
