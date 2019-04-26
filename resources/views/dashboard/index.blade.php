@extends('layouts.app')

@section('stylesheets')
<!-- Sweet Alert Css -->
<link rel='stylesheet' href="{{ asset('theme/adminbsb-materialdesign/plugins/sweetalert/sweetalert.css') }}" />
<!-- Sweet Alert Css -->
<link rel='stylesheet' href="{{ asset('fullcalendar/lib/jquery-ui.min.css') }}" />
@endsection

@section('scripts')
<!-- Sweet Alert Js -->
<script src="{{ asset('theme/adminbsb-materialdesign/plugins/sweetalert/sweetalert.min.js') }}"></script>

<script src="{{ asset('/js/reservations/reservation.js') }}"></script>
@endsection

@section('content')
<section class="content dashboard">
    <div class="container-fluid">
        <div class="content__loader card-body-loader loaded">
            <i class="material-icons">sync</i>
        </div>
        <div class="body">
            
        </div>
    </div>
</section>
@endsection
