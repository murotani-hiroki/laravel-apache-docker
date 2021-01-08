<?php


namespace App\Http\Controllers;


use App\Service\FxService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class FxController extends Controller
{

    private $fxService;

    /**
     * FxController constructor.
     * @param FxService $fxService
     */
    public function __construct(FxService $fxService)
    {
        $this->fxService = $fxService;
    }

    /**
     * @param Request $request
     * @return string
     */
    public function search(Request $request) {

        // $results = DB::table('currency_pair')->get();
        $fromDate = $request->input('fromDate');
        $toDate = $request->input('toDate');
        Log::debug($fromDate);
        Log::debug($toDate);

        return $this->fxService->search($fromDate, $toDate);
    }


}

