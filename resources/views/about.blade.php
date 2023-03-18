@extends('master-layout')
@section('content')
@section('title', 'cy. | Home')

<div class="container" style="padding-top: 120px;">
    <div class="heading-title" style="border-left: 4px solid #F4F4F4;">
        <span class="display-4 text-white-mod px-3">About <strong style="font-weight: 700;">Cy.</strong></span>
    </div>
    <div class="d-flex flex-row-reverse justify-content-between py-5">
        <div class="" style="width: 30vw; height: 60vh;">
            <img src="{{ URL::asset('imgs/Portrait-2.jpg') }}" alt=""
                class="img-cover">
        </div>
        <div class="span text-white-mod">Hello</div>
    </div>
</div>

@endsection