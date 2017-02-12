@extends('layouts.app')

@section('content')

    <div class="container text-center">
    @if(isset($link))

        @foreach($link as $data)

                <a href="{{url('book/'.$data->id)}}">{{$data->title}}</a>
                <br>

            @endforeach
    @endif
    </div>
@endsection