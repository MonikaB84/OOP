<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Document</title>
</head>
<body>
    <h1>OOP</h1>

    <?php include "./Student.php"; 
        $studentas = new Student("Jonas", "Vaisgantas", 20, "vyras");
        print_r($studentas);
        $studentas1 = new Student("Algis", "Greitas", 21, "vyras");
        print_r($studentas1);
        $studentas2 = new Student(null, null, 16, null);
        print_r($studentas2);
        $studentas3 = new Student();
        print_r($studentas3);
    ?>
</body>
</html>