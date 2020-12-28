<?php

    function add($x , $y){
        $sum = $x + $y;
        echo "Sum of two number is : $sum<vbr />";
    }
    add(5,10);

    function add2($x , $y){
        $sum = $x - $y;
        echo "Subtraction of two number is : $sum<vbr />";
    }

    if(isset($_POST['add'])){
        add2($_POST['first'],$_POST['second']);
    }


    function sub2($x , $y){
        $sum = $x - $y;
        echo "Subtraction of two number is : $sum<vbr />";
    }

    if(isset($_POST['sub'])){
        sub2($_POST['first'],$_POST['second']);
    }


?>

<form>
    Enter first number : <input type="text" name="first"/><br />
    Enter Second number : <input type="text" name="second"/><br />
    <input type="submit" name="add" value="adition" />
    <input type="submit" name="sub" value="adition" />
</form>