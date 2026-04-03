<?php
// Expression 1:
echo 2 + 3 * 4 - 1;          // your prediction: _13__

// Expression 2:
echo 2 ** 3 ** 2;            // right-associative! prediction: __512_

// Expression 3:
echo 10 / 2 + 3 * 4 % 5;     // prediction: ___

// Expression 4:
echo (int)(7 / 2) + 0.5;     // prediction: _4.0__

// Expression 5:
$a = 5; $b = 3;
echo $a++ + ++$b;            // pre vs post — prediction: __8_
echo " | a=$a b=$b";         // what are a and b now?

// Expression 6 — string + number (juggling):
echo "5" + 3;                // prediction: _5__
        