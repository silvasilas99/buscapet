<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        "companie_type_id",
        "social_reason",
        "address",
        "land_line",
        "phone_number",
        "email",
        "instagram_url",
        "x_url",
        "opening_hours_and_dates",
        "contact_name",
        "cnpj",
        "accepted_terms_of_use",
        "accepted_privacy_policy",
        "accepted_marketing_sending",
        "accepted_terms_and_conditions"
    ];
    protected $table = "companies";
}
