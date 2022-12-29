<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class autoparkModel extends Model
{
    protected $table = 'auotpark';

    public function getCountMachines($company){
        return  count(DB::table( "$this->table" )->select('company')
            ->where('company',"$company")->get());
    }

    public function getCountMachinesAtWork($company){
        return  count(DB::table( "$this->table" )->select('company')
            ->where('company',"$company")
            ->where('status','В рейсе')
            ->get());
    }

    public function getCountMachinesNotDriver($company){
        return  count(DB::table( "$this->table" )->select('company')
            ->where('company',"$company")
            ->where('status','В простое б. в.')
            ->get());
    }

    public function getCountMachinesUnderOngoingRenovation($company){
        return  count(DB::table( "$this->table" )->select('company')
            ->where('company',"$company")
            ->where('status','В ремонте')
            ->get());
    }

    public function getCountMachinesRelocation($company){
        return  count(DB::table( "$this->table" )->select('company')
            ->where('company',"$company")
            ->where('status','В перебазировке')
            ->get());
    }

    public function getCountMachinesTechnologistSimple($company){
        return  count(DB::table( "$this->table" )->select('company')
            ->where('company',"$company")
            ->where('status','В техн. простое')
            ->get());
    }

    public function getCountMachinesInStorageIsp($company){
        return  count(DB::table( "$this->table" )->select('company')
            ->where('company',"$company")
            ->where('status','На хранении (И)')
            ->get());
    }

    public function getCountMachinesInStorageNotIsp($company){
        return  count(DB::table( "$this->table" )->select('company')
            ->where('company',"$company")
            ->where('status','На хранении (НИ)')
            ->get());
    }

    public function getAverageUseOfTechnology1($company){
        return (DB::table("$this->table")
            ->join('technology_usage', 'auotpark.garageNumber', '=', 'technology_usage.garageNumber')
            ->where('auotpark.company','=',"$company")->sum('averageUsageFirstShift'))/(DB::table("$this->table")
                ->join('technology_usage', 'auotpark.garageNumber', '=', 'technology_usage.garageNumber')
                ->where('auotpark.company','=',"$company")->count());
    }

    public function getAverageUseOfTechnology2($company){
        return (DB::table("$this->table")
                ->join('technology_usage', 'auotpark.garageNumber', '=', 'technology_usage.garageNumber')
                ->where('auotpark.company','=',"$company")->sum('averageUsageSecondShift'))/(DB::table("$this->table")
                ->join('technology_usage', 'auotpark.garageNumber', '=', 'technology_usage.garageNumber')
                ->where('auotpark.company','=',"$company")->count());
    }

    public function getTechnicalReadinessFactor($company){
        return (DB::table("$this->table")
                ->join('technology_usage', 'auotpark.garageNumber', '=', 'technology_usage.garageNumber')
                ->where('auotpark.company','=',"$company")->sum('technicalReadiness'))/(DB::table("$this->table")
                ->join('technology_usage', 'auotpark.garageNumber', '=', 'technology_usage.garageNumber')
                ->where('auotpark.company','=',"$company")->count());
    }

    public function getAverageIdleWithEngineOff($company){
        return (DB::table("$this->table")
                ->join('technology_usage', 'auotpark.garageNumber', '=', 'technology_usage.garageNumber')
                ->where('auotpark.company','=',"$company")->sum('averageIdle'))/(DB::table("$this->table")
                ->join('technology_usage', 'auotpark.garageNumber', '=', 'technology_usage.garageNumber')
                ->where('auotpark.company','=',"$company")->count());
    }

    public function getAverageEngineIdlingTime($company){
        return (DB::table("$this->table")
                ->join('technology_usage', 'auotpark.garageNumber', '=', 'technology_usage.garageNumber')
                ->where('auotpark.company','=',"$company")->sum('averageDummy'))/(DB::table("$this->table")
                ->join('technology_usage', 'auotpark.garageNumber', '=', 'technology_usage.garageNumber')
                ->where('auotpark.company','=',"$company")->count());
    }

    public function getListAutopark($company){
        return  DB::table( "$this->table" )->select('vehicleName','vahicleType','vehicleObject','status','garageNumber')
            ->where('company',"$company")
            ->get();
    }
}
