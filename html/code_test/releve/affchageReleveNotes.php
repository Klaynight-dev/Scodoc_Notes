<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Relevé de notes d'un semestre">
	<title>Relevé de notes</title>
	<link rel="stylesheet" href="releve.css">
</head>
<body spellcheck=true contenteditable=true>
	<main>
<!--------------------------->
<!-- Informations étudiant -->
<!--------------------------->
		<section class="etudiant">
			<img class="studentPic" src="" alt="Photo de l'étudiant" width="100" height="120">
			<div class=infoEtudiant></div>
		</section>

<!--------------------------->
<!-- Semestre              -->
<!--------------------------->
		<section>
			<h2>Semestre</h2>
			<em>Les moyennes servent à situer l'étudiant dans la promotion et ne reflète pas l'obtention du semestre.</em>
			<div class=infoSemestre></div>
		</section>

<!--------------------------->
<!-- Evaluations           -->
<!--------------------------->
		<section>
			<h2>Évaluations</h2>
			<div class=evaluations></div>
		</section>

<!--------------------------->
<!-- Synthèse              -->
<!--------------------------->
		<section>
			<h2>Synthèse</h2>
			<em>Les moyennes des ressources dans une UE dépendent des poids donnés aux évaluations</em>
			<div class=synthese></div>
		</section>

	</main>

	<script>
		let data = <?php include('releveNotes.json'); ?>;
	</script>
	<script src=releve.js></script>
</body>
</html>