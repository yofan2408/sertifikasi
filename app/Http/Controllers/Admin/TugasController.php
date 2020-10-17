<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Kategori;
use App\Task;
use Illuminate\Http\Request;

class TugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pageName = "Data Tugas";
        $data = Task::all();
        return view('admin.tugas.index', compact('data', 'pageName'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data_kategori = Kategori::all();
        $pagename = 'Form Input Tugas';
        return view('admin.tugas.create', compact('pagename', 'data_kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'txtnama_tugas' => 'required',
            'optionid_kategori' => 'required',
            'txtketerangan_tugas' => 'required',
            'radiostatus_tugas' => 'required'
        ]);

        $data_tugas = new Task([
            'nama_tugas' => $request->get('txtnama_tugas'),
            'id_kategori' => $request->get('optionid_kategori'),
            'ket_tugas' => $request->get('txtketerangan_tugas'),
            'status_tugas' => $request->get('radiostatus_tugas')
        ]);

        $data_tugas->save();
        return redirect('admin/tugas')->with('sukses', 'tugas berhasil disimpan');
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
        $data_kategori = Kategori::all();
        $pageName = 'Update Tugas';
        $data = Task::find($id);
        return view('admin.tugas.edit', compact('data', 'pageName', 'data_kategori'));
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
        $request->validate([
            'txtnama_tugas' => 'required',
            'optionid_kategori' => 'required',
            'txtketerangan_tugas' => 'required',
            'radiostatus_tugas' => 'required'
        ]);

        $tugas = Task::find($id);

        $tugas->nama_tugas = $request->get('txtnama_tugas');
        $tugas->id_kategori = $request->get('optionid_kategori');
        $tugas->ket_tugas = $request->get('txtketerangan_tugas');
        $tugas->status_tugas = $request->get('radiostatus_tugas');
        

        $tugas->save();
        return redirect('admin/tugas')->with('sukses', 'tugas berhasil disimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
