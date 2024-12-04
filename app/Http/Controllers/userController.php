<?php

namespace App\Http\Controllers;

use App\Models\post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class userController extends Controller
{
    //user website home page
    public function userHomePage(){
        return view('users.website.home');
    }

    //account view page
    public function userAcc() {
        // Retrieve the first post of the authenticated user
        $posts = post::where('user_id', Auth::user()->id)->first();

        // Check if the post has images, return an empty array if no images
        $images = $posts && $posts->image ? explode(',', $posts->image) : [];
        $images = array_reverse($images);

        return view('users.profile.view', compact('images'));
    }

    //account edit page
    public function userAccEdit(){
        return view('users.profile.edit');
    }

    //account update
    public function userAccUpdate($id,Request $request){
        $this->userValidationCheck($request);
        $data = $this->getUserData($request);

        if($request->hasFile('image')){
            $dbImage = User::where('id',$id)->first();
            $dbImage = $dbImage->image;

            $customText = 'profile';
            $fileName = $customText . $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('', $fileName, 'public');
            $data['image'] = $fileName;

            if($dbImage != null){
                Storage::delete('public/'.$dbImage);
            }
        }

        User::where('id',$id)->update($data);
        return redirect()->route('acc#profile');
    }

    // password update
    public function passUpdate($id,Request $request){
        $this->passwordValidationCheck($request);

        $user = User::select('password')->where('id',$id)->first();
        $dbHashValue = $user->password;

        if(Hash::check($request->oldPassword, $dbHashValue)){
            $data = ['password'=>Hash::make($request->newPassword)];
            User::where('id',$id)->update($data);

            return back()->with(['updateSuccess'=>'Updated your password successfully.']);
        }

        return back()->with(['notMatch'=>'Your old password is not match. Try again!']);
    }

    //get user data
    private function getUserData($request){
        return[
            'name' => $request->name,
            'email' => $request->email,
            'bio' => $request->bio,
            'website_link' => $request->website_link
        ];
    }

    //user validation check
    private function userValidationCheck($request){
        Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required',
            'image' => 'mimes:png,jpg,jpeg,webp,avif|file'
        ])->validate();
    }

    //password validation check
    private function passwordValidationCheck($request){
        Validator::make($request->all(),[
            'oldPassword' => 'required|min:6|max:10',
            'newPassword' => 'required|min:6|max:10',
            'confirmPassword' => 'required|min:6|max:10|same:newPassword'
        ])->validate();
    }
}
