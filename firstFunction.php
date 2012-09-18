<?php

function writeName($fname, $punctuation)
{
	print $fname . 'Sylvester'. $punctuation . '<br/>';
}
print 'My name is ' ;
print writeName('Leisanne ', '.' );
print "My sister's name is ";
print writeName ('Louise ' , '!');
print "My other sister's name is ";
print writeName ('Lesley ' , '?');
