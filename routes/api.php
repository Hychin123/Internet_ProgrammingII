<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\AuthorController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\AudienceController;


Route::group(['prefix'=>'author'],function(){
    
    Route::post('/create', [AuthorController::class, 'create']);
    Route::post('/getAuthor', [AuthorController::class, 'getByAuthor']);
});

Route::group(['prefix'=>'audience'],function(){
    Route::controller(AudienceController::class)->group(function(){
        Route::post('/create','create');
        Route::get('/getByArticle','allAudiencesOfArticle');
        Route::get('/getByAuthor','allAudiencesOfAuthor');
    });
});

Route::group(['prefix'=>'article'],function(){
    Route::controller(ArticleController::class)->group(function(){
        Route::post('/create','create');
        Route::get('/getByAuthor','allArticlesOfAuthor');
    });
});

Route::group(['prefix'=>'comment'],function(){
    Route::controller(CommentController::class)->group(function(){
        Route::post('/toAudience','addCommentToAudience');
        Route::post('/toAuthor','addCommentToAuthor');
        Route::post('/toArticle','addCommentToArticle');
        Route::get('/getByAudience','allCommentsOfAudience');
        Route::get('/getByArticle','allCommentsOfArticle');
        Route::get('/getByAuthor','allCommentsOfAuthor');
        Route::get('/getWithTopic','allCommentsWithTopic');
    });
});




