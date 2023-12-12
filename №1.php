function convertToSquareMeters(a)
{
b = a * 1.0925;
c = b * 10000;
return c;
}
function convertToOtherUnits(c, d)
{
switch (d) {
case 'сотки':
return c * 0.01;
case 'югер':
return c * 0.0001;
case 'акр':
return c * 0.000247105;
case 'площадь Земли':
return c / 510100000;
default:
return c;
}
}
a = 5;
c = convertToSquareMeters(a);
f = 'сотки';
g = convertToOtherUnits(c, f);
echo "{a} десятин равны {g} {f}.";
