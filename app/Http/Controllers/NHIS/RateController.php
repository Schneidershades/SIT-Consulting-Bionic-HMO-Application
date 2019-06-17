<?php

namespace App\Http\Controllers\NHIS;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Rate;

class RateController extends Controller
{
    public function index()
    {
        return view('dashboard.nhis.rates.index')->with('rates', Rate::all()); 
    }

    public function create()
    {
        return view('dashboard.nhis.rates.create');
    }

    public function store(Request $request)
    {
        
        Session::flash('success', 'The rate was Sucessfully saved');
        return redirect()->route('rates.index');
    }

    public function show($id)
    {
        return view('dashboard.nhis.rates.show');
    }

    public function edit($id)
    {
        return view('dashboard.nhis.rates.edit');
    }

    public function update(Request $request, $id)
    {
        Session::flash('success', 'The rate was Sucessfully updated');
        return redirect()->back();
    }

    public function destroy($id)
    {
        Session::flash('success', 'The rate was Sucessfully deleted');
        return redirect()->route('rates.index');
    }
}
