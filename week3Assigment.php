<?php
echo "<h2>PHP Assignment 2</h2>";
// ================= QUESTION 1 =================
echo "<h3>Question 1</h3>";
$numbers = array(5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9);
echo "All Elements: ";
foreach ($numbers as $number) {
    echo $number . " ";
}
$total = 0;
$evenTotal = 0;
$oddTotal = 0;
foreach ($numbers as $number) {
    $total += $number;
    if ($number % 2 == 0) {
        $evenTotal += $number;
    } else {
        $oddTotal += $number;
    }
}
echo "<br>Total: $total";
echo "<br>Total of Even Elements: $evenTotal";
echo "<br>Total of Odd Elements: $oddTotal";
$min = min($numbers);
$max = max($numbers);
echo "<br>Minimum: $min";
echo "<br>Minimum Positions: ";
foreach ($numbers as $key => $value) {
    if ($value == $min) {
        echo $key . " ";
    }
}
echo "<br>Maximum: $max";
echo "<br>Maximum Positions: ";
foreach ($numbers as $key => $value) {
    if ($value == $max) {
        echo $key . " ";
    }
}
// ================= QUESTION 2 =================
echo "<h3>Question 2</h3>";
$colors = array(
    "Light" => array(
        "Red" => "Light Red",
        "Green" => "Light Green",
        "Blue" => "Light Blue"
    ),
    "Normal" => array(
        "Red" => "Normal Red",
        "Green" => "Normal Green",
        "Blue" => "Normal Blue"
    ),
    "Dark" => array(
        "Red" => "Dark Red",
        "Green" => "Dark Green",
        "Blue" => "Dark Blue"
    )
);
echo "<table border='1' cellpadding='8'>";
echo "<tr>";
echo "<th></th>";
echo "<th>Red</th>";
echo "<th>Green</th>";
echo "<th>Blue</th>";
echo "</tr>";
foreach ($colors as $row => $values) {
    echo "<tr>";
    echo "<th>$row</th>";
    foreach ($values as $value) {
        echo "<td>$value</td>";
    }
    echo "</tr>";
}
echo "</table>";
// ================= QUESTION 3 =================
echo "<h3>Question 3</h3>";
$array = array(
    array(2, -6, 8),
    array(-6, 1, 6),
    array(7, 8, -6)
);
echo "<table border='1' cellpadding='8'>";
foreach ($array as $row) {
    echo "<tr>";
    foreach ($row as $number) {
        echo "<td>$number</td>";
    }
    echo "</tr>";
}
echo "</table>";
$odd = 0;
$even = 0;
$total = 0;
foreach ($array as $row) {
    foreach ($row as $number) {
        $total += $number;
        if ($number % 2 == 0) {
            $even += $number;
        } else {
            $odd += $number;
        }
    }
}
echo "<br>Odd Total: $odd";
echo "<br>Even Total: $even";
echo "<br><br>Row Totals:<br>";
for ($i = 0; $i < 3; $i++) {
    $rowTotal = 0;
    for ($j = 0; $j < 3; $j++) {
        $rowTotal += $array[$i][$j];
    }
    echo "Row " . ($i + 1) . ": $rowTotal<br>";
}
echo "<br>Column Totals:<br>";
for ($j = 0; $j < 3; $j++) {
    $columnTotal = 0;
    for ($i = 0; $i < 3; $i++) {
        $columnTotal += $array[$i][$j];
    }
    echo "Column " . ($j + 1) . ": $columnTotal<br>";
}
$diagonal1 = $array[0][0] + $array[1][1] + $array[2][2];
$diagonal2 = $array[0][2] + $array[1][1] + $array[2][0];
echo "<br>First Diagonal: $diagonal1";
echo "<br>Second Diagonal: $diagonal2";
echo "<br>Total All Elements: $total";
$min = $array[0][0];
$max = $array[0][0];
foreach ($array as $row) {
    foreach ($row as $number) {
        if ($number < $min) {
            $min = $number;
        }
        if ($number > $max) {
            $max = $number;
        }
    }
}
echo "<br>Minimum: $min";
echo "<br>Minimum Positions: ";
foreach ($array as $i => $row) {
    foreach ($row as $j => $number) {
        if ($number == $min) {
            echo "(" . $i . "," . $j . ") ";
        }
    }
}
echo "<br>Maximum: $max";
echo "<br>Maximum Positions: ";
foreach ($array as $i => $row) {
    foreach ($row as $j => $number) {
        if ($number == $max) {
            echo "(" . $i . "," . $j . ") ";
        }
    }
}
// ================= QUESTION 4 =================
echo "<h3>Question 4</h3>";
$students = array(
    "CA221" => array(
        "Name" => "Mohamed Ahmed Ali",
        "Phone" => "0648440403",
        "Address" => "Laba Dhagax, Wardhiigley"
    ),
    "CA223" => array(
        "Name" => "Ahmed Abdi Jama",
        "Phone" => "0647223201",
        "Address" => "Taleex, Hodan"
    ),
    "CA221" => array(
        "Name" => "Amina Nur Adan",
        "Phone" => "0646990276",
        "Address" => "Macmacaanka, Dharkeynley"
    )
);
echo "<table border='1' cellpadding='8'>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Name</th>";
echo "<th>Phone</th>";
echo "<th>Address</th>";
echo "</tr>";
foreach ($students as $id => $student) {
    echo "<tr>";
    echo "<td>$id</td>";
    echo "<td>" . $student["Name"] . "</td>";
    echo "<td>" . $student["Phone"] . "</td>";
    echo "<td>" . $student["Address"] . "</td>";
    echo "</tr>";
}
echo "</table>";
// ================= QUESTION 5 =================
echo "<h3>Question 5</h3>";
$transcript = array(
    "Semester 1" => array(
        "subject1" => array(9, 26, 10, 40, 85, "Pass"),
        "subject2" => array(9, 26, 10, 40, 85, "Pass"),
        "subject3" => array(9, 26, 10, 40, 85, "Pass")
    ),
    "Semester 2" => array(
        "subject1" => array(9, 26, 10, 0, 45, "Fail"),
        "subject2" => array(9, 26, 10, 40, 85, "Pass"),
        "subject3" => array(9, 26, 10, 40, 85, "Pass")
    )
);
echo "<table border='1' cellpadding='8'>";
echo "<tr>";
echo "<th>Semester</th>";
echo "<th>Course</th>";
echo "<th>CW1</th>";
echo "<th>MidTerm</th>";
echo "<th>CW2</th>";
echo "<th>Final</th>";
echo "<th>Total</th>";
echo "<th>Status</th>";
echo "</tr>";
foreach ($transcript as $semester => $subjects) {
    foreach ($subjects as $subject => $marks) {
        echo "<tr>";
        echo "<td>$semester</td>";
        echo "<td>$subject</td>";
        echo "<td>" . $marks[0] . "</td>";
        echo "<td>" . $marks[1] . "</td>";
        echo "<td>" . $marks[2] . "</td>";
        echo "<td>" . $marks[3] . "</td>";
        echo "<td>" . $marks[4] . "</td>";
        echo "<td>" . $marks[5] . "</td>";
        echo "</tr>";
    }
}
echo "</table>";
?>