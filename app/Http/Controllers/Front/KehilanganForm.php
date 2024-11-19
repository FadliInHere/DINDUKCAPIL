<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;

use App\Models\KehilanganKtp;
use Illuminate\Http\Request;

class KehilanganFormController extends Controller
{
    public function index()
    {
        $data = KehilanganKtp::all();
        return view('front.kehilanganktp.index', compact('data'));
    }

    public function create()
    {
        return view('front.kehilanganktp.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nik' => 'required|string|max:16',
            'alamat' => 'required|string',
            'tanggal_kehilangan' => 'required|date',
            'tempat_kehilangan' => 'required|string',
            'keterangan' => 'nullable|string',
        ]);

        KehilanganKtp::create($request->all());
        return redirect()->route('front.kehilangan.index')->with('success', 'Laporan kehilangan KTP berhasil ditambahkan');
    }

    public function show($id)
    {
        $data = KehilanganKtp::findOrFail($id);
        return view('front.kehilanganktp.show', compact('data'));
    }

    public function edit($id)
    {
        $data = KehilanganKtp::findOrFail($id);
        return view('front.kehilanganktp.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nik' => 'required|string|max:16',
            'alamat' => 'required|string',
            'tanggal_kehilangan' => 'required|date',
            'tempat_kehilangan' => 'required|string',
            'keterangan' => 'nullable|string',
        ]);

        $data = KehilanganKtp::findOrFail($id);
        $data->update($request->all());
        return redirect()->route('front.kehilanganktp.index')->with('success', 'Laporan kehilangan KTP berhasil diperbarui');
    }

    public function destroy($id)
    {
        KehilanganKtp::destroy($id);
        return redirect()->route('front.kehilangan.index')->with('success', 'Laporan kehilangan KTP berhasil dihapus');
    }

    public function markAsCompleted($id)
    {
        $pengajuan = KehilanganKtp::findOrFail($id);
        $pengajuan->status_pengajuan = 'Selesai';
        $pengajuan->save();
    
        return redirect()->route('front.kehilangan.index')->with('success', 'Pengajuan KTP telah diselesaikan');
    }
    
    public function markAsRejected($id)
{
    $pengajuan = KehilanganKtp::findOrFail($id);
    $pengajuan->status_pengajuan = 'Ditolak';
    $pengajuan->save();

    return redirect()->route('front.kehilangan.index')->with('success', 'Pengajuan KTP telah ditolak');
}

}
