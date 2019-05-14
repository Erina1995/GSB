
<h3>Fiche de frais du mois <?php echo $numMois."-".$numAnnee?> : 
    </h3>
    <div class="encadre">
    <p>
        Etat : <?php echo $libEtat?> depuis le <?php echo $dateModif?> <br> Montant validé : <?php echo $montantValide?>
              
                     
    </p>
  	<table class="listeLegere">
  	   <caption>Eléments forfaitisés </caption>
        <tr>
         <?php
         foreach ( $lesFraisForfait as $unFraisForfait ) 
		 {
			$libelle = $unFraisForfait['libelle'];
		?>	
			<th> <?php echo $libelle?></th>
		 <?php
        }
		
		?>
				<th class='total'>Total</th>
		</tr>
        <tr>
        <?php
		$total=0;
          foreach (  $lesFraisForfait as $unFraisForfait  ) 
		  {
				$quantite = $unFraisForfait['quantite'];
				
				if($unFraisForfait['idfrais']=='ETP'){
					$total=$unFraisForfait['quantite']*110.00;
				}
				if($unFraisForfait['idfrais']=='KM'){
					$total=$unFraisForfait['quantite']*0.62;
				}
				if($unFraisForfait['idfrais']=='NUI'){
					$total=$unFraisForfait['quantite']*80.00;
				}
				if($unFraisForfait['idfrais']=='REP'){
					$total=$unFraisForfait['quantite']*25.00;
				}
		?>
                <td class="qteForfait"><?php echo $quantite?> </td>
		 <?php
          }
		?>
				<td><?php echo $total." €"; ?></td>
		</tr>
    </table>
    
    <?php if(!empty($lesFraisHorsForfait)){?>
    
  	<table class="listeLegere">
  	   <caption>Descriptif des éléments hors forfait -<?php echo $nbJustificatifs ?> justificatifs reçus -
       </caption>
             <tr>
                <th class='date'>Date</th>
                <th class='libelle'>Libellé</th>
                <th class='montant'>Montant</th> 
             </tr>
        <?php      
          foreach ( $lesFraisHorsForfait as $unFraisHorsForfait ) 
		  {
			$date = $unFraisHorsForfait['date'];
			$libelle = $unFraisHorsForfait['libelle'];
			$montant = $unFraisHorsForfait['montant'];
		?>
             <tr>
                <td><?php echo $date ?></td>
                <td><?php echo $libelle ?></td>
                <td><?php echo $montant ?></td>
             </tr>
        <?php 
          }
		?>
    </table>
    
    <?php }
    else{
    
    	echo'Aucun Frais hors forfait enregistré !';
    	
    }?>
    
  </div>
  </div>
 













