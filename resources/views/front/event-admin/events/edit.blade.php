@extends('front.layouts.main')

@section('content')
    {{ Menu::eventAdmin($event) }}

    <h1>{{ $event->name }}</h1>
@endsection