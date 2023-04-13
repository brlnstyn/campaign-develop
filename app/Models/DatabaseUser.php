<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatabaseUser extends Model
{
    use HasFactory;
    protected $fillable = 'database_users';
    protected $guarded = [''];
}
