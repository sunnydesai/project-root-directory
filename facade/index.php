<?php

include_once 'CalculatorFacade.php';
include_once 'CalculatorFactory.php';
// Client code
$adder = new Adder();
echo '254 + 113 = ', $adder->add(254, 113), "\n";
$divider = new Divider();
echo '256 / 8 = ', $divider->divide(256, 8), "\n";

// Client code
$calculatorFactory = new CalculatorFactory;
$calculator = $calculatorFactory->getCalculator();
echo '254 + 113 = ', $calculator->calculate('254 + 113'), "\n";
echo '256 / 8 = ', $calculator->calculate('256 / 8'), "\n";