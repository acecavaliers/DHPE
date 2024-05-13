<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PatientPastIllness extends Model
{
    use HasFactory, SoftDeletes;

    protected $foreignKeys = ['illness_groups'=>'illness_group_id'];

    protected $fillable = [

        'patient_id',
        'illness_group_id',
        'symptom_id',
        'is_cancer_or_hiv',
        'details',
        'stage',
        'on_chemo_or_chemical',
        'remarks',
    ];
    public function getForeignKeys(){
        return $this->foreignKeys;
    }
    public function illness_groups()
    {
        return $this->belongsTo(IllnessGroup::class, 'illness_group_id');
    }
}
