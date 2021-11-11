<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Poem;

class PoemController extends Controller {
    public function index(Request $request) {
        return Poem::all();
    }

    public function random(Request $request) {
        // We use `random` method here because we don't want to
        // cause a conflict in database API's because
        // Postgres uses `RANDOM()` and Mysql `RAND()`.
        return Poem::all()->random();
    }
}
