<?php
#looping
echo "FOR <br />";
for($i = 0; $i < 10; $i ++) {
    $teste =  "1" + $i;
    echo "$teste<br /> ";
}
echo "<br />WHILE  <br />";
$cont = 0;
while($cont < 10) {
    echo "Waliston <br />";
    $cont ++;
}

echo "<br />DO WHILE  <br />";
$conts = 0;
do {
    echo "Ola mundo";
    echo '<br />';
    $conts++;
} while($conts < 10);
?>