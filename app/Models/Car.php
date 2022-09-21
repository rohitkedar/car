<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $fillable = [
        'number','owner_id','description','model','color','engine_type'
    ];

    public function owner()  
    {  
        return $this->belongsTo('App\Models\Owner');  
    }  
    
}
