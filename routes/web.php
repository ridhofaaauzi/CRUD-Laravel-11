<?php

use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;


Route::get("/", [SiswaController::class, "index"])->name("siswa.index");
Route::get("/siswa/create", [SiswaController::class, "create"])->name("siswa.create");
Route::post("/siswa/store", [SiswaController::class, "store"])->name("siswa.store");
Route::get("/siswa/edit/{id}", [SiswaController::class, "edit"])->name("siswa.edit");
Route::put("/siswa/update/{id}", [SiswaController::class, "update"])->name("siswa.update");
Route::delete("/siswa/delete/{id}", [SiswaController::class, "destroy"])->name("siswa.destroy");