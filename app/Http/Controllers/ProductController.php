<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // Импорт модели Product

// Убедитесь, что этот импорт есть:
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    // Метод для вывода продуктов категории по слагу
    public function showCategoryProducts($parentSlug)
    {
        // Получаем все продукты с данным родителем
        $products = Product::where('parent', $parentSlug)->get();
        $rowsCount = $products->count();

        // Определяем описание родительской категории
        $parent_desc = $this->getParentDesc($parentSlug);

        // Передаем в представление данные
        return view('pages.category', compact('products', 'rowsCount', 'parent_desc'));
    }

    // Метод для получения описания категории (например, может быть из базы или хардкод)
    private function getParentDesc($parentSlug)
    {
        // Это можно заменить на реальный запрос к базе или заранее подготовленные данные
        $descriptions = [
            'igly' => 'Игольные изделия',
            'zapchasti' => 'Запчасти для машин',
            'oborudovanie' => 'Оборудование для производства',
        ];

        return $descriptions[$parentSlug] ?? 'Описание категории не найдено';
    }
}
