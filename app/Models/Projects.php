<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Projects extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'company_logo',
        'company_name',
        'location',
        'description',
        'project_heading',
        'year',
        'is_running',
        'is_active',
        'created_by',
        'deleted_by',
    ];
}
