@extends('admin.layouts.main')
@section('content')

    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Редактирование пользователя</h4>
                                <form class="needs-validation" novalidate="" action="{{ route('admin.user.update', $user->id) }}" method="post">
                                    @csrf
                                    @method('patch')
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="validationCustom01">Имя</label>
                                                <input type="text" class="form-control" id="validationCustom01" placeholder="First name" name="name" value="{{$user->name}}" required="">
                                                <div class="valid-feedback">
                                                </div>
                                            </div>
                                        </div>
                                        @if(auth()->user()->role == 3)
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="validationCustom02">Баланс</label>
                                                <input type="number" class="form-control" id="validationCustom02" placeholder="Баланс" name="balance" value="{{$user->balance}}" required="">
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                        </div>
                                        @else
                                            <input type="number" class="form-control" hidden="hidden" id="validationCustom02" placeholder="Баланс" name="balance" value="{{$user->balance}}" required="">
                                        @endif
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label" for="validationCustom04">Роль</label>
                                                <select class="form-select" name="role" id="inlineFormSelectPref">
                                                    <option {{ $user->role == 0 ? 'selected' : '' }}  value="0">Покупатель</option>
                                                    <option {{ $user->role == 1 ? 'selected' : '' }}  value="1">Продавец</option>
                                                    @if(auth()->user()->role == 3)
                                                    <option {{ $user->role == 2 ? 'selected' : '' }}  value="2">Модератор</option>
                                                    <option {{ $user->role == 3 ? 'selected' : '' }}  value="3">Администратор</option>
                                                    @endif
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Изменить</button>
                                </form>
                            </div>
                        </div>
                        <!-- end card -->
                    </div> <!-- end col -->
                </div>

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

@endsection
