<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkaiciuokleController extends Controller
{
    public  function forma(){
        return view ("skaiciuokle");
    }

    public function rezultatas(Request $request){
       $svoris=$request->svoris;
       $ugis=$request->ugis;
       // dd($ugis);
        $kmi=round(($svoris / ($ugis**2))*10000, 2);
        $output=$kmi;
        if ($kmi <= 18.5) {
            $output = "SVERIATE PER MAŽAI";

        } else if ($kmi > 18.5 AND $kmi<=24.9 ) {
            $output = "NORMALUS";

        } else if ($kmi > 24.9 AND $kmi<=29.9) {
            $output =  "TURITE ANTSVORĮ";

        } else if ($kmi > 30.0) {
            $output =  "TURITE NUTUKIMĄ";
        }

        return view ("rezultatas", [

            'svoris'=>$svoris,
            'ugis'=>$ugis,
            'kmi'=>$kmi,
            'output'=>$output

            ]);
    }
}
