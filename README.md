## Game Aggregator via IGDB API with Laracasts

![](GameAggregator.gif)

Laracasts tutorial [here](https://laracasts.com/series/build-a-video-game-aggregator)

## Notes on changes

### When using Laravel 8

Original tutorial is for Laravel 7, so below are few things to keep in mind.

- Routes definition has been changed.
```php
Route::get('/games/{slug}', [GamesController::class, 'show'])->name('games.show');`
```
- Http client worked with `withBody()` method instead of `withOptions()` method.
```php
Http::withHeaders(config('services.igdb'))
     ->withBody(
         "
         fields name, slug, cover.url;
         where platforms = (48,49,130,6)
         & rating > 50;
         sort first_release_date asc;
         limit 4;
         ", 'Other'
     )
     ->post('https://api.igdb.com/v4/games')
     ->json();
```

- Multi-query can be requested using `withBody()` method.

### When using IGDB API

The API has been upgraded from v3 to v4.

- Authentication now has Client-ID and Access Token. Furthermore, Access Token must be requested with separate POST request using Client Secret.
- All requests are POST requests now.
- "popularity" field has been removed.

IGDB API documentation [here](https://api-docs.igdb.com/?shell#about)

### Tailwind CSS

You can make use of Tailwind's animations for loading spinner & skeleton loader's pulse.

Tailwind's animations [here](https://tailwindcss.com/docs/animation)

### UI's video

https://www.loom.com/share/cc08d82baa8947ffb0b47ed3af92170f
