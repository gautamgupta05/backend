<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
   protected $fillable = [
        'user_id',	'filename',	'path',	'mime_type',	'size'
    ];

}
