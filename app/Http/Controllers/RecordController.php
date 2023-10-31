<?php

namespace App\Http\Controllers;

use App\Models\Record;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RecordController extends Controller
{
    public function get()
    {
        $records = Record::all();

        return response()->json([
            'records' => $records
        ]);
    }

    public function store(Request $request)
    {
        $records = Record::create([
            'id' => Str::uuid(),
            'type' => $request->type,
            'about' => $request->about,
            'amount' => $request->amount,
            'date' => $request->date,
        ]);

        return response()->json([
            'records' => $records
        ]);
    }

    public function update(Request $request, $id)
    {
        $record = Record::find($id);

        $record->update([
            'type' => $request->type,
            'about' => $request->about,
            'amount' => $request->amount,
            'date' => $request->date,
        ]);

        return response()->json([
            'records' => $record
        ]);
    }

    public function destroy($id)
    {
        $records = Record::find($id);

        $records->delete();

        return response()->json([
            'message' => 'Deleted Successfully!'
        ]);
    }

    public function total($type)
    {
        $count = 0;
        $income = Record::where('type', $type)->get();

        foreach ($income as $i) {
            $count += $i->amount;
        }

        return response()->json([
            'total' => $count
        ]);
    }

    public function overallTotal()
    {
        $count = 0;
        $income = Record::all();

        foreach ($income as $i) {
            $count += $i->amount;
        }

        return response()->json([
            'total' => $count
        ]);
    }
}
