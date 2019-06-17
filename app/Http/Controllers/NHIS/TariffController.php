<?php

namespace App\Http\Controllers\NHIS;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tariff;

class TariffController extends Controller
{
    public function index()
    {
        return view('dashboard.nhis.tariffs.index')
        		->with('tariffs', Tariff::all()); 
    }

    public function create()
    {
        return view('dashboard.nhis.tariffs.create');
    }

    public function store(Request $request)
    {
        
        Session::flash('success', 'The tariff was Sucessfully saved');
        return redirect()->route('tariffs.index');
    }

    public function show($id)
    {
        return view('dashboard.nhis.tariffs.show');
    }

    public function edit($id)
    {
        return view('dashboard.nhis.tariffs.edit');
    }

    public function update(Request $request, $id)
    {
        Session::flash('success', 'The tariff was Sucessfully updated');
        return redirect()->back();
    }

    public function destroy($id)
    {
        Session::flash('success', 'The tariff was Sucessfully deleted');
        return redirect()->route('tariffs.index');
    }
}
