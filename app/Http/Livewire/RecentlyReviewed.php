<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class RecentlyReviewed extends Component
{
    public $games = [];

    public function load()
    {
        $beforeTwoMonths = Carbon::now()->subMonths(2)->timestamp;
        $current = Carbon::now()->timestamp;

        $this->games = Cache::remember('recently-reviewed', 7, function () use ($beforeTwoMonths, $current) {
            return Http::withHeaders(config('services.igdb'))
                ->withBody(
                    "
                    fields name, slug, cover.url, first_release_date, platforms.abbreviation, rating, rating_count, summary;
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
        });
    }

    public function render()
    {
        return view('livewire.recently-reviewed');
    }
}
