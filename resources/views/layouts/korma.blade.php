@extends('layouts.app')
@section("content")
    <div class="col-md-12 text-center logo_uslugi">
        <img src="/img/logo_korna.png" alt="">
    </div>
    <div class="col-md-12">
        @if(isset($kormDogs))
            <ul class="" id="kormTab">
                <li class="active"><a href="#dog" data-toggle="tab"><img src="/img/dog.png" alt=""></a></li>
                <li><a href="#cat" data-toggle="tab"><img src="/img/cat.png" alt=""></a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane clearfix fade in  active" id="dog">
            @foreach($kormDogs as  $dog)
                    <div class="col-sm-6 col-md-4  kormitems">
                            <a class="img_popup" href="/uploads/{{$dog->img_link}}">
                                <img src="/uploads/_thumb_{{$dog->img_link}}" alt="">
                            </a>
                            <div class="caption">
                                <h3>{{$dog->title}}</h3>
                                <p>{!! $dog->description !!}</p>
                            </div>
                    </div>
            @endforeach
                    <div class="clearfix"></div>
                </div>


        @endif
            <div class="tab-pane clearfix fade " id="cat">
            @if(isset($kormCats))
                @foreach($kormCats as  $cat)
                        <div class="col-sm-6 col-md-4  kormitems">
                        <a class="img_popup" href="/uploads/{{$cat->img_link}}">
                            <img src="/uploads/_thumb_{{$cat->img_link}}" alt="">
                        </a>
                            <h3>{{$dog->title}}</h3>
                            {!! $cat->description !!}
                        </div>
                    @endforeach
                    <div class="clearfix"></div>
                @endif
            </div>
            </div>
    </div>
    @endsection