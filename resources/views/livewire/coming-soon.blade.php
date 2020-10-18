<div wire:init="load" class="most-popular-container space-y-10 mt-8">
    @forelse($games as $game)
        <x-game-card-small :game="$game" />
    @empty
        @foreach(range(1, 4) as $key)
            <x-game-card-small-skeleton />
        @endforeach
    @endforelse
</div>
