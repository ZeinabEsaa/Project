<?php

namespace App\Http\Controllers;
use App\models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    

  public function testHome()
  {
      return view('testHome');
  }

  public function Listing()
  {
      return view('Listing');
  }

  public function Blog()
  {
      return view('Blog');
  }
  public function testimonial()
  {
      return view('testimonial');
  }
  public function about()
  {
      return view('about');
  }

  public function contact()
  {
      return view('contact');
  }

  public function create()
  {
      //

      return view ('login');

  }

     public function store(Request $request)
    {
        //
        $messages = $this->messages();

    $data =$request->validate([
    'username'=>'required|string|max:50',
   'email'=>'required|string',
   'password'=>'required',
   ] ,$messages);
   $data['active'] =isset($request->active);
   User::create($data);
   return redirect ('users');
    }

    public function edit(string $id)
    {
        //

        $users =User::findOrFail($id);

        return view ('users',compact("users"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $data =User::find($id);
        $messages = $this->messages();
        $data =$request->validate([
            'username'=>'required|string|max:50',
           'email'=>'required|string',
           'password'=>'required',
            

        ], $messages);
   
        
        $data['active'] = isset($request->active);
        User::where('id',$id)->update($data);
        return redirect('users');
    }
    public function messages(){
        return [
            'username.required'=>'العنوان  المطلوب',
            'email.string'=>'Should be string',
            'content.required'=> 'should be text',
            'image.required'=> 'please insrt image',
            'image.mimes'=> 'Incorrect image type',
            'image.max'=> 'Max file size exceeded',

            ];
    }

    
  }

