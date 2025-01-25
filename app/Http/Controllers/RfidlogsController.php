<?php

namespace App\Http\Controllers;

use App\Models\Rfidlogs;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class RfidlogsController extends Controller
{
    public function uidgenerate(Request $request)
    {
        $data = [
            'rfid_uid' => Str::uuid(),
            'created_at' => Carbon::now('Asia/Jakarta')
        ];

        $id = DB::table('rfid_logs')->insertGetId($data);
        return response()->json([
            'id' => $id,
            'data' => $data
        ]);
    }

    public function index()
    {
        $datalogs = DB::table('rfid_logs')
            ->get();

        return view('logdata', ['datalogs' => $datalogs]);
    }

    public function delete($id)
    {
        $rfidLog = Rfidlogs::find($id);
        if ($rfidLog) {
            $rfidLog->delete();
            return redirect()->route('rfidlogs.index')->with('success', 'Data has been deleted');
        }

        return redirect()->route('rfidlogs.index')->with('error', 'Data not found');
    }
}
