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
                    <form class="form" action="/pricecheck" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}


                    <div class="card-body">


                        <div class="form-group">
                            <label for="exampleSelectd">From</label>

                            <select class="form-control form-control-lg" name="from" id="exampleSelectl">
                                @foreach($countrys as $country)
                                <option value="{{$country->country_name}}">{{$country->country_name}}</option>
                                @endforeach
                            </select>

                        </div>

                        <div class="form-group">
                            <label for="exampleSelectd">To</label>
                            <select class="form-control form-control-lg" name="to" id="exampleSelectl">
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
                                    <select class="form-control" name="service_type" id="exampleSelectd">
                                        <option>Export</option>
                                        <option>Import</option>
                                    </select>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleSelectd">Width</label>
                                    <input  id="box1" class="form-control form-control-sm " oninput="calculate();"  placeholder="Width"/>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleSelectd">Height</label>
                                    <input  id="box2" class="form-control form-control-sm " oninput="calculate();"  placeholder="Height"/>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleSelectd">Length</label>
                                    <input  id="box3" class="form-control form-control-sm " oninput="calculate();"  placeholder="Length"/>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label>Weight(kg)</label>
                                <input  id="result" class="form-control form-control-sm" name="weight_kg"  placeholder="Weight"/>
                            </div>

                            <div class="col-md-6">
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
                        <button type="submit" class="btn btn-success mr-2">Check Rates</button>
                        <button type="reset" class="btn btn-secondary border-danger mr-2">Cancel</button>



                    </div>
                </form>
                <!--end::Form-->
            </div>
        </div>
    </div>
    <!--end::Row-->







@endsection
@section('js')


    <script>

        function calculate() {
            var myBox1 = document.getElementById('box1').value;
            var myBox2 = document.getElementById('box2').value;
            var myBox3 = document.getElementById('box3').value;
            var result = document.getElementById('result');
            var myResult = (myBox1 * myBox2 * myBox3) / 1000;
            document.getElementById('result').value = myResult;

        }
    </script>



@endsection
