<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use Notifiable, HasRoles;

    protected $fillable = [
        'name', 'email', 'password', 'phone', 'photo', 'address',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function storeUser($request)
    {
        $image = $request->file('photo');

        if ($image) {

            $image_name      = date('YmdHis');
            $ext             = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path     = 'public/images/users/';
            $image_url       = $upload_path . $image_full_name;
            $success         = $image->move($upload_path, $image_full_name);
            $this->photo     = $image_url;
        }

        $this->name      = $request->name;
        $this->email     = $request->email;
        $this->phone     = $request->phone;
        $this->address   = $request->address;
        $this->password  = Hash::make($request->password);
        $userStore       = $this->save();
        $user_id         = $this->id;

        $user_info = $this::findOrFail($user_id);

        $user_info->assignRole($request->role);

        $userStore
            ? session()->flash('message', 'New User Created Successfully!')
            : session()->flash('message', 'Something Went Wrong!');
    }


    public function updateUser($request, $id)
    {
        $user = $this::findOrFail($id);
        $image = $request->file('photo');

        if ($image) {

            if (file_exists($user->photo)) unlink($user->photo);

            $image_name      = date('YmdHis');
            $ext             = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path     = 'public/images/users/';
            $image_url       = $upload_path . $image_full_name;
            $success         = $image->move($upload_path, $image_full_name);
            $user->photo     = $image_url;
        }

        $user->name      = $request->name;
        $user->email     = $request->email;
        $user->phone     = $request->phone;
        $user->address   = $request->address;
        $userUpdate      = $user->save();

        $user->removeRole($user->roles->first());
        $user->assignRole($request->role);

        $userUpdate
            ? session()->flash('message', 'User Updated Successfully!')
            : session()->flash('message', 'Something Went Wrong!');
    }

    public function destroyUser($id)
    {
        $user = $this::findOrFail($id);
        if (file_exists($user->photo)) unlink($user->photo);

        $userDelete = $this::where('id', $id)->delete();

        $userDelete
            ? session()->flash('message', 'User Deleted Successfully!')
            : session()->flash('message', 'Something Went Wrong!');
    }
}
