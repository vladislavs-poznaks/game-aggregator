<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GamesController extends Controller
{
    public function index()
    {
        $beforeTwoMonths = Carbon::now()->subMonths(2)->timestamp;

        $afterTwoMonths = Carbon::now()->addMonths(2)->timestamp;
        $afterFourMonths = Carbon::now()->addMonths(4)->timestamp;

        $current = Carbon::now()->timestamp;

        $popular = Http::withHeaders(config('services.igdb'))
            ->withBody(
            "
            fields name, cover.url, first_release_date, platforms.abbreviation, rating, rating_count, total_rating_count, aggregated_rating;
            where platforms = (48,49,130,6)
            & rating != null
            & (first_release_date > $beforeTwoMonths
            & first_release_date < $afterTwoMonths);
            sort aggregated_rating desc;
            limit 12;
            ", 'Other'
        )
            ->post('https://api.igdb.com/v4/games')
            ->json();

        $reviewed = Http::withHeaders(config('services.igdb'))
            ->withBody(
                "
            fields name, cover.url, first_release_date, platforms.abbreviation, rating, rating_count, summary;
            where platforms = (48,49,130,6)
            & rating != null
            & (first_release_date > $beforeTwoMonths
            & first_release_date <= $current)
            & rating_count > 5;
            sort rating desc;
            limit 3;
            ", 'Other'
            )
            ->post('https://api.igdb.com/v4/games')
            ->json();

        $anticipated = Http::withHeaders(config('services.igdb'))
            ->withBody(
                "
            fields name, cover.url, first_release_date, platforms.abbreviation, rating, rating_count, summary;
            where platforms = (48,49,130,6)
            & rating != null
            & (first_release_date >= $current
            & first_release_date < $afterFourMonths);
            sort rating desc;
            limit 4;
            ", 'Other'
            )
            ->post('https://api.igdb.com/v4/games')
            ->json();

        $coming = Http::withHeaders(config('services.igdb'))
            ->withBody(
                "
            fields name, cover.url, first_release_date, platforms.abbreviation, rating, rating_count, summary;
            where platforms = (48,49,130,6)
            & rating != null
            & first_release_date >= $current
            & rating > 50;
            sort first_release_date asc;
            limit 4;
            ", 'Other'
            )
            ->post('https://api.igdb.com/v4/games')
            ->json();

        return view('index', [
           'popular' => $popular,
            'reviewed' => $reviewed,
            'anticipated' => $anticipated,
            'coming' => $coming
        ]);
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
