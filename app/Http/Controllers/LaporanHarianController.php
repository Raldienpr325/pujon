<?php

namespace App\Http\Controllers;

use App\Models\Laporanharian;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LaporanHarianController extends Controller
{
    public function index(){
        $events = array();
        $laporan = Laporanharian::all();
        foreach($laporan as $each){
            $events[] = [
                'id' => $each->id,
                'title' => $each->title,
                'hasil' => $each->hasil,
                'catatan' => $each->catatan,
                'kesimpulan' => $each->kesimpulan,
                'keterangan' => $each->keterangan,
                'start' => $each->start_date,
                'end' => $each->end_date,
            ];
        }
        return view('harian.pageharian',compact('events'));
    }

    public function store(Request $request){
    //    return $request->all();
    $request->validate([
        'title' => 'required|string',
        'hasil' => 'required|string',
        'catatan' => 'required|string',
        'kesimpulan' => 'required|string',
        'keterangan' => 'required|string',
        'start_date' => 'required|date|date_format:Y-m-d',
        'end_date' => 'required|date|date_format:Y-m-d|after:start_date',
    ]);
    $start_date = Carbon::parse($request->start_date);
    $end_date = Carbon::parse($request->end_date);

    $create = Laporanharian::create([
        'title' => $request->title,
        'hasil' => $request->hasil,
        'catatan' => $request->catatan,
        'kesimpulan' => $request->kesimpulan,
        'keterangan' => $request->keterangan,
        'start_date' => $start_date,
        'end_date' => $end_date,
    ]);

    return response()->json($create);

    }

    public function update(Request $request,$id){
        $find = Laporanharian::find($id);
        if(!$find){
            return response()->json([
                'error' => 'Unbale to locate the event'
            ],404);
        }
        $find->update([
            'start_date' => $request->start_date,
            'end_date' => $request->end_date
        ]);
        return response()->json('laporan updated');
    }

    public function destroy($id)
    {
        $find = Laporanharian::find($id);
        if(!$find){
            return response()->json([
                'error' => 'Unbale to locate the event'
            ],404);
        }
        $find->delete();
        return response()->json(`laporan dengan id-${id} dihapus`);
    }
}
