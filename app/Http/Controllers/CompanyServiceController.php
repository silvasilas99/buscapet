<?php

namespace App\Http\Controllers;

use App\Models\CompaniesServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class CompanyServiceController extends CrudController
{
    public function __construct() {
        $this->model = App::make(CompaniesServices::class);
    }

    public function findServicesByCompanyId (string $companyId, Request $request)
    {
        $data =
            $this->model::ofCompany((int)$companyId)->get();
        dd($data);
    }
}
