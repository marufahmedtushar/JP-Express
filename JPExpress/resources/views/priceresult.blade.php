


@extends('layouts.master')
@section('css')

@endsection
@section('subheader')

@endsection
@section('content')
    <div class="d-flex flex-column-fluid">
        <div class="container ">
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

                @foreach($price as $prices)


                    {{$prices->price}}


                @endforeach

        </div>
    </div>
@endsection
@section('js')






@endsection
