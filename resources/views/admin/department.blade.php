@extends('admin.layout.admin')
@section('content')
    <div class="main_page">

        <div class="overlay_sidebar"></div>
        <div class="menubar">
            <img src="images/logo.png" alt="">
            <i class="fa fa-bars"></i>
        </div>
        <div class="main_wrapper">

            <div class="right_contents">
                <div class="main_sidegapp">
                    <div class="page-header-breadcrumb">
                        <ul class=" breadcrumb breadcrumb-title">
                            <li class="breadcrumb-item">
                                <a href="dashboard.html"><i class="feather icon-home"></i></a>
                            </li>

                            <li class="breadcrumb-item"><a href="#">{{ __('home.department') }}</a> </li>
                        </ul>
                    </div>
                    <div class="row g-3 mb-3 row-deck">

                    </div>
                    <div class="row">
                        <div class="col-sm-12 infobox">
                            <div class="inner_infobox">
                                <div class="import_cod display_flex" id="add_rate">
                                    <h4 class="d-inline mb-0">{{ __('home.department_list') }}</h4>
                                    <a href="#" class="btn btn-primary custom_b_btn" data-toggle="modal"
                                        data-target="#usersModal">{{ __('home.create_department') }}</a>
                                </div>

                                <div class="add_rate_table table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th style="width:50px;">{{ __('home.s_no') }}</th>
                                                <th>{{ __('home.id_department') }}</th>
                                                <th>{{ __('home.name_department') }}</th>
                                                <th class="text-center" style="width:100px;">{{ __('home.action') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($department as $final)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $final->department_id }}</td>
                                                    <td>{{ $final->departmentName }}</td>
                                                    <td class="text-center">
                                                        <a href="#" class="edit_box click_append1"
                                                            id="{{ $final->id }}" data-toggle="modal"
                                                            data-target="#usersModaledit{{ $final->id }}"><i
                                                                class="feather icon-edit"></i></a>
                                                        <a href="#" class="edit_box click_append1" data-toggle="modal"
                                                            data-target="#usersModalview{{ $final->id }}"><i
                                                                class="feather icon-eye"></i></a>
                                                        <a href="{{ url('deletedepartment/' . $final->id) }}"
                                                            class="trashicon"><i class="feather icon-trash"
                                                                onclick="return confirmDelete()"></i></a>
                                                    </td>
                                                </tr>

                                                <!-- Edit Modal -->
                                                <div class="modal fade" id="usersModaledit{{ $final->id }}"
                                                    tabindex="-1" role="dialog" aria-labelledby="usersModalLabeledit"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog" id="user_list_popup" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="usersModalLabeledit">
                                                                    {{ __('home.update_department') }}</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <form action="{{ url('updatedepartment/' . $final->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                <div class="modal-body">
                                                                    <div class="row">
                                                                        <div class="col-lg-12 p-0 form_list_user">
                                                                            <div class="form-group input_box mb-2">
                                                                                <input type="text" name="department_id"
                                                                                    value="{{ $final->department_id }}"
                                                                                    class="form-control"
                                                                                    value="Id Department">
                                                                            </div>
                                                                            <div class="form-group input_box mb-2">
                                                                                <input type="text" name="departmentName"
                                                                                    value="{{ $final->departmentName }}"
                                                                                    class="form-control"
                                                                                    value="Name department">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="submit"
                                                                        class="btn custom_b_btn btn-primary">{{ __('home.update') }}</button>
                                                                </div>
                                                        </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <!-- View Modal -->
                                                <div class="modal fade" id="usersModalview{{ $final->id }}"
                                                    tabindex="-1" role="dialog" aria-labelledby="usersModalLabelview"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="usersModalLabelview">
                                                                    {{ __('home.view_department') }}</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col-lg-12 p-0">
                                                                        <p><b> {{ __('home.id_department') }}</b>:
                                                                            <span
                                                                                dir="rtl">{{ $final->department_id }}</span>
                                                                        </p>
                                                                        <p><b>{{ __('home.name_department') }}</b>: <span
                                                                                dir="rtl">{{ $final->departmentName }}</span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Create Modal -->
        <div class="modal fade" id="usersModal" tabindex="-1" role="dialog" aria-labelledby="usersModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" id="user_list_popup" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="usersModalLabel">{{ __('home.create_department1') }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ url('/add-department') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-12 p-0 form_list_user">
                                    <div class="form-group input_box mb-2">
                                        <input type="text" name="department_id" class="form-control"
                                            placeholder="{{ __('home.id_department') }}">
                                    </div>
                                    <div class="form-group input_box mb-2">
                                        <input type="text" name="departmentName" class="form-control"
                                            placeholder="{{ __('home.name_department') }}">
                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            {{-- <button type="button" class="btn custom_b_btn btn-primary">Edit</button>
                <button type="button" class="btn custom_b_btn btn-danger" style="    background: #c31414;">Delete</button> --}}
                            <button type="submit" id="btnSubmit" class="btn custom_b_btn btn-primary"
                                style="    background: #008060;">{{ __('home.add') }}</button>
                        </div>
                </div>
                </form>
            </div>
        </div>




    </div>
@endsection


@section('scripts')
    <script>
        $(document).ready(function() {
            $('#addForm').submit(function(event) {
                event.preventDefault();
                var form = $('#addForm')[0];

                var data = new FormData(form);
                $('#btnSubmit').prop("disabled", true);

                $.ajax({
                    type: "POST",
                    url: "{{ url('/add-department') }}",
                    data: data,
                    processData: false,
                    contentType: false,
                    success: function(data) {
                        console.log(data.res);
                        $('#outPut').text(data.res);
                        $('#btnSubmit').prop("disabled", false);
                    },
                    error: function(e) {

                        $('#outPut').text(e.responseText);
                        $('#btnSubmit').prop("disabled", false);
                    },
                });
            });
        });

        function confirmDelete() {
            return confirm('{{ __('home.delete_user') }}');
        }
    </script>
@endsection
