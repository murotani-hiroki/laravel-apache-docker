<?php


namespace App\Http\Controllers;


use Illuminate\Support\Facades\Log;

class FxController extends Controller
{
    /**
     * FxController constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return string
     */
    public function search() {

        Log::debug('aaaaaaaaaaa');

        return "search...";
    }


}

