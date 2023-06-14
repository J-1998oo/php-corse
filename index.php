<?php

echo "Hello PHP ... !";
echo "<br>";

echo 'Hello PHP ... !';

echo '<br>';


print "Hello PHP ... !";
print "<br>";

print 'Hello PHP ... !';
print '<br>';


?>

<?php

echo "Hello PHP ... !";
echo "<br>";

echo '<br>';

var_dump((bool) "");

echo '<br>';

var_dump((bool) "0");

echo '<br>';


echo '<br>';

echo nl2br('Hello it\'s my
my name is :
Mohammad alnatsheh');

echo '<br>';


echo '<br>';

echo "Hello PHP ... !";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
//Array 
echo '<pre>';
print_r([
    'a' => 'mohammad',
    'b' => 'bassem',
    'c' => 'rajab',
    'd' => 'alnatsheh',
    'one',
    'two',
    'three',
    10 => '1',
    '2',
    '3',
    'colors' => [
        'red',
        'green',
        'blue',
        'black' => [
            'light' => 'gray',
            'dark' => 'selver'
        ]
    ]
]);
echo '</pre>';
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

$name = 'mohammad';

echo '$name=\'mohammad\';';
echo "<br>";
echo "<br>";
echo "<br>";

echo "Hello $name ... !";
echo "    ==> this echo with \" \" ";
echo "<br>";
echo "<br>";
echo 'Hello $name ... !';
echo '    ==> this echo with \' \' ';

echo '<br>';


echo '<br>';


echo '<br>';


echo '<br>';


echo '<br>';


echo '<br>';


echo '<br>';

$x = 'mohammad';
$$x = 'basem';
$ $$x = 'rajab';
$ $ $$x = 'alnatsheh';


echo $x;

echo '<br>';

echo $$x;

echo '<br>';

echo $mohammad;

echo '<br>';

echo $ $$x;

echo '<br>';

echo $basem;

echo '<br>';

echo $ $ $$x;

echo '<br>';

echo $rajab;

echo '<br>';


echo '<br>';

echo $$mohammad;

echo '<br>';


echo '<br>';

echo "hello $x";

echo '<br>';

echo "hello $$x";

echo '<br>';

echo "hello ${$x}";

echo '<br>';

echo "hello ${$$x}";

echo '<br>';

echo "hello ${${$$x}}";

echo '<br>';

echo '=====================================================================';

echo '<br>';

define("MAIN_NAME", "Mohammad"); #MAIN_NAME => Mohammad can't be change .

echo '<br>';

echo MAIN_NAME;

echo '<br>';

define("MAIN_NUMBER", 5); #MAIN_NUMBER => 5

echo '<br>';

//define("MAIN_NUMBER", 10); #this is an error

echo '<br>';

echo MAIN_NUMBER;

echo '<br>';

echo php_uname();

echo '<br>';

echo PHP_VERSION ;

echo '<br>';

echo __LINE__;

echo '<br>';

echo __FILE__;

echo '<br>';

echo __DIR__;

echo '<br>';

//session ex

session_start();

echo "Welcome " . $_SESSION['name'] ." and your id is " . $_SESSION['id'] ;

?>