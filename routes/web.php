<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use App\Models\Link;
use App\Models\LinkTree;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () {
    $linksInTree = LinkTree::with('link')->has('link')->orderBy('sort_key')->get();

    return view('index', ['links' => $linksInTree]);
});

$router->get('/{slug}', function ($slug = null) {
    $link = Link::where('slug', $slug)->first();

    if ($link === null || $link->active === 0) {
        return view('404');
    }

    $link->increment('click', 1);
    return redirect($link->link);
});
