<?php

    $fName = $_POST['fName'];
    $lName = $_POST['lName'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];


    class EmployeC {
        public $firstName;
        public $lastName;
        public $phone;
        public $email;
        public $dob;
        public $password;

        public function __construct($firstName, $lastName, $phone, $email, $dob, $password) {
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->phone = $phone;
            $this->email = $email;
            $this->dob = $dob;
            $this->password = $password;
        }
    }

    function show($employe) {
        echo "First Name: " . $employe->firstName . "<br>";
        echo "Last Name: " . $employe->lastName . "<br>";
        echo "Phone: " . $employe->phone . "<br>";
        echo "Email: " . $employe->email . "<br>";
        echo "Date of Birth: " . $employe->dob . "<br>";
    }

   
    $employe1 = new EmployeC($fName, $lName, $phone, $email, $dob, $pass1);

    // Affichage des informations de employe1 avec var_dump()
    var_dump($employe1);

    // Affichage des informations de employe1 avec la fonction show()
    show($employe1);

?>