<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
