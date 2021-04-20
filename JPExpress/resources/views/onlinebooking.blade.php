@extends('layouts.master')
@section('css')


@endsection
@section('subheader')
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Details-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Book Online</h5>
                <!--end::Title-->
                <!--begin::Separator-->
                <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-5 bg-gray-200"></div>
                <!--end::Separator-->
                <!--begin::Search Form-->
                <div class="d-flex align-items-center" id="kt_subheader_search">


                </div>
                <!--end::Search Form-->
                <!--begin::Group Actions-->
                <div class="d-flex- align-items-center flex-wrap mr-2 d-none" id="kt_subheader_group_actions">
                    <div class="text-dark-50 font-weight-bold">
                        <span id="kt_subheader_group_selected_rows">23</span>Selected:
                    </div>
                    <div class="d-flex ml-6">
                        <div class="dropdown mr-2" id="kt_subheader_group_actions_status_change">
                            <button type="button"
                                    class="btn btn-light-primary font-weight-bolder btn-sm dropdown-toggle"
                                    data-toggle="dropdown">Update Status
                            </button>
                            <div class="dropdown-menu p-0 m-0 dropdown-menu-sm">
                                <ul class="navi navi-hover pt-3 pb-4">
                                    <li class="navi-header font-weight-bolder text-uppercase text-primary font-size-lg pb-0">
                                        Change status to:
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link" data-toggle="status-change" data-status="1">
																<span class="navi-text">
																	<span
                                                                        class="label label-light-success label-inline font-weight-bold">Approved</span>
																</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link" data-toggle="status-change" data-status="2">
																<span class="navi-text">
																	<span
                                                                        class="label label-light-danger label-inline font-weight-bold">Rejected</span>
																</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link" data-toggle="status-change" data-status="3">
																<span class="navi-text">
																	<span
                                                                        class="label label-light-warning label-inline font-weight-bold">Pending</span>
																</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link" data-toggle="status-change" data-status="4">
																<span class="navi-text">
																	<span
                                                                        class="label label-light-info label-inline font-weight-bold">On Hold</span>
																</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <button class="btn btn-light-success font-weight-bolder btn-sm mr-2"
                                id="kt_subheader_group_actions_fetch" data-toggle="modal"
                                data-target="#kt_datatable_records_fetch_modal">Fetch Selected
                        </button>
                        <button class="btn btn-light-danger font-weight-bolder btn-sm mr-2"
                                id="kt_subheader_group_actions_delete_all">Delete All
                        </button>
                    </div>
                </div>
                <!--end::Group Actions-->
            </div>
            <!--end::Details-->
            <!--begin::Toolbar-->
            <div class="d-flex align-items-center">
                <!--begin::Button-->
                <a href="#" class=""></a>
                <!--end::Button-->
                <!--begin::Button-->
                <a href="custom/apps/user/add-user.html"
                   class="btn btn-light-primary font-weight-bold btn-sm px-4 font-size-base ml-2">Add User</a>
                <!--end::Button-->
                <!--begin::Dropdown-->
                <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions"
                     data-placement="left">
                    <a href="#" class="btn btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<span class="svg-icon svg-icon-success svg-icon-2x">
												<!--begin::Svg Icon | path:assets/media/svg/icons/Files/File-plus.svg-->
												<svg xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                     height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<polygon points="0 0 24 0 24 24 0 24"/>
														<path
                                                            d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z"
                                                            fill="#000000" fill-rule="nonzero" opacity="0.3"/>
														<path
                                                            d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z"
                                                            fill="#000000"/>
													</g>
												</svg>
                                                <!--end::Svg Icon-->
											</span>
                    </a>
                    <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                        <!--begin::Naviigation-->
                        <ul class="navi">
                            <li class="navi-header font-weight-bold py-5">
                                <span class="font-size-lg">Add New:</span>
                                <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip"
                                   data-placement="right" title="Click to learn more..."></i>
                            </li>
                            <li class="navi-separator mb-3 opacity-70"></li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
														<span class="navi-icon">
															<i class="flaticon2-shopping-cart-1"></i>
														</span>
                                    <span class="navi-text">Order</span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
														<span class="navi-icon">
															<i class="navi-icon flaticon2-calendar-8"></i>
														</span>
                                    <span class="navi-text">Members</span>
                                    <span class="navi-label">
															<span
                                                                class="label label-light-danger label-rounded font-weight-bold">3</span>
														</span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
														<span class="navi-icon">
															<i class="navi-icon flaticon2-telegram-logo"></i>
														</span>
                                    <span class="navi-text">Project</span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
														<span class="navi-icon">
															<i class="navi-icon flaticon2-new-email"></i>
														</span>
                                    <span class="navi-text">Record</span>
                                    <span class="navi-label">
															<span
                                                                class="label label-light-success label-rounded font-weight-bold">5</span>
														</span>
                                </a>
                            </li>
                            <li class="navi-separator mt-3 opacity-70"></li>
                            <li class="navi-footer pt-5 pb-4">
                                <a class="btn btn-light-primary font-weight-bolder btn-sm" href="#">More options</a>
                                <a class="btn btn-clean font-weight-bold btn-sm d-none" href="#" data-toggle="tooltip"
                                   data-placement="right" title="Click to learn more...">Learn more</a>
                            </li>
                        </ul>
                        <!--end::Naviigation-->
                    </div>
                </div>
                <!--end::Dropdown-->
            </div>
            <!--end::Toolbar-->
        </div>
    </div>
    <!--end::Subheader-->
