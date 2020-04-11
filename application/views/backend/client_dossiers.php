

<div class="col-md-9">


  <div class="row lightgray">
    <div class="col-md-10">  <div class="titre_menu_admin"><p> Mes Dossiers  </p></div></div>
    <div class="col-md-2">  </div>
  </div>







  <div class="espace_backend_30"> </div>

  <table class="table table-striped ">
     <thead>
       <tr class="haut_du_tableau_tr">
         <th class="haut_du_tableau_th"> </th>
         <th>N° de dossier</th>
         <th>Client</th>

         <th>Statut du dossier</th>

         <th></th>

       </tr>

     </thead>

     <tbody>








       <?php


       var_dump($tableau_dossier);

       foreach($tableau_dossier as $row)
       {
$id_specific = html_escape($row->id);
$number_dossier = html_escape($row->number_dossier);
$email_dossier = html_escape($row->email);
$statut = html_escape($row->statut);
      ?>     <tr class="supprimer_ligne_tableau_tr">   <td class="col-md-1 supprimer_ligne_tableau_td"><a href="#"> <i class="fa fa-trash fa-2x"></i></a>   </td>

<?php
echo '<td>'.$number_dossier.'</td>';
echo '<td>'.$email_dossier.'</td>';
echo ' <td >'; echo retourner_statut_icon($statut); echo '</i></td>';
echo '<td><a href="./show_dossier/'.$id_specific.'"</a><i class="fas fa-chevron-right fa-2x">'.'</td>';

echo  '</tr>';
        ?>
      <?php
       }
?>






     </tbody>
   </table>







</div>
