<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    
    public function priceModifier(){

        return money_format('$%i', $this->price/100);

    }

}
