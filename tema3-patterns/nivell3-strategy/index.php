<?php
require_once 'couponGenerator.php';
require_once 'bmwCouponGenerator.php';
require_once 'mercedesCouponGenerator.php';

// Test pattern:
// Create a CouponGenerator with a BmwCouponGenerator strategy
$couponGenerator = new CouponGenerator(new BmwCouponGenerator());
echo $couponGenerator->getCarCoupon(false, true);

// Change the strategy to MercedesCouponGenerator
$couponGenerator->setCouponGenerator(new MercedesCouponGenerator());
echo $couponGenerator->getCarCoupon(false, false);


/*
// CONSIGNA: DES DE AQUEST CODI S'HA DE GENERAR UNA SOLUCIÓ AMB STRATEGY PATTERN
function couponGenerator($car)
{

    $discount = 0;
    $isHighSeason = false;
    $bigStock = true;

    if ($car == "bmw") {
        if (!$isHighSeason) {
            $discount += 5;
        }
        if ($bigStock) {
            $discount += 7;
        }
    } else if ($car == "mercedes") {
        if (!$isHighSeason) {
            $discount += 4;
        }
        if ($bigStock) {
            $discount += 10;
        }
    }
    return $coupon = "Get {$discount}% off the price of your new car.";
}
echo couponGenerator("bmw");
*/