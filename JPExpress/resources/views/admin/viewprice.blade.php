@extends('layouts.master')
@section('css')

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">

    <link href="admintemplate/assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css"/>

@endsection
@section('subheader')
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Details-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">View Price</h5>
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


    <div class="container">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
    @endif
    <!--begin::Advance Table Widget 10-->
        <div class="card card-custom gutter-b">
            <!--begin::Header-->
            <div class="card-header border-0 py-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label font-weight-bolder text-dark">Traveler's List</span>
                    <span class="text-muted mt-3 font-weight-bold font-size-sm"></span>
                </h3>
                <div class="card-toolbar">
                    <a href="createprice" class="btn btn-info font-weight-bolder font-size-sm">Create New
                        Price</a>
                </div>
            </div>
            <!--end::Header-->
            <div class="card-body py-0">
                <!--begin::Table-->
                <div class="table-responsive">
                    <table class="table table-head-custom table-vertical-center" id="travelertable">
                        <thead>
                        <tr class="text-left">
                            <th class="pl-0" style="width: 30px">
                                <label class="checkbox checkbox-lg checkbox-inline mr-2">
                                    <input type="checkbox" value="1"/>
                                    <span></span>
                                </label>
                            </th>
                            <th class="pl-0" >Price id</th>
                            <th>From</th>
                            <th>To</th>
                            <th>Service Type</th>
                            <th>Weight(Kg)</th>
                            <th>Price</th>
                            <th class="pr-0 text-right">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($price as $prices)
                            <tr>
                                <td class="pl-0 py-6">
                                    <label class="checkbox checkbox-lg checkbox-inline">
                                        <input type="checkbox" value="1"/>
                                        <span></span>
                                    </label>
                                </td>
                                <td class="pl-0">
                                    <a href="#"
                                       class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">{{$prices->id}}</a>
                                </td>
                                <td>
                                    <span class="label label-lg label-light-primary label-inline">{{$prices->from}}</span>
                                </td>

                                <td>
                                    <span class="label label-lg label-light-primary label-inline">{{$prices->to}}</span>
                                </td>

                                <td class="pl-0">
                                    <a href="#"
                                       class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">{{$prices->service_type}}</a>
                                </td>
                                <td class="pl-0">
                                    <a href="#"
                                       class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">{{$prices->weight_kg}}</a>
                                </td>
                                <td class="pl-0">
                                    <a href="#"
                                       class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">{{$prices->price}}</a>
                                </td>


                                <td class="pr-0 text-right">


                                    <a data-toggle="modal" data-target="#useredit"
                                       data-priceid="{{$prices->id}}" data-from="{{$prices->from}}" data-to="{{$prices->to}}" data-service_type="{{$prices->service_type}}" data-weight_kg="{{$prices->weight_kg}}" data-price="{{$prices->price}}"
                                       class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
																<span class="svg-icon svg-icon-md svg-icon-primary">
																	<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg"
                                                                         xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                         width="24px" height="24px" viewBox="0 0 24 24"
                                                                         version="1.1">
																		<g stroke="none" stroke-width="1" fill="none"
                                                                           fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24"/>
																			<path
                                                                                d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"
                                                                                fill="#000000" fill-rule="nonzero"
                                                                                transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)"/>
																			<path
                                                                                d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"
                                                                                fill="#000000" fill-rule="nonzero"
                                                                                opacity="0.3"/>
																		</g>
																	</svg>
                                                                    <!--end::Svg Icon-->
																</span>
                                    </a>
                                    <a class="btn btn-icon btn-light btn-hover-primary btn-sm" data-toggle="modal"
                                       data-target="#DangerModal" data-priceid="{{$prices->id}}" data-from="{{$prices->from}}" data-to="{{$prices->to}}" data-service_type="{{$prices->service_type}}"
                                      >
																<span class="svg-icon svg-icon-md svg-icon-primary">
																	<!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg"
                                                                         xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                         width="24px" height="24px" viewBox="0 0 24 24"
                                                                         version="1.1">
																		<g stroke="none" stroke-width="1" fill="none"
                                                                           fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24"/>
																			<path
                                                                                d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                                                fill="#000000" fill-rule="nonzero"/>
																			<path
                                                                                d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                                                fill="#000000" opacity="0.3"/>
																		</g>
																	</svg>
                                                                    <!--end::Svg Icon-->
																</span>
                                    </a>

                                    <!-- Modal-->
                                    <div class="modal fade" id="DangerModal" tabindex="-1" role="dialog"
                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header bg-danger">
                                                    <h5 class="modal-title" id="exampleModalLabel">Delete Price</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <i aria-hidden="true" class="ki ki-close"></i>
                                                    </button>
                                                </div>
                                                <form action="deleteprice/{{$prices->id}}" method="POST">
                                                    {{ csrf_field() }}
                                                    {{ method_field('delete') }}
                                                    <div class="modal-body">
                                                        <div class="card">


                                                            <div class="card-body text-left">
                                                                <p class="text-dark-50 m-0 pt-5 font-weight-normal ">Are
                                                                    You Sure to Delete This Price...?</p>
                                                                <input type="hidden" name="price_id"
                                                                       id="price_id">
                                                                <div class="form-group">
                                                                    <h5>From: <small class="text from"></small></h5>
                                                                    <h5>To: <small class="text to"></small></h5>
                                                                    <h5>Service Type: <small class="text service_type"></small></h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button"
                                                                class="btn btn-light-primary font-weight-bold"
                                                                data-dismiss="modal">Close
                                                        </button>
                                                        <button type="submit" class="btn btn-danger font-weight-bold">
                                                            Save changes
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>



                                    <!-- Modal-->
                                    <div class="modal fade" id="useredit" tabindex="-1" role="dialog"
                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header bg-primary">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edit Price</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <i aria-hidden="true" class="ki ki-close"></i>
                                                    </button>
                                                </div>
                                                <form action="/priceupdate" method="POST">
                                                    {{ csrf_field() }}
                                                    {{ method_field('PUT') }}
                                                    <div class="modal-body">
                                                            <div class="card-body text-left">
                                                                <input type="hidden" name="price_id"
                                                                       id="price_id">
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="exampleSelectd">From</label>

                                                                                    <select class="form-control form-control-lg" id="from" name="from" id="exampleSelectl">
                                                                                        <option selected>{{$prices->from}}</option>
                                                                                        @foreach($countrys as $country)
                                                                                            <option
                                                                                                value="{{$country->country_name}}">{{$country->country_name}}</option>
                                                                                        @endforeach
                                                                                    </select>

                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">

                                                                                <div class="form-group">
                                                                                    <label for="exampleSelectd">To</label>
                                                                                    <select class="form-control form-control-lg" id="to" name="to" id="exampleSelectl">

                                                                                        <option  selected>{{$prices->to}}</option>
                                                                                        @foreach($countrys as $country)
                                                                                            <option
                                                                                                value="{{$country->country_name}}">{{$country->country_name}}</option>
                                                                                        @endforeach

                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">


                                                                            <div class="col-md-12">
                                                                                <div class="form-group">
                                                                                    <label for="exampleSelectd">Service Type</label>
                                                                                    <select class="form-control" id="service_type" name="service_type" id="exampleSelectd">
                                                                                        @if($prices->service_type == 'Export')
                                                                                            <option value="Export" selected>Export</option>
                                                                                            <option value="Import">Import</option>
                                                                                        @elseif($prices->service_type == 'Import')
                                                                                            <option value="Import" selected>Import</option>
                                                                                            <option value="Export">Export</option>
                                                                                        @endif


                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>


                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <label>Weight(kg)</label>
                                                                                <input  type="text" class="form-control form-control-sm" id="weight_kg" name="weight_kg"/>
                                                                            </div>

                                                                            <div class="col-md-6">
                                                                                <label>Price</label>
                                                                                <input type="text"  class="form-control form-control-sm" id="price" name="price" />
                                                                            </div>

                                                                        </div>
                                                            </div>

                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button"
                                                                class="btn btn-light-primary font-weight-bold"
                                                                data-dismiss="modal">Close
                                                        </button>
                                                        <button type="submit" class="btn btn-primary font-weight-bold">
                                                            Save changes
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>



                                </td>
                            </tr>


                        @endforeach

                        </tbody>


                    </table>


                </div>
                <!--end::Table-->
            </div>
        </div>
    </div>



