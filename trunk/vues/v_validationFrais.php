﻿ <div id="contenu">
 	<h2>Mes fiches de frais</h2>
 	
 	<h3>Visiteur à Séléctionner : </h3>
      <form action="index.php?uc=validerFrais&action=voirEtatFrais" method="post">
      <div class="corpsForm">
        
      <p>
        <label for="lstVis" accesskey="n">Visiteur : </label>
        <select id="lstVis" name="lstVis">
            <?php
			if(!empty($lesVisiteurs)){
				foreach ($lesVisiteurs as $unVis)
				{					
					?>
						<option value="<?php echo $unVis['id'] ?>" <?php if($idAutreVisiteur == $unVis['id']) { ?> selected <?php } ?> ><?php echo $unVis['nom']." ".$unVis['prenom']; ?></option>
					<?php 
				}
			}else{
				?>
					<option><?php echo 'Aucun Visiteur ne possède de fiche de frais'; ?></option>
				<?php
				}
			?>  
        </select>
      </p>  
         
      <p>
        <label for="lstMois" accesskey="n">Mois : </label>
        <select id="lstMois" name="lstMois">
            <?php
				foreach ($lesMois as $unMois)
				{
					?>
						<option value="<?php echo $unMois['mois'] ?>" <?php if($leMois == $unMois['mois']) { ?> selected <?php } ?> ><?php echo $unMois['numMois']."/".$unMois['numAnnee']; ?></option>
					<?php
				} 
			?>  
        </select>
      </p>	  
      </div>
      <div class="piedForm">
      <p>
        <input id="ok" type="submit" value="Valider" size="20" />
      </p> 
      </div>
        
      </form>