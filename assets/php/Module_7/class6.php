<?php
$i = 0;
while ($i < 10) {
    $i++;
    echo $i . "\n";
};
echo "==========\n";

$i = 0;
while ($i++ < 5) {
    echo $i . "\n";
}

echo "==========\n";

$i = 0;
while (++$i < 5) {
    echo $i . "\n";
}
