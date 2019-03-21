@extends('layouts.app')

@section('meta_title', 'welcome')
@section('meta_description', 'welcome')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <p style="height: 200px;">opvallen en als de bliksem</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default" style="background-color: #D6FF00; ">
                    <div class="panel-body">
                        {{--<p style="height: 200px;">opvallen en als de bliksem</p>--}}

                        <h1 class="text-center" style="color: black; font-size: 100px;">gratis</h1>
                         {{--visitekaartjes--}}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <p style="height: 250px;">geen onnodige uren betaal voor wat je krijgt</p>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <p style="height: 250px;">alle tools voor een onderneming anno 2019 onder een dak. Van visitekaartjes tot webshops en zoekmachine optimalisatie voor een vriendeke prijs met oog voor design en kwaliteit. Dat is bliksem design</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default" style="background-color: #01FE91;">
                    <div class="panel-body">
                        <h1 class="text-center" style="padding: 0px 50px; height: 200px; color: black; font-weight: 900; font-size: 60px;">geen onnodige uren betaal voor wat je krijgt</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" >
                <div class="panel-body" style="border: 1px dashed #000; padding: 15px; border-radius: 7px;">
                    <div class="col-md-6">
                        <div class="panel panel-black">
                            <div class="panel-body">
                                <p style="height: 50px;">visitekaartjes</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel panel-black">
                            <div class="panel-body">
                                <p style="height: 50px;">logo</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel panel-black">
                            <div class="panel-body">
                                <p style="height: 50px;">Video</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <br>

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
