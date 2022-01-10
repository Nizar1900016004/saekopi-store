<?php

namespace App\Http\Livewire;

use App\Models\Checkout;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        $listTransaction = Checkout::all();

        $transactions = Checkout::all();
        $products = Product::all();

        return view('dashboard', compact(
            [
                'listTransaction',
                'transactions',
                'products'
            ]
        ));
    }
}
