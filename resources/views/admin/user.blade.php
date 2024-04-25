@extends('admin.layout.admin')
@section('content')
    <div class="main_page" dir="{{ App::isLocale('ar') ? 'rtl' : 'ltr' }}">

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

                            <li class="breadcrumb-item"><a href="#">{{ __('home.user') }}</a> </li>
                        </ul>
                    </div>
                    <div class="row g-3 mb-3 row-deck">

                    </div>
                    <div class="row">
                        <div class="col-sm-12 infobox">
                            <div class="inner_infobox">
                                <div class="import_cod display_flex" id="add_rate">
                                    <h4 class="d-inline mb-0">{{ __('home.user_list') }}</h4>
                                    <a href="#" class="btn btn-primary custom_b_btn" data-toggle="modal"
                                        data-target="#usersModal">{{ __('home.create_user') }}</a>
                                </div>

                                <div class="add_rate_table table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th style="width:50px;">{{ __('home.s_no') }}</th>
                                                <th>{{ __('home.name') }}</th>
                                                <th>{{ __('home.email_addrs') }}</th>
                                                <th>{{ __('home.Phone') }}</th>
                                                <th class="text-center" style="width:100px;">{{ __('home.action') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($user as $final)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $final->name }}</td>
                                                    <td>{{ $final->email }}</td>
                                                    <td>{{ $final->phone }}</td>
                                                    <td class="text-center">
                                                        <a href="#" id="editbtn" class="edit_box click_append1"
                                                            data-toggle="modal" data-id="{{ $final->id }}"
                                                            data-target="#usersModaledit{{ $final->id }}"><i
                                                                class="feather icon-edit"></i></a>
                                                        <a href="#" class="edit_box click_append1" data-toggle="modal"
                                                            data-target="#usersModalview{{ $final->id }}"><i
                                                                class="feather icon-eye"></i></a>
                                                        <a href="{{ url('deleteuser/' . $final->id) }}" class="trashicon "
                                                            onclick="return confirmDelete()"><i
                                                                class="feather icon-trash"></i></a>
                                                    </td>
                                                </tr>
                                                <div class="modal fade" id="usersModaledit{{ $final->id }}"
                                                    tabindex="-1" role="dialog" aria-labelledby="usersModalLabel"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog" id="user_list_popup" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="usersModalLabeledit">
                                                                    {{ __('home.update_user') }}
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <form id="editFormId"
                                                                action="{{ url('updateuser/' . $final->id) }}"
                                                                method="post" enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="modal-body">
                                                                    <div class="row">
                                                                        <div class="col-lg-12 p-0 form_list_user">
                                                                            <div class="form-group input_box mb-2">
                                                                                <input type="hidden" name="id"
                                                                                    id="id"
                                                                                    value="{{ $final->id }}">
                                                                                <input type="text" name="name"
                                                                                    id="name" class="form-control"
                                                                                    placeholder="{{ __('home.entr_name') }}"
                                                                                    value="{{ $final->name }}">
                                                                            </div>
                                                                            <div class="form-group input_box mb-2">
                                                                                <input type="phone" name="phone"
                                                                                    id="phone" class="form-control"
                                                                                    placeholder="{{ __('home.entr_phone') }}"
                                                                                    value="{{ $final->email }}">
                                                                            </div>
                                                                            <div class="form-group input_box mb-2">
                                                                                <input type="email" name="email"
                                                                                    id="email"
                                                                                    placeholder="{{ __('home.email_addrs') }}"
                                                                                    class="form-control"
                                                                                    value="{{ $final->phone }}">
                                                                            </div>
                                                                            {{-- <div class="form-group input_box mb-2">
                                                            <input type="password" class="form-control" value="password">
                                                        </div> --}}
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
                                                                    {{ __('home.view_user') }}
                                                                </h5>
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col-lg-12 p-0">
                                                                        <p><b>{{ __('home.name') }}</b>:
                                                                            <span>{{ $final->name }}</span>
                                                                        </p>
                                                                        <p><b>{{ __('home.Phone') }}</b>:
                                                                            <span>{{ $final->phone }}</span>
                                                                        </p>
                                                                        <p><b>{{ __('home.email_addrs') }}</b>:
                                                                            <span>{{ $final->email }}</span>
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
                        <h5 class="modal-title" id="usersModalLabel">{{ __('home.create_user1') }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ url('/storenew') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-12 p-0 form_list_user">
                                    <div class="form-group input_box mb-2">
                                        <input type="text" class="form-control" name="name"
                                            placeholder="{{ __('home.entr_name') }}">
                                    </div>
                                    <div class="form-group input_box mb-2">
                                        <input type="phone" class="form-control" name="phone"
                                            placeholder="{{ __('home.entr_phone') }}">
                                    </div>
                                    <div class="form-group input_box mb-2">
                                        <input type="email" class="form-control" name="email"
                                            placeholder="{{ __('home.email_addrs') }}">
                                    </div>
                                    <div class="form-group input_box mb-2">
                                        <input type="password" name="password" class="form-control"
                                            placeholder="{{ __('home.password') }}">
                                    </div>
                                    <div class="form-group input_box mb-2">
                                        <input class="form-control" type="file" name="image" style="height:40px">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn custom_b_btn btn-primary">{{ __('home.create') }}</button>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Edit Modal -->
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            $('#editbtn').on('click', function() {
                $('#usersModalEdit').modal('show');
                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();
                console.log(data);
                $("#id").val(data[0]);
                $("#name").val(data[1]);
                $("#email").val(data[2]);
                $("#phone").val(data[3]);
                // $("#password").val(data[4]);
            });
        });

        function confirmDelete() {
            return confirm('{{ __('home.delete_user') }}');
        }
    </script>
@endsection
