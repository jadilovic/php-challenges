<?php
  abstract class Employee {
    public $name;
    public $id;

    public function __construct($name, $id)
    {
      $this->name = $name;
      $this->id = $id;
    }

    public function displayInfo() {
      echo "<br>Employee: $this->name ID: $this->id <br>";
    }
  }

  class Hourly extends Employee {
    public $hours;
    public $rate;

    public function __construct($name, $id, $hours, $rate)
    {
      parent::__construct($name, $id);
      $this->hours = $hours;
      $this->rate = $rate;
    }

    public function calculateSalary() {
      $salary = $this->hours * $this->rate;
      echo "<br>Salary: $salary <br>";
    }
  }

  class Salary extends Employee {
    public $salary;

    public function __construct($name, $id, $salary)
    {
      parent::__construct($name, $id);
      $this->salary = $salary;
    }

    public function calculateSalary() {
      echo "<br>Salary: $this->salary <br>";
    }
  }

  $empArr = array(new Hourly("Bob", 3, 5, 8), new Hourly("Kec", 4, 6, 9), new Salary("Abisola", 3, 5), new Salary("Dmc", 4, 6));

  foreach ($empArr as $key => $value) {
    $value->displayInfo();
    $value->calculateSalary();
  }
?>