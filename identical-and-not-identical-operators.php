<?php
namespace Codecademy;

function agreeOrDisagree($first, $second) {
  if ($first === $second) {
    return "You agree!";
  } else {
    return "You disagree!";
  }
}

echo agreeOrDisagree("hello", "world");
echo "\n";
echo agreeOrDisagree("hello", "hello");
echo "\n";

function checkRenewalMonth($renewal_month) {
  $current_month = date("F");
  if ($renewal_month !== $current_month) {
    return "Welcome!";
  } else {
    return "Time to renew";
  }
}

echo checkRenewalMonth("February");
echo "\n";
echo checkRenewalMonth("April");
echo "\n";

?>
