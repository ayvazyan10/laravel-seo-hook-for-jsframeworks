# laravel-seo-hook-for-jsframeworks
simple hook for adding meta tags to &lt;head>&lt;/head> for js frameworks, react,vue, etc...

1. in app/Meta.php put Meta.php code from repo.

2. in your main blade file (example: app.blade.php) add this
```
{!! \App\Meta::render() !!}
```

3. in app/Providers/EventServiceProvider.php add this (also you need to install laravel/octane) composer require laravel/octane
```
use App\Meta;
use Illuminate\Support\Facades\Event;
use Laravel\Octane\Events\RequestReceived;

public function boot()
{
    Event::listen(function (RequestReceived $_) {
        Meta::cleanup();
    });
}
```
