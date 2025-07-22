<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LaporanController extends Controller
{
    public function index()
    {
        return Laporan::all();
    }

    public function store(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'lokasi' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Jika validasi gagal
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validasi gagal',
                'errors' => $validator->errors()
            ], 422);
        }

        // Upload foto jika ada
        $foto = null;
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto')->store('public/laporan_foto');
            $foto = basename($foto); // hanya ambil nama filenya
        }

        // Simpan data laporan
        $laporan = Laporan::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'lokasi' => $request->lokasi,
            'status' => 'pending',
            'foto' => $foto,
        ]);

        // Berikan response sukses
        return response()->json([
            'success' => true,
            'message' => 'Laporan berhasil dikirim!',
            'data' => $laporan
        ], 201);
    }

    public function show($id)
    {
        return Laporan::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $laporan = Laporan::findOrFail($id);
        $laporan->update($request->all());
        return response()->json($laporan, 200);
    }

    public function destroy($id)
    {
        $laporan = Laporan::findOrFail($id);
        $laporan->delete();
        return response()->json(['message' => 'Laporan berhasil dihapus']);
    }
}

