<?php
/**
* Affiche "Hello World !"
*/
function helloWorld() : void
{
 echo "Hello World !";
}
// test de la fonction (la fonction affiche directement le résultat)
helloWorld();

?>

<?php
function hello(string $name) : string
{
 return "Hello $name";
}
// test de la fonction (la fonction n'affiche rien. "echo" affichera la valeur retournée par la fonction)
echo hello("Mike");

?>

