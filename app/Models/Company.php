<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Company extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    protected static function boot()
    {
        parent::boot();

        static::creating(function($model){
            if(empty($model->uuid)){
                $model->uuid = Str::uuid();
            }
        });
    }

    public function users(){
        return $this->hasMany(User::class,'company_uuid','uuid');
    }
}
