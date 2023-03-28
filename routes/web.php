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

// /shingles/brands/arrowline
Route::get('/shingles/brands/arrowline', [PagesController::class, 'arrowline']);

// /shingles/brands/atas
Route::get('/shingles/brands/atas', [PagesController::class, 'atas']);


// /shingles/brands/atlas
Route::get('/shingles/brands/atlas', [PagesController::class, 'atlas']);


// /shingles/brands/berridge
Route::get('/shingles/brands/berridge', [PagesController::class, 'berridge']);


// /shingles/brands/bp
Route::get('/shingles/brands/bp', [PagesController::class, 'bp']);

// /shingles/brands/certainteed
Route::get('/shingles/brands/certainteed', [PagesController::class, 'certainteed']);

// /shingles/brands/certi-label
Route::get('/shingles/brands/certi-label', [PagesController::class, 'certiLabel']);

// /shingles/brands/classic-metal-roofing
Route::get('/shingles/brands/classic-metal-roofing', [PagesController::class, 'classicMetalRoofing']);

// /shingles/brands/custom-bilt-metal
Route::get('/shingles/brands/custom-bilt-metal', [PagesController::class, 'customBiltMetal']);

// /shingles/brands/davinci-roofscapesbp
Route::get('/shingles/brands/davinci-roofscapes', [PagesController::class, 'davinciRoofscapes']);



// /shingles/brands/decra
Route::get('/shingles/brands/decra', [PagesController::class, 'decra']);

// /shingles/brands/dura-loc
Route::get('/shingles/brands/dura-loc', [PagesController::class, 'duraLoc']);



// /shingles/brands/eagle-roofing
Route::get('/shingles/brands/eagle-roofing', [PagesController::class, 'eagleRoofing']);

// /shingles/brands/ecostar
Route::get('/shingles/brands/ecostar', [PagesController::class, 'ecostar']);

// /shingles/brands/elk
Route::get('/shingles/brands/elk', [PagesController::class, 'elk']);

// /shingles/brands/englert
Route::get('/shingles/brands/englert', [PagesController::class, 'englert']);

// /shingles/brands/gaf
Route::get('/shingles/brands/gaf', [PagesController::class, 'gaf']);



// /shingles/brands/gerard
Route::get('/shingles/brands/gerard', [PagesController::class, 'gerard']);

// /shingles/brands/goat-lake-forest.
Route::get('/shingles/brands/goat-lake-forest', [PagesController::class, 'goatLakeForest']);

// /shingles/brands/hanson-roof-tiles
Route::get('/shingles/brands/hanson-roof-tiles', [PagesController::class, 'hansonRoofTiles']);

// /shingles/brands/iko
Route::get('/shingles/brands/iko', [PagesController::class, 'iko']);

// /shingles/brands/imerys
Route::get('/shingles/brands/imerys', [PagesController::class, 'imerys']);




// /shingles/brands/landmark
Route::get('/shingles/brands/landmark', [PagesController::class, 'landmark']);

// /shingles/brands/ludowici-roof-tiles
Route::get('/shingles/brands/ludowici-roof-tiles', [PagesController::class, 'ludowiciRoofTiles']);

// /shingles/brands/malarkey
Route::get('/shingles/brands/malarkey', [PagesController::class, 'malarkey']);

// /shingles/brands/marley-roofing
Route::get('/shingles/brands/marley-roofing', [PagesController::class, 'marleyRoofing']);

// /shingles/brands/maxitile
Route::get('/shingles/brands/maxitile', [PagesController::class, 'maxitile']);






// /shingles/brands/meeker
Route::get('/shingles/brands/meeker', [PagesController::class, 'meeker']);
// /shingles/brands/monier-life-tile
Route::get('/shingles/brands/monier-life-tile', [PagesController::class, 'monierLifeTile']);
// /shingles/brands/ondura
Route::get('/shingles/brands/ondura', [PagesController::class, 'ondura']);
// /shingles/brands/owens-corning
Route::get('/shingles/brands/owens-corning', [PagesController::class, 'owensCorning']);
// /shingles/brands/pabco
Route::get('/shingles/brands/pabco', [PagesController::class, 'pabco']);
// /shingles/brands/paradigm
Route::get('/shingles/brands/paradigm', [PagesController::class, 'paradigm']);
// /shingles/brands/petersen-aluminum
Route::get('/shingles/brands/petersen-aluminum', [PagesController::class, 'petersenAluminum']);
// /shingles/brands/pinnacle
Route::get('/shingles/brands/pinnacle', [PagesController::class, 'pinnacle']);
// /shingles/brands/royal-building-supplies
Route::get('/shingles/brands/royal-building-supplies', [PagesController::class, 'royalBuildingSupplies']);
// /shingles/brands/rubbur
Route::get('/shingles/brands/rubbur', [PagesController::class, 'rubbur']);
// /shingles/brands/tamko
Route::get('/shingles/brands/tamko', [PagesController::class, 'tamko']);
// /shingles/brands/timberline
Route::get('/shingles/brands/timberline', [PagesController::class, 'timberline']);
// /shingles/brands/uni-solar
Route::get('/shingles/brands/uni-solar', [PagesController::class, 'uniSolar']);
// /shingles/brands/vail-metal-systems
Route::get('/shingles/brands/vail-metal-systems', [PagesController::class, 'vailMetalSystems']);
// /shingles/brands/vande-heigh-raleigh
Route::get('/shingles/brands/vande-heigh-raleigh', [PagesController::class, 'vandeHeighRaleigh']);
// /shingles/brands/zappone
Route::get('/shingles/brands/zappone', [PagesController::class, 'zappone']);


// /shingles/asphalt-shingles-get-greener
Route::get('/shingles/asphalt-shingles-get-greener', [PagesController::class, 'asphaltshinglesgetgreener']);
// /shingles/10-things-about-cool-roofing
Route::get('/shingles/10-things-about-cool-roofing', [PagesController::class, 'thingsaboutcoolroofing']);
// /shingles/tax-credit-qualifying-shingles
Route::get('/shingles/tax-credit-qualifying-shingles', [PagesController::class, 'taxcreditqualifyingshingles']);

// /contact
Route::get('/contact', [PagesController::class, 'contact']);

// submit-business
Route::get('/submit-business', [PagesController::class, 'submitbusiness']);

// /shingles/shingles-made-from-recyled-tires
Route::get('/shingles/shingles-made-from-recyled-tires', [PagesController::class, 'shinglesmadefromrecyledtires']);
