<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit') }}
        </h2>
        </x-slot>
        <body class="antialisased">
            <h1>Blog Name</h1>
            <form action='/posts/{{ $post->id }}' method='POST'>
                @csrf
                @method('PUT')
                <div class='title'>
                    <h2>Title</h2>
                    <input type='text' name=post[title] placeholder='タイトル' value={{ $post->title}}>
                    <p class='title_error' style='color:red'>{{ $errors->first('post.title') }}</p>
                </div>
                <div class='body'>
                    <h2>Body</h2>
                    <textarea name='post[body]' placeholder='今日も一日お疲れ様でした。'>{{ $post->body}}</textarea>
                    <p class='body_error' style='color:red'>{{ $errors->first('post.body') }}</p>
                </div>
                <input type="submit" value='update'>
            </form>
            <div class = 'footer'>
                <a href = '/posts/{{ $post->id}}'>戻る</a>
            </div>
        </body>
    </x-app-layout>
</html>
