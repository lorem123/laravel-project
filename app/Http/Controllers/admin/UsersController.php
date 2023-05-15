<?php

namespace App\Http\Controllers\admin;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Registers;
use App\Models\Profile;
use App\Models\User;
use DB;

class UsersController extends Controller
{
    public function index()
    {
      $users = DB::table('users')->get();
      return view('admin.users', ['users' => $users]);
    }
    public function create()
    {
      return view('admin.create');
    }
    public function savedata(Request $request)
    {
    $request->validate([
          'email' => 'required|unique:users|max:255',
          'name' => 'required',
          'password' => 'required',
          'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
      ]);
        $name = $request->input('name');
        $email = request()->input('email');
        $password = Hash::make($request->input('password'));

        $imageName = time().'.'.$request->image->extension();   
        $request->image->move(public_path('images'), $imageName);


        $registers = new Registers();
        $registers->name =$name;
        $registers->email = $email;
        $registers->password = $password;
        $registers->imagename = $imageName;
        if($registers->save()){
           return redirect('admin/users/')->with('status', 'Successfully register!');
        }
        
    }
    public function editUser($id)
    {
      $user = Registers::find($id);
      return view('admin.edit')->with('user',$user);
    }
    public function editData(Request $request,$id)
    {
      $request->validate([
            'email' => 'required|email|unique:users,email,'.$id,
            'name' => 'required'
        ]);
        
        if(isset($request->imagename) && $request->imagename->extension() != '' ) {
          $imageName = time().'.'.$request->imagename->extension();
          $request->imagename->move(public_path('images'), $imageName);
        }

        $insertionData  = $request->except(['_token']);
        if(isset($imageName)) $insertionData['imagename'] = $imageName;
        //$insertionData['password'] =  Hash::make($request->input('password'));
        $data = Registers::where('id',$id)->update($insertionData);       
        return redirect('admin/users/')->with('status', 'Update successfully!');
    }

    public function profileData($id)
    {

      $user = User::with('profile')->find($id);
      return view('admin.profile', ['user' => $user]);
    }
    public function profileEdit(Request $request,$id)
    {
      $user = User::with('profile')->find($id);
      $request->validate(
        [
            'fname' => 'required',
            'lname' => 'required'
        ],
        [
        'fname.required' => 'First name field is required.',
        'lname.required' => 'Last name field is required.'
    ]);
        if ($user->profile) {
          $insertionData  = $request->except(['_token']);
          $data = Profile::where('id',$user->profile->id)->update($insertionData);
          return redirect('admin/users/')->with('status', 'saved successfully!');
        }
        else {
          $profile = new Profile;
          $profile->fname = $request->input('fname');
          $profile->lname = $request->input('lname');
          $profile->skill = $request->input('skill');        
          $profile->user()->associate($user);
          if($profile->save()) {
            return redirect('admin/users/')->with('status', 'saved successfully!');
          }
        }
    }

    public function destroy($id) {
     // $user = User::findOrFail($id);
      //$user->delete();
      return redirect('admin/users/');     
    }

}
