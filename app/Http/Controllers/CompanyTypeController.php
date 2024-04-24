<?php

namespace App\Http\Controllers;

use App\Models\CompanyType;
use Illuminate\Support\Facades\App;

class CompanyTypeController extends CrudController
{
    public function __construct() {
        $this->model = App::make(CompanyType::class);
    }
}
