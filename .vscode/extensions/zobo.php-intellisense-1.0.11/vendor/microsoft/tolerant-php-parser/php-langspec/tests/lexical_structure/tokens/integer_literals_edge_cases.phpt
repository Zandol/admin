--TEST--
PHP Spec test generated from ./lexical_structure/tokens/integer_literals_edge_cases.php
--FILE--
<?php

/*
   +-------------------------------------------------------------+
   | Copyright (c) 2014 Facebook, Inc. (http://www.facebook.com) |
   +-------------------------------------------------------------+
*/

error_reporting(-1);

if ((1 << 31) < 0)
{
	var_dump(2147483648);
	var_dump(-2147483648);
	var_dump(-2147483647 - 1);
	var_dump(0x80000000);
	var_dump(020000000000);
	var_dump(0b10000000000000000000000000000000);
//	           10987654321098765432109876543210
//	            3         2         1         0
}
else
{
	var_dump(9223372036854775808);
	var_dump(-9223372036854775808);
	var_dump(-9223372036854775807 - 1);
	var_dump(0x8000000000000000);
	var_dump(01000000000000000000000);
	var_dump(0b1000000000000000000000000000000000000000000000000000000000000000);
//	           3210987654321098765432109876543210987654321098765432109876543210
//	           6  6         5         4         3         2         1         0

// HHVM-specific test

	var_dump(9223372036854775808);
	var_dump(9223372036854775809);
	var_dump(9223372036854775810);
	var_dump(9223372036854775808888);
}
--EXPECT--
float(9.2233720368548E+18)
float(-9.2233720368548E+18)
int(-9223372036854775808)
float(9.2233720368548E+18)
float(9.2233720368548E+18)
float(9.2233720368548E+18)
float(9.2233720368548E+18)
float(9.2233720368548E+18)
float(9.2233720368548E+18)
float(9.2233720368548E+21)
