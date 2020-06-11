<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Employee List</title>
</head>

<body>

    <div style="margin: 5% 5% 5% 5%">
        <center>
            <h4>Employee List</h4>
        </center>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Date of Birth</th>
                    <th scope="col">Email</th>
                    <th scope="col">Address</th>
                    <th scope="col">Hobby 1</th>
                    <th scope="col">Hobby 2</th>
                    <th scope="col">Hobby 3</th>
                    <th scope="col">Others</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                        $conn = new mysqli('localhost', 'root', '', 'test');
                        if ($conn->connect_error) 
                        {
                            die('Connection Failed : ' . $conn->connect_error);
                        } 
                        else 
                        {
                            $result = 'SELECT * FROM `employee`';
                            if (!($selectRes = mysqli_query($conn, $result))) 
                            {
                                echo 'Retrieval of data from Database Failed';
                            } else 
                            {
                                while ($row = mysqli_fetch_assoc($selectRes)) 
                                {
                                    echo "<td>".$row['name']."</td>";
                                    echo "<td>".$row['gender']."</td>";
                                    echo "<td>".$row['bday']."</td>";
                                    echo "<td>".$row['email']."</td>";
                                    echo "<td>".$row['address']."</td>";
                                    echo "<td>".$row['hobby1']."</td>";
                                    echo "<td>".$row['hobby2']."</td>";
                                    echo "<td>".$row['hobby3']."</td>";
                                    echo "<td>".$row['info']."</td>";
                                    echo "<td><a href='edit.php?id=".$row['id']."'>Edit</a></td>";
                                    echo "<td><a href='delete.php?id=".$row['id']."'>Delete</a></td>";
                                    echo "</tr>";
                                }
                            }
                        }
                    ?>
                </tr>

            </tbody>
        </table>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>