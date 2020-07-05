@extends('voyager::master')

@section('page_title', __('voyager::generic.view').' '.$dataType->getTranslatedAttribute('display_name_singular'))

@section('page_header')
    <h1 class="page-title">
        <i class="{{ $dataType->icon }}"></i> {{ __('voyager::generic.viewing') }} {{ ucfirst($dataType->getTranslatedAttribute('display_name_singular')) }} &nbsp;

        @can('edit', $dataTypeContent)
            <a href="{{ route('voyager.'.$dataType->slug.'.edit', $dataTypeContent->getKey()) }}" class="btn btn-info">
                <span class="glyphicon glyphicon-pencil"></span>&nbsp;
                {{ __('voyager::generic.edit') }}
            </a>
        @endcan
        @can('delete', $dataTypeContent)
            @if($isSoftDeleted)
                <a href="{{ route('voyager.'.$dataType->slug.'.restore', $dataTypeContent->getKey()) }}" title="{{ __('voyager::generic.restore') }}" class="btn btn-default restore" data-id="{{ $dataTypeContent->getKey() }}" id="restore-{{ $dataTypeContent->getKey() }}">
                    <i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">{{ __('voyager::generic.restore') }}</span>
                </a>
            @else
                <a href="javascript:;" title="{{ __('voyager::generic.delete') }}" class="btn btn-danger delete" data-id="{{ $dataTypeContent->getKey() }}" id="delete-{{ $dataTypeContent->getKey() }}">
                    <i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">{{ __('voyager::generic.delete') }}</span>
                </a>
            @endif
        @endcan

        <a href="{{ route('voyager.'.$dataType->slug.'.index') }}" class="btn btn-warning">
            <span class="glyphicon glyphicon-list"></span>&nbsp;
            {{ __('voyager::generic.return_to_list') }}
        </a>

        <a href="/booking/invoice/{{$booking->uuid}}" target="_blank" class="btn btn-success">
            <i class="voyager-receipt"></i><span class="hidden-xs hidden-sm"> Print Invoice
        </a>
    </h1>
    @include('voyager::multilingual.language-selector')
@stop

@section('content')
    <div class="page-content read container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div style="padding-bottom:5px;">
                    <!-- form start -->
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Booking ID</h3>
                        </div>
                        <div class="panel-body">
                            {{$booking->uuid}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                    Full Name
                                    </h3>
                                </div>
                                <div class="panel-body">
                                    {{$booking->fullname}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                    Phone Number
                                    </h3>
                                </div>
                                <div class="panel-body">
                                    {{$booking->phone}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                    Email
                                    </h3>
                                </div>
                                <div class="panel-body">
                                    {{$booking->email}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                    Total
                                    </h3>
                                </div>
                                <div class="panel-body">
                                    Rp. {{number_format($booking->total, 2)}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                    Down Payment
                                    </h3>
                                </div>
                                <div class="panel-body">
                                    Rp. {{number_format($booking->dp, 2)}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                    Email Verified At
                                    </h3>
                                </div>
                                <div class="panel-body">
                                    {{$booking->email_verified_at ?? 'Not Verified'}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                    Created At
                                    </h3>
                                </div>
                                <div class="panel-body">
                                    {{$booking->created_at}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                    Due Date
                                    </h3>
                                </div>
                                <div class="panel-body">
                                    {{$booking->due_date}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <h3>Order Detail</h3>

                    {{-- @if ($booking->Car !== null)
                        <div class="panel panel-bordered">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    Car
                                </h3>
                            </div>
                            <div class="panel-body">
                                
                            </div>
                        </div>
                    @endif --}}

                    {{-- @if ($booking->Golf !== null)
                        <div class="panel panel-bordered">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    Golf
                                </h3>
                            </div>
                            <div class="panel-body">
                            Panel content
                            </div>
                        </div>
                    @endif --}}

                    {{-- @if ($booking->Travel !== null)
                        
                    @endif --}}
                    @includeWhen($booking->Travel !== null, 'vendor.voyager.bookings.partial.travel')
                    @includeWhen($booking->Car !== null, 'vendor.voyager.bookings.partial.car')
                    @includeWhen($booking->Golf !== null, 'vendor.voyager.bookings.partial.golf')


                </div>
            </div>
        </div>
    </div>

    {{-- Single delete modal --}}
    <div class="modal modal-danger fade" tabindex="-1" id="delete_modal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="{{ __('voyager::generic.close') }}"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"><i class="voyager-trash"></i> {{ __('voyager::generic.delete_question') }} {{ strtolower($dataType->getTranslatedAttribute('display_name_singular')) }}?</h4>
                </div>
                <div class="modal-footer">
                    <form action="{{ route('voyager.'.$dataType->slug.'.index') }}" id="delete_form" method="POST">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <input type="submit" class="btn btn-danger pull-right delete-confirm"
                               value="{{ __('voyager::generic.delete_confirm') }} {{ strtolower($dataType->getTranslatedAttribute('display_name_singular')) }}">
                    </form>
                    <button type="button" class="btn btn-default pull-right" data-dismiss="modal">{{ __('voyager::generic.cancel') }}</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@stop

@section('javascript')
    @if ($isModelTranslatable)
        <script>
            $(document).ready(function () {
                $('.side-body').multilingual();
            });
        </script>
    @endif
    <script>
        var deleteFormAction;
        $('.delete').on('click', function (e) {
            var form = $('#delete_form')[0];

            if (!deleteFormAction) {
                // Save form action initial value
                deleteFormAction = form.action;
            }

            form.action = deleteFormAction.match(/\/[0-9]+$/)
                ? deleteFormAction.replace(/([0-9]+$)/, $(this).data('id'))
                : deleteFormAction + '/' + $(this).data('id');

            $('#delete_modal').modal('show');
        });

    </script>
@stop
