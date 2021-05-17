<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
$output = array();
$retVal = array();
//exec('C:/"Program Files (x86)"/Python38-32/python.exe -m NLP_Text_Matcher.py',$output,$retVal);
echo "Done";
echo "Shell Done";
//exec('start executor.bat',$output,$retVal);
exec('start bat3.bat',$output,$retVal);
var_dump($output);
var_dump($retVal);
?>