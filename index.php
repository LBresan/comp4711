<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include('student.php');

        //an array to hold students.
        $students = array();
        
        //student object
        $first = new student();
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email('home','john@doe.com');
        $first->add_email('work','jdoe@mcdonalds.com');
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        
        //adds the first student to the array of students.
        $students['j123'] = $first;
        
        //student object
        $second = new student();
        $second->surname = "Einstein";
        $second->first_name = "Albert";
        $second->add_email('home','albert@braniacs.com');
        $second->add_email('work1','a_einstein@bcit.ca');
        $second->add_email('work2','albert@physics.mit.edu');
        $second->add_grade(95);
        $second->add_grade(80);
        $second->add_grade(50);
        
        //adds the second student to the array of students.
        $students['a456'] = $second;
        
        //student object
        $third = new student();
        $third->surname = "Bresan";
        $third->first_name = "Luka";
        $third->add_email('home','luka@maniacs.com');
        $third->add_email('work','l_bresan@sundran.com');
        $third->add_email('school','luka@cst.bcit.edu');
        $third->add_grade(6);
        $third->add_grade(6);
        $third->add_grade(6);
        
        //adds the third student to the array of students.
        $students['l789'] = $third;
        
        //sorts the list of students by key.
        ksort($students);
        
        //prints each student, and their info, to the screen.
        foreach ($students as $student) {
            echo $student->toString();
        }        
        ?>
    </body>
</html>
