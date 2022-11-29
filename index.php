<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Document</title>
</head>
<body>
    <h1>OOP</h1>

    <?php 
    include "./Student.php"; 
    include "./Math.php"; 
        $studentas = new Student("Jonas", "Vaisgantas", 20, "vyras");
        print_r($studentas);
        $studentas1 = new Student("Algis", "Greitas", 21, "vyras");
        print_r($studentas1);
        $studentas2 = new Student(null, null, 16, null);
        print_r($studentas2);
        $studentas3 = new Student();
        print_r($studentas3);
        $studentas4 = new Student("Jurgis", "Ališauskas", 43, false);
        print_r($studentas4);

        $students = [$studentas, $studentas1, $studentas2, $studentas3, $studentas4];
        echo "<hr>";
        echo $studentas4->age;
        echo "<br>";
        foreach ($students as $student) {
            // echo $student->name . ",";
            echo $student->getName() . ",";
        }
        echo "<br>";
        print_r($studentas);
        echo "<br>";
        // $studentas->name = "Juozas";
        $studentas->setName("Juozas");
        $studentas->age = 160;
        $studentas->gender = false;
        print_r($studentas);
        echo "<br>";
        echo Math::square(4);

        $studentas4->introduction();
    ?>
</body>
</html>