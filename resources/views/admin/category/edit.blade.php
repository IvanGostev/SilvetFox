@extends('admin.layouts.main')
@section('content')

    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Редактирование категории</h4>
                                <form class="needs-validation" novalidate="" action="{{ route('admin.category.update', $category->id) }}"
                                      method="post">
                                    @csrf
                                    @method('patch')
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3 d-flex">
                                                <div class="col-lg-9">
                                                    <label class="form-label" for="validationCustom01">Название</label>
                                                    <input type="text" class="form-control" id="validationCustom01"
                                                           placeholder="Название" name="title" value="{{$category->title}}"
                                                           required="">
                                                    <div class="valid-feedback">
                                                    </div>
                                                </div>
                                                <div class="col-lg-2" style="margin-left: 5px">
                                                    <label class="form-label" for="validationCustom01">Депозит в XMR</label>
                                                    <input type="number" class="form-control" id="validationCustom01"
                                                           name="deposit"
                                                           required="" value="{{$category->deposit}}">
                                                    <div class="valid-feedback">
                                                    </div>
                                                </div>

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
