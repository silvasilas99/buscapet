<?php

namespace App\Http\Controllers;

use App\Models\OffertedServices;
use Illuminate\Support\Facades\App;

class OffertedServicesController extends CrudController
{
    public function __construct() {
        $this->model = App::make(OffertedServices::class);
    }
}
