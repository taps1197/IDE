<?php
echo '<pre>';

// Outputs all the result of shellcommand "ls", and returns
// the last output line into $last_line. Stores the return value
// of the shell command in $retval.

$last_line = system('import subprocess as sb', $retval);
$last_line = system('import sys', $retval);
$last_line = system('stder=open("err.txt","w")', $retval);
$last_line = system('sb.call(["python3",sys.argv[1]],stderr=stder,stdout=stdo)', $retval);

// $last_line = system('net user', $retval);
// $last_line = system('net user chiru', $retval1);
// $last_line = system('net user chiru passowrd *', $retval1);
// Printing additional info
echo '</pre><hr />Last line of the output: ' . $last_line . '<hr />Return value: ' . $retval;
?>