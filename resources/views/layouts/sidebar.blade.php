<hr>
<img src="/img/sale.gif" alt="">
@if(isset($slider))

    @foreach($slider as $slider)
    {{$slider->title}}
        <br>
    @endforeach
    @endif
<?php $n = app('widget') ?>
<hr>
<h4 class="text-center">Корма</h4>
<div class="sliderOfsidebar">
@foreach($n->get() as $item)
        <a href="{{route('korma')}}">
    <img src="uploads/{{$item->img_link}}" alt="">
        </a>

    @endforeach
</div>


