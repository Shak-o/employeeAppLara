<?php


class test
{
    private function getOrgId()
    {
        $org_id = rand();
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "Employee";
        $conn = new mysqli($servername, $username, $password, $dbname);
        $sql = "SELECT org_id FROM employees";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "<br> org_id: " . $row["org_id"] . " - Name: " . "" . " " . "" . "<br>";
            }
        } else {
            echo "0 results";
        }
    }
}
