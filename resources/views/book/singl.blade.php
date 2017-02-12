@extends('layouts.app')

@section('content')
    <div class="container">

        @if(isset($book))

            {{$book->title}}
            <br>

        @endif
        @if(isset($comment))
            @foreach($comment as $com)

                {{$com->title}}

            @endforeach

        @endif
            <h2 class="text-center">Ответить</h2>
        <form action="">
            <div class="col-md-8 col-md-offset-2 form-group">

                <input type="text" name="name" class="form-control">
            </div>

            <div class="col-md-8 col-md-offset-2 form-group">
                <textarea name="text" class="form-control" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="col-md-8 col-md-offset-2">
            <button type="submit" class="btn btn-default">Ответить</button>
            </div>
        </form>
        @endsection
    </div>


    
