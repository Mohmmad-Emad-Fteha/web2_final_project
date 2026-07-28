<?php
include "dbConnection.php";

if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $car_name = $_POST['car_name'];
        $model_year = $_POST['model_year'];
        $car_color = $_POST['car_color'];
        $price = $_POST['price'];
        
        $carPhoto = $_FILES['car_photo'];
        
        $carPhotoName = $carPhoto['name'];
        $carPhotoTmpName = $carPhoto["tmp_name"];
        $carPhotoSize = $carPhoto["size"];
        $carPhotoErorr = $carPhoto["error"];
        $carPhotoExt = strtolower(pathinfo($carPhotoName , PATHINFO_EXTENSION));
        $allowed = ["jpg","png","jpeg"];

        if($carPhotoErorr === 0)
            {
                if(in_array($carPhotoExt,$allowed))
                    {
                        if($carPhotoSize < 5500000)
                        {
                            $newCarPhotoTmpName = "CarsPhoto/" . $carPhotoName ;

                            move_uploaded_file($carPhotoTmpName,$newCarPhotoTmpName);
                        }
                        else
                            {
                                echo "The Size of Image Nust be less 5MB";
                            }
                    }
                    else
                        {
                            echo "The Extension is not Support";
                        }
            }
        
        $sql = "INSERT INTO cars(car_photo,car_name,model_year,car_color,price)
         VALUES(?,?,?,?,?)" ;
         $stat = $conn->prepare($sql);
         $stat->bind_param("ssisi",$newCarPhotoTmpName,$car_name,$model_year,$car_color,$price);
         $result = $stat->execute();
         echo $result;
         if($result)
            {
                header("Location:adminDashboard.php?msgAddCar=Add Car Succfully!");
            }

    }
$conn->close();
?>