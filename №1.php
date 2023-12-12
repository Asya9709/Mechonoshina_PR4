function convertToSquareMeters(a)
{
    b = a * 1.0925;
    c = b * 10000;
    return c;
}
a = 5;
c = convertToSquareMeters(a);
echo "{a} десятин равны {c} квадратным метрам.";
