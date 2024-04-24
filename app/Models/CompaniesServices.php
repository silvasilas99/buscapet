<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompaniesServices extends Model
{
    use HasFactory;

    protected $fillable = ["company_id", "offerted_service_id"];
    protected $table = "companies_services";

    /**
     * Scope a query to find services of a company
     *
     * @param Builder $query
     * @param int $companyId
     *
     * @return void
     */
    public function scopeOfCompany(Builder $query, int $companyId): void
    {
        $query->where("company_id", $companyId);
    }
}
