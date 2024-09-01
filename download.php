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

if (isset($_POST['download'])) {

    // Create resume content
    $resumeContent = "
    <h2>$fullName</h2>
    <p>Email: $email</p>
    <p>Phone: $phone</p>
    <p>Address: $address</p>

    <h3>Education</h3>
    <p>Degree: $degree ($gradYear years)</p>
    <p>Institution: $institution</p>

    <h3>Work Experience</h3>
    <p>Company: $company</p>
    <p>Position: $position</p>

    <h3>Skills</h3>
    <p>$skills</p>

    <h3>Certifications</h3>
    <p>" . nl2br($certifications) . "</p>";

    // Set the headers to force download
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="resume.html"');
    header('Content-Length: ' . strlen($resumeContent));
    echo $resumeContent;
    exit;
}
?>