<?php // Opening tag

//Hello World in PHP
echo "Hello, World! \n\n";

/*
This 
is a 
multi-line 
comment
*/

//Variables in PHP
$name = "John"; //Always start with $ sign to declare a variable
echo "Hello, $name!" . "\n"; // . concatenation operator
echo gettype($name) . "\n"; // gettype() function

/*
Changing variable type
Dynamic typing
*/
$age = "25";
echo gettype($age) . "\n";
$age = 25;
echo gettype($age) . "\n";
echo "John is $age years old. \n\n";

// Basic arithmetic
$age = $age + 3;
echo "John is $age years old. \n";
$age -= 3; // shorthand
echo "John is $age years old. \n\n";

$money = 100.50; // type primitive double
echo "John has $money dollars. \n";
echo gettype($money) . "\n";
$money = $money + 50; // sum of double and int results in double
echo "John has $money dollars. \n";
echo gettype($money) . "\n\n";

// Boolean type
$isAdult = false; // type primitive boolean
echo gettype($isAdult) . "\n"; // output 1 for true, empty for false
echo "False(empty): " . $isAdult  . "\n";
$isAdult = true;
echo "True: " . $isAdult  . "\n";
echo "Is John an adult? " . ($isAdult ? "Yes" : "No") . "\n\n"; // ternary operator

//Constants
define("PI", 3.14); // constant declaration
echo "Value of PI: " . PI . "\n";
// PI = 3.14159; // This will cause an error
const E = 2.71; // another way to declare constant
echo "Value of E: " . E . "\n";
/* 
Different in define and const

1. define() can be used to declare constants at runtime, while const is used at compile time.
2. const can be used within classes to declare class constants, while define() cannot.
3. const supports visibility modifiers (public, private, protected) when used in classes, while define() does not.
4. define() are global and can be accessed from anywhere in the script, while const follows normal scoping rules.

EXAMPLE

Constant using *define* (works only in global scope) */
define("GRAVITY", 9.8);

class MathConstants
{

    // Constant using const inside the class
    const PI = 3.14159;
    // define("EXAMPLE", 1234); // This will cause an error

    // Method to display constants
    public function showConstants()
    {
        // Accessing the class constant
        echo "PI: " . self::PI . "\n"; // self:: to access static members inside the class
        // Accessing the global constant
        echo "Gravity: " . GRAVITY . "\n";

        if (defined("EXAMPLE")) { //check if constant is defined, if not defined, define it
            echo "EXAMPLE: " . EXAMPLE . "\n";
        } else {
            define("EXAMPLE", self::PI + GRAVITY);
        }
    }
}
$math = new MathConstants();
$math->showConstants();
echo "\n";


//Lists/Arrays in PHP
$fruits = array("Apple", "Banana", "Orange",); // , is optional 
$vegetables = ["Carrot", "Broccoli", "Spinach"]; // short way
echo gettype($fruits) . "\n"; // type array
echo "First fruit: " . $fruits[0] . "\n"; // Accessing array elements
echo "Vegetables:\n";
foreach ($vegetables as $vegetable) { // Looping through arrays
    echo "- " . $vegetable . "\n";
}
array_push($fruits, "Mango"); // Adding element to array
print_r($fruits); // print_r() function to print arrays
echo "\n\n";

//Dictionaries/Associative Arrays in PHP
$person = array( // key-value pairs
    "name" => "Alice",
    "age" => 30,
    "city" => "New York"
);
echo gettype($person) . "\n"; // type array
print_r($person);
echo "Person Details:\n";
foreach ($person as $key => $value) {
    echo "$key: $value\n";
}
echo "{$person["name"]} is {$person["age"]} years old and lives in {$person["city"]}.\n\n";

// Arrays unique function
$numbers = [1, 2, 2, 3, 4, 4, 5];
print_r($numbers); // Output: Array ( [0] => 1 [1] => 2 [2] => 2 [3] => 3 [4] => 4 [5] => 4 [6] => 5 )
$uniqueNumbers = array_unique($numbers);
print_r($uniqueNumbers); // Output: Array ( [0] => 1 [1] => 2 [3] => 3 [4] => 4 [6] => 5 )
echo "\n";

// Control Structures
$score = 85;
if ($score >= 90) {
    echo "Grade: A\n";
} elseif ($score >= 80) {
    echo "Grade: B\n";
} else {
    echo "Grade: C or below\n";
}

for ($i = 1; $i <= 5; $i++) {
    echo "Count: $i\n";
}
// vs
foreach ($vegetables as $vegetable) {
    echo "Vegetable: $vegetable\n";
}
while ($score < 90) {
    $score += 2;
    echo "Increasing score: $score\n";
}
echo "\n";


// Classes and Objects
class Dog
{
    // Properties
    public $name;
    public $breed;

    // Constructor
    public function __construct($name, $breed)
    {
        $this->name = $name; // $this refers to the current object
        $this->breed = $breed;
    }

    // Method
    public function bark()
    {
        return "Woof! My name is " . $this->name . " and I am a " . $this->breed . ".\n";
    }
}
$dog = new Dog("Princess", "American Bulldog"); // Creating an object
echo gettype($dog) . "\n"; // type object
print_r($dog); // print_r() function to print objects
echo $dog->bark() . "\n\n"; // Calling a method


//RegExp in PHP
$pattern = "/\bcat\b/i"; // /.. / delimited expression, \b for word boundary and i for case-insensitive
// So, we are looking for the word "cat" in a case-insensitive manner
$sentence = "The Cat sat on the mat.";
echo "Is the word cat found in the sentence? \"$sentence\" \n";
if (preg_match($pattern, $sentence)) { // preg_match() function
    echo "Match found!\n";
} else {
    echo "No match found.\n";
}

echo "\n";

$name = "Nicole"; // Variable declaration
var_dump($name); // var_dump() function to display variable type and value

// Single vs Double Quotes Example
$singleQuoted = 'Hello, $name!\nThis is a single-quoted string.' . "\n";
$doubleQuoted = "Hello, $name!\nThis is a double-quoted string." . "\n";
$ignoreDollar = "This will not parse $name but will show the dollar sign: \$name \n";

echo $singleQuoted . "\n"; // Variables and escape sequences are not parsed
echo $doubleQuoted . "\n"; // Variables and escape sequences are parsed
echo $ignoreDollar . "\n\n"; // Escaping the dollar sign

// PHP Null Coalescing Operator
$favoriteAnimal = null;
$animalToShow = $favoriteAnimal ?? "dog"; // If $favoriteAnimal is null, use "dog"
echo "Your favorite animal is $animalToShow\n";

// PHP Spaceship Operator
$a = 5;
$b = 10;
$comparison = $a <=> $b; // -1 if $a < $b, 0 if equal, 1 if $a > $b
echo "Comparison result: $comparison\n"; // Output: -1


// closing tag (optional in PHP files) -> 