@endsection
@section('content')

    <!--begin::Row-->
    <div class="row">
        <div class="col-md-12">
            <div class="card card-custom mt-5">
                <div class="card-body">
                    <h3 class="card-title">
                        Get A Online Booking Here...
                    </h3>

                </div>


                <!--begin::Form-->
                <form class="form">
                    <div class="card-body">



                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleSelectd">Type</label>
                                    <select class="form-control" id="exampleSelectd">
                                        <option>International</option>
                                        <option>Local</option>

                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleSelectd">Service Type</label>
                                    <select class="form-control" id="exampleSelectd">
                                        <option>Export Service 1</option>
                                        <option>Export Service 2</option>
                                        <option>Export Service 3</option>
                                        <option>Export Service 4</option>
                                        <option>Export Service 5</option>
                                    </select>
                                </div>
                            </div>



                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleSelectd">Object Type</label>
                                    <select class="form-control" id="exampleSelectd">
                                        <option>Document 1</option>
                                        <option>Document 2</option>
                                        <option>Document 3</option>
                                        <option>Document 4</option>
                                        <option>Document 5</option>
                                    </select>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleSelectd">Width</label>
                                    <input type="text" class="form-control form-control-sm" placeholder="Width"/>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleSelectd">Height</label>
                                    <input type="text" class="form-control form-control-sm" placeholder="Height"/>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleSelectd">Length</label>
                                    <input type="text" class="form-control form-control-sm" placeholder="Length"/>
                                </div>
                            </div>
                        </div>



                        <div class="row">
                            <div class="col-md-4">
                                <label>Weight(kg)</label>
                                <input type="text" class="form-control form-control-sm" placeholder="Weight"/>
                            </div>

                            <div class="col-md-4">
                                <label>Shipment Details</label>
                                <input type="text" class="form-control form-control-sm" placeholder="Shipment Details"/>
                            </div>

                            <div class="col-md-4">
                                <label>Value</label>
                                <input type="text" class="form-control form-control-sm" placeholder="Value"/>
                            </div>


                        </div>


                    </div>

            </div>
        </div>
    </div>
    <!--end::Row-->
    <!--begin::Row-->
    <div class="row">
        <div class="col-md-6">
            <div class="card card-custom mt-5">
                <div class="card-body">
                    <h3 class="card-title">
                        Shipper
                    </h3>
                </div>


                <!--begin::Form-->

                    <div class="card-body">


                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleSelectd">Full Name</label>
                                    <input type="text" class="form-control form-control-sm" placeholder="Full Name"/>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleSelectd">Company Name</label>
                                    <input type="text" class="form-control form-control-sm" placeholder="Company Name"/>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleSelectd">Mobile</label>
                                    <input type="text" class="form-control form-control-sm" placeholder="Mobile"/>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleSelectd">Email</label>
                                    <input type="email" class="form-control form-control-sm" placeholder="Email"/>
                                </div>
                            </div>

                        </div>


                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleSelectd">Zip</label>
                                    <input type="text" class="form-control form-control-sm" placeholder="Zip"/>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleSelectd">City</label>
                                    <input type="text" class="form-control form-control-sm" placeholder="City"/>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleSelectd">State</label>
                                    <input type="text" class="form-control form-control-sm" placeholder="State"/>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label>Address</label>
                                <textarea class="form-control" rows="3" name="address" placeholder="Address"></textarea>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleSelectd">Country</label>
                                    <select class="form-control" id="exampleSelectd">
                                        <option>Country 1</option>
                                        <option>Country 2</option>
                                        <option>Country 3</option>
                                        <option>Country 4</option>
                                        <option>Country 5</option>
                                    </select>
                                </div>
                            </div>
                        </div>


                    </div>

            </div>
        </div>


        <div class="col-md-6">
            <div class="card card-custom mt-5">
                <div class="card-body">
                    <h3 class="card-title">
                        Reciver
                    </h3>

                </div>


                <!--begin::Form-->

                <div class="card-body">


                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleSelectd">Full Name</label>
                                <input type="text" class="form-control form-control-sm" placeholder="Full Name"/>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleSelectd">Company Name</label>
                                <input type="text" class="form-control form-control-sm" placeholder="Company Name"/>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleSelectd">Mobile</label>
                                <input type="text" class="form-control form-control-sm" placeholder="Mobile"/>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleSelectd">Email</label>
                                <input type="email" class="form-control form-control-sm" placeholder="Email"/>
                            </div>
                        </div>

                    </div>


                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleSelectd">Zip</label>
                                <input type="text" class="form-control form-control-sm" placeholder="Zip"/>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleSelectd">City</label>
                                <input type="text" class="form-control form-control-sm" placeholder="City"/>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleSelectd">State</label>
                                <input type="text" class="form-control form-control-sm" placeholder="State"/>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label>Address</label>
                            <textarea class="form-control" rows="3" name="address" placeholder="Address"></textarea>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleSelectd">Country</label>
                                <select class="form-control" id="exampleSelectd">
                                    <option>Country 1</option>
                                    <option>Country 2</option>
                                    <option>Country 3</option>
                                    <option>Country 4</option>
                                    <option>Country 5</option>
                                </select>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>
<div class="row">
    <div class="col-md-12">
        <div class="card-footer mt-5">
            <button type="submit" class="btn btn-success mr-2">Submit</button>
            <button type="reset" class="btn btn-secondary border-danger mr-2">Cancel</button>
        </div>
        </form>
        <!--end::Form-->
    </div>
</div>


    <!--end::Row-->

@endsection
@section('js')






@endsection
