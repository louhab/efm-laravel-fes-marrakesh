    <?php

    use Illuminate\Support\Facades\Route;
    use  App\Http\Controllers\VoitureController;
    use App\Http\Controllers\VoitureControllerVersion2;
        use App\Http\Controllers\OneActionController;
                use App\Http\Controllers\TestController;




    Route::get('/', function () {
        return view('welcome');
    });

    Route::get("/voitures", [VoitureController::class, "AfficherListeVoiture"]);


    Route::get("/add_car", [VoitureController::class, "AjouterVoiture"])->name("add_car");

    Route::Post("/store_car", [VoitureController::class, "CreateVoiture"])->name("store_car");

Route::delete("/delete_car/{matricules}", [VoitureController::class, "DeleteCar"])->name("delete_car");



Route::get("/get_car/{matricules}", [VoitureControllerVersion2::class, "get"]);


Route::get("/chemin", OneActionController::class);
Route::get("/activities", [TestController::class, "eleves_from_activities"]);
