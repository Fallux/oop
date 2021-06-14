<?php
//doel: laatse schooldagen van dit schooljaar berekenen met function
$laatste_dag = strtotime("09-07-2021");

function resterendeDagen($laatste_dag){
    $heden = strtotime("10-06-2021");
    return ($laatste_dag - $heden)/60/60/24;

}

echo"de reseterende dag is:" . resterendeDagen($laatste_dag) . "<br>";
echo"de reseterende dag is:" . resterendeDagen($laatste_dag) . "<br>";

echo"de reseterende dag is:" . resterendeDagen($laatste_dag) . "<br>";

echo"de reseterende dag is:" . resterendeDagen($laatste_dag) . "<br>";

echo"de reseterende dag is:" . resterendeDagen($laatste_dag) . "<br>";

echo"de reseterende dag is:" . resterendeDagen($laatste_dag) . "<br>";

echo"de reseterende dag is:" . resterendeDagen($laatste_dag) . "<br>";

echo"de reseterende dag is:" . resterendeDagen($laatste_dag) . "<br>";

?>