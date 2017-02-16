@extends('layouts.app')
@section("content")
    <div class="col-md-12 text-center logo_uslugi">
        <img src="/img/logo_korna.png" alt="">
    </div>
    <div class="col-md-12">
        @if(isset($korms))
            <ul class="" id="myTab">
                <li class="active"><a href="#dog" data-toggle="tab"><img src="/img/dog.png" alt=""></a></li>
                <li><a href="#cat" data-toggle="tab"><img src="/img/cat.png" alt=""></a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="dog">
            @foreach($korms as  $korm)

                {{$korm->title}}
                <br>
                {!! $korm->description !!}
                <br>
                @foreach(unserialize($korm->img_id) as $link )
                    <a class="img_popup" href="/uploads/{{$link}}">
                    <img src="/uploads/_thumb_{{$link}}" alt="">
                    </a>
                @endforeach
                <hr>
            @endforeach
                {{ $korms->links() }}
                </div>
                <div class="tab-pane" id="cat">
                    sdsd
                </div>
            </div>
        @endif
    </div>
    @endsection