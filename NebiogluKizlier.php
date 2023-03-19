<html>
<head>
     <!-- Erol Nebioğlu Nebioğlu-200218004
        Ataberk Kubilay Kızlıer -->

        
    <style>
        body{
        background-color:#FFF9D8;
        }
        table,td,tr,th {
                border: 1px solid black;
                padding: 5px 10px;
            }
            td {
    text-align: center;
    }
    table{
        margin: 0 auto;
    }

    </style>
<title>Shopping Page</title>
<meta charset="UTF-8">
</head>

<body style="text-align: center;">
    <p>Erol Nebioğlu-200218004 <br> Ataberk Kubilay Kizlier-210218017 </p>
    <h1>Lights & Toys</h1>      
    <h2><i> Discover new and trending products</i></h2>
    <form method="POST" action="">
        <label for="lights">Choose a lights and toys subcategory:</label>
        <select name="lights" id="lights">
            <option value="indoor">indoor lights</option>
            <option value="holiday lights">holiday lights</option>
            <option value="light bulbs">light bulbs</option>
            <option value="other">others</option>
            <option value="Electronic">electronic toys</option>
            <option value="Toy Vehicle">toy vehicles</option>
            <option value="Action Figures">action figures</option>
            <option value="Educational Toys">educational toys</option>
            
        </select>
  <br><br>
  <input type="submit" value="Show">
</form> 



</body>


