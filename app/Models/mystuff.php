<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mystuff extends Model
{
    use HasFactory;
    protected $table='mystuffs';
    protected $fillable=['name','address','number','image'];
    protected $primaryKey='id';
}
