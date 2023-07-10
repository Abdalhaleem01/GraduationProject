<?php
// Assuming you have already established a database connection

// Database connection
$conn = new mysqli('localhost','root','','emunicipalitydb');
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $subject = $_POST['subject'];
    $nationalId = $_POST['nationalId'];
    $idNumber = $_POST['Id_number'];
    $restrictionNumber = $_POST['restriction_number'];
    $mobileNumber = $_POST['mobileNumber'];
    $email = $_POST['email'];
    $defendant = $_POST['defendant'];
    $region = $_POST['region'];
    $neighborhood = $_POST['neighborhood'];
    $street = $_POST['street'];
    $nearestSite = $_POST['nearestSite'];
    $building = $_POST['building'];
    $complaintDate = $_POST['complaintDate'];
    $complaintType = $_POST['complaintType'];
    $complaintDetails = $_POST['complaintDetails'];

    // Prepare and execute the SQL query
    $stmt = $pdo->prepare("INSERT INTO complaints (subject, national_id, id_number, restriction_number, mobile_number, email, defendant, region, neighborhood, street, nearest_site, building, complaint_date, complaint_type, complaint_details) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute([$subject, $nationalId, $idNumber, $restrictionNumber, $mobileNumber, $email, $defendant, $region, $neighborhood, $street, $nearestSite, $building, $complaintDate, $complaintType, $complaintDetails]);

    // Check if the query was successful
    if ($stmt) {
        echo "The report has been saved successfully.";
    } else {
        echo "An error occurred while saving the report.";
    }
}
?>
