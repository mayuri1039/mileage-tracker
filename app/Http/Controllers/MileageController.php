<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\KmLog;
use App\Models\BikeService;
use App\Models\PetrolRefuel;

class MileageController extends Controller
{
    public function showForm()
    {
        return view('mileage.form');
    }

    public function storeKmLog(Request $request)
    {
        KmLog::create($request->all());
        return redirect()->back();
    }

    public function storeBikeService(Request $request)
    {
        BikeService::create($request->all());
        return redirect()->back();
    }

    public function storePetrolRefuel(Request $request)
    {
        PetrolRefuel::create($request->all());
        return redirect()->back();
    }

    public function showMileageGraph()
    {
        $kmLogs = KmLog::all();
        $petrolRefuels = PetrolRefuel::all();
        $mileages = [];
        foreach ($petrolRefuels as $refuel) {
            $kmLog = $kmLogs->where('start_kms', '<=', $refuel->kms_at_refuel)
                            ->where('end_kms', '>=', $refuel->kms_at_refuel)->first();
            if ($kmLog) {
                $mileages[] = [
                    'date' => $refuel->refuel_date,
                    'mileage' => ($refuel->kms_at_refuel - $kmLog->start_kms) / $refuel->petrol_litres,
                ];
            }
        }
        $mileages = collect($mileages);

        return view('mileage.graph', compact('mileages'));
    }
}

