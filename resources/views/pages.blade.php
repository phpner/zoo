@extends('layouts.app')

@section('content')

@if(isset($page))

        {{$page->title}}

    @endif
    @endsection