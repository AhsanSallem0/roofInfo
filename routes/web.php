<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




// pagesd link 
Route::get('/shingles/asphalt', [PagesController::class, 'asphalt']);
// metal oage
Route::get('/shingles/metal', [PagesController::class, 'metal']);
// gutter oage
Route::get('/shingles/gutter', [PagesController::class, 'gutter']);

// solor oage
Route::get('/shingles/solor', [PagesController::class, 'solor']);
Route::get('/shingles/solar', [PagesController::class, 'solor']);

// solor/reviews
Route::get('/solor/reviews', [PagesController::class, 'solorReview']);

///shingles
Route::get('/shingles', [PagesController::class, 'shingles']);
///shinglesPrice
Route::get('/shinglesPrice', [PagesController::class, 'shinglesPrice']);
///shinglesRating
Route::get('/shinglesRating', [PagesController::class, 'shinglesRating']);
///shinglesReviews
Route::get('/shinglesReviews', [PagesController::class, 'shinglesReviews']);


////shingle/tile
Route::get('/shingle/tile', [PagesController::class, 'tile']);
Route::get('/shingles/tile', [PagesController::class, 'tile']);
////shingle/rubber
Route::get('/shingle/rubber', [PagesController::class, 'rubber']);
Route::get('/shingles/rubber', [PagesController::class, 'rubber']);
////shingle/aluminum
Route::get('/shingle/aluminum', [PagesController::class, 'aluminum']);
Route::get('/shingles/aluminum', [PagesController::class, 'aluminum']);
////shingle/architectural
Route::get('/shingle/architectural', [PagesController::class, 'architectural']);
Route::get('/shingles/architectural', [PagesController::class, 'architectural']);
////shingle/sola
Route::get('/shingle/solar', [PagesController::class, 'sola']);

///measure/roof
Route::get('/measure/roof', [PagesController::class, 'roofMeasure']);
// /square/def
Route::get('/square/def', [PagesController::class, 'squareDef']);

///roof/def
Route::get('/roof/def', [PagesController::class, 'roofDef']);
Route::get('/definitions', [PagesController::class, 'roofDef']);

// epdm
Route::get('/definitions/edpm-roofing-membrane', [PagesController::class, 'epdm']);

// tpo
Route::get('/definitions/tpo-membrane', [PagesController::class, 'tpo']);

// /definitions/fire_ratings
Route::get('/definitions/fire_ratings', [PagesController::class, 'fireRating']);


// /definitions/foam-roofing
Route::get('/definitions/foam-roofing', [PagesController::class, 'foamRoofing']);

// /definitions/hail_ratings
Route::get('/definitions/hail_ratings', [PagesController::class, 'hailRating']);

// /definitions/ice-water-shield
Route::get('/definitions/ice-water-shield', [PagesController::class, 'iceWater']);

// /definitions/plastic-roofing-cement
Route::get('/definitions/plastic-roofing-cement', [PagesController::class, 'plasticRoofing']);

// /roof-ventilation/ridge-vents
Route::get('/roof-ventilation/ridge-vents', [PagesController::class, 'RidgeVents']);

// /definitions/roof-flashing
Route::get('/definitions/roof-flashing', [PagesController::class, 'RoofingFlashing']);

// /roof-ventilation/roof-turbine-vents
Route::get('/roof-ventilation/roof-turbine-vents', [PagesController::class, 'roofTurbine']);

// /definitions/roofing-nails
Route::get('/definitions/roofing-nails', [PagesController::class, 'RoofNail']);

// /roof-ventilation/soffit-vents
Route::get('/roof-ventilation/soffit-vents', [PagesController::class, 'soffitEvent']);

// /definitions/solar-reflectance
Route::get('/definitions/solar-reflectance', [PagesController::class, 'solorDefi']);

// /definitions/thermal-emittance
Route::get('/definitions/thermal-emittance', [PagesController::class, 'thermalDef']);


// /definitions/underlayment
Route::get('/definitions/underlayment', [PagesController::class, 'underlayment']);

//roof-ventilation/whole-house-fans
Route::get('/roof-ventilation/whole-house-fans', [PagesController::class, 'houseFans']);

// /definitions/wind-ratings
Route::get('/definitions/wind-ratings', [PagesController::class, 'windRating']);


// /shingles/brands
Route::get('/shingles/brands', [PagesController::class, 'shingleBrand']);

// /shingles/warranty
Route::get('/shingles/warranty', [PagesController::class, 'shingleWarranty']);

///roofing-contractors
Route::get('/roofing-contractors', [PagesController::class, 'roofingContract']);

// /choose-roofing-contractor
Route::get('/choose-roofing-contractor', [PagesController::class, 'chooseRofCon']);

// /roof-replacement-cost
Route::get('/roof-replacement-cost', [PagesController::class, 'replacemtCost']);

///roofing-contractors/roofing-scams
Route::get('/roofing-contractors/roofing-scams', [PagesController::class, 'roofingScam']);

// /solar-panels
Route::get('/solar-panels', [PagesController::class, 'solorPanlea']);

// /solar-panels/brands
Route::get('/solar-panels/brands', [PagesController::class, 'solorPanleaBrand']);

// /shingles/cedar
Route::get('/shingles/cedar', [PagesController::class, 'shinglesCeder']);

// /shingles/copper
Route::get('/shingles/copper', [PagesController::class, 'shinglesCopper']);

// /shingles/roll-roofing
Route::get('/shingles/roll-roofing', [PagesController::class, 'shinglesRollRolling']);


// /shingles/slate
Route::get('/shingles/slate', [PagesController::class, 'shinglesSlate']);

// /shingles/steel
Route::get('/shingles/steel', [PagesController::class, 'shinglesSteel']);

// /shingles/vinyl
Route::get('/shingles/vinyl', [PagesController::class, 'shinglesVinyl']);


