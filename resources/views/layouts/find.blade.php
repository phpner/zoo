@extends('layouts.app')
@section('content')
  <div class="find">
      <blockquote>
          <h2 class="text-center">Нас можна знайти</h2><br>
          <p>Ми працюємо c 8:00 до 20:00</p>
          <p>Полтавська область, с. Засулля, вулиця Польова, б ??? </p>

      </blockquote>
       <a class="img_popup" href="/img/map.jpg">
       <img src="/img/map.jpg" alt="">
       </a>
     <h2 class="text-center">
         <a target="_blank" href="https://www.google.ru/maps/dir//49.9938,33.0381451/@49.9937253,33.0376097,262m/data=!3m1!1e3!4m2!4m1!3e0">Открыть карту</a>
     </h2>
  </div>

@endsection