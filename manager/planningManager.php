<?php

// createPlanning
if (isset($_POST["createPlanning"])) {
    if (isset($_POST["Date"]) && isset($_POST["Label"]) && isset($_POST["Teacher"])) {
        $date = $_POST["Date"];
        $label = $_POST["Label"];
        $teacher = $_POST["Teacher"];
       // createPLanning($date, $label, $teacher);
    }
}

