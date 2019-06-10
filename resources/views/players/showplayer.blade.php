@extends('layouts.master')

@section('title' , 'Show player')

@section('content')
   
    <div>
        <h3>{{ $player->first_name.' '.$player->last_name}}</h3>
        <p>{{ $player->email }}</p>
        <p>{{ $player->team->name}}</p>
    </div>
    
@endsection