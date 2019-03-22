<?php
function faculteit($getal)
{
    $uitkomst = 1;
    while($getal > 0)
    {
        $uitkomst *= $getal;
        $getal--;
    }
    return $uitkomst;
}
echo "!0 = ". faculteit(0)."<br>";
echo "!1 = ". faculteit(1)."<br>";
echo "!2 = ". faculteit(2)."<br>";
echo "!3 = ". faculteit(3)."<br>";
echo "!4 = ". faculteit(4)."<br>";
?>
