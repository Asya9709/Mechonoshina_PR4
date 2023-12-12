<?php
function calculateSideLength(a, b)
{
    // Формула для вычисления длины стороны ромба: a = sqrt((d1^2 + d2^2) / 2)
    c = sqrt((a**2 + b**2) / 2);
    return c;
}
a = 8;
b = 6;
c = calculateSideLength(a, b);
echo "Длина стороны ромба: {c}";
?>
