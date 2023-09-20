<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\VenteController;
use App\Http\Controllers\MontreController;
use App\Http\Controllers\ProfileController;

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

Route::get('/', [MontreController::class, 'derniersEnregistrements'])->name('home');

Route::get('/watches',[MontreController::class, 'boutique'] )->name('watches');


Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/admin/dasboard', function () {
    return view('admin.dashboard');
})->name('admin');


Route::get('/dashboard',[MontreController::class, 'derniersEnregistrements'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'admin'])->group(function () {
    //Navigation
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/ajout', [AdminController::class, 'ajout'])->name('admin.ajout');
    Route::get('/admin/liste', [AdminController::class, 'liste'])->name('admin.liste');
  //Enregistrement de montre
    Route::post('/montre/store', [MontreController::class, 'store'])->name('montres.store');
    //Liste des montres
    Route::get('/admin/liste', [MontreController::class, 'index'])->name('admin.liste');
    //Suppression de montres
    Route::delete('/montres/{id}', [MontreController::class, 'destroy'])->name('montres.destroy');
    //Mis à jour de montres
    Route::get('/montres/{id}/edit', [MontreController::class, 'edit'])->name('montres.edit');
    Route::post('/montres/{id}/update', [MontreController::class, 'update'])->name('montres.update');
    //Vente de montres
    Route::get('/montres/{id}/vente', [MontreController::class, 'vente'])->name('montres.vente');
    Route::post('/montres/{id}/enregistrer-vente', [MontreController::class, 'enregistrerVente'])->name('enregistrer-vente');
       //Liste des ventes de Montres
       Route::get('/admin/listeVente', [VenteController::class, 'index'])->name('admin.listeVente');

    // Ajoute d'autres routes spécifiques à l'administration ici
});

require __DIR__.'/auth.php';
