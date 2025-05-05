<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Merchant;
use App\Models\City;

class MerchantController extends Controller
{
    public function dashboard(Request $request){
        $cities = City::all();

        $query = Merchant::join('cities', 'merchants.city', '=', 'cities.id')
            ->select('merchants.*', 'cities.name as city_name');

        $query = $this->searchByName($query, $request);
        $query = $this->searchByCity($query, $request);
        $query = $this->filterByStatus($query, $request);

        $merchants = $query->paginate(30)->withQueryString();

        $notMerchant = Merchant::where('isMerchant', 'not')->count();
        $pendingMerchant = Merchant::where('isMerchant', 'pending')->count();
        $activeMerchant = Merchant::where('isMerchant', 'merchant')->count();

        return view('pages.merchant', compact(
            'cities',
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

    public function create() {
        $cities = DB::select('SELECT * FROM cities');

        return view('pages.add-merchant', compact('cities'));
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'pt' => 'required',
            'city' => 'required',
            'contact' => 'required',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'ppiu' => 'required|string',
            'pihk' => 'required|string',
            'rate' => 'required|numeric',
            'isMerchant' => 'required|in:not,pending,merchant',
        ]);

        Merchant::create([
            'name' => $request->name,
            'pt' => $request->pt,
            'city' => $request->city,
            'contact' => $request->contact,
            'latitude' => (float) $request->latitude,  // Konversi ke float
            'longitude' => (float) $request->longitude,
            'ppiu' => $request->ppiu,
            'pihk' => $request->pihk,
            'rate' => (float) $request->rate,
            'isMerchant' => $request->isMerchant
        ]);

        return back()->with('success', 'Merchant created successfully!');
    }

    public function location() {
        $merchants = Merchant::all();
        $merchants = DB::table('merchants')
            ->join('cities', 'merchants.city', '=', 'cities.id')
            ->select(
                'merchants.*',
                'cities.name as city_name'
            )
            ->get();

            // count value
            $notMerchant = Merchant::where('isMerchant', 'not')->count();
            $pendingMerchant = Merchant::where('isMerchant', 'pending')->count();
            $activeMerchant = Merchant::where('isMerchant', 'merchant')->count();

            return view('pages.location', compact(
                'merchants',
                'notMerchant',
                'pendingMerchant',
                'activeMerchant'
            ));
    }
}
