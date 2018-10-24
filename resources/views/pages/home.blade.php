@extends('pages.master')
@section('css')
 <style>
    .mySlides {display:none}
    .demo {cursor:pointer}
</style>
@endsection
@section('title','trangchu')
@section('keyword','sản phẩm đẹp ')
@section('descript','sản phẩm tốt giá rẻ')
@section('content','sản phẩm đẹp')
@section('contents')
<div id="wrapper">

    <!----- BEGIN: header ------>
    @include('pages.subpages.header')
    <!----- END: header ------>

    <!----- BEGIN: slide ------>
    @include('pages.subpages.slider')
    <!----- END: slide ------>
    <!----- BEGIN: menu ------>
    @include('pages.subpages.menu')
    <!----- END: menu ------>
    <!----- POPULAR PRODUCT  ------>
    @include('pages.subpages.popularproduct')
    <!----- END: POPULAR PRODUCT  ------>
    <!-----PRODUCT HOT ------>
    @include('pages.subpages.hotproduct') 
    <!----- END: PRODUCT HOT ------>
    <!---------------- BEGIN: DELIVERER ------------------->
    @include('pages.subpages.deliverer')
    <!---------------- END: DELIVERER ------------------->
    <!----- BEGIN: BEST SELLING ------>
    @include('pages.subpages.bestselling') 
    <!----- END: BEST SELLING ------>
    <!----- BEGIN: NEWS ------>
    @include('pages.subpages.news')   
    <!----- END: NEWS  ------>
    <!----- BEGIN: FOOTER  ------>
    @include('pages.subpages.footer')
    <!----- END: FOOTER  ------>
</div>
@endsection