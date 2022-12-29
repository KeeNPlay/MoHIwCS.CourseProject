<?php

namespace App\Http\Controllers;

use App\Models\autoparkModel;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ManagementController extends Controller {
    public function management( Request $request ) {

        $autopark = new autoparkModel();

        return view( 'management', [
            'autoparkList' => $autopark->getListAutopark( $request->company ),
            'company' => $request->company
        ] );
    }

    public function updateInformationUser( Request $request ) {
        $userBDModel = new User();
        $userBDModel->where( 'id', Auth::user()->id )
            ->update( [
                'fullName'        => "$request->userName",
                'position'        => "$request->jobTitle",
                'electronic_mail' => "$request->eMail",
                'phone_number'    => "$request->mobileNumber",
                'company'         => "$request->company",
            ] );
        return redirect( route( 'settings' ) );
    }

    public function settingList() {
        return view( 'settings' );
    }

    public function axiosDelete( Request $request ) {
        foreach ( $request->arrayChecked as $item ) {
            $autopark = new autoparkModel();
            $autopark->where( 'garageNumber', "$item" )->delete();
        }
        return response()->json( '', 200 );
    }

    public function axiosUpdateObject( Request $request ) {
        foreach ( $request->arrayChecked as $item ) {
            $autopark = new autoparkModel();
            $autopark->where( 'garageNumber', "$item" )->update([
                'vehicleObject' => $request->object
            ]);
        }
        return response()->json( '', 200 );
    }

    public function axiosInsert(Request $request) {
        $autopark = new autoparkModel();
        $autopark->insert( [
                'garageNumber'        => "$request->garageNumber",
                'vehicleName'        => "$request->vehicleName",
                'vahicleType' => "$request->vehicleType",
                'vehicleVin'    => "$request->vehicleVin",
                'company'         => "$request->company",
                'vehicleObject' => "$request->vehicleObject",
                'vehicleArea'    => "$request->newObject",
                'status'         => "$request->vehicleStatus",
            ] );
        return redirect( '/management/'.$request->company);
    }
}
