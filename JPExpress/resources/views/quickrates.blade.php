@extends('layouts.master')
@section('css')

@endsection
@section('subheader')

@endsection
@section('content')

    <!--begin::Row-->
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card card-custom mt-5">
                <div class="card-body">
                    <h3 class="card-title">
                        Get AQuick Shipping Rate
                    </h3>
                    <h5 class="card-title">Competitive shipping rates designed for your needs</h5>
                </div>




                <!--begin::Form-->
                <form class="form">
                    <div class="card-body">


                        <div class="form-group">
                            <label for="exampleSelectd">From</label>

                            <select class="form-control form-control-lg" id="exampleSelectl">
                                @foreach($countrys as $country)
                                <option value="{{$country->country_name}}">{{$country->country_name}}</option>
                                @endforeach
                            </select>

                        </div>

                        <div class="form-group">
                            <label for="exampleSelectd">To</label>
                            <select class="form-control form-control-lg" id="exampleSelectl">
                                @foreach($countrys as $country)
                                    <option value="{{$country->country_name}}">{{$country->country_name}}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleSelectd">Type</label>
                                    <select class="form-control" id="exampleSelectd">
                                        <option>International</option>
                                        <option>Local</option>

                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
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
                        </div>


                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleSelectd">Width</label>
                                    <input type="text" class="form-control form-control-sm"  placeholder="Width"/>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleSelectd">Height</label>
                                    <input type="text" class="form-control form-control-sm"  placeholder="Height"/>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleSelectd">Length</label>
                                    <input type="text" class="form-control form-control-sm"  placeholder="Length"/>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <label>Weight(kg)</label>
                                <input type="email" class="form-control form-control-sm"  placeholder="Weight"/>
                            </div>

                            <div class="col-md-8">
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



                    </div>
                    <div class="card-footer">
                        <button type="reset" class="btn btn-success mr-2">Check Rates</button>
                        <button type="reset" class="btn btn-secondary border-danger mr-2">Cancel</button>
                        <button type="reset" class="btn btn-secondary ">Price Show Here</button>
                    </div>
                </form>
                <!--end::Form-->
            </div>
        </div>
    </div>
    <!--end::Row-->

@endsection
@section('js')






@endsection
