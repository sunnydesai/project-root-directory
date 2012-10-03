<?php
class CalculatorFactory
{
    public function getCalculator()
    {
        return new CalculatorFacade(new Adder(), new Subtractor(), new Multiplier(), new Divider());
    }
}