@extends('layouts.default')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="mt-5">Hello {{ $name }}!</h1>
            @foreach ($messages as $message)


        <p> {{$message->text}}</p>

        <h1>{{ $name }}</h1>

        @endforeach
        </div>
    </div>
@endsection
