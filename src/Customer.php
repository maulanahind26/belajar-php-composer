<?php

// Proses upload ke repository Github

namespace MMaulanaYusuf\BelajarComposer;

class Customer {

    function __construct(private string $name) {}

    function sayHello(string $name): string
    {
        return "Hello $name, my name is $this->name";
    }

}