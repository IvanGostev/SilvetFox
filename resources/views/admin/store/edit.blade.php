@extends('admin.layouts.main')
@section('content')

    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Редактирование магазина</h4>
                                <form class="needs-validation" novalidate="" action="{{ route('admin.store.update', $store->id) }}" method="post">
                                    @csrf
                                    @method('patch')
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="validationCustom01">Название</label>
                                                <input type="text" class="form-control" id="validationCustom01" placeholder="Название" name="title" value="{{$store->title}}" required="">
                                                <div class="valid-feedback">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="validationCustom02">Описание</label>
                                                <input type="text" class="form-control" id="validationCustom02" placeholder="Описание" name="description" value="{{$store->description}}" required="">
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label" for="validationCustom04">Статус</label>
                                                <select class="form-select" name="status" id="inlineFormSelectPref">
                                                    <option {{ $store->role == 0 ? 'selected' : '' }}  value="0">Неактивный</option>
                                                    <option {{ $store->role == 1 ? 'selected' : '' }}  value="1">Заявка отправлена</option>
                                                    <option {{ $store->role == 2 ? 'selected' : '' }}  value="2">Активный</option>
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
