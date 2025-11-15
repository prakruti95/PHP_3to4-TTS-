<?php
$conn = new mysqli("localhost", "root", "", "test1");

if (!empty($_FILES['image']['name']))
{
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_FILES['image']['name'];
    $target = "uploads/" . basename($image);

    if(move_uploaded_file($_FILES["image"]["tmp_name"], $target))
    {
        $sql = "insert into products (name,price,image) values ('$name','$price','$image')";
        if($conn->query($sql))
        {
            echo "Success";
        }
        else
        {
            echo "Fail";
        }
    }
    else
    {
        echo "❌ Image Upload Failed!";
    }

}
    

?>