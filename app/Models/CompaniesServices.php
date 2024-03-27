<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompaniesServices extends Model
{
    use HasFactory;

    protected $fillable = ["company_id", "offerted_service_id"];
    protected $table = "companies_services";
}
