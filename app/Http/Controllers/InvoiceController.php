<?php

namespace App\Http\Controllers;

use App\Http\Requests\Invoices\CreateRequest;
use App\Http\Requests\Invoices\IndexRequest;
use App\Http\Requests\Invoices\ShowRequest;
use App\Http\Requests\Invoices\StoreRequest;
use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(IndexRequest $request)
    {
        return $request->run();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(CreateRequest $request)
    {
        return $request->run();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        return $request->run();
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(ShowRequest $request,$id)
    {
        return $request->run($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Invoice  $invoices
     * @return \Illuminate\Http\Response
     */
    public function edit(Invoice $invoices)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Invoice  $invoices
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Invoice $invoices)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Invoice  $invoices
     * @return \Illuminate\Http\Response
     */
    public function destroy(Invoice $invoices)
    {
        //
    }
}
