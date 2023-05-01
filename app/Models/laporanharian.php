<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use League\CommonMark\Extension\Table\Table;

class Laporanharian extends Model
{
    use HasFactory;

    protected $table = 'laporans';

    protected $fillable = [
        'title','hasil','kesimpulan','catatan','keterangan','start_date','end_date'
    ];
}
