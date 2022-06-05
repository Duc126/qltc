<?php
include("db.php");
$sql = "DELETE FROM new WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($con, $sql)) {
    echo "Record deleted successfully";
    header("Location: TT.php");
} else {
    echo "Error deleting record: " . mysqli_error($con);
}
mysqli_close($con);

?>