<!-- Afficher la liste des messages enregistrés dans ma bdd dans le dashbord admin-->
<section class="fetch_car">
  <div class="container_header p-3 ">
    <div class="content_header d-flex">
        <p>Message</p>
    </div>
       <div class="content_button mt-2">
          <a href="admin_page.php" class="btn btn-primary">Back  <i class="bi bi-backspace"></i></a>
       </div>
    </div>
    <div class="container_card my-5">
         <h2>liste des messages</h2>
         <table class="blueTable">
            <thead>
               <tr>
                  <th>Sujet</th>
                  <th>Nom</th>
                  <th>Prénom</th>
                  <th>Adresse mail</th>
                  <th>Portable</th>
                  <th>Message</th>
               </tr>
            </thead>
         <tbody>

         L'évaluation du projet ECF Hiver 2023-2024 au sein de la formation Graduate Développeur Full Stack de chez Studi vise à mesurer les compétences acquises par les apprenants. Le projet, centré sur la création d'un site vitrine pour un garage automobile appartenant à M. VINCENT Parrot, a été élaboré dans le but de mettre en pratique les connaissances liées au développement full stack.

Les compétences évaluées se répartissent en deux activités principales. Dans le cadre de l'Activité – Type 1, les apprenants doivent démontrer leur capacité à développer la partie front-end d'une application web ou mobile tout en intégrant les recommandations de sécurité. Cela englobe la maquettage de l'application, la réalisation d'une interface utilisateur web statique et adaptable, le développement d'une interface utilisateur web dynamique, ainsi que la création d'une interface utilisateur intégrant une solution de gestion de contenu ou d'e-commerce.

L'Activité – Type 2 se concentre sur le développement de la partie back-end de l'application, tout en intégrant également les bonnes pratiques de sécurité. Les compétences évaluées comprennent la création d'une base de données, le développement des composants d'accès aux données, la réalisation de la partie back-end de l'application web ou mobile, ainsi que l'élaboration et la mise en œuvre de composants au sein d'une application de gestion de contenu ou d'e-commerce.

L'ensemble de cette évaluation vise à assurer que les apprenants sont en mesure de maîtriser les compétences essentielles pour devenir des développeurs full stack compétents, capables de concevoir et de mettre en œuvre des solutions web sécurisées et fonctionnelles.
    <?php
     require_once 'connexion.php';
     require_once '../templates/head.php';
   //   Récupérer l'id de la voiture en question pour afficher la marque dans le sujet de formulaire
     $req =$conn->query('SELECT * FROM contact_voitures');
     while($user = $req->fetch()){
        ?>
        <tr>
        <td><?=$user['sujet']?></td>
        <td><?=$user['nom']?></td>
        <td><?=$user['prenom']?></td>
        <td><?=$user['mail']?></td>
        <td><?=$user['portable']?></td>
        <td><?=$user['message']?></td>
        </tr>
      
        <?php 
     };
    ?>
</tbody>
</table>
</section>