<?php

include_once "/app/Admin.php";
include_once "/app/Employee.php";
include_once "/app/Programmer.php";
include_once "/app/Tester.php";

use OOP2\Admin;
use OOP2\Programmer;
use OOP2\Tester;

include_once "view/view.form.php";

$employees = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $position = $_POST['position'];
    $salary = $_POST['salary'];
    $type = $_POST['type'];
    $languageToolDepartment = $_POST['language_tool_department'];

    if ($type == "programmer") {
        $employee = new Programmer($name, $position, $salary, $languageToolDepartment);
        } elseif ($type == "tester") {
            $employee = new Tester($name, $position, $salary, $languageToolDepartment);
        } elseif ($type == "admin") {
            $employee = new Admin($name, $position, $salary, $languageToolDepartment);
        }
}
?>

<h2>All Employees</h2>
<ul>
    <?php
    if (!empty($employees)) {
        foreach ($employees as $emp) {
            echo "<li>";
            $emp->displayInfo();
            echo "</li>";
        }
    } else {
        echo "<li>No employees yet</li>";
    }
    var_dump($employees)
    ?>
</ul>
