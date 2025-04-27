
<?php

use Illuminate\Support\Facades\Route;
use App\Events\NewsHidden;
use App\Models\News;


Route::get('/news/create-test', function () {
    $news = new News();
    $news->title = 'Test news title';
    $news->body = 'Test news body';
    $news->save();
    return $news;
});

Route::get('/news/{id}/hide', function ($id) {
    $news = \App\Models\News::findOrFail($id);
    $news->hidden = true;
    $news->save();
    NewsHidden::dispatch($news);
    return 'News hidden';
});
