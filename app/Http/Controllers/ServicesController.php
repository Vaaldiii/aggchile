<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;

class ServicesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('app.services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), Service::$rules, Service::$messages);
        if ($validator->fails()) {
            return redirect(url('home/services/create'))
                ->withErrors($validator)
                ->withInput();
        }

        $service = New Service($request->except(['image', 'brochure']));

        if ($request->image){
            if($service->image){
                $photoname = $service->image;
            }else{
                $photoname = uniqid().".jpg";
            }
            Image::make(Input::file('image'))->resize(200, 200)->save("services/".$photoname);
            $service->image = $photoname;
        }

        if ($request->brochure){
            $cv = $request->brochure;
            if($service->brochure){
                $cvname = $service->brochure;
            }else{
                $cvname = uniqid().'.'.$cv->guessClientExtension();
            }
            $cv->move(public_path() . '/services/', $cvname);
            $service->brochure = $cvname;
        }


        $service->save();
        return redirect(url('home/edition'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::findOrFail($id);
        //dd($service);
        return view('app.services.edit')->with('service', $service);
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
        $validator = Validator::make($request->all(), Service::$rules, Service::$messages);
        if ($validator->fails()) {
            return redirect(url('home/services/'.$id.'/edit'))
                ->withErrors($validator)
                ->withInput();
        }

        $service = Service::findOrFail($id);
        $service->update($request->except('image', 'brochure'));

        if ($request->image){
            if($service->image){
                $photoname = $service->image;
            }else{
                $photoname = uniqid().".jpg";
            }
            Image::make(Input::file('image'))->resize(200, 200)->save("services/".$photoname);
        }
        if ($request->brochure){
            $cv = $request->brochure;
            if($service->brochure){
                $cvname = $service->brochure;
            }else{
                $cvname = uniqid().'.'.$cv->guessClientExtension();
            }
            $cv->move(public_path() . '/services/', $cvname);
        }

        return redirect(url('home/edition'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        $service->delete();
        return redirect(url('home/edition'));
    }
}
