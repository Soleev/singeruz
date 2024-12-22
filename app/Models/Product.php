<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Указываем таблицу, если имя не соответствует стандартному
    protected $table = 'products';

    // Указываем столбцы, которые можно массово присваивать
    protected $fillable = [
        'title',
        'description',
        'parent',
        'parent_desc',
        'content',
        'img',
        'img2',
        'img3',
        'img4',
        'img5',
        'golden',
    ];

    // Если в вашей таблице есть поле "created_at" и "updated_at", то Laravel будет их автоматически обрабатывать
    public $timestamps = true;

    // Указываем типы данных для временных полей
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
    // Связь с моделью Category
    public function category()
    {
        return $this->belongsTo(Category::class, 'parent', 'slug'); // 'parent' в products связан с 'slug' в categories
    }
}

