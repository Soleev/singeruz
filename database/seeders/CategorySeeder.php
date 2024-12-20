<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $titles = [
            'Иглы', 'Лапки', 'Пластины', 'Движители ткани', 'Комлекты', 'Челноки', 'Шпульные колпаки', 'Шпули', 'Ножи', 'Окантователи', 'Ножницы', 'Разные запчасти', 'Картриджи', 'Спреи', 'Маркеры', 'Химикаты', 'Масла смазочные', 'Бумага', 'Пленки', 'Крепители этикеток', 'Для гладильных','Настилочное', 'Пресс', 'Чистка', 'Разное оборудование', 'Иглодержатели', 'Петлители', 'Точильный камень'
        ];

        foreach ($titles as $title) {
            Category::create([
                'title' => $title,
                'slug' => Str::slug($title), // Генерация slug из title
                'parent' => 'Запчасти',
            ]);
        }
    }
}
