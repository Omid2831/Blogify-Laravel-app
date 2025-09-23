@extends('layout.app')

@section('content')
    @if($messages && count($messages) > 0)
        <ul class="mt-4">
            @foreach($messages as $message)
                <li>{{ $message }}</li>
            @endforeach
        </ul>
    @else
        <h1 class="text-warning bg-danger text-center mt-4">
            There is nothing on the backend at the moment
        </h1>
    @endif
@endsection
