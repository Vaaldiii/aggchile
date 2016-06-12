<?php

namespace App\Http\Controllers;

use App\Image;
use App\Page;
use App\Partner;
use App\Service;
use App\Setting;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Response;


class PagesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $user = Auth::user();
        $menu = Page::all()->sortBy('position');
        View::share('user', $user);
        View::share('pages', $menu);
        //$this->middleware('auth');
    }

    public function index()
    {
        $index = Page::findOrFail(1);
        $setting = Setting::findOrFail(1);
        return view('pages.index')->with(['page' => $index, 'setting' => $setting]);
    }

    public function whoweare()
    {
        $who = Page::findOrFail(2);
        $setting = Setting::findOrFail(1);
        return view('pages.whoweare')->with(['page' => $who, 'setting' => $setting]);
    }

    public function services()
    {
        $serv = Page::findOrFail(3);
        $services = Service::all();
        $setting = Setting::findOrFail(1);
        return view('pages.services')->with([
            "services" => $services,
            "page" => $serv,
            'setting' => $setting,
            
        ]);
    }

    public function team(){
        $team = Page::findOrFail(4);
        $partners = Partner::all();
        $setting = Setting::findOrFail(1);
        return view('pages.team')->with([
            "page" => $team,
            "partners" => $partners,
            'setting' => $setting,
        ]);
    }

    public function contact(){
        $setting = Setting::findOrFail(1);
        return view('pages.contact')->with([
            'setting' => $setting,
        ]);
    }

    /**
     * Show the sspecified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $page = Page::findOrFail($id);
        return view('pages.custom')->with('page', $page);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $images = Image::all();
        return view('app.pages.create')->with('images', $images);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), Page::$rules, Page::$messages);
        if ($validator->fails()) {
            return redirect(url('home/pages/create'))
                ->withErrors($validator)
                ->withInput();
        }
        $page = New Page($request->all());
        $page->type = "dynamic";
        $page->hascontent2 = false;
        $page->hascontent3 = false;
        $page->url = "/pages";
        $page->save();
        return redirect(url('home/theme'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $images = Image::all();
        $page = Page::findOrFail($id);
        return view('app.pages.edit')->with([
            'page' => $page,
            'images' => $images,
        ]);
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
        $validator = Validator::make($request->all(), Page::$rules, Page::$messages);
        if ($validator->fails()) {
            return redirect(url('home/pages/'.$id.'/edit'))
                ->withErrors($validator)
                ->withInput();
        }

        $page = Page::findOrFail($id);
        if($page->editable){
            $page->update($request->all());
        }
        return redirect(url('home/theme'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $page = Page::findOrFail($id);
        if($page->type != "static"){
            $page->delete();
        }

        return redirect(url('home/theme'));
    }

    public function updateMenu(Request $request)
    {
        $counter = 0;
        $pages = $request->list;
        foreach ($pages as $position => $string){
            $id = explode("_", $string)[1];
            $page = Page::findOrFail($id);
            $page->position = $position;
            if(!$page->save()){
                $counter++;
            }
        }

        if($counter != 0){
            return Response::json([
                'error' => true,
                'message' => 'Ups! Ha ocurrido un error.',
                'code' => 500
            ], 500);
        }else{
            return Response::json([
                'error' => false,
                'message' => 'Menu actualizado exitosamente!',
                'code'  => 200
            ], 200);
        }

    }
}
