

<div class="col-md-9">


  <div class="row lightgray">
    <div class="col-md-10">  <div class="titre_menu_admin"><p> Mes Dossiers  </p></div></div>
    <div class="col-md-2">  <div class="titre_menu_admin"> <a id="ajouter_client"   data-toggle="modal" data-target="#creationclient_fenetre"><i class="fa fa-plus-circle fa-2x"></i></a></div></div>
  </div>





  <div class="modal fade" id="creationclient_fenetre" tabindex="-1" role="dialog" aria-labelledby="creationclient_fenetre" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <form <?php echo form_open('backend/login/ajouter_client'); ?>>

        <div class="modal-header">
          <h5 class="modal-title" id="creationclient_fenetre">Création client</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">



              <div class="form-group">
                <div class="row"><div class="col-md-6">
                <input type="text" class="form-control" name="cree_nom" id="cree_nom" placeholder="Nom">
              </div>
              <div class="col-md-6">
                <input type="text" class="form-control" name="cree_prenom" id="cree_prenom"  placeholder="Prenom">
              </div> </div>
              </div>
              <div class="form-group">
                <input type="tel" class="form-control" name="cree_telephone" id="cree_telephone" placeholder="Telephone">
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="cree_email" id="cree_email" placeholder="email">
              </div>
              <div class="form-group">

                <input type="text" class="form-control" name="cree_adresse_postal" id="cree_adresse_postal" placeholder="adresse postale">
              </div>
              <div class="form-group">
                <div class="row">
                <div class="col-md-6">
                <input type="text" class="form-control" name="cree_code_postal" id="cree_code_postal" placeholder="code postale">
              </div>
                <div class="col-md-6">
                <input type="text" class="form-control" name="cree_ville" id="cree_ville" placeholder="ville">    </div>
              </div>
            </div>
              <div class="form-group">

                <textarea class="form-control" name="question" id="question" rows="5" placeholder="Posez vos question"></textarea>

              </div>





        </div>


          <button type="submit" class="btn btn-primary">Enregistrer</button>

<?php echo form_close(); ?>
        </form>

      </div>
    </div>
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










      <tr class="supprimer_ligne_tableau_tr">   <td class="col-md-1 supprimer_ligne_tableau_td"><a href="#"> <i class="fa fa-trash fa-2x"></i></a>   </td>

      <td> P45212154 </td>
      <td> Client </td>

      <td > <i class="fas fa-check fa-2x "></i></td>
      <td class="col-md-2"> <i class="fas fa-chevron-right fa-2x"></i></td>


      </tr>


      <tr class="supprimer_ligne_tableau_tr">   <td class="col-md-1 supprimer_ligne_tableau_td"><a href="#"> <i class="fa fa-trash fa-2x"></i></a>   </td>

      <td> P45212154 </td>
      <td> Client </td>

      <td > <i class="fas fa-exclamation-triangle fa-2x"></i></td>
      <td class="col-md-2"> <i class="fas fa-chevron-right fa-2x"></i></td>


      </tr>

      <tr class="supprimer_ligne_tableau_tr">   <td class="col-md-1 supprimer_ligne_tableau_td"><a href="#"> <i class="fa fa-trash fa-2x"></i></a>   </td>

      <td> P45212154 </td>
      <td> Client </td>

      <td > <i class="fas fa-history fa-2x"></i></td>
      <td class="col-md-2"> <i class="fas fa-chevron-right fa-2x"></i></td>


      </tr>


     </tbody>
   </table>







</div>