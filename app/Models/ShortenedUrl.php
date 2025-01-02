<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class ShortenedUrl extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */

    protected $table = 'shortened_urls';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = ['original_url', 'code'];

}
