﻿<div id="contenu">
<h2>Mise en paiement des Fiches de Frais</h2> 

<form method="post" action="index.php?uc=paiement&action=mettrePaiement" >
<!-- tableau avec nom prénom visiteur + montant de leur fiche de frais + bouton mettre en paiment-->
<table class="listeLegere">
	<tr>
		
		<th class="nom">Nom</th>
		<th class="prenom">Prenom</th>
		<th class="mois">Mois</th>
		<th class='montantForfait' >Montant Forfait</th>
		<th class="id" style="display: none;">id</th>
	</tr>
        <?php
        
        $totalPaiement=0;
								foreach ( $lesDonnees as $uneDonnee ) {
									?>
        <tr>
       
		<td><?php echo $nom = $uneDonnee ['nom']; ?></td>
		<td><?php echo $prenom  = $uneDonnee ['prenom']; ?></td>
		<td><?php echo $mois = $uneDonnee ['mois']; ?></td>
		<td><?php echo $montantForfait = $uneDonnee ['montantValide']; ?></td>
		<td style="display: none;"><?php  $id = $uneDonnee ['idVisiteur']; ?></td>
	</tr>
		<?php $totalPaiement = $totalPaiement + $montantForfait;
		
								}
								?>
	</tr>
</table>


<!-- recup valeur total mettre paiement -->
<h3>Total a mettre en paiement : <?php echo $totalPaiement ?>  Euro(s)</h3>
<input type='submit' value='Mise en paiement' name='valider'>
</form>
</div>













