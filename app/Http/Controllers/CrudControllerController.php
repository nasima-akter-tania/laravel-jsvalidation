<?php

namespace App\Http\Controllers;

use App\CrudController;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\CrudModel;
use Validator;
use Session;
class CrudControllerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_data=CrudModel::all();

       return view('crud_from',['all_data'=>$all_data]);
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
    public function store(Request $request)
    {
        $crud_obj=new CrudModel;
        $validate_data=Validator::make($request->all(),$crud_obj->validate_data());
        if($validate_data->fails())
         {
             return back()->withInput()->withErrors($validate_data);
           
         }
        else
         {
           $data=$request->all();
          
           if(!Arr::has($data,'status') and !Arr::has($data,'random_number'))
            {
              $data=Arr::set($data,'status','Active');
              $array = [1, 2, 3, 4, 5,10,20,10];
              $random_number=Arr::random($array,2);
              
              $get_user_number=head($data);
              $convert_data=Arr::collapse([$random_number,array($get_user_number)]);
              $secrate_key=$convert_data[0].$convert_data[1].$convert_data[2];
              $data=Arr::add($data,'secrate_key',$secrate_key);
           

            }
     
            $crud_obj->fill($data)->save();
          
           Session::flash('success','Inserted SuccessFully');
          return back();
         }
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CrudController  $crudController
     * @return \Illuminate\Http\Response
     */
    public function show(CrudController $crudController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CrudController  $crudController
     * @return \Illuminate\Http\Response
     */
    public function edit(CrudController $crudController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CrudController  $crudController
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CrudController $crudController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CrudController  $crudController
     * @return \Illuminate\Http\Response
     */
    public function destroy(CrudController $crudController)
    {
        //
    }
}
