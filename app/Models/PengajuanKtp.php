<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengajuanKtp extends Model
{
    use HasFactory;

    protected $table = 'pengajuanktp';

    protected $fillable = [
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat',
        'agama',
        'pekerjaan',
        'kewarganegaraan',
        'status_perkawinan',
        'status_pengajuan',
        'keterangan',
    ];
}
