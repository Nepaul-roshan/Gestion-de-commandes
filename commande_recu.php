<?php
	
	include('connect_bdd.php');

	if(isset($_POST['id']))
	{
		$id = $_POST['id'];
		$sql = "UPDATE suivi_demande_materiel SET etat = 'etat4' WHERE id_suivi = '$id'";
		$sth = $base->prepare($sql);
		$sth->execute();

		$sql = "DELETE FROM toute_demandes  WHERE id = '$id'";
		$sth = $base->prepare($sql);
		$sth->execute();
	}
 	header('Location: http://localhost/projet-info642/demande_traitees_technicien.php');
	exit();
?>







