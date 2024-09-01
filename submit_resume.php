<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $fullName = htmlspecialchars($_POST['fullName']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $address = htmlspecialchars($_POST['address']);
    $degree = htmlspecialchars($_POST['degree']);
    $institution = htmlspecialchars($_POST['institution']);
    $gradYear = htmlspecialchars($_POST['gradYear']);
    $company = htmlspecialchars($_POST['company']);
    $position = htmlspecialchars($_POST['position']);
    $skills = htmlspecialchars($_POST['skills']);
    $certifications = htmlspecialchars($_POST['certifications']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Your Resume</title>


    <style>
        /* Your CSS styling here */
        body {

            font-size: larger;
            padding: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            font-family: 'Times New Roman', Times, serif;
            margin: 0;
            background: linear-gradient(to right, #eacda3, #d6ae7b);
        }

        form {
            max-width: 800px;
            width: 80%;
            background: #fff;
            padding: 30px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
        }

        h2,
        h3 {
            color: #333;
            border-bottom: 2px solid #007bff;
            padding-bottom: 5px;
            margin-bottom: 15px;
        }

        p,
        li {
            margin: 10px 0;
            line-height: 1.6;
            color: #555;
        }

        button {
            display: block;
            margin: 0px auto;
            margin-top: 39px;
            padding: 15px 40px;
            font-size: 40px;
            color: #fff;
            background-color: #da672d;

            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
        }
    </style>

</head>

<body>

    <form action="download.php" method="post">


        <h2>
            <?php echo $fullName; ?>
        </h2>
        <p>Email:
            <?php echo $email; ?>
        </p>
        <p>Phone:
            <?php echo $phone; ?>
        </p>
        <p>Address:
            <?php echo $address; ?>
        </p>

        <h3>Education</h3>
        <p>Degree:
            <?php echo $degree; ?>
        </p>
        <p>Institution:
            <?php echo $institution; ?>
        </p>
        <p>Year of Graduation:
            <?php echo $gradYear; ?>
        </p>

        <h3>Work Experience</h3>
        <p>Company:
            <?php echo $company; ?>
        </p>
        <p>Position:
            <?php echo $position; ?>
        </p>

        <h3>Skills</h3>
        <p>
            <?php echo nl2br($skills); ?>
        </p>

        <h3>Certifications</h3>
        <p>
            <?php echo nl2br($certifications); ?>
        </p>


        <!-- Hidden fields to pass data to download.php -->
        <input type="hidden" name="fullName" value="<?php echo $fullName; ?>">
        <input type="hidden" name="email" value="<?php echo $email; ?>">
        <input type="hidden" name="phone" value="<?php echo $phone; ?>">
        <input type="hidden" name="address" value="<?php echo $address; ?>">
        <input type="hidden" name="degree" value="<?php echo $degree; ?>">
        <input type="hidden" name="institution" value="<?php echo $institution; ?>">
        <input type="hidden" name="gradYear" value="<?php echo $gradYear; ?>">
        <input type="hidden" name="company" value="<?php echo $company; ?>">
        <input type="hidden" name="position" value="<?php echo $position; ?>">
        <input type="hidden" name="skills" value="<?php echo $skills; ?>">
        <input type="hidden" name="certifications" value="<?php echo $certifications; ?>">


        <button type="submit" name="download">Download</button>


    </form>


</body>

</html>