@extends('layouts.app')
@section('content')
    <div class="main">
        @foreach ($blogs as $data)
            @include('layouts.topic', [$data])
        @endforeach
    </div>
@endsection