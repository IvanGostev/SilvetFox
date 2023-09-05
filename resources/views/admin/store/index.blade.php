@extends('admin.layouts.main')
@section('content')

    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">


                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Магазины</h4>

                                <div class="table-responsive">
                                    <table class="table table-centered table-nowrap mb-0">
                                        <thead>
                                        <tr>
                                            <th scope="col" style="width: 60px;"></th>
                                            <th scope="col">ID &amp; Название</th>
                                            <th scope="col">Статус</th>
                                            <th scope="col">Владелец</th>
                                            <th scope="col">Действие</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($stores as $store)
                                                <?php
                                                $state = match ($store['status']) {
                                                    0 => '<i class="mdi mdi-checkbox-blank-circle text-danger me-1"></i>',
                                                    1 => '<i class="mdi mdi-checkbox-blank-circle text-warning me-1"></i>',
                                                    2 => '<i class="mdi mdi-checkbox-blank-circle text-success me-1"></i>',
                                                };
                                                $store['status'] = match ($store['status']) {
                                                    0 => 'Неактивный',
                                                    1 => 'Подал заявку',
                                                    2 => 'Активный',
                                                }

                                                ?>
                                            <tr>
                                                <td>
                                                    <img src="{{ asset('asset/images/users/avatar-2.jpg')}}" alt="user"
                                                         class="avatar-xs rounded-circle">
                                                </td>
                                                <td>
                                                    <p class="mb-1 font-size-12">#{{$store->id}}</p>
                                                    <h5 class="font-size-15 mb-0">{{$store->title}}</h5>
                                                </td>
                                                <td>{!! $state !!} {{$store->status}}</td>
                                                <td><a href="{{ route('admin.user.edit', $store->user_id) }}"
                                                       class="btn btn-outline-info btn-sm">Перейти</a> &nbsp;
                                                </td>
                                                <td class="d-flex ">
                                                    <a href="{{ route('admin.store.edit', $store->id) }}"
                                                       class="btn btn-outline-success btn-sm">Редактировать</a> &nbsp;
                                                    <form class="mr-5"
                                                          action="{{ route('admin.store.destroy', $store->id) }}"
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
