@extends('admin.layouts.main')
@section('content')

    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">


                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Validation type</h4>
                                <p class="card-title-desc">Parsley is a javascript form validation
                                    library. It helps you provide your users with feedback on their form
                                    submission before sending it to your server.</p>

                                <form class="custom-validation" action="#" novalidate="">
                                    <div class="mb-3">
                                        <label class="form-label">Депозит в XMR</label>
                                        <div>
                                            <input parsley-type="url" type="text" class="form-control" required="" name="deposit_store" value="{{$main->deposit_store}}">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Курс XMR к $</label>
                                        <div>
                                            <input parsley-type="url" type="text" class="form-control" required="" name="rate_dollars" value="{{$main->rate_dollars}}">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Footer: Адрес</label>
                                        <div>
                                            <input data-parsley-type="digits" type="text" class="form-control" required="" name="address" value="{{$main->address}}">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Footer: Почта</label>
                                        <div>
                                            <input data-parsley-type="number" type="email" class="form-control" required="" name="email" value="{{$main->email}}" >
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Footer: Телефон</label>
                                        <div>
                                            <input data-parsley-type="alphanum" type="text" class="form-control" required="" name="phone" value="{{$main->phone}}">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Footer: информация</label>
                                        <div>
                                            <textarea required="" class="form-control" rows="5" name="information">{{$main->information}}</textarea>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Правила</label>
                                        <div>
                                            <textarea required="" class="form-control" rows="15" name="rules">{{$main->rules}}</textarea>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Гарант</label>
                                        <div>
                                            <textarea required="" class="form-control" rows="15" name="escrow">{{$main->escrow}}</textarea>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Политика кондефициальности</label>
                                        <div>
                                            <textarea required="" class="form-control" rows="15" name="privacy_policy">{{$main->privacy_policy}}</textarea>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Условия обслуживания</label>
                                        <div>
                                            <textarea required="" name="terms_of_service" class="form-control" rows="15">{{$main->terms_of_service}}</textarea>
                                        </div>
                                    </div>
                                    <div>
                                        <div>
                                            <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
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


    </div>
@endsection
