<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'document_type',
        'document_number',
        'expedition_date',
        'exped_muni',
        'names',
        'last_name1',
        'last_name2',
        'gender',
        'birth_date',
        'birth_muni',
        'stratum',
        'course'
    ];
}
