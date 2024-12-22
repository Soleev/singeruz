<?php

namespace App\Http\Controllers;

use App\Models\Product;

class CatalogController extends Controller
{
    /**
     * Показывает весь каталог продуктов.
     *
     * @return \Illuminate\View\View
     */
    public function showAllProducts()
    {
        // Загружаем продукты вместе с их категориями
        $products = Product::with('category')->get();

        // Количество продуктов
        $rowsCount = $products->count();

        // Передаем данные в шаблон
        return view('pages.catalog', compact('products', 'rowsCount'));
    }
}
