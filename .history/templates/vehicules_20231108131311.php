<?php
include('../espace_admin/connexion.php');
if(isset($_POST["action"]))
{
    $query = $conn->query("SELECT * FROM product");
    if(isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"]))
    {
        $query = $conn->query("SELECT * FROM product WHERE price BETWEEN '".$_POST["minimum_price"]."' AND '".$_POST["maximum_price"]."'");
    }
    
    $output = '';
    if($query->rowCount() > 0){
        while ($row = $query ->fetch()) {
          $output = '';
            ?>
            <div class="col-sm-4 col-lg-3 col-md-3">
                <div style="border:1px solid #ccc; border-radius:5px; padding:16px; margin-bottom:16px; height:320px;">
                    <img src="images/<?php echo $row['image']; ?>" alt="" class="img-responsive" >
                    <p align="center"><strong><a href="#"><?php echo $row['name']; ?></a></strong></p>
                    <h4 style="text-align:center;" class="text-danger" ><?php echo $row['price']; ?></h4>
                </div>
            </div>
           <?php
          }
        }else{
            $output = '<h3>No Data Found</h3>';
        }
        echo $output;
    } ?>
      
