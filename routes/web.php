<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\ProductController;
use App\Models\Category;
use GuzzleHttp\Psr7\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Auth::routes();

// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// ====================================================== ROUTES DASHBOARD ADMIN =========================================================
// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

Route::group(['middleware' => ['role:admin']], function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.index');
    });
    
    // ================================================================== ROUTES KATEGORI ========================================================
    Route::get('/admin/category', [App\Http\Controllers\CategoryController::class,'index']);
    Route::post('/admin/category/create', [App\Http\Controllers\CategoryController::class,'store'])->name('category.add');
    Route::get('/admin/category/{id}/edit', [App\Http\Controllers\CategoryController::class,'edit'])->name('category.edit');
    Route::post('/admin/category/update/{id}', [App\Http\Controllers\CategoryController::class,'update'])->name('category.update');
    Route::get('/admin/category/{id}', [App\Http\Controllers\FilterController::class,'category'])->name('category.sub');
    Route::delete('/admin/category/{id}/delete', [App\Http\Controllers\CategoryController::class,'destroy'])->name('category.destroy');
    // -------------------------------------------------------------------------------------------------------------------------------------------
    
    // ================================================================== ROUTES SUBKATEGORI =====================================================
    Route::get('/admin/subcategory', [App\Http\Controllers\SubCategoryController::class,'index']);
    Route::post('/admin/subcategory/create', [App\Http\Controllers\SubCategoryController::class,'store'])->name('subcat.add');
    // Route::resource('admin/subcategory', SubCategoryController::class);
    Route::delete('/admin/subcategory/{id}/delete', [App\Http\Controllers\SubCategoryController::class,'destroy'])->name('subcat.destroy');
    Route::get('/admin/subcategory/{id}', [App\Http\Controllers\FilterController::class,'produk'])->name('subcat.product');
    Route::get('/admin/subcategory/{id}/edit', [App\Http\Controllers\SubCategoryController::class,'edit'])->name('subcat.edit');
    Route::post('/admin/subcategory/{id}/update', [App\Http\Controllers\SubCategoryController::class,'update'])->name('subcat.update');
    
    // -------------------------------------------------------------------------------------------------------------------------------------------
    
    // ================================================================== ROUTES PRODUK ==========================================================
    
    // Route::resource('admin/product', ProductController::class,['index']);
    Route::get('/admin/product', [App\Http\Controllers\ProductController::class,'index'])->name('admin.product');
    Route::get('/admin/product/active', [App\Http\Controllers\ProductController::class,'statusActive'])->name('product.active');
    Route::get('/admin/product/unactive', [App\Http\Controllers\ProductController::class,'statusUnactive'])->name('product.unactive');
    Route::post('/admin/product/create', [App\Http\Controllers\ProductController::class,'store'])->name('product.add');
    Route::get('/admin/product/{id}/edit', [App\Http\Controllers\ProductController::class,'edit'])->name('product.edit');
    Route::post('/admin/product/{id}/update', [App\Http\Controllers\ProductController::class,'update'])->name('product.update');
    Route::delete('/admin/product/{id}/delete', [App\Http\Controllers\ProductController::class,'destroy'])->name('product.destroy');
    Route::get('/admin/product/{id}/restore', [App\Http\Controllers\ProductController::class,'restore'])->name('product.restore');
    Route::get('/admin/product/trash', [App\Http\Controllers\ProductController::class,'trash'])->name('product.trash');
    Route::delete('/admin/product/{id}/forcedelete', [App\Http\Controllers\ProductController::class,'forceDelete'])->name('product.forcedelete');
    Route::get('/admin/product/{id}',[ProductController::class, 'show'])->name('showproduct');
    // -------------------------------------------------------------------------------------------------------------------------------------------
    
    // ================================================================== ROUTES INVOICES =======================================================
    Route::get('/admin/invoices', function () {
        return view('admin.invoices.index');
    });
    // -------------------------------------------------------------------------------------------------------------------------------------------    
});

Route::get('/ajax-subcat',[ProductController::class, 'subCat']);
Route::post('/subcat',[ProductController::class, 'subCat'])->name('subcat');


// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// ============================================================= ROUTES WEB =============================================================
// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

Route::get('/',[App\Http\Controllers\WebController::class, 'index'])->name('home');
Route::get('/product',[App\Http\Controllers\Web\ProductController::class, 'index'])->name('produk');
Route::get('/product/{slug}',[App\Http\Controllers\Web\ProductController::class, 'show'])->name('produk.show');
Route::get('/ajax/filterdate',[App\Http\Controllers\Web\ProductController::class, 'filter'])->name('ajax.filterdate');
