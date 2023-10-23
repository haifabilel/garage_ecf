<?php
require_once './templates/head.php';
require_once './templates/header.php';
require_once './templates/services.php';
//------fetch reviews-----
require_once ('./espace_admin/connexion.php');
     $req = $conn->query('SELECT * FROM review_table WHERE user_rating > 3');
     while($user = $req->fetch()){
        ?>
        <tr>
        <td><?=$user['name']?></td>
        <td><?=$user['email']?></td>
        <td>
            <a class="btn btn-primary" href="supprimer_user.php?id=<?=$user['id']?>">Supprimer <i class="fa-regular fa-trash-can"></i></a>
        </td>
        </tr>
        <?php 
     }
    ?>
    <?php
require_once './templates/footer.php';
?>
