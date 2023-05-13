
<?php
    
    if(isset($_POST['name'])){

    

    $server = "localhost";
    $name = "root";
    $password = "";

    $curr = mysqli_connect($server, $name, $password);

    if(!$curr){
        die("Couldn't connect to server due to". mysqli_connect_error());
    }
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $aadhar = $_POST['aadhar'];
    $abt = $_POST['abt'];

    $array = "INSERT INTO `goatrip`.`trip`(`name`, `age`, `gender`, `email`, `phone`, `aadhar`, `abt`, `date`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$aadhar', '$abt', current_timestamp());";

    if($curr->query($array)!=true){
        echo "error: $array <br> $curr->error";
    }

    $curr->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Trip</title>
    <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">
</head>
<body>
    <img class="bg" src="goa.jpg" alt="" style="position:absolute; z-index: -1; width: 100%; opacity: 0.8;">
    <div class="container">
        <h1>Goa Trip Registration Form</h1>
        <form id="registration-form" action="final.html" method="post">
            <label for="name">Name</label>
            <input class="required" type="text" id="name" name="name" >

            <label for="age">Age</label>
            <input class="required" type="text" id="age" name="age" >

            <label for="gender">Gender</label>
            <select class="required" id="gender" name="gender" >
                <option value="" selected disabled>Select Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>

            <label for="email">Email</label>
            <input class="required" type="text" id="email" name="email" >

            <label for="phone">Phone Number</label>
            <input class="required" type="text" id="phone" name="phone" >

            <label for="aadhar">Aadhar Card Number</label>
            <input class="required" type="text" id="aadhar" name="aadhar" >

            <label for="about-you">About You</label>
            <textarea id="about-you" name="abt" ></textarea>
            <div style="display: flex; align-items: center; justify-content: center;"><a href="final.html"><button id="submit" class="submit" value="submit" type="submit" disabled>Submit</button></a></div>

            <div class="error" id="error-div"></div>
            
            
        </form>
    </div>

    <!-- INSERT INTO `trip` (`sno`, `name`, `age`, `gender`, `email`, `phone`, `aadhar`, `abt`, `date`) VALUES ('1', 'test1', '12', 'male', 'test1@gmail.com', '9999999999', '123456789876', 'i am a boy', '2023-05-11 23:26:11.000000'); -->
    

    <script src="script.js?v=<?php echo time(); ?>"></script>
</body>
</html>