@endsection
@section('js')
    <!--begin::Page Vendors(used by this page)-->
    <script src="admintemplate/assets/plugins/custom/datatables/datatables.bundle.js"></script>
    <!--end::Page Vendors-->
    <!--begin::Page Scripts(used by this page)-->
    <script src="admintemplate/assets/js/pages/crud/datatables/basic/paginations.js"></script>
    <!--end::Page Scripts-->

    <script>
        $(function () {
            $("#travelertable").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
        });


        $('#DangerModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var price_id = button.data('priceid')
            var from = button.data('from')
            var to = button.data('to')
            var service_type = button.data('service_type')
            var modal = $(this)
            modal.find('.modal-body #price_id').val(price_id)
            modal.find('.modal-body .from').text(from)
            modal.find('.modal-body .to').text(to)
            modal.find('.modal-body .service_type').text(service_type)
        })

        $('#useredit').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var price_id = button.data('priceid')
            var from = button.data('from')
            var to = button.data('to')
            var service_type = button.data('service_type')
            var weight_kg = button.data('weight_kg')
            var price = button.data('price')
            var modal = $(this)
            modal.find('.modal-body #price_id').val(price_id)
            modal.find('.modal-body #from').val(from)
            modal.find('.modal-body #to').val(to)
            modal.find('.modal-body #service_type').val(service_type)
            modal.find('.modal-body #weight_kg').val(weight_kg)
            modal.find('.modal-body #price').val(price)
        })
    </script>


@endsection
