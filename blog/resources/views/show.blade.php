<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <body class="antialisased">
        <h1 class='title'>
            {{ $post->tile}}
        </h1>
        <div class='content'>
            <div class='content_post'>
                <h2 class='title'>{{ $post->title }}</h2>
                <p class='body'>{{ $post->body}}</p>
            </div>
        </div>
    </body>
</html>
