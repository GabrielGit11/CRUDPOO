@extends('layouts.app')

@section('template_title')
    {{ $workOrder->name ?? __('Show') . " " . __('Work Order') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Work Order</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('work-orders.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Client Id:</strong>
                                    {{ $workOrder->client_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Work Group Id:</strong>
                                    {{ $workOrder->work_group_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Status Id:</strong>
                                    {{ $workOrder->status_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Vehicle Id:</strong>
                                    {{ $workOrder->vehicle_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Description:</strong>
                                    {{ $workOrder->description }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Scheduled Date:</strong>
                                    {{ $workOrder->scheduled_date }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Completed Date:</strong>
                                    {{ $workOrder->completed_date }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Notes:</strong>
                                    {{ $workOrder->notes }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Estimated Cost:</strong>
                                    {{ $workOrder->estimated_cost }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Actual Cost:</strong>
                                    {{ $workOrder->actual_cost }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
