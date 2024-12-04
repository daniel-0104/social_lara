<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    //post create page
    public function postCreatePage(){
        return view('users.posts.create');
    }

    //post create
    public function postCreate(Request $request){
        $data = $this->getPostData($request);
        $this->postValidationCheck($request);

        $image = array();
        if($files = $request->file('image')){
            foreach($files as $file){
                $customText = 'post';
                $fileName = $customText.$file->getClientOriginalName();
                $file->storeAs('',$fileName,'public');
                $image[] = $fileName;
            }
        }

        $data['image'] = implode(',',$image);
        post::create($data);

        return redirect()->route('acc#profile');
    }

    //get post data
    private function getPostData($request){
        return[
            'user_id' => $request->userId,
            'caption' => $request->caption,
            'created_at' => Carbon::now()
        ];
    }

    //post validation check
    private function postValidationCheck($request){
        $validationRule = [
            'image.*' => 'required|mimes:png,jpg,jpeg,webp,avif|file'
        ];
        $validationMessage = [
            'image.*.required' => 'The image field is required',
            'image.*.mimes' => 'Only PNG, JPG, JPEG, WebP, or AVIF images are allowed.',
        ];
        Validator::make($request->all(),$validationRule,$validationMessage)->validate();
    }
}
