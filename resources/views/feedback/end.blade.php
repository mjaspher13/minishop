@extends('layouts.app')

@section('scripts')

@endsection

@section('content')
<section class="content" style="margin: 100px 300px 100px 300px !important">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                <div class="card">
                    <div class="header bg-blue-green">
                    </div>
                    <div class="body">
                        <div class="content__loader card-body-loader loaded">
                            <i class="material-icons">sync</i>
                        </div>
                        <div class="content text-center">
                            <h1>Thank you for your mesage!</h1>
                            <h2>We will response as soon as possible</h2>
                            <br />
                            <h4>Page will redirect shortly...</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        window.onload = function () {
            window.setTimeout(function () {
                window.location.href = "/";
            }, 5000);
        }

    </script>
</section>
