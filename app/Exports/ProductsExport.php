<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ProductsExport implements FromView
{
    public function __construct($products)
    {
        $this->products = $products;
    }
    public function view(): View
    {
        return view('productsExport',[
            'products'=>$this->products
        ]);
    }
}
