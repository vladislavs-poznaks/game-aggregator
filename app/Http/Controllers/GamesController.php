<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GamesController extends Controller
{
    public function index()
    {
//        $beforeTwoMonths = Carbon::now()->subMonths(2)->timestamp;
//
//        $afterTwoMonths = Carbon::now()->addMonths(2)->timestamp;
//        $afterFourMonths = Carbon::now()->addMonths(4)->timestamp;
//
//        $current = Carbon::now()->timestamp;
//
//        $games = Http::withHeaders(config('services.igdb'))
//            ->withBody(
//                "
//                query games \"popular\" {

//                };
//
//                query games \"reviewed\" {

//                };
//
//                query games \"anticipated\" {

//                };
//
//                query games \"coming\" {

//                };
//            ", 'Other'
//            )
//            ->post('https://api.igdb.com/v4/multiquery')
//            ->json();


        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function show(string $slug)
    {
        $game = Http::withHeaders(config('services.igdb'))
            ->withBody(
                "
                    fields name, cover.url, genres.name, summary, involved_companies.company.name, platforms.abbreviation,
                    rating, aggregated_rating, websites.url, videos.*, screenshots.url,
                    similar_games.cover.url, similar_games.name, similar_games.rating,
                    similar_games.platforms.abbreviation, similar_games.slug;
                    where slug=\"$slug\";
                    ", 'Other'
            )
            ->post('https://api.igdb.com/v4/games')
            ->json();

        abort_if(! $game, 404);

        $game = collect($game[0]);

        $genres = (collect($game['genres'])->pluck('name'))->all();
        $companies = (collect($game['involved_companies'])->pluck('company.name'))->all();
        $platforms = (collect($game['platforms'])->pluck('abbreviation'))->all();

        dump($game);

        return view('show', [
            'game' => $game,
            'genres' => $genres,
            'companies' => $companies,
            'platforms' => $platforms
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
