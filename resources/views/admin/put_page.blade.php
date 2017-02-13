@extends('admin.admin')

@section('content')
    <form class="form-horizontal" role="form" method="POST"  action="{{URL::route('put_pgae')}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group text-center">

            <label for="title" class=" col-md-12 text-center ">Название статьи</label><br>
            <div class="col-md-6 col-md-offset-3">

                <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" required autofocus>

            </div>
        </div>
        <div class="form-group col-md-8">

            <label for="textarea" class=" text-center col-md-8 text-center">Описание статьи</label><br>
            <textarea class="form-control col-md-8" name="textarea" id="textarea" rows="10" cols="80">
                This is my textarea to be replaced with CKEditor.
            </textarea>
        </div>


        <div class="form-group">
            <div class="col-md-8 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    Сохранить
                </button>

        </div>
        </div>
            <div class="clearfix"></div>
    </form>
    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
        Edit Image
    </button>


    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Загрузка файлов</h4>
                </div>
                <div class="modal-body">


                    <div class="laradrop" laradrop-csrf-token="h0l6Y6hKeth7UzQDdGtKzScKzQGl22rO4Pw7Izf8" ></div>
                    <div class="clearfix"></div>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function(){

            $('.laradrop').laradrop({

                onInsertCallback: function (src){
                    console.log(src);
                },

                onErrorCallback: function(jqXHR,textStatus,errorThrown){
                    alert('An error occured: '+ errorThrown);
                },

                onSuccessCallback: function(serverData){
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