<?php

// Jika ingin upgrade versi library di github, kita cukup push kode terbaru,
// lalu buat release tag yang terbaru juga.

namespace MMaulanaYusuf\BelajarComposer;

class Customer {

    function __construct(private string $name) {}

    function sayHello(string $name = 'Guest'): string
    {
        return "Hello $name, my name is $this->name";
    }

}