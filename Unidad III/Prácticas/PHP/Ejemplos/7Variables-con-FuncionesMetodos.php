<?php
class Foo
{
    function Var1() {

	 echo "<hr>Esto es Var1<br><hr>";
        $name = "Bar";
        $this->$name(); // Esto llama al m�todo Bar()
    }

    function Bar(){
        echo "Esto es Bar<br><hr>";
    }
}

echo "<hr>Esto es Principal <br>";
$foo = new Foo();
$funcname = "Var1";
$foo->$funcname();  // Esto llama a $foo->Var()
?>
