<?php

namespace Modules\Cart\Repositories;

use Modules\Cart\Entities\Cart;

use function PHPUnit\Framework\isNull;

class CartRepository
{
   public function getCartItems($cart){
    //    dd($cart instanceof Cart);
    if(!$cart instanceof Cart )
    {
        return [];
    }
    $items = $cart->cartItems()->get();
    return $items;
   }

   public function getItemsProduct($items)
   {
    foreach($items as $item)
    {
         $item->product;
    }
    return $items;
   }
}
