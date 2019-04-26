@extends('layouts.app')

@section('stylesheets')
@endsection

@section('scripts')
@endsection
<!--#about-->
<section id="about" style="padding-bottom: 50px;background-color: #FFF;background-image: url('{{ asset('images/about/about-bg.png') }}');background-repeat: repeat-x;background-position: center bottom;">
    <div class="container">
        <div class="section-header section-header2" style="margin-left: 0">
            <h2 class="section-title wow fadeInDown">About Us</h2>
            <p class="wow fadeInDown">{{ config('app.name', 'Laravel') }}</p>
            <div class="row">
                <div class="col-sm-6">
                    <img src="{{ asset('images/about/logo.png') }}"/>
                </div>

                <div class="col-sm-6">
                    <img src="{{ asset('images/about/morefun.jpg') }}" />
                </div>
            </div>
            <br /> <br /> <br />
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <ul class="nostyle">
                        <i>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore"</i>
                    </ul>
                </div>
            </div>
            <p class="wow fadeInDown">MiniShop Co.</p>
            <br /><br /><br />
            <div class="row">
                <div class="col-sm-6 wow fadeInRight" style="text-align: center">
                    <h1>Classified by the Department of Tourism as</h1></br>
                    <h3 class="column-title" style="color: red !important">Certified Local Products Shop</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6" style="text-align: center">
                    <img src="{{ asset('images/about/logo.png') }}" />
                </div>
            </div>
        </div>
    </div>
</section>
<!--/#about-->
@section('content')

@include('layouts.includes.footer')
@endsection
