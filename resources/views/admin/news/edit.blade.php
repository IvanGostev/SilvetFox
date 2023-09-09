@extends('admin.layouts.main')
@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Создание поста</h4>
                                <p>Если не хотите обновлять фотографию, не прикрепляйте её</p>
                                <form class="needs-validation" novalidate=""
                                      action="{{ route('admin.news.update', $post->id) }}"
                                      method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('patch')
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label" for="validationCustom01">Заголовок</label>
                                                <input type="text" class="form-control" id="validationCustom01"
                                                       placeholder="Заголовок" name="title"
                                                       required="" value="{{$post->title}}">
                                                <div class="valid-feedback">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-md-2 col-form-label">Изображение</label>
                                                <div class="col-md-10">
                                                    <input name="img" type="file">
                                                </div>
                                            <div class="mb-3 row">
                                                <label class="col-md-2 col-form-label">Категория</label>
                                                <div class="col-md-10">
                                                    <select class="form-select" name="category_id">
                                                        @foreach($categories as $category)
                                                            <option {{ $post->category_id == $category->id ? 'selected' : ' '}} value="{{$category->id}}">{{$category->title}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Контент</label>
                                                <div>
                                                    <textarea required="" name="content" class="form-control" rows="10">{{$post->value}}</textarea>
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
