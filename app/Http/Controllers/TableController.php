<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Table;


class TableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Table::all();
        return view('table', compact(
            'datas'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Table;
        return view('create', compact(
            'model'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new Table;
        $model->nama = $request->nama;
        $model->nrp = $request->nrp;
        $model->alamat = $request->alamat;
        $model->email = $request->email;
        $model->save();
        return redirect('table');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Table::find($id);
        return view('update', compact(
            'model'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $model = Table::find($id);
        $model->nama = $request->nama;
        $model->nrp = $request->nrp;
        $model->alamat = $request->alamat;
        $model->email = $request->email;
        $model->save();
        return redirect('table');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Table::find($id);
        $model->delete();
        return redirect('table');
    }
    public function aboutme()
    {
        return view('aboutme', ['title' => 'aboutme']);
    }
}
