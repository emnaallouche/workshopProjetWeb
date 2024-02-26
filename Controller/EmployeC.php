<?php

class EmployeC {

    function show($employe) {

        echo '
        <table border="1">
        <tr>
            <td>lastname</td>
            <td>firstname</td>
            <td>password</td>
            <td>phone</td>
            <td>email</td>
            <td>date</td>
        
        </tr>
        <tr>
            <td>'. $employe->getLastName() .'</td>
            <td>'. $employe->getFirstName() .'</td>
            <td>'. $employe->getPassword() .'</td>
            <td>'. $employe->getPhone() .'</td>
            <td>'. $employe->getEmail() .'</td>
            <td>'. $employe->getDate() .'</td>
        </tr>
        </table>
        ';
    }
}



?>