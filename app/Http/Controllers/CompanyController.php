<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Support\Facades\App;

class CompanyController extends CrudController
{
    public function __construct() {
        $this->model = App::make(Company::class);
    }
}
