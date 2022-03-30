<?php

///connection 

//go to this table fetch data

//id| image_name | image 

$title = "Tasks";

//associateve arrays;

$task =[
    'title' => 'Task A', 
    'assigned_to' => 'All Students', 
    'due' => '29th March 22', 
]; //title, assigned_to, due, completed

$task['done'] = true;

 $greetings =  'hi there';

//  die(var_dump(strtoupper($greetings) ));

// unset($task['assigned_to']);

// die(var_dump($task['title']));


require 'index.view.php'; //get everything from this path; 