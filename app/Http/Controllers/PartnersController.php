<?php

namespace App\Http\Controllers;

use App\Partner;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;

class PartnersController extends Controller
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
        return view('app.partners.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), Partner::$rules, Partner::$messages);
        if ($validator->fails()) {
            return redirect(url('home/partners/create'))
                ->withErrors($validator)
                ->withInput();
        }
        
        $partner = New Partner($request->except(['image', 'cv']));

        if ($request->image){
            if($partner->image){
                $photoname = $partner->image;
            }else{
                $photoname = uniqid().".jpg";
            }
            Image::make(Input::file('image'))->resize(200, 200)->save("img/team/".$photoname);
            $partner->image = $photoname;
        }

        if ($request->cv){
            $cv = $request->cv;
            if($partner->cv){
                $cvname = $partner->cv;
            }else{
                $cvname = uniqid().'.'.$cv->guessClientExtension();
            }
            $cv->move(public_path() . '/team/', $cvname);
            $partner->cv = $cvname;
        }
        $partner->save();
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
        $partner = Partner::findOrFail($id);
        return view('app.partners.edit')->with('partner', $partner);
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
        $partner = Partner::findOrFail($id);

        $validator = Validator::make($request->all(), Partner::$rules, Partner::$messages);
        if ($validator->fails()) {
            return redirect(url('home/partners/'.$id.'/edit'))
                ->withErrors($validator)
                ->withInput();
        }

        $partner->update($request->except('image', 'cv'));

        if($request->image){
            $photoname = $partner->image;
            Image::make(Input::file('image'))->resize(200, 200)->save("img/team/".$photoname);
        }

        if ($request->cv) {
            $cv = $request->cv;
            $cvname = $partner->cv;
            $cv->move(public_path() . '/team/', $cvname);
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
        $partner = Partner::findOrFail($id);
        $partner->delete();
        return redirect(url('home/edition'));
    }
}
