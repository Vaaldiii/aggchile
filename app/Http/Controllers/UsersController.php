<?php

namespace App\Http\Controllers;

use Intervention\Image\Facades\Image;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;


class UsersController extends Controller
{
    /**
     * Show current user
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $users = User::all();
        return view('app/user/profile')->with([
            'user' => $user,
            'users' => $users,
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
        $user = User::findOrFail($id);
        $user->update($request->except(['image', 'password']));

        if($request->image){
            if($user->image != ""){
                $photoname = $user->image;
            }else{
                $photoname = uniqid().".jpg";
                $user->image = $photoname;
                $user->save();
            }
            Image::make(Input::file('image'))->resize(400, 400)->save("img/users/".$photoname);
        }
        return redirect(url('home/user/profile'))->with('success', 'Perfil actualizado Exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect(url('home/edition'));
    }
}
