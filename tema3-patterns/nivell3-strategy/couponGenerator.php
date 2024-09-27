<?php
// THIS IS THE CONTEXT
// We create a class that will be responsible for generating the coupon,
// it will have a property of type CarCouponGenerator that will be the strategy.
class CouponGenerator
{
    private $couponGenerator;

    public function __construct(CarCouponGenerator $couponGenerator)
    {
        $this->couponGenerator = $couponGenerator;
    }

    // We create a setter to change the strategy at runtime.
    public function setCouponGenerator(CarCouponGenerator $couponGenerator)
    {
        $this->couponGenerator = $couponGenerator;
    }
    // This function will call the generateCoupon function of the strategy.
    public function getCarCoupon($isHighSeason, $bigStock)
    {
        return $this->couponGenerator->generateCoupon($isHighSeason, $bigStock);
    }
}