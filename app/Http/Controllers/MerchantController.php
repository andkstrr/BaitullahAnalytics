<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Merchant;

class MerchantController extends Controller
{
    public function dashboard(Request $request)
    {
        // relasi ke table cities
        $query = Merchant::join('cities', 'merchants.city', '=', 'cities.id')
            ->select('merchants.*', 'cities.name as city_name');

        // function query
        $query = $this->searchByName($query, $request);
        $query = $this->searchByCity($query, $request);
        $query = $this->filterByStatus($query, $request);

        // Pagination
        $merchants = $query->paginate(30)->withQueryString();

        // count value
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

    public function updateStatus(Request $request, Merchant $merchant) {
        $request->validate([
            'isMerchant' => 'required|in:not,pending,merchant',
        ]);

        $merchant->update([
            'isMerchant' => $request->isMerchant
        ]);

        return back()->with('success', 'Merchant status updated successfully!');
    }



    public function location() {
        $merchants = DB::table('merchants')
            ->join('cities', 'merchants.city', '=', 'cities.id')
            ->select(
                'merchants.*',
                'cities.name as city_name'
            )
            ->get();

        return view('pages.location', compact('merchants'));
    }
}
