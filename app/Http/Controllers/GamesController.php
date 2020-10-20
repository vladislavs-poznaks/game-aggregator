<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

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
        $response = Http::withHeaders(config('services.igdb'))
            ->withBody(
                "
                    fields name, cover.url, genres.name, summary, involved_companies.company.name, platforms.abbreviation,
                    rating, aggregated_rating, websites.category, websites.url, videos.*, screenshots.url,
                    similar_games.cover.url, similar_games.name, similar_games.rating,
                    similar_games.platforms.abbreviation, similar_games.slug;
                    where slug=\"$slug\";
                    ", 'Other'
            )
            ->post('https://api.igdb.com/v4/games')
            ->json();

        abort_if(! $response, 404);

        return view('show', [
            'game' => $this->format($response),
        ]);
    }

    private function format($response)
    {
        $game = $response[0];

        return collect($game)->merge([
            'cover_big_url' => isset($game['cover'])
                ? Str::replaceFirst('thumb', 'cover_big', $game['cover']['url'])
                : 'https://via.placeholder.com/264x374/718096/FFFFFF/?text=(No Cover)',
            'rating' => round($game['rating'] ?? 0),
            'aggregated_rating' => round($game['aggregated_rating'] ?? 0),
            'genres' =>
                collect($game['genres'] ?? [])->pluck('name')->implode(', '),
            'platforms' =>
                collect($game['platforms'] ?? [])->pluck('abbreviation')->implode(', '),
            'company' => isset($game['involved_companies'])
                ? $game['involved_companies'][0]['company']['name']
                : '',
            'video_url' => isset($game['videos'])
                ? 'https://youtube.com/embed/' . $game['videos'][0]['video_id']
                : null,
            'screenshots' =>
                collect($game['screenshots'] ?? [])->map(function ($screenshot) {
                    return Str::replaceFirst('thumb', 'screenshot_big', $screenshot['url']);
                })->take(9),
            'similar_games' =>
                collect($game['similar_games'] ?? [])->map(function ($game) {
                   return collect($game)->merge([
                       'cover_big_url' => isset($game['cover'])
                           ? Str::replaceFirst('thumb', 'cover_big', $game['cover']['url'])
                           : 'https://via.placeholder.com/264x374/718096/FFFFFF/?text=(No Cover)',
                       'rating' => round($game['rating'] ?? 0),
                       'platforms' =>
                           collect($game['platforms'] ?? [])->pluck('abbreviation')->implode(', ')
                   ]);
                })->take(6),
            'socials' => [
                'website' =>
                    collect($game['websites'])->where('category', 1)->pluck('url')->first(),
                'facebook' =>
                    collect($game['websites'])->where('category', 4)->pluck('url')->first(),
                'twitter' =>
                    collect($game['websites'])->where('category', 5)->pluck('url')->first(),
                'instagram' =>
                    collect($game['websites'])->where('category', 8)->pluck('url')->first(),
            ],
        ]);
    }
}
