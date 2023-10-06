@extends('admin.layouts.main')
@section('content')

    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">


                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Отзывы к товаром</h4> <h3><a href="{{ route('admin.category.create') }}"
                                                                                  class="btn btn-outline-success btn-sm">Создать</a> 	</h3>

                                <div class="table-responsive">
                                    <table class="table table-centered table-nowrap mb-0">
                                        <thead>
                                        <tr>
                                            <th scope="col">ID &amp; Сообщение</th>
                                            <th scope="col">Действие</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($comments as $comment)
                                            <tr>
                                                <td>
                                                    <p class="mb-1 font-size-12">#{{$comment->id}}</p>
                                                    <h5 class="font-size-15 mb-0">{{$comment->message}}</h5>
                                                </td>
                                                <td class="d-flex">&nbsp;
                                                <form class="" action="{{ route('admin.comment.destroy', $comment->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-outline-danger btn-sm">
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
