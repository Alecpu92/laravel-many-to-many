<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\LoggedController;
use Illuminate\Support\Facades\Route;

Route :: get('/', [GuestController :: class, 'index'])
    -> name('project.index');

Route :: get('/show/{id}', [LoggedController :: class, 'show'])
    -> middleware(['auth'])
    -> name('project.show');

Route :: get('/create', [LoggedController :: class, 'create'])
    -> middleware(['auth'])
    -> name('project.create');
Route :: post('/store', [LoggedController :: class, 'store'])
    -> middleware(['auth'])
    -> name('project.store');
Route :: get('/technologies/{id}', [TechnologyContoroller :: class, 'show'])
-> name ('technology.show');