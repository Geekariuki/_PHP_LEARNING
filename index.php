<?php

require 'functions.php';
$title = "Tasks";

//associateve arrays;

$task =[
    'title' => 'Task A', 
    'assigned_to' => 'All Students', 
    'due' => '29th March 22',
    'done' => true
]; //title, assigned_to, due, completed

if (ageLimit(10)) {
    echo 'You can enter';
} else {
    echo 'You are underage';
}


dd($task);

require 'index.view.php'; //get everything from this path; 