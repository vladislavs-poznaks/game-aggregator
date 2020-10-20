<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Livewire\Component;

class SearchDropdown extends Component
{
    public $search = '';
    public $results = [];

    public function render()
    {
        if (strlen($this->search) > 2) {
            $response = Http::withHeaders(config('services.igdb'))
                ->withBody(
                    "
                    search \"{$this->search}\";
                    fields name, slug, cover.url;
                    limit 7;
                    ", 'Other'
                )
                ->post('https://api.igdb.com/v4/games')
                ->json();

            $this->results = $this->format($response);
        }

        return view('livewire.search-dropdown');
    }

    protected function format($response)
    {
        return collect($response)->map(function ($game) {

            return collect($game)->merge([
                'cover_small_url' => isset($game['cover'])
                    ? Str::replaceFirst('thumb', 'cover_small', $game['cover']['url'])
                    : 'https://via.placeholder.com/90x128',
            ]);

        });
    }
}
