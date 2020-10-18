<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class ComingSoon extends Component
{
    public $games = [];

    public function load()
    {
        $current = Carbon::now()->timestamp;

        $this->games = Cache::remember('coming-soon', 7, function () use ($current) {
            return Http::withHeaders(config('services.igdb'))
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
        });
    }

    public function render()
    {
        return view('livewire.coming-soon');
    }
}
