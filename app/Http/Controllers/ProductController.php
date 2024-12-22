<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    public function showSingleProduct($parentSlug, $id)
    {
        // Получаем продукт по id
        $product = Product::findOrFail($id);

        // Дополнительно можно загрузить описание категории или другие данные
        $parent_desc = $product->parent_desc;  // Предположим, что поле "parent_desc" есть в таблице "products"

        // Отправляем данные в представление
        return view('pages.product', compact('product', 'parentSlug', 'parent_desc'));
    }
    // Метод для вывода продуктов категории по слагу
    public function showCategoryProducts($parentSlug)
    {
        // Получаем все продукты с данным родителем
        $products = Product::where('parent', $parentSlug)->get();
        $rowsCount = $products->count();
        // Определяем описание родительской категории из той же таблицы
        $parent_desc = $this->getParentDesc($parentSlug);
        // Передаем в представление данные
        return view('pages.category', compact('products', 'rowsCount', 'parent_desc'));
    }
    // Метод для получения описания категории из таблицы 'products'
    private function getParentDesc($parentSlug)
    {
        // Находим первое совпадение по parent
        $product = Product::where('parent', $parentSlug)->first();

        // Если продукт с таким parent существует, возвращаем описание
        return $product ? $product->parent_desc : ' Описание категории не найдено';
    }
}
