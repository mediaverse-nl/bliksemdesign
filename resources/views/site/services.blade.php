@extends('layouts.app')

@section('meta_title', $page->meta_title)
@section('meta_description', $page->meta_description)

@section('content')
<div class="container">
    <h1> {!! $page->title !!}</h1>

    <div class="row">

        @foreach($data->products as $product)
            <div class="col-md-6">
                <div class="panel panel-black">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-2 text-center" style="font-size: 3em;">
                                <i class="fas fa-paper-plane fa-lg" style="font-size: 100% !important;"></i>
                            </div>
                            <div class="col-md-7" style="font-weight: bolder !important;">
                                <h3>{!! $product->title !!}</h3>
                            </div>
                            <div class="col-md-3" style="font-weight: bolder !important;">
                                <h3>&euro;{!! number_format($product->price, 2) !!}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</div>
@endsection

@push('css')
    <style>
        .panel{
            border: 0px !important;
            border-radius: 8px !important;
        }

        .panel-black{
            color: white;
            background-color: black;
        }
    </style>
@endpush

@push('js')
@endpush
