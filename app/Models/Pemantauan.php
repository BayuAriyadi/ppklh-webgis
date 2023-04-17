<?php

namespace App\Models;

use Clockwork\Request\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemantauan extends Model
{
    use HasFactory;
    
    protected $tabel = 'Pemantauan';

    protected $fillable = ['lokasi','latitude', 'longitude','data'];
}
