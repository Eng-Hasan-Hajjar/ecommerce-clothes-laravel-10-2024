<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
        // اسم الجدول في قاعدة البيانات
        protected $table = 'products';


        // الخصائص التي يمكن التعديل عليها
        protected $fillable = ['name', 'description', 'size', 'color', 'price', 'category_id'];

        // الخصائص التي يجب أن تكون محمية وغير قابلة للتعديل
        protected $guarded = ['id', 'created_at', 'updated_at'];

        // علاقة المنتج بفئته
        public function category()
        {
            return $this->belongsTo(Category::class);
        }

}
