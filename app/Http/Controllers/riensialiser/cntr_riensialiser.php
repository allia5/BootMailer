<?php

namespace App\Http\Controllers\riensialiser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\bootmailer;
use Symfony\Component\VarDumper\VarDumper;

class cntr_riensialiser extends Controller
{
    public function function_principale(Request $req)
    {
        $nbr_jour_entrer = $req->jour;
        $object = new cntr_riensialiser();
        $count = $object->Get_Data_Update($nbr_jour_entrer);
        return response()->json(['success' => $count . ' data updated succesfely']);
    }
    public function Get_Data()
    {
        $table = DB::table('bootmailer')->get()->where('etat_email', '=', 1);
        $table = json_decode($table);
        return $table;
    }
    public function calcule_jour($date)
    {

        return strtotime($date);
    }
    public function Get_Data_Update($nbr_jour)
    {
        $obj = new cntr_riensialiser();

        $all_data = $obj->Get_Data();



        $count = 0;
        $date_now=date("Y-m-d H:i:s");
       
        foreach ($all_data as $array) {
            $nbr_jour_inst = ($obj->calcule_jour($array->updated_at));
            $nbr_jour_now =($obj->calcule_jour($date_now))/(86400);
            $nbr_jour_inst = $nbr_jour_inst / (86400);
           $nbr_jour_inst= $nbr_jour_now -$nbr_jour_inst;
          
            if ($nbr_jour_inst >= $nbr_jour) {
                $bootmailer=bootmailer::find($array->id);
                $bootmailer->where('id',$array->id)->update(array('etat_email' => 0));
                $count++;
                
            }
        }
        return $count;
    }
}
