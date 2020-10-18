<div wire:init="load" class="recently-reviewed-container space-y-12 mt-8">
    @forelse($games as $game)
        <div class="game bg-gray-800 rounded-lg shadow-md flex px-6 py-6">
            <div class="flex-none relative inline-block">
                <a href="{{ route('games.show', $game['slug']) }}">
                    <img src="{{ $game['cover_big_url'] }}"
                         alt="{{ $game['name'] }}'s cover"
                         class="w-48 hover:opacity-75 transition ease-in-out duration-150"
                    >
                </a>
                <div
                    class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full"
                    style="right:-20px; bottom:-20px"
                >
                    <div
                        class="font-semibold text-xs flex justify-center items-center h-full"
                    >
                        {{ $game['rating'] }}
                    </div>
                </div>
            </div>

            <div class="ml-12">
                <a href="{{ route('games.show', $game['slug']) }}" class="block text-lg font-semibold leading-tight hover:text-gray-400 mt-4">
                    {{ $game['name'] }}
                </a>
                <div class="text-gray-400 mt-1">
                    {{ $game['platforms'] }}
                </div>
                <p class="mt-6 text-gray-400 text-sm hidden lg:block">
                    {{ $game['summary'] }}
                </p>
            </div>
        </div>
    @empty
        @foreach(range(1, 3) as $key)
            <div class="game bg-gray-800 rounded-lg shadow-md flex px-6 py-6">
                <div class="flex-none">
                    <div class="bg-gray-700 w-32 lg:w-48 h-40 lg:h-64">
                        {{-- IMAGE HERE --}}
                    </div>
                </div>

                <div class="ml-12">
                    <div class="inline-block text-transparent bg-gray-700 text-lg leading-tight rounded mt-4">
                        Longer Game Title Here
                    </div>
                    <div class="block">

                    </div>
                    <div class="inline-block text-transparent bg-gray-700 text-lg leading-tight rounded mt-1">
                        PS4, PC, Switch
                    </div>
                    <div class="space-y-4 hidden lg:block mt-6">
                        <span class="inline-block text-transparent bg-gray-700 rounded">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </span>
                        <span class="inline-block text-transparent bg-gray-700 rounded">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, dolore.
                        </span>
                        <span class="inline-block text-transparent bg-gray-700 rounded">
                            Lorem ipsum dolor sit amet, consectetur.
                        </span>
                    </div>
                </div>
            </div>
        @endforeach
    @endforelse
</div>
