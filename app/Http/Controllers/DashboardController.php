<?php

namespace App\Http\Controllers;

use App\Models\DataForest;
use App\Models\DataSample;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Log;

class DashboardController extends Controller
{
    
    public function Dashboard(){
        //composer require nesbot/carbon for time
        $lastDataSample =
        DataSample::orderBy('created_at', 'desc')->first();

        $lastDataForest =
        DataForest::orderBy('created_at', 'desc')->first();

        $dataBarChart =
        DataForest::select(DataForest::raw('DATE(created_at) as hari'), DataForest::raw('count(*) as views'))
        ->whereBetWeen('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])
        ->groupby('hari')
        ->get();

        foreach ($dataBarChart as $dbc) {
            $dbc->hari = Carbon::parse($dbc['hari'])->format('l');
        }

        $dataLineChart =
        collect(DataSample::all()->take(-3))->map(function($data){
            $newData = [];
            $newData = $data->gasValue;
            
            return $newData;
        });

        

        $dataForest =
        DataForest::orderBy('created_at', 'desc')->take(4)->get();

        return view(
            'Pages.Dashboard.Dashboard',
            compact('dataBarChart', 'lastDataSample', 'dataLineChart', 'dataForest', 'lastDataForest')
        );
    }

}
