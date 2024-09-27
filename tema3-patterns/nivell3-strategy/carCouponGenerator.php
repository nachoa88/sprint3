<?php
// STRATEGY ELEMENT: This is the strategy element, it is an interface that will be implemented by the concrete classes,
// so that each class can apply the function differently according to the brand of the car.
interface CarCouponGenerator
{
    // This function will be implemented by the concrete classes, it takes two boolean parameters and returns a string.
    public function generateCoupon(bool $isHighSeason, bool $bigStock): string;
}