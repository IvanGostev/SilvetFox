@extends('admin.layouts.main')
@section('content')

    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Редактирование товара</h4>
                                <form class="needs-validation" novalidate=""
                                      action="{{ route('admin.product.update', $product->id) }}" method="post">
                                    @csrf
                                    @method('patch')
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="validationCustom01">Название</label>
                                                <input type="text" class="form-control" id="validationCustom01"
                                                       placeholder="Название" name="title" value="{{$product->title}}"
                                                       required="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="validationCustom02">Цена</label>
                                                <input type="number" class="form-control" id="validationCustom02"
                                                       placeholder="Цена" name="price"
                                                       value="{{$product->price}}" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label" for="validationCustom02">Описание</label>
                                                <input type="text" class="form-control" id="validationCustom02"
                                                       placeholder="Описание" name="description"
                                                       value="{{$product->description}}" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label" for="validationCustom04">Категория</label>
                                                <select class="form-select" name="category_id"
                                                        id="inlineFormSelectPref">
                                                    @foreach($categories as $category)
                                                        <option
                                                            {{ $product->category_id == $category->id ? 'selected' : '' }}  value="{{$category->id}}">{{$category->title}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label" for="validationCustom04">Статус</label>
                                                <select class="form-select" name="status" id="inlineFormSelectPref">
                                                    <option {{ $product->status == 0 ? 'selected' : '' }}  value="0">
                                                        Неактивный
                                                    </option>
                                                    <option {{ $product->status == 1 ? 'selected' : '' }}  value="1">
                                                        Заявка отправлена
                                                    </option>
                                                    <option {{ $product->status == 2 ? 'selected' : '' }}  value="2">
                                                        Активный
                                                    </option>
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
