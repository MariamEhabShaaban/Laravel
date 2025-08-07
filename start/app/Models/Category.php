<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    // One Category Has many contacts
    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }
}
