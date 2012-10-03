
<?php
// Various classes we want to shield the Client from.
class Adder
{
    public function add($a, $b)
    {
        return $a + $b;
    }
}

class Subtractor
{
    public function subtract($a, $b)
    {
        return $a - $b;
    }
}

class Multiplier
{
    public function multiply($a, $b)
    {
        return $a * $b;
    }
}

class Divider
{
    public function divide($a, $b)
    {
        if ($b == 0) {
            throw new Exception('Division by zero.');
        }
        return $a / $b;
    }
}