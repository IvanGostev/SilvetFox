@extends('admin.layouts.main')
@section('content')

    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">


                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Заказы</h4>

                                <div class="table-responsive">
                                    <table class="table table-centered table-nowrap mb-0">
                                        <thead>
                                        <tr>
                                            <th scope="col">ID &amp; Количество товаров</th>
                                            <th scope="col">Цена</th>
                                            <th scope="col">Статус</th>
                                            <th scope="col">Товар</th>
                                            <th scope="col">Магазин</th>
                                            <th scope="col">Продавец</th>
                                            <th scope="col">Покупатель</th>
{{--                                            <th scope="col">Действие</th>--}}

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($orders as $order)
                                                <?php
                                                $state = match ($order['status']) {
                                                    0 => '<i class="mdi mdi-checkbox-blank-circle text-danger me-1"></i>',
                                                    1 => '<i class="mdi mdi-checkbox-blank-circle text-warning me-1"></i>',
                                                    2 => '<i class="mdi mdi-checkbox-blank-circle text-warning me-1"></i>',
                                                    3 => '<i class="mdi mdi-checkbox-blank-circle text-info me-1"></i>',
                                                    4 => '<i class="mdi mdi-checkbox-blank-circle text-success me-1"></i>',
                                                };
                                                ?>
                                                <?php $status = match ($order->status) {
                                                "0" => 'Cancelled',
                                                "1" => 'In processing',
                                                "2" => 'In the assembly',
                                                "3" => 'Shipped',
                                                "4" => 'Receipt confirmed',
                                                0 => 'Cancelled',
                                                1 => 'In processing',
                                                2 => 'In the assembly',
                                                3 => 'Shipped',
                                                4 => 'Receipt confirmed',
                                            } ?>

                                            <tr>
                                                <td>
                                                    <p class="mb-1 font-size-12">#{{$order->id}}</p>
                                                    <h5 class="font-size-15 mb-0">{{$order->number}}</h5>
                                                </td>
                                                <td>{{$order->price}} XMR</td>
                                                <td>{!! $state !!} {{$status}}</td>
                                                <td><a href="{{ route('admin.category.edit', $order->product->category_id) }}"
                                                       class="btn btn-outline-info btn-sm">Перейти</a> &nbsp;
                                                </td>
                                                <td><a href="{{ route('admin.store.edit', $order->product->store_id) }}"
                                                       class="btn btn-outline-info btn-sm">Перейти</a> &nbsp;
                                                </td>
                                                <td><a href="{{ route('profile.chat.show', $order->product->store->user_id) }}"
                                                       class="btn btn-outline-info btn-sm">Написать</a> &nbsp;
                                                </td>
                                                <td><a href="{{ route('profile.chat.show', $order->user_id) }}"
                                                       class="btn btn-outline-info btn-sm">Написать</a> &nbsp;
                                                </td>
{{--                                                <td class="d-flex ">--}}
{{--                                                    <a href="{{ route('admin.product.edit', $order->id) }}"--}}
{{--                                                       class="btn btn-outline-success btn-sm">Редактировать</a> &nbsp;--}}
{{--                                                    <form class="mr-5"--}}
{{--                                                          action="{{ route('admin.product.destroy', $order->id) }}"--}}
{{--                                                          method="post">--}}
{{--                                                        @csrf--}}
{{--                                                        @method('delete')--}}
{{--                                                        <button type="submit"--}}
{{--                                                                class="ml-2 btn btn-outline-danger btn-sm">--}}
{{--                                                            Удалить--}}
{{--                                                        </button>--}}
{{--                                                    </form>--}}
{{--                                                </td>--}}
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
