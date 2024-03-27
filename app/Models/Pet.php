<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;

    protected $fillable = [
        "pet_type_id",
        "pet_guardian_id",
        "date_of_birth",
        "weight",
        "is_castrated",
        "is_pedrigree",
        "breed"
    ];
    protected $table = "pets";
}
