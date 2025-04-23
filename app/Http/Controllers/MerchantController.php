<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Merchant;

class MerchantController extends Controller
{
    public function dashboard(Request $request)
    {
        // JOIN ke tabel cities dan select city name
        $query = Merchant::join('cities', 'merchants.city', '=', 'cities.id')
            ->select('merchants.*', 'cities.name as city_name');

        // Terapkan filter dengan function terpisah
        $query = $this->searchByName($query, $request);
        $query = $this->searchByCity($query, $request);
        $query = $this->filterByStatus($query, $request);

        // Pagination
        $merchants = $query->paginate(30)->withQueryString();

        // Hitung status tetap seperti biasa
        $notMerchant = Merchant::where('isMerchant', 'not')->count();
        $pendingMerchant = Merchant::where('isMerchant', 'pending')->count();
        $activeMerchant = Merchant::where('isMerchant', 'merchant')->count();

        return view('pages.merchant', compact(
            'merchants',
            'notMerchant',
            'pendingMerchant',
            'activeMerchant'
        ));
    }



    public function searchByName($query, Request $request) {
        if ($request->filled('search_name')) {
            $query->where('merchants.name', 'like', '%' . $request->search_name . '%');
        }

        return $query;
    }

    public function searchByCity($query, Request $request) {
        if ($request->filled('search_city')) {
            $query->where('cities.name', 'like', '%' . $request->search_city . '%');
        }

        return $query;
    }

    public function filterByStatus($query, Request $request) {
        if ($request->filled('merchant_status')) {
            $query->where('isMerchant', $request->merchant_status);
        }

        return $query;
    }



    public function location() {
        $merchants = Merchant::all();

        return view('pages.location', compact('merchants'));
    }
}
