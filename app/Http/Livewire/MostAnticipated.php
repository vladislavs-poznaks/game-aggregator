<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class MostAnticipated extends Component
{
    public $games = [];

    public function load()
    {
        $afterFourMonths = Carbon::now()->addMonths(4)->timestamp;
        $current = Carbon::now()->timestamp;

        $response = Cache::remember('most-anticipated', 7, function () use ($afterFourMonths, $current) {
            return Http::withHeaders(config('services.igdb'))
                ->withBody(
                    "
                    fields name, slug, cover.url, first_release_date, platforms.abbreviation, rating, rating_count, summary;
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
        });

        $this->games = $this->format($response);
    }

    public function render()
    {
        return view('livewire.most-anticipated');
    }
}
