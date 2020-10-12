<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    public function orders() {
        return $this->hasMany(Order::class);
    }

    // TODO: This wont work for now as to only the name is being used in the product model
    public function products() {
        return $this->hasMany(product::class);
    }
}
