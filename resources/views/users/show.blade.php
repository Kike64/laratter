@extends('layouts.app')

@section('content')
    <hi>{{$user->name}}</hi>

    <div class="row">
    @foreach($user->messages as $message)
        <div class="col-6">@include('messages.message')</div>
    @endforeach
    </div>
@endsection