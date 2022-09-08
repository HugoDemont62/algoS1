<?php
session_start();

function variable_name( &$var, $scope=false, $prefix='UNIQUE', $suffix='VARIABLE' ){
    if($scope) {
        $vals = $scope;
    } else {
        $vals = $GLOBALS;
    }
    $old = $var;
    $var = $new = $prefix.rand().$suffix;
    $vname = FALSE;
    foreach($vals as $key => $val) {
        if($val === $new) $vname = $key;
    }
    $var = $old;
    return $vname;
}


function message2($msg) {
    echo "<div class='alert alert-info'>$msg</div>";
}

function registerVariable(&$var, $value) {
    $name = variable_name($var);
    if(isset($_SESSION[$name]) == false) {
        $var = $value;
        modifyRegisteredVariable($var, $value);
    } else
        $var = $_SESSION[$name];
}

function modifyRegisteredVariable(&$var) {
    $name = variable_name($var);
    $_SESSION[$name] = $var;
}

