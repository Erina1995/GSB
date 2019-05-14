<script type="text/javascript">
function checkAllBox(ref, name) {
    var form = ref;
     
    while (form.parentNode && form.nodeName.toLowerCase() != 'form') { form = form.parentNode; }
     
    var elements = form.getElementsByTagName('input');
     
    for (var i = 0; i < elements.length; i++) {
        if (elements[i].type == 'checkbox' && elements[i].name == name) {
            elements[i].checked = ref.checked;
        }
    }
}
</script>
<div id="contenu">
<h3>Fiche de frais : </h3>
    <div class="encadre">
    <form method='POST' action='index.php?uc=suiviRemboursement&action=valider'>
  	<table class="listeLegere">
  	   <caption>Fiches de frais des visiteurs</caption>
             <tr>
                <th class='nom'> Nom </th>    
                <th class='nom'> Mois </th>    
                <th class='montant'> Montant </th>     
                <th class="valide"> Valider </th>        
             </tr>
          <?php
          $nbFiche=1;
          foreach ( $lesVisiteursRemboursement as $unVisiteur )//parcours des visiteur avec fiches MP
          {
		      $lesFiches = $pdo->getLesFichesFraisRemboursement($unVisiteur['id']);
		      $nom = $unVisiteur['nom'];
		  	  $prenom = $unVisiteur['prenom'];
		  	  ?>
		  	
		  	  <tr>
	        	  <td><?php echo $nom." ".$prenom?></td><!-- Pour avoir un affichage en forme de puce -->
		          <td> </td>
		          <td> </td>
	          </tr>
	        
	          <?php 
		  	  foreach ($lesFiches as $uneFiche){//parcours des fiche du visiteur
			  	  $montantValide = $uneFiche['montantValide'];
			  	  $mois = substr( $uneFiche['mois'],4,2)."/".substr( $uneFiche['mois'],0,4);//on passe de 201512 à 12/2015 par exemple
				  ?>
				  <tr>
					  <td> </td><!-- Pour l'affichage en forme de puce -->
					  <td><?php echo $mois ?></td>
			          <td><?php echo $montantValide."€" ?></td>
			          <td>
					      <label for="check"></label>
					      <input type="checkbox" name="choix[]" value="<?php echo $nbFiche;?>" id="<?php echo $nbFiche;?>">
					      <!-- Liste de checkbox pour tous cocher via JS -->
			    	  </td>
		    	  </tr>
	        	  <?php
	        	  $nbFiche++;//fiche suiviante
		  	  	  }
		 	  }
		  ?>
    </table>
    
    <label for="checkAll">Tous cocher</label><!-- Permet de cocher toutes les checkbox -->
    <input type="checkbox" onclick="checkAllBox(this, 'choix[]');" />
    <INPUT TYPE="submit" NAME="nom" VALUE="Valider">
  </form>
  </div>
  </div>