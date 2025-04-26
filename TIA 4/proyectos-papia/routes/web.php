<?php

use App\Http\Controllers\TipoProyectoController;

Route::get('/', [TipoProyectoController::class, 'index']);
