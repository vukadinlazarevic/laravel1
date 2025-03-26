<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Employee

class Employee {
    public string $name;
    public string $lastName;
    public int $age;
    public string $email;

    public function getFullName() {
        return $this->name . " " . $this->lastName;
    }

    public function __construct($name, $lastName, $age, $email)
    {
        $this->name = $name;
        $this->lastName = $lastName;
        $this->age = $age;
        $this->email = $email;
    }
}

Route::get("/nova", function() {
    return view("novi", [
        "ime" => "Vukadin",
        "prezime" => "Lazarevic",
        "users" => [
            ["name" => "John Doe"],
            ["name" => "Jane Doe"],
            ["name" => "Jim Doe"],
            ["name" => "John Doe"],
            ["name" => "Jane Doe"],
            ["name" => "Jim Doe"],
            ["name" => "John Doe"],
            ["name" => "Jane Doe"],
            ["name" => "Jim Doe"],
        ],
        "employee" => new Employee("Vukadin", "Lazarevic", 23, "vukadinlazarevic@gmail.com")
    ]);
});