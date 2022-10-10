<!DOCTYPE HTML>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Comments Form - Response</title>
    </head>

    <body>
        <!--All PHP scripts need to go inside these tags-->
        <?php
            $timestamp = date('Y-m-d H:i:s');
            #Form values are assigned to PHP variables for output
            $name = $_POST['name'];
            $address = $_POST['address'];
            $mail = $_POST['mail'];
            $number =$_POST['number'];
            #Concatenate strings with variable values to display the
            #results of the form
            #validating name
            if (!empty($_POST['name'])) {
                $name = $_POST['name'];
                #Statement to ensure the data is numeric
                if (is_numeric($name)) {
                    $name = NULL;
                    echo 'you must enter your name<br>';
                }
            }
            else {
                $name = NULL;
                echo 'You must enter your name correctly<br>';
            }
            #validating address
            if (!empty($_POST['address'])) {
                $address = $_POST['address'];
                #Statement to ensure the email pattern/format is correct
                #using a regular expression
                $pattern = '~^(?:gir\ *0a{2}|(?:[a-pr-uwyz][a-hk-y]?[0-9][0-9]?|(?:[a-pr-uwyz][0-9][a-hjkstuw]|[a-pr-uwyz][a-hk-y][0-9][abehmnprv-y]))(?:\ *[0-9][abd-hjlnp-uw-z]{2})?)$~i';
                if (!preg_match($pattern, $address)) {
                    $address = NULL;
                    echo 'Please enter a valid UK postcode';
                }
            }
            else {
                $address = NULL;
                echo 'You must enter a postcode<br>';
            }

            #validating email
            if (!empty($_POST['mail'])) {
                $mail = $_POST['mail'];
                #Statement to ensure the email pattern/format is correct
                #using a regular expression
                $pattern = '/\b[\w.-]+@[\w.-]+\.[A-Za-z]{2,6}\b/';
                if (!preg_match($pattern, $mail)) {
                    $mail = NULL;
                    echo 'Please enter a valid email address in the correct format';
                }
            }
            else {
                $mail = NULL;
                echo 'You must enter a valid email address<br>';
            }
            #Validating phone number
            if (!empty($_POST['number'])) {
                $number = $_POST['number'];
                #Statement to ensure the email pattern/format is correct
                #using a regular expression
                $pattern = "/^(\+44\s?7\d{3}|\(?07\d{3}\)?)\s?\d{3}\s?\d{3}$/";
                if (!preg_match($pattern, $number)) {
                    $number = NULL;
                    echo 'Please enter a valid phone number in the uk format';
                }
            }
            else {
                $number = NULL;
                echo 'You must enter a phone number<br>';
            }
            
            #echo "<p>Hi $name, thank you for providing your details: </p>";
            #    echo "Email: $name<br>ID: $adress<br>ID: $mail<br>ID: $number";
            if (($name != NULL) && ($mail != NULL)&&($address != NULL)&&($number != NULL)) {
                echo "<p>Hi $name, thank you for providing your details: </p>";
                echo "Name: $name<br>Postcode: $address<br>Email: $mail<br>Phone number: $number";
                echo "<p>submitted by $name, on $timestamp </p>";
            }
            
            



        ?>
        <head>
      <meta charset="UTF-8">
      <h1>Please choose a course you would like to enroll on</h1>
      <title>Giving students choices of courses</title>
  </head>
  <body>
        <!--HTML Form-->
    <form action = "choice-handler.php" method = "POST">
        <fieldset>
            <legend>DIGITAL PRODUCTION DESIGN AND DEVELOPEMENT?</legend>
            Beginner<input type = "radio" name="definition" value="Digital production design and development[Beginner]"><br>
            Intermediate<input type = "radio" name="definition" value="Digital production design and development[Intermediate]"><br>
            Advanced<input type = "radio" name="definition" value="Digital production design and development[advanced]"><br>
        </fieldset>
        <fieldset>
            <legend>DIGITAL BUSINESS SERVICES?</legend>
            Beginner<input type = "radio" name="definition" value="Digital business services[Beginner]"><br>
            Intermediate<input type = "radio" name="definition" value="Digital business services[Intermediate]"><br>
            Advanced<input type = "radio" name="definition" value="Digital business services[advanced]"><br>
        </fieldset>
        <fieldset>
            <legend>DIGITAL NETWORKING SERVICES?</legend>
            Begginner<input type = "radio" name="definition" value="Digital networking services[Beginner]"><br>
            Intermediate<input type = "radio" name="definition" value="Digital networking services[Intermediate]"><br>
            Advanced<input type = "radio" name="definition" value="Digital networking services[advanced]"><br>
        </fieldset>


        <p><input type = "submit"></p>

    </form>
    </body>

</html>