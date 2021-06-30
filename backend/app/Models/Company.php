<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Task;
use App\Models\User;

class Company extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'address'
    ];

    public function task(){
        return $this->hasMany(Task::class,'company_id','id');
    }

    public function user(){
        return $this->hasMany(User::class);
    }
}
