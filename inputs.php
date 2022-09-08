<?php


function message($msg) {
    echo "<div class='alert alert-info'>$msg</div>";
}

$startForm = false;

function readVar($var, $index = -1) {
    if ($index == -1) {
        $v = isset($_GET[$var]) ? $_GET[$var] : "";
    } else {
        $v = isset($_GET[$var][$index]) ? $_GET[$var][$index] : "";
        $var = $var . "[" . $index . "]";
    }
    echo "<p><label for='$var'>\$$var </label><input type='text' required id='$var' name='$var' value=\"$v\"/></p>";
}


function readVariables(...$vars) {
    //---------------------
    global $startForm;
    if ($startForm) {
        message("Vous avez déjà commencé lu des variables");
        die(1);
    }
    $startForm = true;
    echo "<form action='#' id='monform' method='get'><div>";

    //---------------------

    foreach ($vars as $var) {
        $pos = strpos($var, "[");

        if($pos === false) {
            readVar($var);
        } else {
            $v = substr($var, 0, $pos);
            $sz = substr($var, $pos + 1, strlen($var) - 1);
            readArray($v, $sz);
        }
    }

    //---------------------

    echo "<div class='submit'><input type='submit' />&nbsp;";
    echo "<input type='reset' onclick='init(event)' value='Initialiser'/></div>";
    echo "</div></form>";
    if (count($_GET) == 0) {
        message("Aucune donnée n'a été transmise");
        die(1);
    }
}


function readArray($name, $size) {
    for ($i = 0; $i < $size; $i++) {
        readVar($name, $i);
    }
}

//
if (count($_GET) > 0) {
    extract($_GET);
    $tmp = "Données transmises : ";
    foreach ($_GET as $key => $v) {
        $tmp = $tmp . '$' . "$key &nbsp;&nbsp;";
    }
    message($tmp);
}
?>


<style>

    body {
        margin-top: 50px;
    }

    .alert {
        margin-top: 5px;
        position: absolute;
        top: 0;
        width: 99%;
        box-sizing: border-box;
        padding: 8px 35px 8px 14px;
        text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
        background-color: #fcf8e3;
        border: 1px solid #fbeed5;
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        border-radius: 4px;
        font-weight: bold;
    }

    .alert-info {
        color: #3a87ad;
        background-color: #d9edf7;
        border-color: #bce8f1;
    }

    * {
        box-sizing: border-box;
        font-size: 100%;

    }

    /* 1- positionning the 2 divs */
    form {
        display: flex;
        width: 33%;
        justify-content: center;

    }

    form > div {
        flex: 1;
        min-width: 0; /* fix for min-width: auto */
    }

    /* 2- fluid inputs */
    div > p {
        display: flex;
        align-items: center;
        justify-content: center;

    }

    label {
        margin: 5px;
    }

    form input:not([type=submit]) {
        flex: 1; /* fluid width */
        min-width: 0; /* fix for min-width: auto */
    }

    input[type='text'] {
        border: 1px solid;
        padding: 5px 10px;
        outline: 0;
        line-height: normal;
        width: 100%;
        margin: 0px 5px;
        vertical-align: baseline;
        border-radius: 2px;
    }

    .submit {
        display: flex;
        justify-content: space-around;
    }

    input[type='submit'], input[type='reset'] {
        width: 20%;
        max-width: 20%;
        padding: 7px;
        border-radius: 2px;
        background-color: #ddd;
    }


</style>


<script>
    function init(e) {
        e.preventDefault();
        window.location.href = window.location.href.split('?')[0];
    }
</script>