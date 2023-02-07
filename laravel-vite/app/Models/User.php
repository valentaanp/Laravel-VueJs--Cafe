<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $table='users';
    protected $primaryKey='id_user';
    public $timestamps=false;
    /**
     * fillable
     * 
     * @var array
     */
    protected $fillable = [
        'nama_user', 'role', 'username', 'password'
    ];
}
