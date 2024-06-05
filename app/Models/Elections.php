<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Candidates;

class Elections extends Model
{
    use HasFactory;

    public function candidates()
    {
        return $this->hasMany(Candidates::class);
    }
}
