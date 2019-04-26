@extends('layouts.app')
@section('stylesheets')
<!-- Bootstrap Select Css -->
<link href="{{ asset('theme/adminbsb-materialdesign/plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet" />

<!-- JQuery DataTable Css -->
<link href="{{ asset('theme/adminbsb-materialdesign/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}"
    rel="stylesheet">
@endsection

@section('scripts')
<!-- Select Plugin Js -->
<script src="{{ asset('theme/adminbsb-materialdesign/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>

<!-- DataTable -->
<script src="{{ asset('theme/adminbsb-materialdesign/plugins/jquery-datatable/jquery.dataTables.js') }}"></script>
<script src="{{ asset('theme/adminbsb-materialdesign/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js') }}"></script>
<script src="{{ asset('theme/adminbsb-materialdesign/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('theme/adminbsb-materialdesign/js/pages/tables/jquery-datatable.js') }}"></script>
<!-- DataTable -->

<script src="{{ config("app.url") . "/js/feedback/list.js" . "?v=" . config("app.version") }}"></script>

@endsection

@section('content')
<section class="content">
    <div class="content__loader content-loader">
        <i class="material-icons">sync</i>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>{{ __('model.feedback.feedback-management.feedbackManagement') }}
                            <small>{{ __('model.feedback.feedback-management.feedbackManagement') }}</small>
                        </h2>
                        <div class="header-dropdown">
                           
                        </div>
                    </div>
                    <div class="body">
                        <div class="content__loader card-body-loader loaded">
                            <i class="material-icons">sync</i>
                        </div>
                        <div class="content">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped 
                            table-hover dataTable"
                                    id="feedback_table">
                                    <thead>
                                        <tr>
                                            <td>{{ __("model.feedback.feedback-management.name") }}</td>
                                            <td>{{ __("model.feedback.feedback-management.email") }}</td>
                                            <td>{{ __("model.feedback.feedback-management.mobile") }}</td>
                                            <td>{{ __("model.feedback.feedback-management.message") }}</td>
                                            <td>{{ __("model.feedback.feedback-management.date") }}</td>
                                            <td width="20%">{{ __("common.actions") }}</td>
                                        </tr>
                                    </thead>
                                    @if(isset($feedbacks))
                                    @foreach($feedbacks as $feedback)
                                    <tr>
                                        <td>{{ $feedback->name }}</td>
                                        <td>{{ $feedback->email }}</td>
                                        <td>{{ $feedback->mobile }}</td>
                                        <td>{{ $feedback->message }}</td>
                                        <td>{{ $feedback->created_at}}</td>
                                        <td>
                                            <div class="icon-button-demo">
                                                <a href="{{ route('feedback.view', 
                                                ['id' => $feedback->id ]) }}"
                                                    class="btn btn-info btn-xs waves-effect">
                                                    <i class="material-icons">
                                                        {{ \App\Contracts\Constant::GRID_VIEW_EDIT_BUTTON }}
                                                    </i>
                                                    <span>{{ __('common.view') }}</span>
                                                </a>
                                                <a href="#" class="btn btn-danger btn-xs waves-effect btnDelete"
                                                    data-id="{{ $feedback->id }}">
                                                    <i class="material-icons">
                                                        {{ \App\Contracts\Constant::GRID_VIEW_DELETE_BUTTON }}
                                                    </i>
                                                    <span>{{ __('common.delete') }}</span>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @endif
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection