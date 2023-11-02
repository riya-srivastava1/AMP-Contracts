<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FooterContactUs extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ([
        'email',
        'contact_number',
        'secondary_contact_number',
        'head_office',
        'corporate_office',
        'is_active',
    ]);
}
