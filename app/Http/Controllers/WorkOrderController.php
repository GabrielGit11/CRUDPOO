<?php

namespace App\Http\Controllers;

use App\Models\WorkOrder;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\WorkOrderRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class WorkOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $workOrders = WorkOrder::paginate();

        return view('work-order.index', compact('workOrders'))
            ->with('i', ($request->input('page', 1) - 1) * $workOrders->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $workOrder = new WorkOrder();

        return view('work-order.create', compact('workOrder'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(WorkOrderRequest $request): RedirectResponse
    {
        WorkOrder::create($request->validated());

        return Redirect::route('work-orders.index')
            ->with('success', 'WorkOrder created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $workOrder = WorkOrder::find($id);

        return view('work-order.show', compact('workOrder'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $workOrder = WorkOrder::find($id);

        return view('work-order.edit', compact('workOrder'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(WorkOrderRequest $request, WorkOrder $workOrder): RedirectResponse
    {
        $workOrder->update($request->validated());

        return Redirect::route('work-orders.index')
            ->with('success', 'WorkOrder updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        WorkOrder::find($id)->delete();

        return Redirect::route('work-orders.index')
            ->with('success', 'WorkOrder deleted successfully');
    }
}
