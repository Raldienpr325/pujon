<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LaporanSeeder extends Seeder
{
    public function run()
    {
        for ($i=1; $i<=5; $i++) {
            $startDate = Carbon::now()->addDays($i)->format('Y-m-d');
            $endDate = Carbon::parse($startDate)->addDays(0)->format('Y-m-d');
            DB::table('laporans')->insert([
                'title' => 'Aktivitas ' . $i,
                'hasil' => 'hasil ' . $i,
                'catatan' => 'catatan ' . $i,
                'kesimpulan' => 'kesimpulan ' . $i,
                'keterangan' => 'keterangan ' . $i,
                'start_date' => $startDate,
                'end_date' => $endDate,
            ]);
        }
    }
}
