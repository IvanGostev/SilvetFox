@extends('admin.layouts.main')
@section('content')

    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Ответ на запрос</h4>
                                <form class="needs-validation" novalidate=""
                                      action="{{ route('admin.balance.withdrawal.update', $form->id) }}" method="post">
                                    @csrf
                                    @method('patch')
                                    <h5 class="card-title">Сумма:&nbsp;{{$form->number}} &nbsp;XMR</h5>
                                    <p style="color: white">{{$form->message}}</p>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mt-3">
                                                <label>Ответ (необязательно)</label>
                                                <textarea id="textarea" class="form-control" maxlength="225" rows="3" placeholder="This textarea has a limit of 225 chars."></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label" for="validationCustom04">Статус</label>
                                                <select class="form-select" name="status" id="inlineFormSelectPref">
                                                    <option value="2">Одобрить</option>
                                                    <option value="0">Отказать</option>
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
