<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-gray-50 ">
    <article class="px-3 mb-3 py-4">
        <?= $post  ?>
    </article>
    <a class="px-3" href="/"> Go Back</a>
    <script src="{{asset('/js/app.js')}}"></script>
</body>

</html>
