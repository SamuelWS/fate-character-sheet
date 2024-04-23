<?php

# Template Name: Servant Viewer 

if (isset($_GET['servant'])) {
    $id = $_GET['servant'];
} else {
    $id = '';
}

global $wpdb;

$queries = array("name", "align", "str", "end", "agi", "man", "lck", "mrs", "class", "off", "quali", "place", "pfp", "war", "player", "np", "type", "anti", "quote", "weak");

for ($i = 0; $i < count($queries); $i++) {
    ${$queries[$i]} = $wpdb->get_var("SELECT $queries[$i] FROM Servants WHERE tag='$id'");
}