@extends('layouts.app')

@section('template_title')
    Work Orders
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Work Orders') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('work-orders.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        <th>Cliente</th>
                                        <th>Grupo de Trabajo</th>
                                        <th>Estado</th>
                                        <th>Vehículo</th>
                                        <th>Descripción</th>
                                        <th>Fecha Programada</th>
                                        <th>Fecha de Finalización</th>
                                        <th>Notas</th>
                                        <th>Costo Estimado</th>
                                        <th>Costo Real</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($workOrders as $workOrder)
                                        <tr>
                                            <td>{{ $workOrder->id }}</td>
                                            <td>{{ $workOrder->client->name }}</td>
                                            <td>{{ $workOrder->workGroup->name }}</td>
                                            <td>{{ $workOrder->status->name }}</td>
                                            <td>{{ $workOrder->vehicle->name }}</td>
                                            <td>{{ $workOrder->description }}</td>
                                            <td>{{ $workOrder->scheduled_date }}</td>
                                            <td>{{ $workOrder->completed_date }}</td>
                                            <td>{{ $workOrder->notes }}</td>
                                            <td>{{ $workOrder->estimated_cost }}</td>
                                            <td>{{ $workOrder->actual_cost }}</td>
                                            <td>
                                                <form action="{{ route('work-orders.destroy', $workOrder->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('work-orders.show', $workOrder->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('work-orders.edit', $workOrder->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $workOrders->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
