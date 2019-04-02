@extends('layouts.app')

@section('meta_title', $page->meta_title)
@section('meta_description', $page->meta_description)

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
           <h1> {!! $page->title !!}</h1>
        </div>
    </div>
</div>
@endsection

@push('css')
@endpush

@push('js')
@endpush
