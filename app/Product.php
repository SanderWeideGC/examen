<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'ProductCategory',
        'ProductName',
        'ProductPrice'
    ];

    public function formatProductCategory() {
        switch($this->ProductCategory) {
            case 1:
                return "Koude dranken";
                break;

            case 2:
                return "Warme dranken";
                break;

            case 3:
                return "Snacks";
                break;

        }
    }
}
