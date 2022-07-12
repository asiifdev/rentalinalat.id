<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\ProductController;
use App\Models\Category;
use GuzzleHttp\Psr7\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/admin/dashboard', function () {
    return view('admin.index');
});

// ================================================================== ROUTES KATEGORI ========================================================
Route::get('/admin/category', [App\Http\Controllers\CategoryController::class,'index']);
Route::post('/admin/category/create', [App\Http\Controllers\CategoryController::class,'store'])->name('category.add');
Route::get('/admin/category/edit/[id]', [App\Http\Controllers\CategoryController::class.'edit']);
Route::post('/admin/category/update/[id]', [App\Http\Controllers\CategoryController::class.'update']);
Route::resource('admin/category', CategoryController::class);
// -------------------------------------------------------------------------------------------------------------------------------------------

// ================================================================== ROUTES SUBKATEGORI =====================================================
Route::get('/admin/subcategory', [App\Http\Controllers\SubCategoryController::class,'index']);
Route::post('/admin/subcategory/create', [App\Http\Controllers\SubCategoryController::class,'store'])->name('subcategory.add');
Route::resource('admin/subcategory', SubCategoryController::class);


// -------------------------------------------------------------------------------------------------------------------------------------------

// ================================================================== ROUTES PRODUK ==========================================================
Route::get('/admin/product', [App\Http\Controllers\ProductController::class,'index'])->name('admin.product');
Route::post('/admin/product/create', [App\Http\Controllers\ProductController::class,'store'])->name('product.add');
Route::get('/admin/product/edit/[id]', [App\Http\Controllers\ProductController::class.'edit']);
Route::post('/admin/product/update/[id]', [App\Http\Controllers\ProductController::class.'update']);
Route::resource('admin/product', ProductController::class);
// Route::get('subcatories/{id}', [ProductController::class, 'loadSubCategories']);
Route::get('/ajax-subcat',[ProductController::class, 'subCat']);
Route::post('/subcat',[ProductController::class, 'subCat'])->name('subcat');

// -------------------------------------------------------------------------------------------------------------------------------------------

// ================================================================== ROUTES INVOPICES =======================================================
Route::get('/admin/invoices', function () {
    return view('admin.invoices.index');
});
// -------------------------------------------------------------------------------------------------------------------------------------------