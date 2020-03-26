<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="css/W3S_plus.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Curriculum Vitae</title>
</head>

<body>
	<?php
include ("header.php");
	?>

	<main>

		<?php
include("intro.php");
?>

		<section class="m_introduction">
			<div class="intro">Rigoureuse et dynamique, mes expériences m'ont permis d'acquérir une grande polyvalence. Possédant un vif intérêt pour de domaine du web, je souhaite devenir développeur web.
			</div>
		</section>
		<!--Compétences, Expérience, Formation, Hobbies-->
		<section id="m_main">
			<div id="comp" class="m_bloc">
				<div class="m_bloc_title">
					<h2>Compétences</h2>
				</div>
				<div class="m_bloc_content">
					<ul>
						<li>PHP
						<div class="w3-round">
							<div class="w3-container w3-green w3-round-xlarge" style="width:25%">Débutant</div>
						</div></li>
						<li>HTML5/CSS
						<div class="w3-round">
							<div class="w3-container w3-green w3-round-xlarge" style="width:90%">Dépasse l'objectif attendu...</div>
						</div></li>
						<li>MySQL
						<div class="w3-round">
							<div class="w3-container w3-green w3-round-xlarge" style="width:70%">Atteint presque l'objectif!</div>
						</div></li>
						<li>Anglais
						<div class="w3-round">
							<div class="w3-container w3-green w3-round-xlarge" style="width:85%">J'étais adulé !</div>
						</div></li>
						<!-- <li>Savoir identifier les besoins de l'enfant
						<div class="w3-round">
							<div class="w3-container w3-green w3-round-xlarge" style="width:5%">...</div>
						</div></li> -->
					</ul>
				</div>
			</div>

			<div class="m_bloc m_bloc1">
				<div class="m_bloc_title">
					<h2 id="exp">Expériences</h2>
				</div>


				<div class="m_bloc_content">
                    <?php
                    $experiences = [
                        'Chargée d\'accueil' => [
                            'employeur'=> 'Hôtel Groslot',
                            'contrat'=> 'CDD',
                            'annee' => 'Avril 2017 à Mai 2018',
                            'missions' => 'ajouter missions',
                        ],
                        'Assistante relations internationales' => [
                            'employeur'=>'Mairie d\'Orléans',
                            'contrat'=>'CDD',
                            'annee'=>'Mai 2018 à Octobre 2018',
                            'missions' => 'ajouter missions',

                        ],

                    ];

                    foreach($experiences as $job => $typeOfDetails ) ?>
                    <?= $job  ?>
                    <ul>
                        <?php foreach($typeOfDetails as $details) : ?>
                        <li><?= $details ?></li>

                    </ul>
                <?php endforeach; ?>
                    <!--
					<div class="m_cont_img">
						<div class="m_ss_titre_vignettes">
							<h3><em>-- Ils m'ont fait confiance --</em></h3>
						</div>
						<div class="m_vignettes">
							<div class="cadre">
								<figure>
									<img src="images/kim.jpg" alt="Kimmy" />
									<figcaption>"Un p'tit gars sérieux !"</figcaption>
								</figure>
							</div>
							<div class="cadre">
								<figure>
									<img src="images/harry.jpg" alt="Potter" />
									<figcaption>"Il a essayé de s'occuper de moi !"</figcaption>
								</figure>
							</div>
							<div class="cadre">
								<figure>
									<img src="images/cyril.jpeg" alt="La Nouilla" />
									<figcaption>"Mon p'tit Vovol ? Il est génial !"</figcaption>
								</figure>
							</div>
							<div class="cadre">
								<figure>
									<img src="images/loky.png" alt="Lock" />
									<figcaption>"Je lui confierai mon père !"</figcaption>
								</figure>
							</div>
							<div class="cadre">
								<figure>
									<img src="images/louis.jpeg" alt="Loulou la Moustache" />
									<figcaption>"Une bonne gestion du groupe ! #pédagogie"</figcaption>
								</figure>
							</div>
							<div class="cadre">
								<figure>
									<img src="images/sauron.jpg" alt="de serviette" />
									<figcaption>"Je lui confierai les clés du kangoo sans hésiter !"</figcaption>
								</figure>
							</div>
							<div class="cadre">
								<figure>
									<img src="images/covid.png" alt="de chambre" />
									<figcaption>"Il gère les enfants, moi les parents..."</figcaption>
								</figure>
							</div>
							<div class="cadre">
								<figure>
									<img src="images/joker.jpg" alt="pur jus" />
									<figcaption>"Il amuse les petits"</figcaption>
								</figure>
							</div>
						</div>
					</div>
				</div>
			</div>
			-->
			<div class="m_bloc">
				<div class="m_bloc_title">
					<h2 id="format">Formation</h2>
				</div>
				<div class="m_bloc_content m_form_txt_img">
					<div class="m_form_text">
                       <?php $formations = [
                        '2013 à 2017'=> 'Licence de Langues Etrangères Appliquées à l\'Université d\'Orléans',
                        2020 => 'Formation PHP à la Wild Code School d\'Orléans',
                        ]; ?>

						<ul>
                            <?php foreach ($formations as $formName => $date) : ?>
							<li><?= $formName . ' : ' . $date ?></li>
                            <?php endforeach; ?>
						</ul>
					</div>
					<div class="m_form_img">
						<img src="images/diplome.png" alt="icone de diplome" class="diplome">
					</div>
				</div>
			</div>

			<div class="m_bloc m_bloc1">
				<div class="m_bloc_title">
					<h2 id="hobbs">Hobbies</h2>
				</div>
				<div class="m_bloc_content m_form_txt_img hobbies">
					<div class="m_content_hob">
                        <?php
                        $hobbies = [
                            'Voyages',
                            'Jeux vidéos',
                            'Littérature étrangère',
                            'Films',
                        ];?>
						<ul>
							<li><?= $hobbies[0] ?></li>
							<li><?= $hobbies[1] ?></li>
							<li><?= $hobbies[2] ?></li>
							<li><?= $hobbies[3] ?></li>
						</ul>
					</div>
					<div class="m_hob_img">
						<img src="images/movie.png" alt="clap de film" class="panneau">
					</div>
				</div>
			</div>
		</section>
	</main>

    <?php

    include ("form.php");
    ?>
<footer>

    <?php
    include ("footer.php")
    ?>

</footer>

</body>
</div>
</div>
</html>