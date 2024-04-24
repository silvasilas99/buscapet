<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CompanyServiceController;
use App\Http\Controllers\CompanyTypeController;
use App\Http\Controllers\OffertedServicesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get("/user", function (Request $request) {
    return $request->user();
})->middleware("auth:sanctum");

/**
 * Company routes
 */
Route::prefix("company")->group(function () {
    Route::get("/find", [CompanyController::class, "index"])->name("company.find");
    Route::get("/find/by_id/{id}", [CompanyController::class, "findById"])->name("company.findById");
    Route::post("/store", [CompanyController::class, "store"])->name("company.store");
    Route::put("/update/by_id/{id}", [CompanyController::class, "update"])->name("company.update");
    Route::delete("/destroy/by_id/{id}", [CompanyController::class, "destroy"])->name("company.destroy");

    Route::get("/services/find/{companyId}", [CompanyServiceController::class, "findServicesByCompanyId"])->name("company.services.find");

    # TODO: Implement methods above
    // Route::get("/services/store", [CompanyController::class, "findServicesByCompanyId"])->name("company.services");
    // Route::get("/services/update/{id}", [CompanyController::class, "findServicesByCompanyId"])->name("company.services");
    // Route::get("/services/delete/{id}", [CompanyController::class, "findServicesByCompanyId"])->name("company.services");
});

/**
 * CompanyType routes
 */
Route::prefix("company_type")->group(function () {
    Route::get("/find", [CompanyTypeController::class, "index"])->name("company_type.find");
    Route::get("/find/by_id/{id}", [CompanyTypeController::class, "findById"])->name("company_type.findById");
    Route::post("/store", [CompanyTypeController::class, "store"])->name("company_type.store");
    Route::put("/update/by_id/{id}", [CompanyTypeController::class, "update"])->name("company_type.update");
    Route::delete("/destroy/by_id/{id}", [CompanyTypeController::class, "destroy"])->name("company_type.destroy");
});

/**
 * OffertedServices routes
 */
Route::prefix("offerted_services")->group(function () {
    Route::get("/find", [OffertedServicesController::class, "index"])->name("offerted_services.find");
    Route::get("/find/by_id/{id}", [OffertedServicesController::class, "findById"])->name("offerted_services.findById");
    Route::post("/store", [OffertedServicesController::class, "store"])->name("offerted_services.store");
    Route::put("/update/by_id/{id}", [OffertedServicesController::class, "update"])->name("offerted_services.update");
    Route::delete("/destroy/by_id/{id}", [OffertedServicesController::class, "destroy"])->name("offerted_services.destroy");
});
