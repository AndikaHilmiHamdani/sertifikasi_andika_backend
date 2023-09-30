<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\expense;
use Illuminate\Http\Request;

class expenseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        
        return expense::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'expense'=>'required',
            'date_expense'=>'required',
        ]);

        return expense::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return expense::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $expense_data = expense::find($id);
        $expense_data->update($request->all());
        return $expense_data;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        return expense::destroy($id);
    }
}
