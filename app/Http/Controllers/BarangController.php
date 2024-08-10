<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\Facades\DataTables;
use Barryvdh\DomPDF\Facade\Pdf;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.barang.index');
    }

    public function getBarang(Request $request)
    {
        if ($request->ajax()) {
            $barang = Barang::all();

            return DataTables::of($barang)
                ->editColumn('aksi', function ($barang) {
                    return view('partials._action', [
                        'model' => $barang,
                        'show_url' => route('barang.show', $barang->id),
                        'edit_url' => route('barang.edit', $barang->id),
                        'delete_url' => route('barang.destroy', $barang->id),
                    ]);
                })
                ->addIndexColumn()
                ->rawColumns(['aksi'])
                ->make(true);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.barang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required|string|max:255',
            'merk' => 'required',
            'tipe' => 'required',
            'satuan' => 'required|numeric',
        ]);

        $barang = Barang::create($request->all());

        Alert::success('Success', 'Barang berhasil ditambahkan!');
        return redirect()->route('barang.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Barang $barang)
    {
        return view('admin.barang.show', compact('barang'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Barang $barang)
    {
        return view('admin.barang.edit', compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Barang $barang)
    {
        $request->validate([
            'nama_barang' => 'required|string|max:255',
            'merk' => 'required',
            'tipe' => 'required',
            'satuan' => 'required|numeric',
        ]);

        $barang->update($request->all());

        Alert::success('Success', 'Barang berhasil diupdate!');
        return redirect()->route('barang.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Barang $barang)
    {
        $barang->destroy($barang->id);

        Alert::success('Success', 'Barang berhasil dihapus!');
        return redirect()->route('barang.index');
    }

    public function print(Request $request)
    {
        $barang = Barang::all();
        $pdf = PDF::loadView('admin.barang._pdf', compact('barang'));
        return $pdf->stream();
    }

    public function export()
    {
        $barang = Barang::all();
        return view('admin.barang._excel', compact('barang'));
    }
}
