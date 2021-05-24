<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Session;

class Profile extends Model
{
    /**
     * Define table user.
     */

    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'phone', 'address', 'photo',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static $validatePasswordRule = [

        'old_password'    => 'required|string',
        'new_password'    => 'required|string|min:8',
    ];

    public static $validatePhotoRule = [

        'photo' => 'mimes:jpeg,jpg,png,gif,webp|required|max:100',
    ];

    public function updateUserPhoto($request)
    {
        $user  = $this::findOrFail(auth()->id());

        $image = $request->file('photo');

        if (file_exists($user->photo)) unlink($user->photo);

        $image_name      = date('YmdHis');
        $ext             = strtolower($image->getClientOriginalExtension());
        $image_full_name = $image_name . '.' . $ext;
        $upload_path     = 'public/images/users/';
        $image_url       = $upload_path . $image_full_name;
        $success         = $image->move($upload_path, $image_full_name);
        $user->photo     = $image_url;
        $userUpdate      = $user->save();

        $userUpdate 
        ? Session::flash('message', 'User Photo Updated Successfully!')
        : Session::flash('message', 'Something Went Wrong!');
    }

    public function updateUserPassword($request)
    {
        $user = $this::findOrFail(auth()->id());

        if (Hash::check($request->old_password, $user->password)) {
            $user->fill([

                'password' => Hash::make($request->new_password)

            ])->save();

            Session::flash('message', 'User Password Updated Successfully!');

        } else {

            Session::flash('message', 'Something Went Wrong!');
        }
    }

    public function updateUserInfo($request)
    {
        $user  = $this::findOrFail(auth()->id());

        $user->name      = $request->name;
        $user->address   = $request->address;
        $user->email     = $request->email;
        $user->phone     = $request->phone;
        $userUpdate      = $user->save();

        $userUpdate
        ? Session::flash('message', 'User Info Updated Successfully!')
        : Session::flash('message', 'Something Went Wrong!');
    }
}
