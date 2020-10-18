<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class PopularGames extends Component
{
    public $games = [];

    public function load()
    {

        $beforeTwoMonths = Carbon::now()->subMonths(2)->timestamp;
        $afterTwoMonths = Carbon::now()->addMonths(2)->timestamp;

        $response = Cache::remember('popular-games', 7, function () use ($beforeTwoMonths, $afterTwoMonths) {
            return Http::withHeaders(config('services.igdb'))
                ->withBody(
                    "
                    fields name, slug, cover.url, first_release_date, platforms.abbreviation, rating, rating_count, total_rating_count, aggregated_rating;
                    where platforms = (48,49,130,6)
                    & rating != null
                    & (first_release_date > $beforeTwoMonths
                    & first_release_date < $afterTwoMonths);
                    sort rating desc;
                    limit 12;
                    ", 'Other'
                )
                ->post('https://api.igdb.com/v4/games')
                ->json();
        });

        $this->games = $this->format($response);
    }

    public function render()
    {
        return view('livewire.popular-games');
    }
}
