<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Company;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'company_id',
        'description',
        'situation'
    ];

    public function company(){
        return $this->belongsTo(Company::class, 'id', 'company_id');
    }
}
