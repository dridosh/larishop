<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class Product extends Model {
        use HasFactory;


//        public function getCategory () {
//            //    $category = Category::where('id',$this->category_id)->first();
//            return Category::find($this->category_id);
//        }


        public function category () {
            return $this->belongsTo(Category::class);
        }

        public function getPriceForCount ($count = 1) {
            if (!is_null($count)) {
               return $this->pivot->count*$this->price;
            }
           return $this->price;
        }
    }
