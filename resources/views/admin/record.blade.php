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

                            <li class="breadcrumb-item"><a href="#">{{ __('home.records') }}</a> </li>
                        </ul>
                    </div>
                    <div class="row g-3 mb-3 row-deck">

                    </div>
                    <div class="row">
                        <div class="col-sm-12 infobox">
                            <div class="inner_infobox">
                                <div class="import_cod display_flex" id="add_rate">
                                    <h4 class="d-inline mb-0">{{ __('home.record_list') }}</h4>
                                    <a href="#" class="btn btn-primary custom_b_btn" data-toggle="modal"
                                        data-target="#usersModal">{{ __('home.create_record') }}</a>
                                </div>

                                <div class="add_rate_table table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>{{ __('home.id') }}</th>
                                                <th>{{ __('home.name') }} </th>
                                                <th>{{ __('home.mother_name') }}</th>
                                                <th>{{ __('home.private_number') }} </th>
                                                <th>{{ __('home.kind_file') }}</th>
                                                <th>{{ __('home.department') }}</th>
                                                <th>{{ __('home.note') }}</th>
                                                <th class="text-center" style="width:100px;">{{ __('home.action') }}</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($record as $final)
                                                <tr>
                                                    <td class="dtr-control sorting_1" tabindex="0">
                                                        {{ $final->id_record }}
                                                    </td>
                                                    <td>{{ $final->name }}</td>
                                                    <td>{{ $final->motherName }}</td>
                                                    <td>{{ $final->privateNumber }}</td>
                                                    <td><input type="text" class="kind_file" name=""
                                                            value="{{ $final->kindFile }}"></td>
                                                    <td>{{ $final->department }}</td>
                                                    <td>{{ $final->note }}</td>
                                                    <td class="text-center">
                                                        <a href="#" id="editbtn" class="edit_box click_append1"
                                                            data-toggle="modal" data-id="{{ $final->id }}"
                                                            data-target="#usersModaledit{{ $final->id }}"><i
                                                                class="feather icon-edit"></i></a>
                                                        <a href="#" class="edit_box click_append1" data-toggle="modal"
                                                            data-target="#usersModalview{{ $final->id }}"><i
                                                                class="feather icon-eye"></i></a>
                                                        <a href="{{ url('deleterecord/' . $final->id) }}"
                                                            class="trashicon"><i class="feather icon-trash"></i></a>
                                                    </td>
                                                </tr>
                                                <!-- Edit Modal -->
                                                <div class="modal fade" id="usersModaledit{{ $final->id }}"
                                                    tabindex="-1" role="dialog" aria-labelledby="usersModalLabeledit"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="usersModalLabeledit">
                                                                    {{ __('home.update_record') }}</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <form action="{{ url('updaterecord/' . $final->id) }}"
                                                                method="POST" enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="modal-body">
                                                                    <div class="row">
                                                                        <div class="col-lg-6 p-0 pr-2 form_list_user">
                                                                            <div class="form-group input_box mb-2">
                                                                                <input type="text" name="id_record"
                                                                                    class="form-control"
                                                                                    value="{{ $final->id_record }}"
                                                                                    placeholder="#012365">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6 p-0 form_list_user">
                                                                            <div class="form-group input_box mb-2">
                                                                                <input type="text" name="name"
                                                                                    class="form-control"
                                                                                    value="{{ $final->name }}"
                                                                                    placeholder="{{ __('home.entr_name') }}">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-lg-6 p-0 pr-2 form_list_user">
                                                                            <div class="form-group  input_box mb-2">
                                                                                <input type="text" name="motherName"
                                                                                    class="form-control"
                                                                                    value="{{ $final->motherName }}"
                                                                                    placeholder="{{ __('home.mother_name') }}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6 p-0 form_list_user">
                                                                            <div class="form-group input_box mb-2">
                                                                                <input type="text" name="privateNumber"
                                                                                    class="form-control"
                                                                                    value="{{ $final->privateNumber }}"
                                                                                    placeholder="{{ __('home.entr_phone') }}">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-lg-6 p-0 pr-2 form_list_user">
                                                                            <div class="form-group input_box mb-2">
                                                                                <input type="text" name="kindFile"
                                                                                    class="form-control"
                                                                                    value="{{ $final->kindFile }}"
                                                                                    placeholder="{{ __('home.kind_file') }}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6 p-0 form_list_user">
                                                                            <div class="form-group input_box mb-2">
                                                                                <input type="text" name="department"
                                                                                    class="form-control"
                                                                                    value="{{ $final->department }}"
                                                                                    placeholder="{{ __('home.department') }}">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-lg-12 p-0 form_list_user">
                                                                            <div class="form-group input_box mb-2">
                                                                                <textarea style="height:101px;" name="note" placeholder="{{ __('home.note') }}" class="form-control">{{ $final->note }}</textarea>
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
                                                                    {{ __('home.view_record') }}</h5>
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col-lg-12 p-0">
                                                                        <p><b> {{ __('home.id') }}</b>:
                                                                            <span>{{ $final->id_record }}</span>
                                                                        </p>
                                                                        <p><b>{{ __('home.name') }}</b>:
                                                                            <span>{{ $final->name }}</span>
                                                                        </p>
                                                                        <p><b>{{ __('home.mother_name') }}</b>:
                                                                            <span>{{ $final->motherName }}</span>
                                                                        </p>
                                                                        <p><b>{{ __('home.private_number') }}</b>:
                                                                            <span>{{ $final->privateNumber }}</span>
                                                                        </p>
                                                                        <p><b>{{ __('home.kind_file') }}</b>:
                                                                            <span>{{ $final->kindFile }}</span>
                                                                        </p>
                                                                        <p><b>{{ __('home.department') }}</b>:
                                                                            <span>{{ $final->department }}</span>
                                                                        </p>
                                                                        <p><b>{{ __('home.note') }}</b>:
                                                                            <span>{{ $final->note }}</span>
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
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="usersModalLabel">{{ __('home.create_record1') }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ url('/add-record') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-6 p-0 pr-2 form_list_user">
                                    <div class="form-group input_box mb-2">
                                        <input type="text" class="form-control" name="id_record"
                                            placeholder="{{ __('home.id') }}">
                                    </div>
                                </div>
                                <div class="col-lg-6 p-0 form_list_user">
                                    <div class="form-group input_box mb-2">
                                        <input type="text" class="form-control" name="name"
                                            placeholder="{{ __('home.name') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 p-0 pr-2 form_list_user">
                                    <div class="form-group input_box mb-2">
                                        <input type="text" class="form-control" name="motherName"
                                            placeholder=" {{ __('home.mother_name') }}">
                                    </div>
                                </div>
                                <div class="col-lg-6 p-0 form_list_user">
                                    <div class="form-group input_box mb-2">
                                        <input type="text" class="form-control" name="privateNumber"
                                            placeholder="{{ __('home.private_number') }}   ">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 p-0 pr-2 form_list_user">
                                    <div class="form-group input_box mb-2">
                                        <input type="text" class="form-control" name="kindFile"
                                            placeholder=" {{ __('home.kind_file') }}">
                                    </div>
                                </div>
                                <div class="col-lg-6 p-0 form_list_user">
                                    <div class="form-group input_box mb-2">
                                        <input type="text" class="form-control" name="department"
                                            placeholder="{{ __('home.department') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 p-0 form_list_user">
                                    <div class="form-group input_box mb-2">
                                        <textarea style="height:101px;" name="note" placeholder="{{ __('home.note') }}" class="form-control"></textarea>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="modal-footer">
                            {{-- <button type="button" class="btn custom_b_btn btn-primary">Edit</button> --}}
                            {{-- <button type="button" class="btn custom_b_btn btn-danger" style="    background: #c31414;">Delete</button> --}}
                            <button type="submit" class="btn custom_b_btn btn-primary" style="    background: #008060;"
                                id="btnSubmit">{{ __('home.add') }}</button>
                        </div>
                </div>
                </form>
            </div>
        </div>

        {{-- <!-- Edit Modal -->
    <div class="modal fade" id="usersModaledit" tabindex="-1" role="dialog" aria-labelledby="usersModalLabeledit" aria-hidden="true">
      <div class="modal-dialog"  role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="usersModalLabeledit">Update Record</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          <div class="row">
              <div class="col-lg-6 p-0 pr-2 form_list_user">
                  <div class="form-group input_box mb-2">
                      <input type="text" class="form-control" placeholder="#012365">
                  </div>
              </div>
              <div class="col-lg-6 p-0 form_list_user">
                  <div class="form-group input_box mb-2">
                      <input type="text" class="form-control" placeholder="Asad Khalid">
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-lg-6 p-0 pr-2 form_list_user">
                  <div class="form-group input_box mb-2">
                      <input type="text" class="form-control" placeholder=" Mother Name">
                  </div>
              </div>
              <div class="col-lg-6 p-0 form_list_user">
                  <div class="form-group input_box mb-2">
                      <input type="text" class="form-control" placeholder="+92 3028639558">
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-lg-6 p-0 pr-2 form_list_user">
                  <div class="form-group input_box mb-2">
                      <input type="text" class="form-control" placeholder="Microsoft Visio">
                  </div>
              </div>
              <div class="col-lg-6 p-0 form_list_user">
                  <div class="form-group input_box mb-2">
                      <input type="text" class="form-control" placeholder="Computer Science and Engineering">
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-lg-12 p-0 form_list_user">
                  <div class="form-group input_box mb-2">
                      <textarea style="height:101px;" placeholder="Note" class="form-control"></textarea>
                  </div>
              </div>

          </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn custom_b_btn btn-primary">Update</button>
          </div>
        </div>
      </div>
    </div> --}}


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
                    url: "{{ url('/add-record') }}",
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
    </script>
@endsection
