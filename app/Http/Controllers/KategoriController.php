<?php

namespace App\Http\Controllers;

use App\Kategori;
use Illuminate\Http\Request;
use DataTables;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $kategori = Kategori::latest()->get();
            return Datatables::of($kategori)
                ->addIndexColumn()
                ->addColumn('aksi', function ($row) {
                    $btn = '<button type="submit" title="Edit" class="edit-kategori btn btn-warning btn-sm" data-toggle="modal" data-target="#edit-kategori" data-id="' . $row->id . '" data-nama_kategori="' . $row->nama_kategori . '"> <i class="fa fa-edit"></i></button>';
                    $btn = $btn . ' <button type="submit" title="Hapus" class="hapus-kategori btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus-kategori" data-id="' . $row->id . '" data-nama_kategori="' . $row->nama_kategori . '"><i class="fa fa-trash-o"></i></button>';
                    return $btn;
                })
                ->rawColumns(['aksi'])
                ->make(true);
        }
        return view('kategori.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \LogActivity::addToLog("Menambah Kategori");

        $request->validate([
            'nama_kategori' => 'required|unique:kategoris'
        ]);
        $kategori = new Kategori();
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->slug = str_slug($request->nama_kategori);
        $kategori->save();

        $response = [
            'success' => true,
            'data'  => $kategori,
            'message' => 'Berhasil Menambah!'
        ];
        return response()->json($response, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function show(Kategori $kategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function edit(Kategori $kategori)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        \LogActivity::addToLog("Mengubah Kategori");

        $this->validate($request, [
            'nama_kategori' => 'required|unique:kategoris'
        ]);
        $kategori = Kategori::findOrFail($request->id);
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->slug = str_slug($request->nama_kategori);
        $kategori->save();

        $response = [
            'success' => true,
            'data'  => $kategori,
            'message' => 'Berhasil Mengubah!'
        ];
        return response()->json($response, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        \LogActivity::addToLog("Menghapus Kategori");

        $kategori = Kategori::findOrFail($request->id);
        if (!Kategori::destroy($request->id)) {
            return redirect()->back();
        } else {
            $kategori->delete();

            $response = [
                'success' => true,
                'data'  => $kategori,
                'message' => 'Berhasil dihapus!'
            ];
            return response()->json($response, 200);
        }
    }
}
