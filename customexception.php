<?php
class DivideByZeroException extends Exception { }
class DivideByNegativeException extends Exception{ }
function checkdivisor ($dividend,$divisor){
    ///throw exception if divisor is zero
}
try{
    if($divisor==0){
        throw new DividendByZeroException;
    }elseif($divisor<0){
        throw new DividendByNegativeException;
    }else{
        $Result=$dividend/$divisor;
        echo"result of division=$result </br>";
    }
}
catch(DivideByZeroException $dze){
    echo"divide by negative number exception <br>";
}
catch(DivideByNegativeNoException $dnne){
    echo"divide by negative number exception <br>";

    catch(exception $ex){
        echo "unknown Exception";
    }


}
checkdivision(18,3);
checkdivisor(34,-6);
checkdivisor(27,0);
?>