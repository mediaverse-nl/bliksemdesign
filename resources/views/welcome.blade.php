@extends('layouts.app')

{{--@section('meta_title', $page->meta_title)--}}
{{--@section('meta_description', $page->meta_description)--}}

@section('content')

    <div class="container">
        <div class="row">

            {{--here--}}

            {{--end--}}


            {{--{!! dd([--}}
                {{--'website' => 500,--}}
                {{--'webshop' => 1000,--}}
                {{--'logo' => 500,--}}
                {{--'video_advertising' => [--}}
                    {{--'units' => '1',--}}
                    {{--'price' => '300',--}}
                {{--],--}}
                {{--'visitekaartjes' => [--}}
                    {{--'units' => 500,--}}
                    {{--'basis' => [--}}
                        {{--'prijs' => 'gratis',--}}
                    {{--],--}}
                    {{--'normaal' => [--}}
                        {{--'prijs' => 20,--}}
                    {{--],--}}
                    {{--'exclusief' => [--}}
                        {{--'prijs' => 50,--}}
                    {{--],--}}
                {{--],--}}
                {{--'huisstijl' => [--}}
                {{--],--}}
                {{--//stationary--}}
                {{--'stationary_pakket' => [--}}
                {{--],--}}
                {{--'sea' => [--}}
                {{--],--}}
                {{--'seo' => [--}}
                {{--],--}}
            {{--]) !!}--}}

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
                    <br>
                    <div class="col-md-6">
                        <div class="panel panel-black">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="text-center" style="margin-top: -45px; margin-left: 20px; color: black; position: absolute; width: 150px; height: 30px; background: yellow ">
                                        <h3 style="margin: 0px; padding: 0px; font-weight: bolder">altijd gratis</h3>
                                    </div>
                                    <div class="col-md-2 text-center" style="font-size: 3em;">
                                        <i class="fas fa-id-card fa-lg" style="font-size: 100% !important;"></i>
                                    </div>
                                    <div class="col-md-9" style="font-weight: bolder !important;">
                                        <h3>visitekaartjes</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel panel-black">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-2 text-center" style="font-size: 3em;">
                                        <i class="fas fa-eye fa-lg" style="font-size: 100% !important;"></i>
                                    </div>
                                    <div class="col-md-9" style="font-weight: bolder !important;">
                                        <h3>Logo</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel panel-black">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-2 text-center" style="font-size: 3em;">
                                        <i class="fas fa-play fa-lg" style="font-size: 100% !important;"></i>
                                    </div>
                                    <div class="col-md-9" style="font-weight: bolder !important;">
                                        <h3>Video</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel panel-black">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-2 text-center" style="font-size: 3em;">
                                        <i class="fas fa-store fa-lg" style="font-size: 100% !important;"></i>
                                    </div>
                                    <div class="col-md-9" style="font-weight: bolder !important;">
                                        <h3>Website</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel panel-black">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-2 text-center" style="font-size: 3em;">
                                        <i class="fas fa-shopping-cart fa-lg" style="font-size: 100% !important;"></i>
                                    </div>
                                    <div class="col-md-9" style="font-weight: bolder !important;">
                                        <h3>webshop</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel panel-black">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-2 text-center" style="font-size: 3em;">
                                        <i class="fas fa-ad fa-lg" style="font-size: 100% !important;"></i>
                                    </div>
                                    <div class="col-md-9" style="font-weight: bolder !important;">
                                        <h3>campagne reclame</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel panel-black">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-2 text-center" style="font-size: 3em;">
                                        <i class="fas fa-chart-bar fa-lg" style="font-size: 100% !important;"></i>
                                    </div>
                                    <div class="col-md-9" style="font-weight: bolder !important;">
                                        <h3>SEO</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel panel-black">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-2 text-center" style="font-size: 3em;">
                                        <i class="fas fa-paper-plane fa-lg" style="font-size: 100% !important;"></i>
                                    </div>
                                    <div class="col-md-9" style="font-weight: bolder !important;">
                                        <h3>Flyer</h3>
                                    </div>
                                </div>
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
