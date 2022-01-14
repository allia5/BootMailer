<?php

namespace App\Http\Controllers\riensialiser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\bootmailer;

class cntr_riensialiser extends Controller
{
    public function function_principale(Request $req){
       $nbr_jour=$req->jour;

    }
    public function Get_Data(){
        $table=DB::table('bootmailer')->get()->where('etat','=',1);
        $table = json_decode($table);
        return $table;

       
    }
    public function calcule_jour($date){

     return strtotime($date);

    }
    public function update_data($table_id){
        

    }

}
