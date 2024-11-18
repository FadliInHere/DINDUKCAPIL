<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\PengajuanKtp;
use Illuminate\Http\Request;

class PengajuanKtpController extends Controller
{
    public function index()
    {
        $data = PengajuanKtp::all();
        return view('setting.pengajuanktp.index', compact('data'));
    }

    public function create()
    {
        return view('setting.pengajuanktp.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'alamat' => 'required|string',
            'agama' => 'required|string',
            'pekerjaan' => 'required|string',
            'kewarganegaraan' => 'required|string',
            'status_perkawinan' => 'required|string',
            'keterangan' => 'nullable|string',
        ]);

        PengajuanKtp::create($request->all());
        return redirect()->route('admin.pengajuan.index')->with('success', 'Pengajuan KTP berhasil ditambahkan');
    }

    public function show($id)
    {
        $data = PengajuanKtp::findOrFail($id);
        return view('setting.pengajuanktp.show', compact('data'));
    }

    public function edit($id)
    {
        $data = PengajuanKtp::findOrFail($id);
        return view('setting.pengajuanktp.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'alamat' => 'required|string',
            'agama' => 'required|string',
            'pekerjaan' => 'required|string',
            'kewarganegaraan' => 'required|string',
            'status_perkawinan' => 'required|string',
            'keterangan' => 'nullable|string',
        ]);

        $data = PengajuanKtp::findOrFail($id);
        $data->update($request->all());
        return redirect()->route('setting.pengajuanktp.index')->with('success', 'Pengajuan KTP berhasil diperbarui');
    }

    public function destroy($id)
    {
        PengajuanKtp::destroy($id);
        return redirect()->route('admin.pengajuan.index')->with('success', 'Pengajuan KTP berhasil dihapus');
    }
    public function markAsCompleted($id)
    {
        $pengajuan = PengajuanKtp::findOrFail($id);
        $pengajuan->status_pengajuan = 'Selesai';
        $pengajuan->save();
    
        return redirect()->route('admin.pengajuan.index')->with('success', 'Pengajuan KTP telah diselesaikan');
    }
    
    public function markAsRejected($id)
{
    $pengajuan = PengajuanKtp::findOrFail($id);
    $pengajuan->status_pengajuan = 'Ditolak';
    $pengajuan->save();

    return redirect()->route('admin.pengajuan.index')->with('success', 'Pengajuan KTP telah ditolak');
}
}
