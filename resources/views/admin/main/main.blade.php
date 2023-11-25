@extends('admin.layouts.main')
@section('content')
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>


    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('asset/images/favicon.ico')}}">

    <!-- jvectormap -->
    <link href="{{ asset('asset/libs/jqvmap/jqvmap.min.css')}}" rel="stylesheet">

    <!-- Bootstrap Css -->
    <link href="{{ asset('asset/css/bootstrap-dark.min.css')}}" rel="stylesheet" type="text/css">
    <!-- Icons Css -->
    <link href="{{ asset('asset/css/icons.min.css')}}" rel="stylesheet" type="text/css">
    <!-- App Css-->
    <link href="{{ asset('asset/css/app-dark.min.css')}}" rel="stylesheet" type="text/css">
    <style>

        @media (max-width: 992px) {
            .vertical-menu {
                display: block!important;
            }

            .main-content {
                padding-left:  20%;
                font-size: 12px!important;
                width: 80%!important;
            }


            .vertical-menu {
                display: block;
                width: 20%!important;
                overflow: scroll;
            }
        }

body {
    font-size: 14px!important;

}
        .form-control {
            font-size: 14px!important;
        }
        #sidebar-menu ul li a {
            font-size: 14px;
        }
    </style>
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">


                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Основные настройки</h4>
                                <p class="card-title-desc"></p>

                                <form class="custom-validation" action="{{ route('admin.main.update') }}" method="post">
                                    @csrf
                                    @method('patch')
                                    <div class="mb-3">
                                        <label class="form-label">Счет</label>
                                        <div>
                                            <input  type="text" class="form-control" required="" name="score" value="{{$main->score}}">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Курс XMR к $</label>
                                        <div>
                                            <input  type="text" class="form-control" required="" name="rate_dollars" value="{{$main->rate_dollars}}">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Стоимость одного баннера на месяц</label>
                                        <div>
                                            <input  type="text" class="form-control" required="" name="advertisement" value="{{$main->advertisement}}">
                                        </div>
                                    </div>
{{--                                    <div class="mb-3">--}}
{{--                                        <label class="form-label">Footer: Адрес</label>--}}
{{--                                        <div>--}}
{{--                                            <input data-parsley-type="digits" type="text" class="form-control" required="" name="address" value="{{$main->address}}">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="mb-3">--}}
{{--                                        <label class="form-label">Footer: Почта</label>--}}
{{--                                        <div>--}}
{{--                                            <input data-parsley-type="number" type="email" class="form-control" required="" name="email" value="{{$main->email}}" >--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="mb-3">--}}
{{--                                        <label class="form-label">Footer: Телефон</label>--}}
{{--                                        <div>--}}
{{--                                            <input data-parsley-type="alphanum" type="text" class="form-control" required="" name="phone" value="{{$main->phone}}">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="mb-3">--}}
{{--                                        <label class="form-label">Footer: информация</label>--}}
{{--                                        <div>--}}
{{--                                            <textarea required="" class="form-control" rows="5" name="information">{{$main->information}}</textarea>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                    <div class="mb-3">
                                        <label class="form-label">Правила</label>
                                        <div>
                                            <textarea  id="summernote" required="" class="form-control" rows="15" name="rules">{{$main->rules}}</textarea>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Гарант</label>
                                        <div>
                                            <textarea  id="summernote2"  required="" class="form-control" rows="15" name="escrow">{{$main->escrow}}</textarea>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Политика кондефициальности</label>
                                        <div>
                                            <textarea  id="summernote3" required="" class="form-control" rows="15" name="privacy_policy">{{$main->privacy_policy}}</textarea>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Условия обслуживания</label>
                                        <div>
                                            <textarea  id="summernote4" required="" name="terms_of_service" class="form-control" rows="15">{{$main->terms_of_service}}</textarea>
                                        </div>
                                    </div>
                                    <div>
                                        <div>
                                            <button style="font-size: 14px!important;" type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                                Отправить
                                            </button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

            </div>
            <!-- container-fluid -->
        </div>
<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
    $(document).ready(function() {
        $('#summernote2').summernote();
    });
    $(document).ready(function() {
        $('#summernote3').summernote();
    });
    $(document).ready(function() {
        $('#summernote4').summernote();
    });
</script>

    </div>
@endsection
