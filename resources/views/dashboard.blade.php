@extends('layouts.app')

@section('content')
    <p>Hi {{ Auth::user()->name ?? '' }}, this is your Dashboard.</p>
@endsection
