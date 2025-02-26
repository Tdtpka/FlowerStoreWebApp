<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/layouts/topic.css')}}">
</head>

<body>
    <form action="{{ route('topic-info') }}" method="GET">
        <input type="hidden" name="image" value="{{ $data->image }}">
        <input type="hidden" name="title" value="{{ $data->title }}">
        <input type="hidden" name="content" value="{{ $data->content }}">
        <a href="#" onclick="this.closest('form').submit();">
            <div class="container">
                <div class="image-wrapper">
                    <img id="image" src="{{ asset("images/others/$data->image") }}" alt="">
                </div>
                <div class="info">
                    <div id="title">{{ $data->title }}</div>
                    <div id="text">{{ $data->content }}</div>
                </div>
            </div>
        </a>
    </form>
</body>

</html>