<?php
try {
    error_reporting(0);

    $pdo = new PDO('sqlite:hw.db');

    $lights = $_POST['lights'];
    $productid = $_POST['list'];


    if ($_POST) {

     

        if ($lights == "indoor") {
            echo "<img src='indoor.jpg ' width='200' >";
            echo "<h2><b>Indoor Lights</b></h2>";
            $statement1 = $pdo->query("SELECT * FROM products WHERE category = 'indoor'");
            $products = $statement1->fetchAll(PDO::FETCH_ASSOC);

            echo "<table>";
            echo "<th>Product Name</th>" . "<th>ID</th>" . "<th>Price</th>" . "<th>Stock</th>";
            foreach ($products as $row => $product) {


                echo "<tr>" . "<td>" . $product['name'] . "</td>" . " " . "<td>" . $product['id'] . "</td>" . " " . "<td>$" . $product['price'] . "</td>" . " " . "<td>" . $product['stock'] . "</td>" . "</tr>" . "<br>";

            }
            echo "</table><br>";
            
            echo '<form name="form2" action="" method="POST"><br>';
            echo "Product ID: ";
            echo "<select name='list'>";
            foreach ($products as $row => $product) {


                echo "<option>" . $product['id'] . "</option>";

            }
            echo "</select><br>";







        } else if ($lights == "holiday lights") {
            echo "<img src='holiday.jpeg ' width='200' >";
            echo "<h2><b>Holiday Lights</b></h2>";
            $statement1 = $pdo->query("SELECT * FROM products WHERE category = 'holiday'");
            $products = $statement1->fetchAll(PDO::FETCH_ASSOC);


            echo "<table>";
            echo "<th>Product Name</th>" . "<th>ID</th>" . "<th>Price</th>" . "<th>Stock</th>";
            foreach ($products as $row => $product) {


                echo "<tr>" . "<td>" . $product['name'] . "</td>" . " " . "<td>" . $product['id'] . "</td>" . " " . "<td>$" . $product['price'] . "</td>" . " " . "<td>" . $product['stock'] . "</td>" . "</tr>" . "<br>";

            }
            echo "</table><br>";
            

            echo '<form name="form2" action="" method="POST"><br>';
            echo "Product ID: ";
            echo "<select name='list'>";

            foreach ($products as $row => $product) {


                echo "<option>" . $product['id'] . "</option>";

            }
            echo "</select><br>";


        } else if ($lights == "light bulbs") {
            echo "<img src='lightbulb.jpg ' width='200' >";
            echo "<h2><b>Light Bulbs</b></h2>";
            $statement1 = $pdo->query("SELECT * FROM products WHERE category = 'light bulb'");
            $products = $statement1->fetchAll(PDO::FETCH_ASSOC);

            echo "<table>";
            echo "<th>Product Name</th>" . "<th>ID</th>" . "<th>Price</th>" . "<th>Stock</th>";
            foreach ($products as $row => $product) {


                echo "<tr>" . "<td>" . $product['name'] . "</td>" . " " . "<td>" . $product['id'] . "</td>" . " " . "<td>$" . $product['price'] . "</td>" . " " . "<td>" . $product['stock'] . "</td>" . "</tr>" . "<br>";

            }
            echo "</table>";
            
            echo '<form name="form2" action="" method="POST"><br>';
            echo "Product ID: ";
            echo "<select name='list'>";

            foreach ($products as $row => $product) {


                echo "<option>" . $product['id'] . "</option>";

            }
            echo "</select><br>";

        } else if ($lights == "other") {
            echo "<img src='other.jpg ' width='200' >";
            echo "<h2><b>Other Lights</b></h2>";
            $statement1 = $pdo->query("SELECT * FROM products WHERE category = 'other'");
            $products = $statement1->fetchAll(PDO::FETCH_ASSOC);

            echo "<table>";
            echo "<th>Product Name</th>" . "<th>ID</th>" . "<th>Price</th>" . "<th>Stock</th>";
            foreach ($products as $row => $product) {


                echo "<tr>" . "<td>" . $product['name'] . "</td>" . " " . "<td>" . $product['id'] . "</td>" . " " . "<td>$" . $product['price'] . "</td>" . " " . "<td>" . $product['stock'] . "</td>" . "</tr>" . "<br>";

            }
            echo "</table>";
            
            echo '<form name="form2" action="" method="POST"><br>';
            echo "Product ID: ";
            echo "<select name='list'>";

            foreach ($products as $row => $product) {


                echo "<option>" . $product['id'] . "</option>";

            }
            echo "</select><br>";

        }
        else if ($lights == "Electronic") {
            echo "<img src='electronic.jpg' width='200' >";
            echo "<h2><b>Electronic Toys</b></h2>";
            $statement1 = $pdo->query("SELECT * FROM products WHERE category = 'Electronic'");
            $products = $statement1->fetchAll(PDO::FETCH_ASSOC);


            echo "<table>";
            echo "<th>Product Name</th>" . "<th>ID</th>" . "<th>Price</th>" . "<th>Stock</th>";
            foreach ($products as $row => $product) {


                echo "<tr>" . "<td>" . $product['name'] . "</td>" . " " . "<td>" . $product['id'] . "</td>" . " " . "<td>$" . $product['price'] . "</td>" . " " . "<td>" . $product['stock'] . "</td>" . "</tr>" . "<br>";

            }
            echo "</table><br>";
            

            echo '<form name="form2" action="" method="POST"><br>';
            echo "Product ID: ";
            echo "<select name='list'>";

            foreach ($products as $row => $product) {


                echo "<option>" . $product['id'] . "</option>";

            }
            echo "</select><br>";


        }
        else if ($lights == "Toy Vehicle") {
            echo "<img src='vehicle.jpg' width='200' >";
            echo "<h2><b>Toy Vehicle</b></h2>";
            $statement1 = $pdo->query("SELECT * FROM products WHERE category = 'Toy Vehicle'");
            $products = $statement1->fetchAll(PDO::FETCH_ASSOC);


            echo "<table>";
            echo "<th>Product Name</th>" . "<th>ID</th>" . "<th>Price</th>" . "<th>Stock</th>";
            foreach ($products as $row => $product) {


                echo "<tr>" . "<td>" . $product['name'] . "</td>" . " " . "<td>" . $product['id'] . "</td>" . " " . "<td>$" . $product['price'] . "</td>" . " " . "<td>" . $product['stock'] . "</td>" . "</tr>" . "<br>";

            }
            echo "</table><br>";
            

            echo '<form name="form2" action="" method="POST"><br>';
            echo "Product ID: ";
            echo "<select name='list'>";

            foreach ($products as $row => $product) {


                echo "<option>" . $product['id'] . "</option>";

            }
            echo "</select><br>";


        }
        else if ($lights == "Action Figures") {
            echo "<img src='actionfigure.jpg' width='200' >";
            echo "<h2><b>Action Figures</b></h2>";
            $statement1 = $pdo->query("SELECT * FROM products WHERE category = 'Action Figures'");
            $products = $statement1->fetchAll(PDO::FETCH_ASSOC);


            echo "<table>";
            echo "<th>Product Name</th>" . "<th>ID</th>" . "<th>Price</th>" . "<th>Stock</th>";
            foreach ($products as $row => $product) {


                echo "<tr>" . "<td>" . $product['name'] . "</td>" . " " . "<td>" . $product['id'] . "</td>" . " " . "<td>$" . $product['price'] . "</td>" . " " . "<td>" . $product['stock'] . "</td>" . "</tr>" . "<br>";

            }
            echo "</table><br>";
            

            echo '<form name="form2" action="" method="POST"><br>';
            echo "Product ID: ";
            echo "<select name='list'>";

            foreach ($products as $row => $product) {


                echo "<option>" . $product['id'] . "</option>";

            }
            echo "</select><br>";


        }
        else if ($lights == "Educational Toys") {
            echo "<img src='educational.jpg' width='200' >";
            echo "<h2><b>Educational Toys</b></h2>";
            $statement1 = $pdo->query("SELECT * FROM products WHERE category = 'Educational Toys'");
            $products = $statement1->fetchAll(PDO::FETCH_ASSOC);


            echo "<table>";
            echo "<th>Product Name</th>" . "<th>ID</th>" . "<th>Price</th>" . "<th>Stock</th>";
            foreach ($products as $row => $product) {


                echo "<tr>" . "<td>" . $product['name'] . "</td>" . " " . "<td>" . $product['id'] . "</td>" . " " . "<td>$" . $product['price'] . "</td>" . " " . "<td>" . $product['stock'] . "</td>" . "</tr>" . "<br>";

            }
            echo "</table><br>";
            

            echo '<form name="form2" action="" method="POST"><br>';
            echo "Product ID: ";
            echo "<select name='list'>";

            foreach ($products as $row => $product) {


                echo "<option>" . $product['id'] . "</option>";

            }
            echo "</select><br>";


        }

        $allProduct = $pdo->query("SELECT * FROM products");
        $items = $allProduct->fetchAll(PDO::FETCH_ASSOC);

        foreach($items as $row => $item){
            //echo $productid;
            //echo "saco";
            //echo "<br>";
            //echo $item['id'];
            if(strval($item['id'])===strval($productid)){
                $currentStock = $item['stock'];
                //echo "saco";
            }

        }
        //echo $currentStock;

        
        // $result = $pdo->query("SELECT stock FROM products WHERE id=:list");
        // $result->bindValue(':list',$productid);
        // $res = $result->execute();
        // echo $res;
        // $row = $result->fetch(PDO::FETCH_ASSOC);
        //echo $row;
        if($currentStock==0){
            $delete = $pdo->query("DELETE FROM products WHERE stock=1");
        }
        $listOfValues = $pdo->query("UPDATE products SET stock = " . ($currentStock-1) . " WHERE id = :list");
        $listOfValues->bindValue(':list', $productid);
        $listOfValues->execute();

        



        //echo '<label for="User ID">User ID:</label>';
        //echo '<input type="text" name="userid" placeholder="ex:1234.." maxlength="10" minlength="1" required><br><br>';
        echo '<br><label for="quantity">User ID:</label>
        <input type="number" id="quantity" name="quantity" min="1" max="9999999999999999" required><br><br>';
        echo '<input type="submit" value="Buy" >';
        echo '</form>';

//         echo "<script>
//             var userid = document.form2.userid.value;
//         function allnumeric(userid){
//             var numbers = /^[0-9]+$/;
//             if(userid.value.match(numbers))
//         {
//         alert('Your Registration number has accepted....');
//         document.form2.userid.focus();
//         return true;
//       }
//         else
//       {
//         alert('Please input numeric characters only');
//         document.form2.userid.focus();
//         return false;
//       }
//    } 
//         </script>";

    }


}catch(Exception $e){
    //echo "saco";
}
?>

</html>
