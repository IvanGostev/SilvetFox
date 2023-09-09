@extends('admin.layouts.main')
@section('content')

    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">


                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Формы пополнения баланса</h4>

                                <div class="table-responsive">
                                    <table class="table table-centered table-nowrap mb-0">
                                        <thead>
                                        <tr>
                                            <th scope="col">ID &amp; Имя</th>
                                            <th scope="col">Сумма</th>
                                            <th scope="col">Написать</th>
                                            <th scope="col">Перейти</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($forms as $form)

                                            <tr>
                                                <td>
                                                    <p class="mb-1 font-size-12">#{{$form->user->id}}</p>
                                                    <h5 class="font-size-15 mb-0">{{$form->user->name}}</h5>
                                                </td>
                                                <td>{{$form->number}}</td>
                                                <td> <a href="{{ route('profile.chat.show', $form->user->id) }}"
                                                        class="btn btn-outline-dark btn-sm">Написать</a> </td>
                                                <td class="d-flex ">
                                                    <a href="{{ route('admin.balance.replenishment.edit', $form->id) }}"
                                                       class="btn btn-outline-success btn-sm">Перейти</a> 	&nbsp;
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
