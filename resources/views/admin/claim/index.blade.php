@extends('admin.layouts.main')
@section('content')

    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">


                <div class="row">
                    @foreach($claims as $claim)
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">{{$claim->title}}</h4>
                                    <p class="card-title-desc">{{$claim->message}}</p>

                                    <form class="custom-validation" action="{{ route('admin.claim.update', $claim->id) }}" novalidate="" method="post">
                                        @csrf
                                        @method('patch')
                                        <div class="mb-3">
                                            <label class="form-label">Ответ</label>
                                            <div>
                                                <textarea required="" name="answer" class="form-control" rows="5"></textarea>
                                            </div>
                                        </div>
                                        <div>
                                            <div>
                                                <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                                    Отправить
                                                </button>
                                                <a href="{{ route('profile.main.show', $claim->user->id) }}" class="btn btn-outline-dark waves-effect waves-light me-5">
                                                    Профиль
                                                </a>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    @endforeach

                    <!-- end col -->
                </div>
                <!-- end row -->

            </div>
            <!-- container-fluid -->
        </div>


    </div>
@endsection
