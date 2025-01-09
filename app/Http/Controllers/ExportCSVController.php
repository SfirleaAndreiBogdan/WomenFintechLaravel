<?php

namespace App\Http\Controllers;

use App\Models\Members;
use Illuminate\Http\Request;

class ExportCSVController extends Controller
{
    public function export(){
        $members=Members::all();
        $csv = fopen('php://output','w');
        fputcsv($csv,['Name','Email','Profession','Company','Status']);

        foreach($members as $member){
            fputcsv($csv,[$member->name,$member->email,$member->profession,$member->company,$member->status]);
        }

        fclose($csv);
        return response()->streamDownload(function() use ($csv){},'members.csv');
    }
}
