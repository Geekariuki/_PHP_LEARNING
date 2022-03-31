<?php

require 'functions.php';

class Task  {
    //what would you need for a task? 
    //💡Tip: At least to start, you can look at your database/table task columns;
    //protected $description; //protected variable cannot be accessed externally/outside this class.
    public $description;
    public $completed =false; //we could initialize this variable but we know when the task is being made is incomplete/false.

    public function __construct($description)
    {
        //automatically triggered on instantiation/initialization
        $this->description =$description;
    }
    public function complete()
    {
        $this->completed = true; //task completed
    }
}
//instantiate; create object task ;

// $task = new Task('Go to the store');

$tasks =[
    new Task('Go to the store'), //0
    new Task('Read'),//1
    new Task('Shop'),//2
];

$tasks[0]->complete();
$tasks[2]->complete();
// dd($tasks);

require 'index.view.php'; //get everything from this path; 