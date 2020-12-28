<?php
    function cube($pi , $r)
    {
        echo "Return Value <br />";
        return $r*$pi;

    }
    echo cube(3.15,3)."<br />";
?>

<?php
    function sum(int $x, int $y){
        $z = $x + $y;
        return $z;
    }
    echo "5 + 10 = " .sum(5,10);
?>