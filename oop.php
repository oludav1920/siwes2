<?php
class Buy{
    private $price;
    private $discount;
    public function __construct($pr, $dis){
        $this->price = $pr;
        $this->discount = $dis;
        return "price is" + $this->price + "discount is" + $this->discount;
    }
}
$buy = new Buy(1000, 200);
echo $buy
?>