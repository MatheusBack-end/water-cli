<?php

echo "insert total value\n";
$total_value = (int) fgets(STDIN);

echo "insert total number of residents\n";
$number_resident = (int) fgets(STDIN);

echo "insert number of houses\n";
$number_houses = (int) fgets(STDIN);

$value_by_resident = $total_value / $number_resident;

for($i = 0; $i < $number_houses; $i++)
{
  echo "residents in house " . ($i + 1) . "\n";
  echo "\033[32m" . number_format(fgets(STDIN) * $value_by_resident, 2) . " R$\033[0m\n";
}
