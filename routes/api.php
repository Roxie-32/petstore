<?php

namespace App\RequestHandlers;

use App\Services\Auth\CreateUser;
use App\Services\Auth\Login;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(["prefix" => "v1"],
    function () {
        Route::group(["prefix" => "user"], function () {
            Route::post('/create', [CreateUser::class, "create"]);
            Route::post('/login', [Login::class, "login"]);
        });

        //Brand Routes

        Route::get('/brands', Brand\ListBrandsHandler::class);
        Route::group(["prefix" => "brand"], function () {
            Route::get('/{uuid}', Brand\FetchBrandHandler::class);
            Route::put('/{uuid}', Brand\EditBrandHandler::class);
            Route::post('/create', Brand\CreateBrandHandler::class);
            Route::delete('/{uuid}', Brand\DeleteBrandHandler::class);
        });

        //Category  Routes

        Route::get('/categories', Category\ListCategoriesHandler::class);
        Route::group(["prefix" => "category"], function () {
            Route::get('/{uuid}', Category\FetchCategoryHandler::class);
            Route::post('/create', Category\CreateCategoryHandler::class);
            Route::put('/{uuid}', Category\EditCategoryHandler::class);
            Route::delete('/{uuid}', Category\DeleteCategoryHandler::class);
        });

        //Product Route

        Route::get('/products', Product\ListProductsHandler::class);
        Route::group(["prefix" => "product"], function () {
            Route::get('/{uuid}', Product\FetchProductHandler::class);
            Route::post('/create', Product\CreateProductHandler::class);
            Route::put('/{uuid}', Product\EditProductHandler::class);
            Route::delete('/{uuid}', Product\DeleteProductHandler::class);
        });

        // File Routes

        Route::group(["prefix" => "file"], function () {
            Route::post('/upload', File\UploadFileHandler::class);
        });

        //Main Page Routes

        Route::group(["prefix" => "main"], function () {
            Route::get('/blog', Post\ListPostsHandler::class);
            Route::get('/blog/{uuid}', Post\FetchPostHandler::class);
            Route::get('/promotions', Promotion\ListPromotionsHandler::class);
        });
    });
