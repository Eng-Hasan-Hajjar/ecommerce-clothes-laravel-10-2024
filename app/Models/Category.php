<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
     // اسم الجدول في قاعدة البيانات
     protected $table = 'categories';

     // الخصائص التي يمكن التعديل عليها
     protected $fillable = ['name', 'description'];

     // الخصائص التي يجب أن تكون محمية وغير قابلة للتعديل
     protected $guarded = ['id', 'created_at', 'updated_at'];

     // علاقة الفئة بالمنتجات
     public function products()
     {
         return $this->hasMany(Product::class);
     }
}
