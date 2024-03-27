<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetGuardian extends Model
{
    use HasFactory;

    protected $fillable = [
        "gender_id",
        "fullname",
        "cpf",
        "date_of_birth",
        "phone_number",
        "email",
        "accepted_terms_and_conditions",
        "accepted_privacy_policy",
        "accepted_marketing_sending"
    ];

    protected $table = "pet_guardians";
}
