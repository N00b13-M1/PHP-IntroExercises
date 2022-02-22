<?php

// Trouvez les différentes méthodes pour réaliser les exercices :

//     0. Afficher du texte dans le terminal

echo "Hello Les amis \n";

//     1. Faire un commentaire à une ligne

//echo "Hello Les amis"

//     2. Faire un commentaire à plusieurs lignes

/*echo "Hello Les amis"
$x = 15*/

//     3. Déclarer un string / integer / float / boolean

$x = "String \n";
echo $x;

$y = 1;

echo $y;
echo "\n";

$z = 2.11;
echo $z;
echo "\n";

$d = true;
echo $d;
echo "\n";

//     4. Convention d'écriture d'une variable
//     5. Concatenation de 2 variables

$b = "2";
$c = "3";

echo $b,$c;
echo "\n";
echo $b + $c;
echo "\n";
//     6. Opérateurs logiques

$d = 2;
$e = 3;

echo $d - $e;
echo "\n";

echo $d * $e;
echo "\n";

echo $d / $e;
echo "\n";

echo $d % $e;
echo "\n";

//     7. Incrémentation de 1

$f = 2;

$f++;
echo $f;
// echo ++$f;

echo "\n";

//     8. Décrémentation de 1

$g = 3;

$g--;
echo $g;

// echo --$g;

echo "\n";

//     9. Création d'un tableau

$class1 = ["Jade","Alex", "Nico"];
print_r ($class1);
echo "\n";

$class2 = array("Jade","Alex", "Nico");
echo $class;
echo "\n";

//     10. Afficher la première donnée d'un tableau
echo $class[0];
echo "\n";

//     11. Faire une condition
;

echo $date;
echo "\n";


if ($date < "20") {
    echo "Nice!";
} else {
    echo "Better luck next time!";
}
echo "\n";

//     12. Condition ternaire

$date2 = date("s");
echo $date2;
echo "\n";

echo ($date2>=20) ? "pass" : "Fail";
echo "\n";
//      13. Condition switch

$number = 0;

switch ($number) {
    case 5 : 
        echo "five";
        break;
    case 4 :
        echo "four";
        break;
    case 3 :
        echo "three";
        break;
    default :
        echo "Salutos";
}
echo "\n";

//     14. While

$x = 3;

while ($x<5){
    echo "Hello";
    echo "\n";
    $x++;

}

//     15. For



for($x= 0; $x < 5; $x++){
    echo $x;
}

echo "\n";

//     16. Foreach

$table = [0,"A",2,"B",5];

foreach ($table as $variable) {
    echo $variable;
    echo "\n";
}
//     17. Créer un objet

class User {

    public $email;
    public $name;

    public function login(){
        echo "the user logged in";
    }

    public function __construct($email,$name){
        $this->email = $email;
        $this->name = $name;
    }
}

$userOne = new User("Test", "test2");
$userOne->$email;

//     18. Afficher une propriété de l'objet

echo $userOne->name;

$userTwo = new User("yoshi@email.com", "Yoshi");
echo $userTwo->name;
//     19. Création d'une fonction

echo "\n";

//     20. Créer une phrase

$phrase = "This is my sentence";
echo $phrase;
echo "\n";

//     21. Rendre la phrase en majuscule

echo strtoupper($phrase);
echo "\n";

//     22. Remplacer une lettre par une autre

echo str_replace("T", "O", $phrase);
//     23. Savoir le nombre caractères d'une phrase
echo "\n";
echo strlen($phrase);
//     24. Rendre la phrase en minuscule
echo "\n";
echo strtolower($phrase);
echo "\n";
//     25. Faire une soustraction de lettres dans la phrase

$rest = "letter";

echo substr($rest,0,5);
echo "\n";
//     26. Affiche la valeur absolue d'un nombre

$x = -4.2342;

echo abs($x);


//     27. Retourne la plus grande valeur d'un tableau avec des nombres
$tableOne = [1,4353.4,2,-3,4];
echo "\n";

echo max($tableOne);
echo "\n";

//     28. Retourne la plus petite valeur d'un tableau avec des nombres

echo min($tableOne);
echo "\n";
//     29. Retourne un nombre aléatire

echo rand(10,100);
echo "\n";

//     30. Arrondir le nombre

echo round(rand(0,5)/3);
echo "\n";

?>

