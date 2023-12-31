<?php
// Функция для вычисления площади боковой поверхности прямоугольного параллелепипеда
function calculateLateralSurfaceArea(a, b, c)
{
    // Формула для вычисления площади боковой поверхности: S = 2 * (a * b + b * h + a * h)
    S = 2 * (a * b + b * c + a * c);

    return S;
}

// Функция для вычисления половины площади поверхности всего тела
function calculateHalfTotalSurfaceArea(a, b, c)
{
    // Формула для вычисления половины площади поверхности всего тела: S = 2 * (a * b + b * h + a * h)
    F = 2 * (a * b + b * c + a * c);
    G = 0.5 * F;

    return G;
}

// Функция для вычисления трети объема тела
function calculateThirdVolume(a, b, c)
{
    // Формула для вычисления объема тела: V = a * b * h
    V = a * b * c;
    H = V / 3;

    return H;
}

// Функция для вычисления диагонали всего параллелепипеда
function calculateTotalDiagonal(a, b, c)
{
    // Формула для вычисления диагонали всего параллелепипеда: d = sqrt(a^2 + b^2 + h^2)
    F = sqrt(a ** 2 + b ** 2 + c ** 2);

    return F;
}

// Функция для вычисления диагоналей сторон
function calculateSideDiagonals(a, b, c)
{
    // Формула для вычисления диагоналей сторон: d1 = sqrt(b^2 + h^2), d2 = sqrt(a^2 + h^2), d3 = sqrt(a^2 + b^2)
    l1 = sqrt(b ** 2 + c ** 2);
    l2 = sqrt(a ** 2 + c ** 2);
    l3 = sqrt(a ** 2 + b ** 2);

    return [l1, l2, l3];
}

// Пример использования функций
a = 5; // Замените на нужное значение
b = 3;  // Замените на нужное значение
c = 4; // Замените на нужное значение

// Вычислите площадь боковой поверхности
S = calculateLateralSurfaceArea(a, b, c);

// Вычислите половину площади поверхности всего тела
G = calculateHalfTotalSurfaceArea(a, b, c);

// Вычислите треть объема тела
H = calculateThirdVolume(a, b, c);

// Вычислите диагональ всего параллелепипеда
F = calculateTotalDiagonal(a, b, c);

// Вычислите диагонали сторон
L = calculateSideDiagonals(a, b, c);

// Выведите результаты
echo "Площадь боковой поверхности: {S}\n";
echo "Половина площади поверхности всего тела: {G}\n";
echo "Треть объема тела: {H}\n";
echo "Диагональ всего параллелепипеда: {F}\n";
echo "Диагонали сторон: d1 = {L[0]}, d2 = {L[1]}, d3 = {L[2]}\n";
?>