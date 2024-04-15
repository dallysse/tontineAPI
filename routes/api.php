<?php
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ReunionController;
use App\Http\Controllers\PresenceController;
use App\Http\Controllers\HelpController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\SanctionController;
use App\Http\Controllers\MoneyController;
use App\Http\Controllers\LendingController;
use App\Http\Controllers\CashFundsController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//recuperer la liste de membres
Route::get('membres', [MemberController::class, 'listMembers']);
Route::get('membre/{id}', [MemberController::class, 'getMember']);
Route::put('membre/edit{membre}', [MemberController::class, 'update']);
Route::post('membre', [MemberController::class, 'store']);
Route::delete('membre/{membre}', [MemberController::class, 'delete']);

//recuperer la liste de reunions
Route::get('reunions', [ReunionController::class, 'listReunions']);
Route::get('reunion/{id}', [ReunionController::class, 'getReunion']);
Route::put('reunions/edit{reunions}', [ReunionController::class, 'update']);
//Route::post('reunions/create', [ReunionController::class, 'newReunion']);
Route::delete('reunions/{reunions}', [ReunionController::class, 'delete']);

//recuperer la liste de Presence
Route::get('presence', [PresenceController::class, 'listMembersPresent']);

//recuperer la liste de depenses
Route::get('depenses', [ExpenseController::class, 'listExpenses']);
//Route::put('depense/edit{membre}', [ExpenseController::class, 'update']);
Route::post('depense/create', [ExpenseController::class, 'store']);
//Route::delete('depense/{membre}', [ExpenseController::class, 'delete']);

//recuperer la liste d'aides
Route::post('aide/create', [HelpController::class, 'store']);

Route::get('aides', [HelpController::class, 'listHelps']);
Route::put('aides/edit{aides}', [HelpController::class, 'update']);
Route::delete('aides/{aides}', [HelpController::class, 'delete']);

//recuperer la liste de Prets
Route::get('prets', [LendingController::class, 'listLendings']);
Route::post('pret/create', [LendingController::class, 'store']);

//recuperer la liste de caisse
Route::get('caisse', [MoneyController::class, 'listCaisses']);
//Route::put('membre/edit{membre}', [MoneyController::class, 'update']);
//Route::post('membre/create', [MoneyController::class, 'newMember']);
//Route::delete('membre/{membre}', [MoneyController::class, 'delete']);

//recuperer la liste de Sanction
Route::get('sanctions', [SanctionController::class, 'listSanctions']);
Route::put('reunions/edit{reunions}', [SanctionController::class, 'update']);
//Route::post('reunions/create', [SanctionController::class, 'newReunion']);

//ajouter un nouveau sanction
Route::get('fondDeCaisses', [CashFundsController::class, 'listCash_funds']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
