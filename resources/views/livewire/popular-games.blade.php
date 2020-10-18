<div wire:init="load" class="popular-games text-sm grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 xl:grid-cols-6 gap-12 border-b border-gray-800 pb-16">

    @forelse($games as $game)
        <x-game-card :game="$game" />
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
