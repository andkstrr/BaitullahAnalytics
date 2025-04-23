<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Merchant;

class MerchantController extends Controller
{
    public function dashboard() {
        $merchants = Merchant::paginate(30);

        // count value
        $notMerchant = Merchant::where('isMerchant', 'not')->count();
        $pendingMerchant = Merchant::where('isMerchant', 'pending')->count();
        $activeMerchant = Merchant::where('isMerchant', 'merchant')->count();

        return view('pages.merchant')
            ->with('merchants', $merchants)
            ->with('notMerchant', $notMerchant)
            ->with('pendingMerchant', $pendingMerchant)
            ->with('activeMerchant', $activeMerchant);
    }

    public function location() {
        $merchants = Merchant::all();

        return view('pages.location', compact('merchants'));
    }
}
