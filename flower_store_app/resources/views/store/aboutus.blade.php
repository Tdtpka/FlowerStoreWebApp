@extends('layouts.app')
@section('content')
    <div class="main">
        @foreach ($abouts as $data)
            @include('layouts.topic', [$data])        
        @endforeach
    </div>
@endsection