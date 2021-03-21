<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Lomba extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = "lomba";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'NIM',
        'Nama Lomba',
        'nama',
    ];

}
