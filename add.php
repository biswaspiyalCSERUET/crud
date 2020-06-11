<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Add Employee</title>
</head>

<body>
    <!-- Form Making -->
    <div style="margin: 5% 35% 5% 35%">
        <form action="connect.php" method="post">
            <center>
                <h4>Add Employee</h4>
            </center>
            <div class="form-group">
                <label for="inputName">Name</label>
                <input type="text" class="form-control" id="inputName" name="name" placeholder="Example: Pial Biswas">
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="inlineRadio1" value="Male" name="gender">
                <label class="form-check-label" for="inlineRadio1">Male</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="inlineRadio2" value="Female" name="gender">
                <label class="form-check-label" for="inlineRadio2">Female</label>
            </div>
            <br>
            <br>
            <div class="form-group">
                <label>Date of Birth</label>
                <input type="date" name="bday" max="3000-12-31" min="1000-01-01" class="form-control">
            </div>
            <br>
            <div class="form-group">
                <label for="inputEmail">Email</label>
                <input type="email" class="form-control" id="inputEmail" placeholder="Example: abc@xyz.com" name="email">
            </div>
            <br>
            <div class="form-group">
                <label for="inputAddress">Address</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="Example: Chittagong, Bangladesh" name="address">
            </div>
            <h7>Hobby</h7><br>
            <br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Photography" name="hobby1">
                <label class="form-check-label" for="inlineCheckbox1">Photography</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Traveling" name="hobby2">
                <label class="form-check-label" for="inlineCheckbox2">Traveling</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="Music" name="hobby3">
                <label class="form-check-label" for="inlineCheckbox3">Music</label>
            </div>
            <br>
            <br>
            <div class="form-group">
                <label for="info">Info</label>
                <input type="text" class="form-control" id="info" name="info" placeholder="Example: Other Informations">
            </div>
            <br>
            <center><button type="submit" class="btn btn-primary">Add Employee</button></center>
        </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>