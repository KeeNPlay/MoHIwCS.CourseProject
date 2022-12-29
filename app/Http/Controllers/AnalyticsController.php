<?php

namespace App\Http\Controllers;

use App\Models\autoparkModel;
use Illuminate\Http\Request;

class AnalyticsController extends Controller
{
    public function analyticsMachines(Request $request){

        $autopark = new autoparkModel();

        return view('analytics',[
            'countMachines'=>$autopark->getCountMachines($request->company),
            'CountMachinesAtWork'=>$autopark->getCountMachinesAtWork($request->company),
            'CountMachinesNotDriver'=>$autopark->getCountMachinesNotDriver($request->company),
            'CountMachinesUnderOngoingRenovation'=>$autopark->getCountMachinesUnderOngoingRenovation($request->company),
            'CountMachinesRelocation'=>$autopark->getCountMachinesRelocation($request->company),
            'CountMachinesTechnologistSimple'=>$autopark->getCountMachinesTechnologistSimple($request->company),
            'CountMachinesInStorageIsp'=>$autopark->getCountMachinesInStorageIsp($request->company),
            'CountMachinesInStorageNotIsp'=>$autopark->getCountMachinesInStorageNotIsp($request->company),
            'AverageUseOfTechnology1' => $autopark->getAverageUseOfTechnology1($request->company),
            'AverageUseOfTechnology2' => $autopark->getAverageUseOfTechnology2($request->company),
            'TechnicalReadinessFactor' => $autopark->getTechnicalReadinessFactor($request->company),
            'AverageIdleWithEngineOff' => $autopark->getAverageIdleWithEngineOff($request->company),
            'AverageEngineIdlingTime' => $autopark->getAverageEngineIdlingTime($request->company),
            'AverageUseOfTechnology' => ($autopark->getAverageUseOfTechnology1($request->company)+
                    $autopark->getAverageUseOfTechnology2($request->company)),
            'companyName' => $request->company,
            'autoparkList'=> $autopark->getListAutopark($request->company)
        ]);
    }

    public function vehicleCard(Request $request){
        $autopark = new autoparkModel();

        return view('vehicle-card',[
            'machines' => $autopark->select('garageNumber','vehicleVin','company','vehicleObject','vehicleArea','vehicleName','vahicleType')
                ->where('garageNumber','=',"$request->garageNumber")->first(),
        ]);
    }

    public function updateInformation(Request $request){
        $autopark = new autoparkModel();
        $autopark->where('garageNumber','=',"$request->garageNumber")
            ->update( [
                'vehicleVin'=>"$request->vehicleVin",
                'company'=>"$request->company",
                'vehicleObject'=>"$request->vehicleObject",
                'vehicleArea'=>"$request->vehicleArea",
                'vehicleName'=>"$request->vehicleName",
                'vahicleType'=>"$request->vehicleType",
            ]);
        return view('vehicle-card',[
            'machines' => $autopark->select('garageNumber','vehicleVin','company','vehicleObject','vehicleArea','vehicleName','vahicleType')
                ->where('garageNumber','=',"$request->garageNumber")->first(),
        ]);
    }
}
