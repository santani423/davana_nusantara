<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $with = ['subBnnerImage'];

    public function subBnnerImage()
    {
        return $this->hasMany(SubBannerImage::class, 'banner_id', 'id');
    }
}
