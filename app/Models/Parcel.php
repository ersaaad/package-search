<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parcel extends Model
{
    use HasFactory;

    protected $table = 'parcels';
    protected $primaryKey = 'pcl_id';
    protected $fillable = ['pcl_id', 'name', 'address', 'delivery', 'rcvd', 'colct'];
}
