@extends('layouts.app')

@section('stylesheets')
@endsection

@section('scripts')
@endsection

@section('content')
<section class="content" style="margin: 100px 300px 100px 300px !important">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>{{ __('model.feedback.feedback-management.feedback') }}
                            <small>{{ __('model.feedback.feedback-management.feedback') }}</small>
                        </h2>
                    </div>
                    <div class="body">

                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <ul class="nav nav-tabs tab-nav-right" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#tabpanel1" data-toggle="tab">
                                    {{ strtoupper(__('model.feedback.feedback-management.feedback')) }}
                                </a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <form role="form" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active m-t-10" id="tabpanel1">
                                    <div class="row clearfix">
                                        <div class="col-md-12">
                                            <!-- Form start -->

                                            <div class="row clearfix">
                                                <div class="col-md-3">
                                                    <label for="name">{{
                                                        __('model.feedback.feedback-management.name') }}
                                                    </label>

                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="text" name="name" class="form-control"
                                                                id="name"
                                                                placeholder="{{ __('model.feedback.feedback-management.name') }}"
                                                                value="{{ $feedback->name }}" disabled />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <label for="mobile">{{
                                                        __('model.feedback.feedback-management.mobile') }}
                                                    </label>

                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="number" name="mobile" class="form-control"
                                                                id="mobile"
                                                                placeholder="{{ __('model.feedback.feedback-management.mobile') }}"
                                                                value="{{ $feedback->mobile }}" disabled />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <label for="email">{{
                                                        __('model.feedback.feedback-management.email') }}
                                                    </label>

                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="email" name="email" class="form-control"
                                                                id="email"
                                                                placeholder="{{ __('model.feedback.feedback-management.email') }}"
                                                                value="{{ $feedback->email }}" disabled />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="mesage">{{
                                                        __('model.feedback.feedback-management.message') }}
                                                    </label>

                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <textarea type="message" name="message" class="form-control"
                                                                id="message"
                                                                placeholder="{{ __('model.feedback.feedback-management.message') }}"
                                                                disabled />
                                                            {{ $feedback->message }}
                                                            </textarea>
                                                        </div>
                                                    </div>
                                                    <div class="row clearfix">
                                                        <div class="col-md-12">
                                                            <div class="pull-right">
                                                                <a href="{{ route('feedback.index') }}"
                                                                    class="btn bg-grey waves-effect m-t-15 waves-effect">
                                                                    {{ __('common.back') }}
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Form end -->
                                                    <form>
                                                        @endsection
