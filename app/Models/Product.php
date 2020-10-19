<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    use HasFactory;

    public function orders() {
        return $this->belongsToMany(Order::class)->withTimeStamps();
    }

    public function details() {
        if ($this->type == 'flexopgraphic') {
            $instance = new Flexographic();
            $eloquent_builder = new \Illuminate\Database\Eloquent\Builder(
                DB::table('flexographics')->where('product_id', $this->id)
            );
            $eloquent_builder->setModel($instance);
            return $eloquent_builder->first();
        }
        else if ($this->type == 'offset') {
            $instance = new Offset();
            $eloquent_builder = new \Illuminate\Database\Eloquent\Builder(
                DB::table('offsets')->where('product_id', $this->id)
            );
            $eloquent_builder->setModel($instance);
            return $eloquent_builder->first();
        }
    }
}
