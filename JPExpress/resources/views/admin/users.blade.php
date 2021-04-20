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
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Users</h5>
                <!--end::Title-->
                <!--begin::Separator-->
                <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-5 bg-gray-200"></div>
                <!--end::Separator-->
                <!--begin::Search Form-->
                <div class="d-flex align-items-center" id="kt_subheader_search">
                    <span class="text-dark-50 font-weight-bold" id="kt_subheader_total">450 Total</span>
                    <form class="ml-5">
                        <div class="input-group input-group-sm input-group-solid" style="max-width: 175px">
                            <input type="text" class="form-control" id="kt_subheader_search_form"
                                   placeholder="Search..."/>
                            <div class="input-group-append">
													<span class="input-group-text">
														<span class="svg-icon">
															<!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg-->
															<svg xmlns="http://www.w3.org/2000/svg"
                                                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                 height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none"
                                                                   fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24"/>
																	<path
                                                                        d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                                                        fill="#000000" fill-rule="nonzero"
                                                                        opacity="0.3"/>
																	<path
                                                                        d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                                                        fill="#000000" fill-rule="nonzero"/>
																</g>
															</svg>
                                                            <!--end::Svg Icon-->
														</span>
                                                        <!--<i class="flaticon2-search-1 icon-sm"></i>-->
													</span>
                            </div>
                        </div>
                    </form>
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
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Card-->

            <!--begin::Advance Table Widget 10-->
            <div class="card card-custom gutter-b">
                <!--begin::Header-->
                <div class="card-header border-0 py-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label font-weight-bolder text-dark">User's List</span>
                        <span class="text-muted mt-3 font-weight-bold font-size-sm"></span>
                    </h3>
                    <div class="card-toolbar">
                        <a href="" class="btn btn-info font-weight-bolder font-size-sm">Create New User</a>
                    </div>
                </div>
                <!--end::Header-->
                <div class="card-body py-0">
                    <!--begin::Table-->
                    <div class="table-responsive">
                        <table class="table table-head-custom table-vertical-center" id="usertable">
                            <thead>
                            <tr class="text-left">
                                <th class="pl-0" style="width: 30px">
                                    <label class="checkbox checkbox-lg checkbox-inline mr-2">
                                        <input type="checkbox" value="1" />
                                        <span></span>
                                    </label>
                                </th>
                                <th class="pl-0" style="min-width: 120px">User id</th>
                                <th>Created at</th>
                                <th style="min-width: 110px">Name</th>


                                <th style="min-width: 120px">Status</th>
                                <th style="min-width: 120px"></th>
                                <th class="pr-0 text-right" style="min-width: 160px">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td class="pl-0 py-6">
                                        <label class="checkbox checkbox-lg checkbox-inline">
                                            <input type="checkbox" value="1" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td class="pl-0">
                                        <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">{{$user->id}}</a>
                                    </td>
                                    <td class="pl-0">
                                        <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">{{$user->created_at}}</a>
                                    </td>
                                    <td>
                                        <span class="text-dark-75 font-weight-bolder d-block font-size-lg">{{$user->name}}</span>
                                    </td>


                                    <td>
                                        @if($user->isban == 0)
                                            <a href="#" type="submit" class="btn btn-light-success font-weight-bold mr-2">Not
                                                Banned</a>
                                        @elseif($user->isban == 1)
                                            <a href="#" type="submit" class="btn btn-light-danger font-weight-bold mr-2">Banned</a>
                                        @endif
                                    </td>

                                    <td>
                                        <div class="form-group row">

                                            <div class="col-lg-9 col-md-9 col-sm-12">

                                                <form id="isban" action="/bannedit/{{$user->id}}" method="POST">
                                                    {{ csrf_field() }}
                                                    {{ method_field('PUT') }}


                                                    <span class="switch switch-primary">
																<label>
                                                                    @if($user->isban == 1)
                                                                        <input type="hidden" name="user_id"
                                                                               value="{{ $user->id }}"/>
                                                                        <input type="checkbox"
                                                                               onChange="this.form.submit()"
                                                                               value = "0" name="isban" {{ $user->isban == true ? 'checked' : '' }}/>
                                                                        <span></span>
                                                                    @elseif($user->isban == 0)

                                                                        <input type="hidden" name="user_id"
                                                                               value="{{ $user->id }}"/>
                                                                        <input type="checkbox"
                                                                               onChange="this.form.submit()"
                                                                               value = "1" name="isban" {{ $user->isban == true ? 'checked' : '' }}/>
                                                                        <span></span>
                                                                    @endif
																</label>
															</span>

                                                </form>


                                            </div>
                                        </div>
                                    </td>
                                    <td class="pr-0 text-right">

                                        <a href="" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
																<span class="svg-icon svg-icon-md svg-icon-primary">
																	<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24" />
																			<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
																			<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																		</g>
																	</svg>
                                                                    <!--end::Svg Icon-->
																</span>
                                        </a>
                                        <a  class="btn btn-icon btn-light btn-hover-primary btn-sm" data-toggle="modal" data-target="#DangerModal">
																<span class="svg-icon svg-icon-md svg-icon-primary">
																	<!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24" />
																			<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
																			<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
																		</g>
																	</svg>
                                                                    <!--end::Svg Icon-->
																</span>
                                        </a>

                                        <!-- Modal-->
                                        <div class="modal fade" id="DangerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Modal Title</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <i aria-hidden="true" class="ki ki-close"></i>
                                                        </button>
                                                    </div>
                                                    <form action="" method="POST">
                                                        {{ csrf_field() }}
                                                        {{ method_field('delete') }}
                                                        <div class="modal-body">
                                                            <p>Are  You  Sure  to  Delete This  Taveler  Called</p>
                                                            <input type="hidden" name="traveler_id" id="traveler_id">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control"  id="name" style="border:3px solid #ffffff;border-radius:10px;">
                                                            </div>
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary font-weight-bold">Save changes</button>
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
        <!--end::Container-->
    </div>
    <!--end::Entry-->

    {{--    <!--begin::Entry-->--}}
    {{--    <div class="d-flex flex-column-fluid">--}}
    {{--        <!--begin::Container-->--}}
    {{--        <div class="container">--}}
    {{--    <!--begin::Card-->--}}
    {{--    <div class="card card-custom">--}}
    {{--        <div class="card-header flex-wrap py-5">--}}
    {{--            <div class="card-title">--}}
    {{--                <h3 class="card-label">Paginations--}}
    {{--                    <span class="d-block text-muted pt-2 font-size-sm">extended pagination options</span></h3>--}}
    {{--            </div>--}}
    {{--            <div class="card-toolbar">--}}
    {{--                <!--begin::Dropdown-->--}}
    {{--                <div class="dropdown dropdown-inline mr-2">--}}
    {{--                    <button type="button" class="btn btn-light-primary font-weight-bolder dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
    {{--												<span class="svg-icon svg-icon-md">--}}
    {{--													<!--begin::Svg Icon | path:assets/media/svg/icons/Design/PenAndRuller.svg-->--}}
    {{--													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
    {{--														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
    {{--															<rect x="0" y="0" width="24" height="24" />--}}
    {{--															<path d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z" fill="#000000" opacity="0.3" />--}}
    {{--															<path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z" fill="#000000" />--}}
    {{--														</g>--}}
    {{--													</svg>--}}
    {{--                                                    <!--end::Svg Icon-->--}}
    {{--												</span>Export</button>--}}
    {{--                    <!--begin::Dropdown Menu-->--}}
    {{--                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">--}}
    {{--                        <!--begin::Navigation-->--}}
    {{--                        <ul class="navi flex-column navi-hover py-2">--}}
    {{--                            <li class="navi-header font-weight-bolder text-uppercase font-size-sm text-primary pb-2">Choose an option:</li>--}}
    {{--                            <li class="navi-item">--}}
    {{--                                <a href="#" class="navi-link">--}}
    {{--																<span class="navi-icon">--}}
    {{--																	<i class="la la-print"></i>--}}
    {{--																</span>--}}
    {{--                                    <span class="navi-text">Print</span>--}}
    {{--                                </a>--}}
    {{--                            </li>--}}
    {{--                            <li class="navi-item">--}}
    {{--                                <a href="#" class="navi-link">--}}
    {{--																<span class="navi-icon">--}}
    {{--																	<i class="la la-copy"></i>--}}
    {{--																</span>--}}
    {{--                                    <span class="navi-text">Copy</span>--}}
    {{--                                </a>--}}
    {{--                            </li>--}}
    {{--                            <li class="navi-item">--}}
    {{--                                <a href="#" class="navi-link">--}}
    {{--																<span class="navi-icon">--}}
    {{--																	<i class="la la-file-excel-o"></i>--}}
    {{--																</span>--}}
    {{--                                    <span class="navi-text">Excel</span>--}}
    {{--                                </a>--}}
    {{--                            </li>--}}
    {{--                            <li class="navi-item">--}}
    {{--                                <a href="#" class="navi-link">--}}
    {{--																<span class="navi-icon">--}}
    {{--																	<i class="la la-file-text-o"></i>--}}
    {{--																</span>--}}
    {{--                                    <span class="navi-text">CSV</span>--}}
    {{--                                </a>--}}
    {{--                            </li>--}}
    {{--                            <li class="navi-item">--}}
    {{--                                <a href="#" class="navi-link">--}}
    {{--																<span class="navi-icon">--}}
    {{--																	<i class="la la-file-pdf-o"></i>--}}
    {{--																</span>--}}
    {{--                                    <span class="navi-text">PDF</span>--}}
    {{--                                </a>--}}
    {{--                            </li>--}}
    {{--                        </ul>--}}
    {{--                        <!--end::Navigation-->--}}
    {{--                    </div>--}}
    {{--                    <!--end::Dropdown Menu-->--}}
    {{--                </div>--}}
    {{--                <!--end::Dropdown-->--}}
    {{--                <!--begin::Button-->--}}
    {{--                <a href="#" class="btn btn-primary font-weight-bolder">--}}
    {{--											<span class="svg-icon svg-icon-md">--}}
    {{--												<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->--}}
    {{--												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
    {{--													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
    {{--														<rect x="0" y="0" width="24" height="24" />--}}
    {{--														<circle fill="#000000" cx="9" cy="15" r="6" />--}}
    {{--														<path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3" />--}}
    {{--													</g>--}}
    {{--												</svg>--}}
    {{--                                                <!--end::Svg Icon-->--}}
    {{--											</span>New Record</a>--}}
    {{--                <!--end::Button-->--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--        <div class="card-body">--}}
    {{--            <!--begin: Datatable-->--}}
    {{--            <table class="table table-separate table-head-custom table-checkable" id="kt_datatable">--}}
    {{--                <thead>--}}
    {{--                <tr>--}}
    {{--                    <th>Id</th>--}}
    {{--                    <th>Created at</th>--}}
    {{--                    <th>Name</th>--}}
    {{--                    <th>Role</th>--}}
    {{--                    <th></th>--}}
    {{--                    <th></th>--}}

    {{--                </tr>--}}
    {{--                </thead>--}}
    {{--                <tbody>--}}

    {{--                @foreach($users as $user)--}}


    {{--                    <tr>--}}
    {{--                        <td>{{$user->id}}</td>--}}
    {{--                        <td> {{$user->created_at}}</td>--}}
    {{--                        <td>{{$user->name}}</td>--}}
    {{--                        <td>@if($user->isban == 0)--}}
    {{--                                --}}{{--                                <form action="/bannedit" method="POST">--}}
    {{--                                --}}{{--                                    {{ csrf_field() }}--}}
    {{--                                --}}{{--                                    {{ method_field('PUT') }}--}}
    {{--                                <a href="#" type="submit" class="btn btn-light-success font-weight-bold mr-2">Not Banned</a>--}}
    {{--                                --}}{{--                                </form>--}}
    {{--                            @elseif($user->isban == 1)--}}
    {{--                                <a href="#" type="submit" class="btn btn-light-danger font-weight-bold mr-2">Banned</a>--}}
    {{--                            @endif--}}
    {{--                        </td>--}}
    {{--                        <td><div class="form-group row">--}}

    {{--                                <div class="col-lg-9 col-md-9 col-sm-12">--}}

    {{--                                    <input class="toggle-class" data-id="{{$user->id}}"data-switch="true" name="isban" type="checkbox"   data-on-text="Active" data-handle-width="70" data-off-text="Inactive"--}}
    {{--                                           data-on-color="primary" data-off-color="danger" data-toggle="toggle" {{ $user->isban == false ? 'checked' : '' }}/>--}}


    {{--                                </div>--}}
    {{--                            </div></td>--}}

    {{--                        <td><a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalCenter"> <i class="flaticon2-edit icon-lg"></i></a>--}}
    {{--                            <a class="btn btn-danger btn-sm" > <i class="flaticon2-rubbish-bin-delete-button icon-lg"></i></a>--}}

    {{--                        </td>--}}


    {{--                    </tr>--}}
    {{--                @endforeach--}}

    {{--                </tbody>--}}
    {{--            </table>--}}
    {{--            <!--end: Datatable-->--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--    <!--end::Card-->--}}
    {{--        </div>--}}
    {{--        <!--end::Container-->--}}
    {{--    </div>--}}
    {{--    <!--end::Entry-->--}}


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
            $("#usertable").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
        });



        {{--$('.toggle-class').on('change', function () {--}}
        {{--    var isban = $(this).prop('checked') === true ? 1 : 0;--}}
        {{--    var user_id = $(this).data('id');--}}

        {{--    $.ajax({--}}
        {{--        type: "GET",--}}
        {{--        dataType: "json",--}}
        {{--        url: '{{ route('admin.userChangeStatus') }}',--}}
        {{--        data: {'isban': isban, 'user_id': user_id},--}}
        {{--        success: function (data) {--}}
        {{--            console.log(data.success)--}}
        {{--        }--}}
        {{--    });--}}
        {{--});--}}


        // function submitform() {
        //     document.getElementById("isban").submit();
        //     alert("your form submitted");
        // }

        $(document).ready(function(){
  $("#isban").click(function(){
      $("isban").submit()
  });
});


    </script>




@endsection
