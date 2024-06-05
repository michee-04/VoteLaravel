<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Elections;
use App\Models\Votes;

class Candidates extends Model
{
    use HasFactory;

    public function Election()
    {
        return $this->belongsTo(Elections::class);
    }

    public function Votes()
    {
        return $this->hasMany(Votes::class);
    }
}
