@extends('admin.layouts.main')
@section('content')

    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">


                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Товары</h4>

                                <div class="table-responsive">
                                    <table class="table table-centered table-nowrap mb-0">
                                        <thead>
                                        <tr>
                                            <th scope="col">ID &amp; Название</th>
                                            <th scope="col">Цена</th>
                                            <th scope="col">Статус</th>
                                            <th scope="col">Категория</th>
                                            <th scope="col">Магазин</th>
                                            <th scope="col">Действие</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($products as $product)
                                                <?php
                                                $state = match ($product['status']) {
                                                    0 => '<i class="mdi mdi-checkbox-blank-circle text-danger me-1"></i>',
                                                    1 => '<i class="mdi mdi-checkbox-blank-circle text-warning me-1"></i>',
                                                    2 => '<i class="mdi mdi-checkbox-blank-circle text-success me-1"></i>',
                                                };
                                                $product['status'] = match ($product['status']) {
                                                    0 => 'Неактивный',
                                                    1 => 'Подал заявку',
                                                    2 => 'Активный',
                                                }

                                                ?>
                                            <tr>
                                                <td>
                                                    <p class="mb-1 font-size-12">#{{$product->id}}</p>
                                                    <h5 class="font-size-15 mb-0">{{$product->title}}</h5>
                                                </td>
                                                <td>{{$product->price}}</td>
                                                <td>{!! $state !!} {{$product->status}}</td>
                                                <td><a href="{{ route('admin.category.edit', $product->category_id) }}"
                                                       class="btn btn-outline-info btn-sm">Перейти</a> &nbsp;
                                                </td>
                                                <td><a href="{{ route('admin.store.edit', $product->store_id) }}"
                                                       class="btn btn-outline-info btn-sm">Перейти</a> &nbsp;
                                                </td>
                                                <td class="d-flex ">
                                                    <a href="{{ route('admin.product.edit', $product->id) }}"
                                                       class="btn btn-outline-success btn-sm">Редактировать</a> &nbsp;
                                                    <form class="mr-5"
                                                          action="{{ route('admin.product.destroy', $product->id) }}"
                                                          method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit"
                                                                class="ml-2 btn btn-outline-danger btn-sm">
                                                            Удалить
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- end card-body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

            </div>
            <!-- container-fluid -->
        </div>


    </div>
@endsection
