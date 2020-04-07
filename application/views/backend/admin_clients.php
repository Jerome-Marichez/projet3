

<div class="col-md-9">


  <div class="row lightgray">
    <div class="col-md-10">  <div class="titre_menu_admin"><p> Mes Clients  </p></div></div>
    <div class="col-md-2">  <div class="titre_menu_admin"> <i class="fa fa-plus-circle fa-2x"></i></div></div>
  </div>







  <div class="espace_backend_30"> </div>


  <table class="table table-striped ">
     <thead>
       <tr class="haut_du_tableau_tr">
         <th class="haut_du_tableau_th"> </th>
         <th>Nom du client</th>
         <th>E-mail</th>
         <th>Date</th>
         <th>N° de compte</th>
       </tr>

     </thead>

     <tbody>
       <?php



       foreach($tableau_client as $row)
       {
$id_specific = $row->id; 
$nom_tableau = $row->nom;
$email_tableau = $row->email;
$date_tableau = '08/04/2020';
$client_ID_tableau = $row->client_id;
      ?>   <tr class="supprimer_ligne_tableau_tr">   <td class="col-md-1 supprimer_ligne_tableau_td"><i class="fa fa-trash fa-2x"></i>  </td>
<?php
echo '<td>';echo $email_tableau; echo '</td>';
echo '<td>';echo $nom_tableau; echo '</td>';
echo '<td>'; echo $date_tableau; echo '</td>';
echo '<td>';  echo $client_ID_tableau; echo '</td>';
        ?>
      <?php
       }
?>




       </tr>

     </tbody>
   </table>







</div>

<div class="clearfix visible-lg"></div>
</div>

</div>
</body>
</html>
