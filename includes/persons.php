<?php
/*  -----------------------------------------------------------------
    Definiere $PERSONS als multidimensionaler Array.
    -----------------------------------------------------------------

    !! Prüfen: Eine PHP-Konstante hat kein '$' Symbol am Anfang.
    !! die Personen aus dem JavaScript Array (unten) in PHP übernehmen  
*/
$persons = array(
    array(
        "firstName" => "Austin",
        "lastName" => "Powers",
        "age"=> 86,
        "country"=> "USA"
    ),
    array(
        "firstName"=> "Paul",
        "lastName" => "Donjon",
        "age" => 54,
        "country"=>  "USA"
    ),
    array(
        "firstName" => "Fritz",
        "lastName"=> "Kleiner",
        "age"=> 24,
        "country" => "Switzerland"
    ),
    array(
        "firstName" => "John",
        "lastName" => "Doe",
        "age" => 14,
        "country" => "Liechtenstein"
    ),
    array(
        "firstName" => "Jolanda",
        "lastName" => "Frankfurter",
        "age" => 36,
        "country" => "Italy"
    ),
    array(
        "firstName" => "Gottfried",
        "lastName" => "Keller",
        "age" => 30,
        "country" => "Switzerland"
    ),
    array(
        "firstName" => "Gert",
        "lastName" => "Schröder",
        "age" => 42,
        "country" => "Germany"
    ),
    array(
        "firstName" => "Emilio",
        "lastName" => "Estevez",
        "age" => 40,
        "country" => "Italy"
    ),
    array(
        "firstName" => "Robert",
        "lastName" => "Graveur",
        "age" => 54,
        "country" => "France"
    ),
    array(
        "firstName" => "Al",
        "lastName" => "Bundy",
        "age" => 18,
        "country" => "Switzerland"
    ),
    array(
        "firstName" => "John",
        "lastName" => "McFitzenDizzen",
        "age" => 40,
        "country" => "Ireland"
    )
    // TODO
);


array_push($persons, 
array(
    "firstName" => "Charles",
    "lastName" => "McKenzie",
    "age" => 20,
    "country" => "Ireland"
),
array(
    "firstName" => "Sepp",
    "lastName" => "Meyer",
    "age" => 56,
    "country" => "China"
),
array(
    "firstName" => "Silver",
    "lastName" => "Surfer",
    "age" => 66,
    "country" => "ZennLaa"
),
array(
    "firstName" => "John",
    "lastName" => "Wayne",
    "age" => 77,
    "country" => "Texas"
),
array(
    "firstName" => "Baron",
    "lastName" => "Harkonnen",
    "age" => 56,
    "country" => "Australia"
),
array(
    "firstName" => "Sepp",
    "lastName" => "Meyer",
    "age" => 444,
    "country" => "China"
),
array(
    "firstName" => "Hard",
    "lastName" => "Banks",
    "age" => 22,
    "country" => "China"
),
array(
    "firstName" => "Honey",
    "lastName" => "Masters",
    "age" => 10,
    "country" => "Titicaca"
),
array(
    "firstName" => "Enter",
    "lastName" => "Sandman",
    "age" => 56,
    "country" => "UK"
),
array(
    "firstName" => "Gaudenz",
    "lastName" => "Raiber",
    "age" => 12,
    "country" => "Switzerland"
),



);


 // prettyPrint($persons);

?>





<?php  /* 


function writeAllPersons() {
    

  foreach(PERSONS as $person){
   
    echo '<tr><td>'. $person['firstName'] .'</td><td>' . $person['lastName'] .'</td><td>' . $person['age'] . '</td><td>'. $person['country'] .'</td></tr>';
   
}

} */
?>

<?php /*
function writeYoungerThan40() {
    
    
    if ($PERSONS < 40) {
         echo "<tr><td>" . $PERSONS[1]['firstName'] . "</td><td></td><td></td><td></td></tr>";
       }

 }
 */
 ?>

<!-- <?php/*
function writeYoungNonSuisse() {
    
    
    for ($i = 0; $i < 10; $i++) {
         echo "<tr><td>" . $PERSONS[1]['firstName'] . "</td><td></td><td></td><td></td></tr>";
       }
    
   foreach(PERSONS as $person){
    
     echo '<tr><td>'. $person['firstName'] .'</td><td>' . $person['lastName'] .'</td><td>' . $person['age'] . '</td><td>'. $person['country'] .'</td></tr>';
    
 }
 */
 ?> -->


<?php
 function writeAllPersons() {
    $personCount = count($persons);

    for ($p = 0; $p < $personCount; $p++){
    $person = $persons[$p];

    writePersonRow($person);

    /* $firstName = $person["firstName"];
    $lastName = $person["lastName"];
    $age = $person["age"];
    $country = $person["country"];

    echo "<tr><td>$firstName</td><td>$lastName</td><td>$age</td><td>$country</td></tr>"; */
    }
}

// Einzelfunktionen Start --- Einzelfunktionen Start --- Einzelfunktionen Start --- Einzelfunktionen Start --- Einzelfunktionen Start --- 

/* function writeYoungerThan40() {
    $personCount = count(PERSONS);

    for ($p = 0; $p < $personCount; $p++){
    $person = PERSONS[$p];

    if($person["age"] <= 40) {   

        writePersonRow($person); */
    /*$firstName = $person["firstName"];
    $lastName = $person["lastName"];
    $age = $person["age"];
    $country = $person["country"];

    echo "<tr><td>$firstName</td><td>$lastName</td><td>$age</td><td>$country</td></tr>";*/
       // }    
   // }
//}



/* function writeYoungNonSuisse() {
    $personCount = count(PERSONS);

    for ($p = 0; $p < $personCount; $p++){
    $person = PERSONS[$p];

    if($person["age"] <= 30 && $person["country"] !== "Switzerland") {   

        writePersonRow($person); */

    /* $firstName = $person["firstName"];
    $lastName = $person["lastName"];
    $age = $person["age"];
    $country = $person["country"];

    echo "<tr><td>$firstName</td><td>$lastName</td><td>$age</td><td>$country</td></tr>"; */
       // }    
  //  }
//}   
// Einzelfunktionen Ende --- Einzelfunktionen Ende --- Einzelfunktionen Ende --- Einzelfunktionen Ende --- Einzelfunktionen Ende ---

// $filterCondtion muss eine Funktion sein
function writeFilteredPersons($filterId, $persons) { // writeFilteredPersons("personIsYoungerThan40); // writeFilteredPersons("youngNonswiss");
    $personCount = count($persons);

    for ($p = 0; $p < $personCount; $p++){
    $person = $persons[$p];
    $doPrint = false;

    switch  ($filterId) {
        case "personIsYoungerThan40";
            $doWrite = $person["age"] <= 40;

            break;

        case "youngNonswiss";
            $doWrite =  $person["age"] <= 30 && $person["country"] !== "Switzerland";
            break;

        default:
            $doWrite = true;

    }

    if($doWrite) writePersonRow($person);    
        // kurzform: if( $filterCondtion() ) writePersonRow($person);
    }
}

// filtercondition-function
function personIsYoungerThan40($person) { 
    if($person["age"] <= 40) return true;
    // if($person["age"] <= 30 && $person["country"] !== "Switzerland") return true;
    else return false;
}

// SUPPORT-FUNCTION -----------------------------------------------------

function writePersonRow($person) {
    $firstName = $person["firstName"];
    $lastName = $person["lastName"];
    $age = $person["age"];
    $country = $person["country"];

    echo "<tr><td>$firstName</td><td>$lastName</td><td>$age</td><td>$country</td></tr>";

}

?>

