<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function products () {
        return $this->belongsToMany(Product::class)->withPivot('count')->withTimestamps();
  }

    public function getfullPrice () {
        $sum=0;
        foreach ( $this->products as $product) {
            $sum+=$product->pivot->count*$product->price;
        }
        return $sum;
  }

    public function saveOrder ($name,$email,$phone) {
        if ($this->status ==0) {
            $this->name = $name;
            $this->email = $email;
            $this->phone = $phone;
            $this->status = 1;
            $this->save();
            session()->forget('orderId');

            return true;
        }

        return false;

    }
}
