<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userw extends Model
{
    use HasFactory;

    protected $table = 'userws';
    protected $primaryKey = 'id';
    protected $timestamp = true;

    protected $fillable = [ 'firstname',
                            'lastname',
                            'username',
                            'email',
                            'password', 
                            'type',
                            'remember_token',
                            'email_verified_at',
                            'active',
                            'deleted_at'];

    protected $visible = [  'firstname',
                            'lastname',
                            'username',
                            'email',
                            'password', 
                            'type',
                            'remember_token',
                            'email_verified_at',
                            'active',
                            'deleted_at'];


}
