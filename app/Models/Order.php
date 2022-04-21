<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function products() {
        return $this->belongsToMany(Product::class)->withPivot('count')->withTimestamps();
    }

    public function getFullPrice() {
        $sum = 0;
        foreach ($this->products as $product) {
            $sum += $product->getPriceForCount();
        }
        return $sum;
    }

    public function saveOrder($email, $phoneNumber) {
        if ($this->status == 0) {
            $this->email = $email;
            $this->phoneNumber = $phoneNumber;
            $this->status = 1;
            $this->save();
            session()->forget('orderId');
            return true;
        } else {
            return false;
        }
    }
}
