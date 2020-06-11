<?
$id = $_GET['id'];
$conn = new mysqli('localhost','root','','test');
    if($conn->connect_error)
    {
        die('Connection Failed : '.$conn->connect_error);
    }
    else
    {
        $sql = "DELETE FROM employee WHERE id = $id";
        if(!mysqli_query($conn,$sql))
        {
            echo 'Error';
        }
        else
        {
            echo"Information Deleted Successfully. You Are Redirecting to List";
            header( "refresh:2;url=list.php" );
        }
    }

?>