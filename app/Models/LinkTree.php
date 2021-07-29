<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LinkTree extends Model
{
    public function link()
    {
        return $this->belongsTo(Link::class)->where('active', 1);
    }
}
