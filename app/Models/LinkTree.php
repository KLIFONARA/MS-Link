<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LinkTree extends Model
{
    public function link()
    {
        return $this->hasOne(Link::class, 'id', 'link_id')->where('active', 1);
    }
}
