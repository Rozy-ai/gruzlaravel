<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Storage;
use App\Helper\Imageable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable,Imageable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        // 'image',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function storeUser($request)
    {   
        $this->name = $request->name;
        $this->email = $request->email;
        if($request->password != null) {
        $this->password = bcrypt($request->password);
        }
        $this->save();

        return $this;
    }

    public function items()
    {
        return $this->hasMany(Item::class);
    }

    // public function add($fields)
    // {
    //     $user = new static;
    //     $user->fill($fields);
    //     $user->password = bcrypt($fields['password']);
    //     $user->save();
    //     return $user;
    // }

    // public function edit($fields) 
    // {
    //     $this->fill($fields);
    //     $this->password = bcrypt($fields['password']);
    //     $this->save();
    // }

    public function remove()
    {
        if ($this->image != null) {
        Storage::delete('/tmp/uploads/'.$this->image);
        }
        $this->delete();
    }

    //     public function uploadImage($image)
    // {
    //     if($image == null) { return; }
    //     if($this->image != null) {
    //     Storage::delete('uploads/user/' . $this->image);
    //     }
    //     $filename = uniqid().'.'.$image->extension();
    //     $image->storeAs('uploads/user',$filename);
    //     $this->image = $filename;
    //     $this->save();
    // }

    public function getImage()
    {
        if($this->image == null) {
            return '/uploads/item/img/no-image.png';
        }
        return '/tmp/uploads/'.$this->image;
    }
}
