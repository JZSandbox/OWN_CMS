<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Installed extends Model
{
    use HasFactory;

    protected $fillable = [
        'is_installed',
        'owner_name',
    ];


}
