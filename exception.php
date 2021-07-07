<?php

function divide ($dividend, $divisor) {
    if ($divisor == 0) {
        throw new Exception("Division by zero");
    }
    return $dividend / $divisor;
}

   try {
        echo divide(5, 0);
        echo "<br>";
   } catch (Exception $ex) {
        $code = $ex->getCode();
        $message = $ex->getMessage();
        $file = $ex->getFile();
        $line = $ex->getLine();
        echo "Exception thrown in $file on line $line: [Code $code] $message";
        echo "Unable to divide<br>";
   } finally {
        echo "Process is complete";
   }

?>