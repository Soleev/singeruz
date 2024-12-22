<?php

namespace App\Http\Controllers;

use App\Models\Product;

class GoldProductController extends Controller
{
    /**
     * Показывает продукты с золотой меткой.
     *
     * @return \Illuminate\View\View
     */
    public function showGoldProducts()
    {
        // Загружаем продукты, где golden = 1
        $goldProducts = Product::where('golden', 1)->with('category')->get();

        // Количество золотых продуктов
        $goldProductCount = $goldProducts->count();

        // Передаем данные в шаблон
        return view('pages.gold', compact('goldProducts', 'goldProductCount'));
    }
}
