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

                            <li class="breadcrumb-item"><a href="#">Menu</a> </li>
                        </ul>
                    </div>
                    <div class="inner_contents">
                        <form>
                            <div class="form_input">
                                <div class="row">
                                    <div class="col-sm-1 form_input_info">
                                        <div class="radius_input">
                                            <label>Id</label>
                                            <input type="text" name="">
                                        </div>
                                    </div>
                                    <div class="col-sm-2 form_input_info">
                                        <div class="radius_input">
                                            <label>Department</label>
                                            <input type="text" name="">
                                        </div>
                                    </div>
                                    <div class="col-sm-2 form_input_info">
                                        <div class="radius_input">
                                            <label>Month</label>
                                            <select>
                                                <option>Select Month</option>
                                                <option>January</option>
                                                <option>February</option>
                                                <option>March</option>
                                                <option>April</option>
                                                <option>May</option>
                                                <option>June</option>
                                                <option>July</option>
                                                <option>August</option>
                                                <option>September</option>
                                                <option>October</option>
                                                <option>November</option>
                                                <option>December</option>
                                            </select>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 infobox">
                            <div class="inner_infobox">


                                <div class="add_rate_table table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th style="width:100px;">Id</th>
                                                <th>Name </th>
                                                <th>Mother Name</th>
                                                <th>Private Number </th>
                                                <th>Kind File</th>
                                                <th>Money</th>
                                                <th>Tax</th>
                                                <th>Tatol (money – tax) </th>
                                                <th class="text-center" style="width:80px;">Action</th>
                                            </tr>
                                        </thead>

                                        <tbody class="input_disable">
                                            <tr>
                                                <td><input disabled type="text" placeholder="" name=""></td>
                                                <td><input type="text" disabled placeholder="" name=""></td>
                                                <td><input type="text" disabled placeholder="" name=""></td>
                                                <td><input type="text" disabled placeholder="" name=""></td>
                                                <td><input type="text" disabled placeholder="" name=""></td>
                                                <td><input type="text" placeholder="" name=""></td>
                                                <td><input type="text" placeholder="" name=""></td>
                                                <td><input type="text" placeholder="" name=""></td>
                                                <td class="text-center">
                                                    <a href="#" class="edit_box "><i
                                                            class="feather icon-plus"></i></a>
                                                    <a href="#" class="trashicon"><i
                                                            class="feather icon-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input disabled type="text" placeholder="" name=""></td>
                                                <td><input type="text" disabled placeholder="" name=""></td>
                                                <td><input type="text" disabled placeholder="" name=""></td>
                                                <td><input type="text" disabled placeholder="" name=""></td>
                                                <td><input type="text" disabled placeholder="" name=""></td>
                                                <td><input type="text" placeholder="" name=""></td>
                                                <td><input type="text" placeholder="" name=""></td>
                                                <td><input type="text" placeholder="" name=""></td>
                                                <td class="text-center">
                                                    <a href="#" class="edit_box "><i
                                                            class="feather icon-plus"></i></a>
                                                    <a href="#" class="trashicon"><i
                                                            class="feather icon-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input disabled type="text" placeholder="" name=""></td>
                                                <td><input type="text" disabled placeholder="" name=""></td>
                                                <td><input type="text" disabled placeholder="" name=""></td>
                                                <td><input type="text" disabled placeholder="" name=""></td>
                                                <td><input type="text" disabled placeholder="" name=""></td>
                                                <td><input type="text" placeholder="" name=""></td>
                                                <td><input type="text" placeholder="" name=""></td>
                                                <td><input type="text" placeholder="" name=""></td>
                                                <td class="text-center">
                                                    <a href="#" class="edit_box "><i
                                                            class="feather icon-plus"></i></a>
                                                    <a href="#" class="trashicon"><i
                                                            class="feather icon-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input disabled type="text" placeholder="" name=""></td>
                                                <td><input type="text" disabled placeholder="" name=""></td>
                                                <td><input type="text" disabled placeholder="" name=""></td>
                                                <td><input type="text" disabled placeholder="" name=""></td>
                                                <td><input type="text" disabled placeholder="" name=""></td>
                                                <td><input type="text" placeholder="" name=""></td>
                                                <td><input type="text" placeholder="" name=""></td>
                                                <td><input type="text" placeholder="" name=""></td>
                                                <td class="text-center">
                                                    <a href="#" class="edit_box "><i
                                                            class="feather icon-plus"></i></a>
                                                    <a href="#" class="trashicon"><i
                                                            class="feather icon-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input disabled type="text" placeholder="" name=""></td>
                                                <td><input type="text" disabled placeholder="" name=""></td>
                                                <td><input type="text" disabled placeholder="" name=""></td>
                                                <td><input type="text" disabled placeholder="" name=""></td>
                                                <td><input type="text" disabled placeholder="" name=""></td>
                                                <td><input type="text" placeholder="" name=""></td>
                                                <td><input type="text" placeholder="" name=""></td>
                                                <td><input type="text" placeholder="" name=""></td>
                                                <td class="text-center">
                                                    <a href="#" class="edit_box "><i
                                                            class="feather icon-plus"></i></a>
                                                    <a href="#" class="trashicon"><i
                                                            class="feather icon-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input disabled type="text" placeholder="" name=""></td>
                                                <td><input type="text" disabled placeholder="" name=""></td>
                                                <td><input type="text" disabled placeholder="" name=""></td>
                                                <td><input type="text" disabled placeholder="" name=""></td>
                                                <td><input type="text" disabled placeholder="" name=""></td>
                                                <td><input type="text" placeholder="" name=""></td>
                                                <td><input type="text" placeholder="" name=""></td>
                                                <td><input type="text" placeholder="" name=""></td>
                                                <td class="text-center">
                                                    <a href="#" class="edit_box "><i
                                                            class="feather icon-plus"></i></a>
                                                    <a href="#" class="trashicon"><i
                                                            class="feather icon-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input disabled type="text" placeholder="" name=""></td>
                                                <td><input type="text" disabled placeholder="" name=""></td>
                                                <td><input type="text" disabled placeholder="" name=""></td>
                                                <td><input type="text" disabled placeholder="" name=""></td>
                                                <td><input type="text" disabled placeholder="" name=""></td>
                                                <td><input type="text" placeholder="" name=""></td>
                                                <td><input type="text" placeholder="" name=""></td>
                                                <td><input type="text" placeholder="" name=""></td>
                                                <td class="text-center">
                                                    <a href="#" class="edit_box "><i
                                                            class="feather icon-plus"></i></a>
                                                    <a href="#" class="trashicon"><i
                                                            class="feather icon-trash"></i></a>
                                                </td>
                                            </tr>



                                        </tbody>
                                        <tfoot class="input_disable">
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td class="text-right"><b style="font-size: 17px;">Totals:</b></td>
                                                <td><input type="text" placeholder="" name=""></td>
                                                <td><input type="text" placeholder="" name=""></td>
                                                <td><input type="text" placeholder="" name=""></td>
                                                <td></td>
                                            </tr>
                                        </tfoot>

                                    </table>
                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="text-right tables_btns">
                        <ul>
                            <li><a href="#" class="btn-info">edite</a></li>
                            <li><a href="#" class="btn-danger">delete</a></li>
                            <li><a href="#" class="btn-primary">add</a></li>
                            <li><a href="#" class="edit_box">print</a></li>
                            <li><a href="#" class="btn-info">csv</a></li>
                            <li><a href="#" class="edit_box">pdf</a></li>
                            <li><a href="#" class="edit_box ">excel</a></li>
                        </ul>
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
                        <h5 class="modal-title" id="usersModalLabel">Create Record</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6 p-0 pr-2 form_list_user">
                                <div class="form-group input_box mb-2">
                                    <input type="text" class="form-control" placeholder="Id">
                                </div>
                            </div>
                            <div class="col-lg-6 p-0 form_list_user">
                                <div class="form-group input_box mb-2">
                                    <input type="text" class="form-control" placeholder="Name">
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
                                    <input type="text" class="form-control" placeholder="Private Number   ">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 p-0 pr-2 form_list_user">
                                <div class="form-group input_box mb-2">
                                    <input type="text" class="form-control" placeholder=" Kind File">
                                </div>
                            </div>
                            <div class="col-lg-6 p-0 form_list_user">
                                <div class="form-group input_box mb-2">
                                    <input type="text" class="form-control" placeholder="Department">
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
                        <button type="button" class="btn custom_b_btn btn-primary">Edit</button>
                        <button type="button" class="btn custom_b_btn btn-danger"
                            style="    background: #c31414;">Delete</button>
                        <button type="button" class="btn custom_b_btn btn-primary"
                            style="    background: #008060;">Add</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Edit Modal -->
        <div class="modal fade" id="usersModaledit" tabindex="-1" role="dialog" aria-labelledby="usersModalLabeledit"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
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
                                    <input type="text" class="form-control"
                                        placeholder="Computer Science and Engineering">
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
        </div>

        <!-- View Modal -->
        <div class="modal fade" id="usersModalview" tabindex="-1" role="dialog" aria-labelledby="usersModalLabelview"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="usersModalLabelview">View Record</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12 p-0">
                                <p><b> Id</b>: <span>#012365</span></p>
                                <p><b>Name</b>: <span>Asad Khalid</span></p>
                                <p><b>Mother Name</b>: <span></span></p>
                                <p><b>Private Number</b>: <span>+92 3028639558</span></p>
                                <p><b>Kind File</b>: <span>Microsoft Visio</span></p>
                                <p><b>Department</b>: <span>Computer Science and Engineering</span></p>
                                <p><b>Note</b>: <span>Best Microsoft Visio</span></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
