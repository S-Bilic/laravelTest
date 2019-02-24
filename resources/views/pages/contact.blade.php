@extends('layouts.app')

@section('content')
    <h1>{{$title}}</h1>
    @if(count($details) > 0)
        @foreach($details as $detail)
            <h3>{{$detail}}</h3>
        @endforeach
    @endif
@endsection