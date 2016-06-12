<?php

namespace App\Http\Controllers;

use App\Image;
use App\Page;
use App\Partner;
use App\Service;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class EditionController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function panel()
    {
        $users= User::all();
        $partners = Partner::all();
        $services = Service::all();
        return view('app.controlPanel')->with([
            "partners" => $partners,
            "services" => $services,
            "users" => $users,
        ]);
    }

    public function theme()
    {
        $pages = Page::all()->sortBy('position');
        $images = Image::all();
        return view('app.themePanel')->with([
            "pages" => $pages,
            "images" => $images,
        ]);
    }
}
