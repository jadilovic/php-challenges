<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Class Developer</title>
</head>
<body>
  <h1>Class Developer</h1>
  <?php
    abstract class Developer {
      public $name;
      public $experience;

      public function __construct($name, $experience)
      {
        $this->name = $name;
        $this->experience = $experience;
      }

      public function basicInfo() {
        echo "<br>Name: $this->name Experience: $this->experience <br>";
      }

      public function technologies() {
        echo "<br>Technologies<br>";
      }
    }


    class Backend extends Developer {
      public $database;
      public $server;

      public function __construct($name, $experience, $database, $server)
      {
        parent::__construct($name, $experience);
        $this->database = $database;
        $this->server = $server;
      }

      public function backendTechnologies() {
        echo "<br>Database: $this->database Server: $this->server <br>";
      }

      public function technologies() {
        echo "<br>Backend Technologies<br>";
      }
    }

    class Frontend extends Developer {
      public $framework;
      public $styles;

      public function __construct($name, $experience, $framework, $styles)
      {
        parent::__construct($name, $experience);
        $this->framework = $framework;
        $this->styles = $styles;
      }

      public function frontendTechnologies() {
        echo "<br>Framework: $this->framework Styles: $this->styles <br>";
      }

    }

    // $dev = new Developer("Aki", 4);
    // $dev->basicInfo();

    $devBack = new Backend("Cuni", 7, "MySQL", "Apache");
    $devBack->basicInfo();
    $devBack->backendTechnologies();
    $devBack->technologies();

    $devFront = new Frontend("Boby", 6, "React", "CSS");
    $devFront->basicInfo();
    $devFront->frontendTechnologies();

    $devArray = array(new Backend("Loulo", 2, "Mongo", "Node"), new Backend("Cuni", 7, "MySQL", "Apache"), new Frontend("Boby", 6, "React", "CSS"), new Frontend("Mark", 1, "Vue", "Material UI"));
  
    $totalExperience = 0;
    foreach ($devArray as $key => $value) {
      $totalExperience += $value->experience;
      $value->basicInfo();
      if ($value instanceof Backend) {
        $value->backendTechnologies();
      } else {
        $value->frontendTechnologies();
      }
    }
    echo "<br>Total experience: $totalExperience <br>";
  ?>
  
  <form method="post">
    <label for="numbers">Numbers:</label>
    <input type="text" name="numbers" id="numbers" placeholder="Input numbers separated by coma..." >
    <input type="submit" value="Submit">
  </form>
  <?php
    if ($_POST["numbers"]) {
      $inputString = $_POST["numbers"];
      $numbersArr = str_replace(' ', '', $inputString);
      print_r($numbersArr);
    }
  ?>
  <form method="post">
    <label for="text">Text:</label>
    <input type="text" name="text" id="text" placeholder="Input some sentence..." >
    <input type="submit" value="Submit">
  </form>
</body>
</html>