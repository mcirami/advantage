<?php
    include '../header.php';

    $mysqli = new mysqli($servername, $username, $password, $dbname);

    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }
?>

        <div class="row">
            <div class="col-12">
                <h2 class="text-center text-uppercase">Advantage Plus Leads</h2>

                <table align="center" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Title</th>
                            <th>Practice Name</th>
                            <th>Zip Code</th>
                            <th>Phone Number</th>
                            <th>IP Address</th>
                            <th>Time Submitted</th>
                            <th>Email Template</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php
                    //insert data
                    $sql = "SELECT * FROM user";

                    $results = $mysqli->query($sql);


                    if ($results->num_rows > 0) {


                        //Loop through
                        foreach ($results as $row) {
                            ?>
                            <tr>
                                <td><?php echo ucwords($row["first_name"]); ?></td>
                                <td><?php echo ucwords($row["last_name"]); ?></td>
                                <td><?php echo ucwords($row["email"]); ?></td>
                                <td><?php echo ucwords($row["title"]); ?></td>
                                <td><?php echo ucwords($row["practice_name"]); ?></td>
                                <td><?php echo ucwords($row["zip_code"]); ?></td>
                                <td><?php echo ucwords($row["phone"]); ?></td>
                                <td><?php echo ucwords($row["ip_address"]); ?></td>
                                <td><?php echo ucwords($row["submitted_at"]); ?></td>
                                <td><?php echo ucwords($row["email_template"]); ?></td>
                            </tr>
                        <?php }
                    } else {
                        echo "No Results Found";
                    }

                        // close
                        $mysqli->close();
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>