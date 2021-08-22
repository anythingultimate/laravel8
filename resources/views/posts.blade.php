<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 8</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-50 ">
    @foreach ($posts as $post)

    <article class="px-3 mb-3 py-4">
        <h1 class="text-3xl font-semibold"><a href="posts/{{ $post->slug }}">{{ $post->title }}</a></h1>
        <p class="pb-4">
            {{ $post->excerpt }}
        </p>
        <hr />
    </article>
    @endforeach;
    <script src="{{asset('/js/app.js')}}"></script>
</body>
</html>
