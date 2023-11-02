<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BannerImage extends Model
{
    use HasFactory, SoftDeletes;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'banner_images';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'banner_image',
        'is_active',
        'created_by',
    ];
}
