<!DOCTYPE HTML>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Comments Form - Response</title>
    </head>

    <body>
        <!--All PHP scripts need to go inside these tags-->
        <?php
            $name = $_POST['name'];
            $address = $_POST['address'];
            $mail = $_POST['mail'];
            $number =$_POST['number'];
            $comment = $_POST['comment'];
            if (!empty($_POST['comment'])) {
                $comment = $_POST['comment'];
                echo 'Thank you for your feedback<br>';
                echo 'Here is a summery of your application<br>';
                echo "Name: $name<br>Postcode: $address<br>Email: $mail<br>Phone number: $number";
                echo "<p>Course chosen: $definition </p>";
                echo "<p>Feedback: $comment </p>";
            }
            else {
                $comment = NULL;
                echo 'You must enter some feedback<br>';
            }

        ?>
    </body>

</html>