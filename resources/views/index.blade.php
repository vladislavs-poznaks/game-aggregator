@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Popular Games</h2>
        <div class="popular-games text-sm grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 xl:grid-cols-6 gap-12 border-b border-gray-800 pb-16">
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="/images/ff7.jpg"
                             alt="game cover"
                             class="hover:opacity-75 transition ease-in-out duration-150"
                        >
                    </a>
                    <div
                        class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                        style="right:-20px; bottom:-20px"
                    >
                        <div
                            class="font-semibold text-xs flex justify-center items-center h-full"
                        >
                            80%
                        </div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Final Fantasy 7 Remake
                </a>
                <div class="text-gray-400 mt-1">Playstation 4</div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="/images/animalcrossing.jpg"
                             alt="game cover"
                             class="hover:opacity-75 transition ease-in-out duration-150"
                        >
                    </a>
                    <div
                        class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                        style="right:-20px; bottom:-20px"
                    >
                        <div
                            class="font-semibold text-xs flex justify-center items-center h-full"
                        >
                            80%
                        </div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Animal Crossing: New Horizons
                </a>
                <div class="text-gray-400 mt-1">Nintendo Switch</div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="/images/doom.jpg"
                             alt="game cover"
                             class="hover:opacity-75 transition ease-in-out duration-150"
                        >
                    </a>
                    <div
                        class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                        style="right:-20px; bottom:-20px"
                    >
                        <div
                            class="font-semibold text-xs flex justify-center items-center h-full"
                        >
                            80%
                        </div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Doom Eternal
                </a>
                <div class="text-gray-400 mt-1">Playstation 4, PC</div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="/images/alyx.jpg"
                             alt="game cover"
                             class="hover:opacity-75 transition ease-in-out duration-150"
                        >
                    </a>
                    <div
                        class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                        style="right:-20px; bottom:-20px"
                    >
                        <div
                            class="font-semibold text-xs flex justify-center items-center h-full"
                        >
                            80%
                        </div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Half Life: Alyx
                </a>
                <div class="text-gray-400 mt-1">PC</div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="/images/luigi.jpg"
                             alt="game cover"
                             class="hover:opacity-75 transition ease-in-out duration-150"
                        >
                    </a>
                    <div
                        class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                        style="right:-20px; bottom:-20px"
                    >
                        <div
                            class="font-semibold text-xs flex justify-center items-center h-full"
                        >
                            80%
                        </div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Luigi's Mansion 3
                </a>
                <div class="text-gray-400 mt-1">Nintendo Switch</div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="/images/resident.jpg"
                             alt="game cover"
                             class="hover:opacity-75 transition ease-in-out duration-150"
                        >
                    </a>
                    <div
                        class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                        style="right:-20px; bottom:-20px"
                    >
                        <div
                            class="font-semibold text-xs flex justify-center items-center h-full"
                        >
                            80%
                        </div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Resident Evil 3
                </a>
                <div class="text-gray-400 mt-1">PC, Playstation 4, XBox One X</div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="/images/animalcrossing.jpg"
                             alt="game cover"
                             class="hover:opacity-75 transition ease-in-out duration-150"
                        >
                    </a>
                    <div
                        class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                        style="right:-20px; bottom:-20px"
                    >
                        <div
                            class="font-semibold text-xs flex justify-center items-center h-full"
                        >
                            80%
                        </div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Animal Crossing: New Horizons
                </a>
                <div class="text-gray-400 mt-1">Nintendo Switch</div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="/images/doom.jpg"
                             alt="game cover"
                             class="hover:opacity-75 transition ease-in-out duration-150"
                        >
                    </a>
                    <div
                        class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                        style="right:-20px; bottom:-20px"
                    >
                        <div
                            class="font-semibold text-xs flex justify-center items-center h-full"
                        >
                            80%
                        </div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Doom Eternal
                </a>
                <div class="text-gray-400 mt-1">Playstation 4, PC</div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="/images/alyx.jpg"
                             alt="game cover"
                             class="hover:opacity-75 transition ease-in-out duration-150"
                        >
                    </a>
                    <div
                        class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                        style="right:-20px; bottom:-20px"
                    >
                        <div
                            class="font-semibold text-xs flex justify-center items-center h-full"
                        >
                            80%
                        </div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Half Life: Alyx
                </a>
                <div class="text-gray-400 mt-1">PC</div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="/images/luigi.jpg"
                             alt="game cover"
                             class="hover:opacity-75 transition ease-in-out duration-150"
                        >
                    </a>
                    <div
                        class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                        style="right:-20px; bottom:-20px"
                    >
                        <div
                            class="font-semibold text-xs flex justify-center items-center h-full"
                        >
                            80%
                        </div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Luigi's Mansion 3
                </a>
                <div class="text-gray-400 mt-1">Nintendo Switch</div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="/images/resident.jpg"
                             alt="game cover"
                             class="hover:opacity-75 transition ease-in-out duration-150"
                        >
                    </a>
                    <div
                        class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                        style="right:-20px; bottom:-20px"
                    >
                        <div
                            class="font-semibold text-xs flex justify-center items-center h-full"
                        >
                            80%
                        </div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Resident Evil 3
                </a>
                <div class="text-gray-400 mt-1">PC, Playstation 4, XBox One X</div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="/images/ff7.jpg"
                             alt="game cover"
                             class="hover:opacity-75 transition ease-in-out duration-150"
                        >
                    </a>
                    <div
                        class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                        style="right:-20px; bottom:-20px"
                    >
                        <div
                            class="font-semibold text-xs flex justify-center items-center h-full"
                        >
                            80%
                        </div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Final Fantasy 7 Remake
                </a>
                <div class="text-gray-400 mt-1">Playstation 4</div>
            </div>
        </div> {{--End Popular Games--}}
        <div class="flex flex-col lg:flex-row my-10">
            <div class="recently-reviewed w-full lg:w-3/4 mr-0 lg:mr-32">
                <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Recently Reviewed</h2>
                <div class="recently-reviewed-container space-y-12 mt-8">
                    <div class="game bg-gray-800 rounded-lg shadow-md flex px-6 py-6">
                        <div class="flex-none relative inline-block">
                            <a href="#">
                                <img src="/images/ff7.jpg"
                                     alt="game cover"
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
                                    80%
                                </div>
                            </div>
                        </div>

                        <div class="ml-12">
                            <a href="#" class="block text-lg font-semibold leading-tight hover:text-gray-400 mt-4">
                                Final Fantasy 7 Remake
                            </a>
                            <div class="text-gray-400 mt-1">Playstation 4</div>
                            <p class="mt-6 text-gray-400 text-sm hidden lg:block">
                                A spectacular re-imagining of one of the most visionary games ever, Final Fantasy VII Remake rebuilds and expands the legendary RPG for today. The first game in this project will be set in the eclectic city of Midgar and presents a fully standalone gaming experience.
                            </p>
                        </div>
                    </div>
                    <div class="game bg-gray-800 rounded-lg shadow-md flex px-6 py-6">
                        <div class="flex-none relative inline-block">
                            <a href="#">
                                <img src="/images/animalcrossing.jpg"
                                     alt="game cover"
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
                                    80%
                                </div>
                            </div>
                        </div>

                        <div class="ml-12">
                            <a href="#" class="block text-lg font-semibold leading-tight hover:text-gray-400 mt-4">
                                Animal Crossings: New Horizons
                            </a>
                            <div class="text-gray-400 mt-1">Nintendo Switch</div>
                            <p class="mt-6 text-gray-400 text-sm hidden lg:block">
                                Escape to a deserted island and create your own paradise as you explore, create, and customize in the Animal Crossing: New Horizons game. Your island getaway has a wealth of natural resources that can be used to craft everything from tools to creature comforts. You can hunt down insects at the crack of dawn, decorate your paradise throughout the day, or enjoy sunset on the beach while fishing in the ocean. The time of day and season match real life, so each day on your island is a chance to check in and find new surprises all year round.
                            </p>
                        </div>
                    </div>
                    <div class="game bg-gray-800 rounded-lg shadow-md flex px-6 py-6">
                        <div class="flex-none relative inline-block">
                            <a href="#">
                                <img src="/images/doom.jpg"
                                     alt="game cover"
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
                                    80%
                                </div>
                            </div>
                        </div>

                        <div class="ml-12">
                            <a href="#" class="block text-lg font-semibold leading-tight hover:text-gray-400 mt-4">
                                Doom Eternal
                            </a>
                            <div class="text-gray-400 mt-1">PC, PS4, XONE, Switch, Stadia</div>
                            <p class="mt-6 text-gray-400 text-sm hidden lg:block">
                                Developed by id Software, DOOM Eternal is the direct sequel to DOOM (2016). Experience the ultimate combination of speed and power with the next leap in push-forward, first-person combat.

                                As the DOOM Slayer, return to take your vengeance against the forces of Hell. Set to an all-new pulse pounding soundtrack composed by Mick Gordon, fight across dimensions as you slay new and classic demons with powerful new weapons and abilities.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="most-anticipated w-full lg:w-1/4 mt-12 lg:mt-0">
                <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Most Anticipated</h2>
                <div class="most-anticipated-container space-y-10 mt-8">
                    <div class="game flex">
                        <a href="#">
                            <img src="/images/cyberpunk.jpg"
                                 alt="game cover"
                                 class="w-16 hover:opacity-75 transition ease-in-out duration-150"
                            >
                        </a>
                        <div class="ml-4">
                            <a href="#" class="hover:text-gray-300">Cyberpunk 2077</a>
                            <div class="text-gray-400 text-sm mt-1">Sep 16, 2020</div>
                        </div>
                    </div>
                    <div class="game flex">
                        <a href="#">
                            <img src="/images/avengers.jpg"
                                 alt="game cover"
                                 class="w-16 hover:opacity-75 transition ease-in-out duration-150"
                            >
                        </a>
                        <div class="ml-4">
                            <a href="#" class="hover:text-gray-300">Marvel's Avengers</a>
                            <div class="text-gray-400 text-sm mt-1">Sep 3, 2020</div>
                        </div>
                    </div>
                    <div class="game flex">
                        <a href="#">
                            <img src="/images/ghost.jpg"
                                 alt="game cover"
                                 class="w-16 hover:opacity-75 transition ease-in-out duration-150"
                            >
                        </a>
                        <div class="ml-4">
                            <a href="#" class="hover:text-gray-300">Ghost of Tsushima</a>
                            <div class="text-gray-400 text-sm mt-1">Jul 17, 2020</div>
                        </div>
                    </div>
                    <div class="game flex">
                        <a href="#">
                            <img src="/images/tlou2.jpg"
                                 alt="game cover"
                                 class="w-16 hover:opacity-75 transition ease-in-out duration-150"
                            >
                        </a>
                        <div class="ml-4">
                            <a href="#" class="hover:text-gray-300">The Last of Us Part II</a>
                            <div class="text-gray-400 text-sm mt-1">Jun 19, 2020</div>
                        </div>
                    </div>
                </div>

                <h2 class="text-blue-500 uppercase tracking-wide font-semibold mt-12">Most Popular</h2>
                <div class="most-popular-container space-y-10 mt-8">
                    <div class="game flex">
                        <a href="#">
                            <img src="/images/cyberpunk.jpg"
                                 alt="game cover"
                                 class="w-16 hover:opacity-75 transition ease-in-out duration-150"
                            >
                        </a>
                        <div class="ml-4">
                            <a href="#" class="hover:text-gray-300">Cyberpunk 2077</a>
                            <div class="text-gray-400 text-sm mt-1">Sep 16, 2020</div>
                        </div>
                    </div>
                    <div class="game flex">
                        <a href="#">
                            <img src="/images/avengers.jpg"
                                 alt="game cover"
                                 class="w-16 hover:opacity-75 transition ease-in-out duration-150"
                            >
                        </a>
                        <div class="ml-4">
                            <a href="#" class="hover:text-gray-300">Marvel's Avengers</a>
                            <div class="text-gray-400 text-sm mt-1">Sep 3, 2020</div>
                        </div>
                    </div>
                    <div class="game flex">
                        <a href="#">
                            <img src="/images/ghost.jpg"
                                 alt="game cover"
                                 class="w-16 hover:opacity-75 transition ease-in-out duration-150"
                            >
                        </a>
                        <div class="ml-4">
                            <a href="#" class="hover:text-gray-300">Ghost of Tsushima</a>
                            <div class="text-gray-400 text-sm mt-1">Jul 17, 2020</div>
                        </div>
                    </div>
                    <div class="game flex">
                        <a href="#">
                            <img src="/images/tlou2.jpg"
                                 alt="game cover"
                                 class="w-16 hover:opacity-75 transition ease-in-out duration-150"
                            >
                        </a>
                        <div class="ml-4">
                            <a href="#" class="hover:text-gray-300">The Last of Us Part II</a>
                            <div class="text-gray-400 text-sm mt-1">Jun 19, 2020</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  {{--End Container--}}
@endsection
