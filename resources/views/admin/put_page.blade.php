@extends('admin.admin')

@section('content')
    <form class="form-horizontal form" role="form" method="POST" action="{{URL::route('put_pgae')}}"
          enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group text-center">

            <label for="title" class=" col-md-12 text-center ">Название корма</label><br>
            <div class="col-md-6 col-md-offset-3">

                <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}"
                       autofocus>

            </div>
        </div>
        <div class="form-group col-md-8 col-md-push-2 text-center">

            <label for="textarea" class=" text-center text-center">Описание статьи</label><br>
            <textarea class="form-control col-md-8" name="textarea" id="textarea" rows="10" cols="80">

            </textarea>
        </div>
        <div class="col-md-12 text-center">

            <fieldset>
                <legend><h2>Допавить в раздел:</h2></legend>
            <label for="category" class="checkbox-inline">
                <input id="cat" type="radio"  name="category" value="2" required="" aria-required="true" aria-invalid="true"> Кошки
            </label>
            <label for="category" class="checkbox-inline">
                <input id="dog" type="radio" name="category" value="1" > Собаки
            </label>

                <br>
                <label for="category" class="alert-danger"></label>
            </fieldset>


            <hr>
            <div class="addImg container text-center"></div>

            <div class="col-md-12 text-center">
                <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                    Добавить картинку /редактировать
                </button>
            </div>
            <br>
            <hr>
            <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-success">
                    Сохранить
                </button>

            </div>

            <div class="addfile"></div>
    </form>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Загрузка файлов</h4>
                </div>
                <div class="modal-body">


                    <div class="laradrop" laradrop-csrf-token="h0l6Y6hKeth7UzQDdGtKzScKzQGl22rO4Pw7Izf8"></div>
                    <div class="clearfix"></div>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

@section('script')

    <script>
        $(document).ready(function () {
            $(".form").validate({
                rules: {
                title: {
                    required: true
                },
                    category:{
                        required: true
                    }
            },
            messages:{
                title: {
                    required: 'Название корма объязателно!'
                },
                category:{
                    required: "Выберите категорию!"
                }
            },
                errorClass:'alert-danger',

            });

            $('.laradrop').laradrop({

                onInsertCallback: function (src) {

                    if ($('.addImg img').is('#' + src.id)) {
                        alert('Такая картинка уже добавлена!');
                    } else {
                        $('.addImg').html('<div class="imgIn "> <span class="glyphicon glyphicon-remove-sign delImg"></span> <img  id=' + src.id + '  class="added thumbnail" src=' + src.src + '></div>');

                        var img = src.src.slice(src.src.indexOf('b_') + 2);

                        $('.form .addfile').html('<input type="hidden" name="file" value=' + img + '>');
                        $('#myModal').modal('toggle');
                    }


                    $('.delImg').on('click', function () {

                        $(this).parent('div').remove();

                        var id = $(this).siblings('img').attr('id');

                        console.log($('.form').find("+ src.id +"));
                    });

                },

                onErrorCallback: function (jqXHR, textStatus, errorThrown) {
                    alert('An error occured: ' + errorThrown);
                },

                onSuccessCallback: function (serverData) {
                    // if you need a success status indicator, implement here
                }
            });

            tinymce.init({
                selector: '#textarea',
                language: 'ru',
                plugins: "emoticons textcolor",
                toolbar: "emoticons | forecolor | backcolor",


            });

        });
    </script>
@endsection