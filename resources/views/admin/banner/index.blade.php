@extends('admin.layouts.main')
@section('content')

    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">


                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Баннеры</h4>

                                <div class="table-responsive">
                                    <table class="table table-centered table-nowrap mb-0">
                                        <thead>
                                        <tr>
                                            <th scope="col">Баннер</th>
                                            <th scope="col">Написать пользователю</th>
                                            <th scope="col">Действие</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($banners as $banner)
                                            <tr>
                                                <td>
                                                    <div style="max-height: 60px; max-width: 468px"><a
                                                            href="{{$banner->link}}"><img
                                                                src="{{ asset('storage/' . $banner->img) }}"></a></div>
                                                </td>
                                                <td><a href="{{ route('profile.chat.show', $banner->user->id) }}"
                                                       class="btn btn-outline-success btn-sm">Написать</a> &nbsp;
                                                </td>
                                                <td class="d-flex">
                                                    <a href="{{ route('admin.banner.active', $banner->id) }}"
                                                       class="btn btn-outline-success btn-sm">Активировать</a> &nbsp;
                                                    <form class=""
                                                          action="{{ route('admin.banner.destroy', $banner->id) }}"
                                                          method="post">
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
