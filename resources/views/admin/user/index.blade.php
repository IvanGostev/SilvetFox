@extends('admin.layouts.main')
@section('content')

    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">


                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Пользователи</h4>

                                <div class="table-responsive">
                                    <table class="table table-centered table-nowrap mb-0">
                                        <thead>
                                        <tr>
                                            <th scope="col" style="width: 60px;"></th>
                                            <th scope="col">ID &amp; Имя</th>
                                            <th scope="col">Роль</th>
                                                <th scope="col">Баланс</th>
                                            <th scope="col">Написать</th>
                                            <th scope="col">Действие</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($users as $user)
                                                <?php
                                                $role = match ($user['role']) {
                                                    0 => 'Пользователь',
                                                    1 => 'Продавец',
                                                    2 => 'Модератор',
                                                    3 => 'Администратор',
                                                }
                                                ?>
                                            <tr>
                                                <td>
                                                    <img src="{{ asset('storage/' . $user->img)}}" alt="user"
                                                         class="avatar-xs rounded-circle">
                                                </td>
                                                <td>
                                                    <p class="mb-1 font-size-12">#{{$user->id}}</p>
                                                    <h5 class="font-size-15 mb-0">{{$user->name}}</h5>
                                                </td>
                                                <td>{{$role}}</td>
                                                    <td>{{$user->balance}}</td>
                                                <td><a href="{{ route('profile.chat.show', $user->id) }}"
                                                       class="btn btn-outline-dark btn-sm">Написать</a></td>



                                                    <td class="d-flex ">
                                                        @if($user->role < auth()->user()->role || ($user->role == 3 and auth()->user()->role == 3))
                                                        <a href="{{ route('admin.user.edit', $user->id) }}"
                                                           class="btn btn-outline-success btn-sm">Редактировать</a> &nbsp;
                                                        @endif
                                                        @if($user->id != auth()->user()->id && ($user->role < auth()->user()->role))
                                                        <form class="mr-5"
                                                              action="{{ route('admin.user.destroy', $user->id) }}"
                                                              method="post">
                                                            @csrf
                                                            @method('delete')
                                                            <button type="submit"
                                                                    class="ml-2 btn btn-outline-danger btn-sm">
                                                                Удалить
                                                            </button>
                                                        </form>
                                                        @endif
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
