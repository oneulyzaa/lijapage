<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostModel extends Model
{
    use HasFactory;
    
    protected $table = 'data';
    protected $primarykey = 'id';
    protected $fillable = [
        'nama', 'email', 'username','password','alamat'
    ];
}