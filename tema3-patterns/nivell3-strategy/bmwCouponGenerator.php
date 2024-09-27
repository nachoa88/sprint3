<?php
require_once 'carCouponGenerator.php';

class BmwCouponGenerator implements CarCouponGenerator
{
    // We divide the function for bmw in one class and for mercedes in another class, 
    // each class will apply the function differently according to the brand of the car.
    public function generateCoupon(bool $isHighSeason, bool $bigStock): string
    {
        $discount = 0;
        if (!$isHighSeason) {
            $discount += 5;
        }
        if ($bigStock) {
            $discount += 7;
        }
        return $coupon = "Get {$discount}% off the price of your new car." . PHP_EOL;
    }
}