<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use League\CommonMark\Extension\Table\Table;

class Laporanharian extends Model
{
    use HasFactory;

    protected $table = 'laporanharians';

    protected $fillable = [
        'hari',
        'jam',
        'aktivitas',
        'catatan',
        'hasil',
        'kesimpulan',
        'keterangan',
        'status_verifikasi',
    ];
}
