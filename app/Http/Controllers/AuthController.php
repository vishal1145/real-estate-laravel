<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\ClientDetails;  

class AuthController extends Controller
{
    public function loginView()
    {
        return view('login');
    }

    public function login(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => ['required', 'email', 'exists:users'],
            'password' => ['required'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $validated = $validator->validated();

        if (\Auth::attempt(array('email' => $validated['email'], 'password' => $validated['password']))) {
            return redirect()->route('elements/avatar');
        } else {
            $validator->errors()->add(
                'password', 'The password does not match with username'
            );
            return redirect()->back()->withErrors($validator)->withInput();
        }
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }
    public function form(Request $req)
    {
       
        $obj=new ClientDetails();

        $obj->client_image=$req->image;
        $req->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000',
        ]);
        $file = $req->file('image');
        $filename = $file->getClientOriginalName();
        $file->storeAs('public/image',$filename);
       
        $obj->property_name=$req->property;
        $obj->client_name=$req->name;
        $obj->client_address=$req->address;
        $obj->client_email=$req->email;
        $obj->client_phone=$req->phone;
        $obj->country=$req->country;
        $obj->city=$req->city;
        $obj->state=$req->state;
        $obj->zip_code=$req->zip;
        $obj->property_type=$req->type;
        $obj->property_status=$req->status;
        $obj->property_price=$req->price;
        $obj->description=$req->description;
        $obj->save();
        return redirect('forms/layout-v5')->with('success', 'Data inserted Successfully');
    }
   


}