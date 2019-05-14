    <!-- Division pour le sommaire -->
    <div id="menuGauche">
     <div id="infosUtil">
    
        <h2>
    
</h2>
    
      </div>  
        <ul id="menuList">
			<li >
				<?php echo $_SESSION['type'] ?><br>
				<?php echo $_SESSION['prenom']."  ".$_SESSION['nom']  ?>
			</li>
			<?php if($_SESSION['type']=="Visiteur")
			{
			?>
				<li class="smenu">
		        	<a href="index.php?uc=gererFrais&action=saisirFrais" title="Saisie fiche de frais ">Saisie fiche de frais</a>
		        </li>
		        <li class="smenu">
		        	<a href="index.php?uc=etatFrais&action=selectionnerMois" title="Consultation de mes fiches de frais">Mes fiches de frais</a>
		        </li>
			<?php
			}
			else
			{
			?>
				<li class="smenu">
					<a href="index.php?uc=validerFrais&action=selectionnerVisiteur" title="Valider Fiche de Frais">Valider Fiche de Frais</a>
				</li>
				<li class="smenu">
					<a href="index.php?uc=paiement&action=affichageVisiteur" title="Mettre en paiement Fiche de Frais">Mettre en paiement Fiche de Frais</a>
				</li>
				<li class="smenu">
					<a href="index.php?uc=suiviRemboursement&action=affichage" title="Suivi Remboursement">Suivi Remboursement</a>
				</li>
			<?php
			}
			?>
           
 	   			<li class="smenu">
              		<a href="index.php?uc=connexion&action=deconnexion" title="Se déconnecter">Déconnexion</a>
          		</li>
         </ul>
    </div>
    