<?php

namespace App\Http\Controllers\sattistique_cntrler;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\bootmailer;
use Illuminate\Http\Request;

class cntrler_stat_info extends Controller
{
    public function get_count_all_email_none_env(){
      $table_nbr=DB::table('bootmailer')->get()->where('etat_email','=',0);
      return count($table_nbr);
    }
    public function get_count_all_email_env(){
        $table_nbr=DB::table('bootmailer')->get()->where('etat_email','=',1);
        return count($table_nbr);
    }
    public function Get_All_Email_env_ce_jour(){
        $table_nbr=DB::table('bootmailer')->get();
        $date_now=date('d-m-y');
        $count=0;

        foreach($table_nbr as $table){
            $date_format=date("d-m-y",strtotime($table->updated_at));
            if($date_format==$date_now and $table->etat_email==1 ){
                  $count++;  
            }
        }
        return $count;
    }

    public function stat_info(){
        $table=array();
        $obj=new cntrler_stat_info();
        $table[1]=$obj->get_count_all_email_none_env();
        $table[2]=$obj-> get_count_all_email_env();
        $table[3]=$obj->Get_All_Email_env_ce_jour();

    }
}
