<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ButtonMould extends Model
{
    use HasFactory;
    protected $fillable = ['title','description','dimention','color','buyers','image','letering'];

}
