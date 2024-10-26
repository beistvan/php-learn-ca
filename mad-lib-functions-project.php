<?php
/*function generateStory($singular_noun, $verb, $color) 
{
  $story = "\nThe ${singular_noun}s are lovely, ${color}, and deep.\nBut I have promises to keep,\nAnd miles to go before I ${verb},\nAnd miles to go before I ${verb}.\n";
  return $story;
}*/

function generateStory($singular_noun, $verb, $color, $distance_unit = "miles")
{
  $story = "\nThe ${singular_noun}s are lovely, ${color}, and deep.\nBut I have promises to keep,\nAnd ${distance_unit} to go before I ${verb},\nAnd ${distance_unit} to go before I ${verb}.\n";
  return $story;
}

echo generateStory("dog", "eat", "purple", "kilometers");
echo generateStory("car", "cook", "vermilion");
echo generateStory("empty void", "speak", "beige");
?>
