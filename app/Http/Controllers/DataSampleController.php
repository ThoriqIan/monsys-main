<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Http\Request;
use App\Models\DataSample;
use App\Events\DataSampleEvent;

class DataSampleController extends Controller {
   public function store(Request $request)
    {
        try {
            // Ambil data dari request
            $status1 = $request->input('status1');
            $status2 = $request->input('status2');
            $pohon = $request->input('pohon');
            $status3 = $request->input('status3');
            $status4 = $request->input('status4');
            $status5 = $request->input('status5');
            $status6 = $request->input('status6');

            // Simpan data ke dalam tabel 'data_samples' menggunakan model DataSample
            DataSample::create([
                'tanggal' => now()->format('ymd'),
                'hari' => now()->format('l'),
                'waktu' => now()->format('H:i:s'),
                'pohon' => $pohon,
                'suhu' => $status1,
                'kelembapan' => $status2,
                'soilMoisture' => $status3,
                'soilQuality' => $status4,
                'gasValue' => $status5,
                'gasLevel' => $status6
            ]);

            return response()->json(['message' => 'Data inserted successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }

        
        $dataSample = new DataSample();
        $dataSample->suhu = $request->input('status1');
        $dataSample->kelembapan = $request->input('status2');
        // Store other sensor data as needed
        $dataSample->save();
        
        // Trigger the event after storing the data
       event(new DataSampleEvent("Data Masuk"));
    
    }
    public function Sample()
    {
        $dataSamples = DataSample::all();
        return view('Pages.DataSample.Sample', compact('dataSamples'));
    }
    public function soilMoist()
    {
        $dataSamples = DataSample::all();
        return view('Pages.DataSample.SoilMoist', compact('dataSamples'));
    }
    public function dht()
    {
        $dataSamples = DataSample::all();
        return view('Pages.DataSample.DHT', compact('dataSamples'));
    }
    public function gasSensor()
    {
        $dataSamples = DataSample::all();
        return view('Pages.DataSample.GasSensor', compact('dataSamples'));
    }
    

}


