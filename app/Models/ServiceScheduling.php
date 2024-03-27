<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceScheduling extends Model
{
    use HasFactory;

    protected $fillable = [
        "pet_guardian_id",
        "pet_id",
        "service_id",
        "company_id"
    ];
    protected $table = "service_schedulings";
}
