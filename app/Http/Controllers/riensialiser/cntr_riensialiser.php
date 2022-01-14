<?php

namespace App\Http\Controllers\riensialiser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\bootmailer;

class cntr_riensialiser extends Controller
{
    public function function_principale(Request $req){
       $nbr_jour_entrer=$req->jour;
       $object = new cntr_riensialiser();
     $count= $object->Get_Data_Update($nbr_jour_entrer);
       return response()->json(['success'=>$count.' data updated succesfely']);

    }
    public function Get_Data(){
        $table=DB::table('bootmailer')->get()->where('etat_email','=',1);
        $table = json_decode($table);
        return $table;

       
    }
    public function calcule_jour($date){

     return strtotime($date);

    }
    public function Get_Data_Update($nbr_jour){
        $obj=new cntr_riensialiser();
         $all_data = $obj->Get_Data();
         $count=0;
     foreach($all_data as $array){
         $nbr_jour_inst= $obj->calcule_jour($array['update_at']);
         if($nbr_jour_inst>=$nbr_jour){
              DB::table('bootmailer')->get()->where('id','=',$array['id'])->update(['etat_email' =>1]);
              $count++;
         }
     }
     return $count;
    }

}
