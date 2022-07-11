<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    use HasFactory;

    public function childs()
    {
        return $this->hasMany(Entry::class, 'parent_id', 'id');
    }

}
