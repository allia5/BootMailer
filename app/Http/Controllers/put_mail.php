<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bootmailer;
use Exception;

class put_mail extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    {
        try{
            $bootmailer = new bootmailer();
            $bootmailer->email=$request->email;
            $bootmailer->etat_email=0;
            $bootmailer->nb_demmande=0;
            $bootmailer->save();
           /* if(!$bootmailer->save()){
                throw new \Exception('failed saved data');
            }
           */
         
           
        }catch(\Exception $e){
            return response()->json(['error'=>'Something went wrong, please try later.']);
        }
       
        return response()->json(['success'=>'Data is successfully added']);
  
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
