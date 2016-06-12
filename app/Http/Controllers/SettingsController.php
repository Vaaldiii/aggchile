<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;

class SettingsController extends Controller
{
    public function index()
    {
        $setting = Setting::findOrFail(1);
        return view('app.settingsPanel')->with(['setting' => $setting]);
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

        $setting = Setting::findOrFail($id);

        $validator = Validator::make($request->all(), Setting::$rules, Setting::$messages);
        if ($validator->fails()) {
            return redirect(url('home/settings'))
                ->withErrors($validator)
                ->withInput();
        }

        $setting->update($request->except(['imageLogo', 'imageAccordion1', 'imageAccordion2', 'imageQuienesSomos', 'imageServicios', 'imageContacto']));

        if($request->hasImageQuienesSomos != 'yes'){
            $setting->hasImageQuienesSomos = 'no';
        }

        if($request->hasImageServicios != 'yes'){
            $setting->hasImageServicios = 'no';
        }

        if($request->hasImageContacto != 'yes'){
            $setting->hasImageContacto = 'no';
        }

        if($request->imageLogo){
            $photoname = $setting->imageLogo;
            Image::make(Input::file('imageLogo'))->save("template/".$photoname);

        }

        if($request->imageAccordion1){
            $photoname = $setting->imageAccordion1;
            Image::make(Input::file('imageAccordion1'))->save("template/".$photoname);

        }

        if($request->imageAccordion2){
            $photoname = $setting->imageAccordion2;
            Image::make(Input::file('imageAccordion2'))->save("template/".$photoname);

        }

        if($request->imageQuienesSomos){
            $photoname = $setting->imageQuienesSomos;
            Image::make(Input::file('imageQuienesSomos'))->save("template/".$photoname);

        }

        if($request->imageServicios){
            $photoname = $setting->imageServicios;
            Image::make(Input::file('imageServicios'))->save("template/".$photoname);

        }

        if($request->imageContacto){
            $photoname = $setting->imageContacto;
            Image::make(Input::file('imageContacto'))->save("template/".$photoname);

        }

        $setting->save();
        
        return redirect(url('home/settings'));

    }
}
