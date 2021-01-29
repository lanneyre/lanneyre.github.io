<?php
// Ce code se situe dans la classe "DAO_Client"
function age($date)
{
	list($jour, $mois, $annee) = explode ('/', $date);
	$TSN = strtotime($annee."/".$mois."/".$jour);
	$TS = strtotime(date("Y/m/d"));
	
	$Age = ($TS-$TSN)/(365*3600*24);
	return floor($Age);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="fr" version="-//W3C//DTD HTML 4.01 Transitional//EN">
	<head>	
		
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="Rémi LANNEY">
		<title>CV Rémi LANNEY</title>
		
		<link rel="stylesheet" href="Css/normalize.css">
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="Css/bootstrap.min.css">
		
		<link rel="stylesheet" href="Css/style.css"/>
		
		<!-- Custom Fonts -->
	    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	
	</head>
	<body>
		<div class="row">
			<div class="col-xs-12" id="title">
				<h1>Rémi LANNEY</h1>
				<h2>Développeur Fullstack</h2>
			</div>
		</div>
		<br />
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 justify">
				<img src="Images/LANNEY-remi.png" />
				
				<div class="cadre_gris">17/11/1984 (<?php echo age("17/11/1984");?> ans)</div>
				<div class="cadre_gris">Titulaire du permis B<br />Véhiculé</div>
				<br /><h3>Contact</h3>
				<div class="cadre_gris"><i class="fa fa-envelope"></i> contact@remi-lanney.com</div>
				<div class="cadre_gris"><i class="fa fa-phone"></i> +33.(0)6.20.82.70.88</div>
				<div class="cadre_gris">
					<i class="fa fa-home"></i> Route des blancons<br />
					<i class="fa fa_blank"></i> 06450 Belvédère<br />
				</div>
				
				<br /><h3>Présentation</h3>
				<span class="colorblanc">
					Disposant d'une licence en informatique, orientée vers le web, je dispose d'une solide expérience dans la programmation web et dans l'animation de sites mais aussi dans la formation d'adultes.<br />
					L'acquisition et la retransmission des connaissance sont deux facettes très importantes chez moi. J'ai un besoin quasi-permanent d'apprendre et le meilleur moyen que je connaisse pour asseoir mes acquis et de les transmettre à mon tour : "Pour pouvoir enseigner efficacement, il faut avoir compris parfaitement les connaissances retransmises".
				</span>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
				<h3>Expérience</h3>
				<div class="cadre_blanc">
					<img class="logo_entr" src="Images/apprentis_pas_sages_banniere.png" />
					<h4>Trésorier, Coordinateur</h4>
					<h5>Association Les Apprentis Pas Sages<br />Depuis octobre 2013 </h5>
					<ul>
						<li>Développer et maintenir le site de l'association</li>
						<li>Tenir la comptabilité de l'association</li>
					    <li>Coordonner les projets et les membres</li>
					    <li>Former les membres aux méthodologies de travail et de à la création d'animation</li>
					</ul>
					<div class="box_gris">Bénévolat</div><div class="box_gris">Bélvédère (06450)</div>
					<hr />
					<div class="box_gris">PHP 7.1</div><div class="box_gris">Laravel</div><div class="box_gris">Html/css</div><div class="box_gris">jquery</div><div class="box_gris">Bootstrap</div><div class="box_gris">Action Script 3</div>
				</div>
				<!-- ################################################################## -->
				<div class="cadre_blanc">
					<img class="logo_entr" src="Images/ics.jpg" />
					<h4>Coordinateur Formations Numérique</h4>
					<h5>ICS<br />Février 2019 à aujourd'hui</h5>
					<ul>
						<li>Former des demandeurs d'emploi au métier de développeur web</li>
						<li>Coordonner les différentes formation</li>
					</ul>
					<div class="box_gris">CDD</div><div class="box_gris">Nice (06200)</div>
					<hr />
					<div class="box_gris">PHP 7.2</div><div class="box_gris">Javascript</div><div class="box_gris">Html 5 / css 3</div><div class="box_gris">Jquery</div><div class="box_gris">Bootstrap</div><div class="box_gris">Algorithmie</div><div class="box_gris">SCRUM</div><div class="box_gris">POO</div><div class="box_gris">GIT</div><div class="box_gris">Linux</div><div class="box_gris">Bash</div><div class="box_gris">Java</div><div class="box_gris">Laravel</div><div class="box_gris">Symfony</div><div class="box_gris">Node</div><div class="box_gris">Angular</div>
				</div>
				<!-- ################################################################## -->
				<div class="cadre_blanc">
					<img class="logo_entr" src="Images/Simplon.png" />
					<h4>Lead Formateur</h4>
					<h5>Simplon.co<br />Janvier 2018 à octobre 2018</h5>
					<ul>
						<li>Former des demandeurs d'emploi au métier de développeur web</li>
					</ul>
					<div class="box_gris">CDD</div><div class="box_gris">Cannes (06150)</div>
					<hr />
					<div class="box_gris">PHP 7.2 & 5.*</div><div class="box_gris">Javascript</div><div class="box_gris">Html 5 / css 3</div><div class="box_gris">Jquery</div><div class="box_gris">Bootstrap</div><div class="box_gris">Algorithmie</div><div class="box_gris">SCRUM</div><div class="box_gris">POO</div><div class="box_gris">GIT</div><div class="box_gris">Linux</div><div class="box_gris">Bash</div><div class="box_gris">Java</div><div class="box_gris">Laravel</div><div class="box_gris">Symfony</div><div class="box_gris">Python</div><div class="box_gris">Node</div><div class="box_gris">Angular</div>
				</div>
				<!-- ################################################################## -->
				<div class="cadre_blanc">
					<img class="logo_entr" src="Images/LOGOS-hublot-2016-adr.png" />
					<h4>Lead Formateur</h4>
					<h5>Association DIVA Le Hublot<br />Août 2016 à avril 2017</h5>
					<ul>
						<li>Former des demandeurs d'emploi au métier de développeur web</li>
					</ul>
					<div class="box_gris">CDD</div><div class="box_gris">Nice (06300)</div>
					<hr />
					<div class="box_gris">PHP 7.1 & 5.*</div><div class="box_gris">Javascript</div><div class="box_gris">Html 5 / css 3</div><div class="box_gris">Jquery</div><div class="box_gris">Bootstrap</div><div class="box_gris">Algorithmie</div><div class="box_gris">SCRUM</div><div class="box_gris">POO</div><div class="box_gris">GIT</div><div class="box_gris">Linux</div><div class="box_gris">Bash</div><div class="box_gris">Java</div>
				</div>
                <!-- ################################################################## -->
				<div class="cadre_blanc">
					<img class="logo_entr" src="Images/logo_long2.png" />
					<h4>Formateur, Développeur</h4>
					<h5>Les &lt;form&gt;ations de L@nney<br />Mai 2015 à août 2016</h5>
					<ul>
						<li>Former/initier des clients à l'informatique en général</li>
                        <li>Développer les sites des clients</li>
					</ul>
					<div class="box_gris">Indépendant</div><div class="box_gris">Belvédère (06450)</div>
					<hr />
					<div class="box_gris">PHP 7.1 & 5.*</div><div class="box_gris">Javascript</div><div class="box_gris">Html 5 / css 3</div><div class="box_gris">Jquery</div><div class="box_gris">Bootstrap</div><div class="box_gris">Algorithmie</div><div class="box_gris">Laravel</div><div class="box_gris">POO</div>
				</div>
				<!-- ################################################################## -->
				<div class="cadre_blanc">
					<h4>Résponsable informatique</h4>
					<h5>Amitra Technologies<br />Février 2012 à avril 2014</h5>
					<ul>
						<li>Développer les sites des clients</li>
						<li>Gérer et maintenir le parc informatique</li>
						<li>Répondre aux questions (techniques) des clients</li>
						<li>Référencer les sites des clients qui le demandaient</li>
					</ul>
					<div class="box_gris">CDI</div><div class="box_gris">Nice (06000)</div>
					<hr />
					<div class="box_gris">PHP 5.*</div><div class="box_gris">Javascript</div><div class="box_gris">Html 5 / css 3</div><div class="box_gris">POO</div><div class="box_gris">Linux</div>
				</div>
				<!-- ################################################################## -->
				<div class="cadre_blanc">
					<h4>Webmaster</h4>
					<h5>Texinfo<br />Février 2009 à novembre 2011</h5>
					<ul>
						<li>Mettre à jour le catalogue de produits</li>
						<li>Développer de nouveaux modules pour les sites</li>
					</ul>
					<div class="box_gris">CDI</div><div class="box_gris">Cannes (06400)</div>
					<hr />
					<div class="box_gris">PHP 5.*</div><div class="box_gris">Javascript</div><div class="box_gris">Html/css</div><div class="box_gris">Ajax</div>
				</div>
				<!-- ################################################################## -->
				<div class="cadre_blanc">
					<img class="logo_entr" src="Images/gefigram.jpg" />
					<h4>Développeur Web</h4>
					<h5>Gefigram<br />Juin 2007 à août 2007<br />Mai 2008 à Septembre 2008</h5>
					<ul>
						<li>Développeur web</li>
						<li>Référenceur</li>
					</ul>
					<div class="box_gris">Stages</div><div class="box_gris">Draguignan (83300)</div>
					<hr />
					<div class="box_gris">PHP 5.*</div><div class="box_gris">Javascript</div><div class="box_gris">Html/css</div><div class="box_gris">Ajax</div><div class="box_gris">POO</div>
				</div>
				
				<!-- ################################################################## -->
				<h3><a href="http://remi-lanney.com/CV/CV-remi-lanney.pdf" target="_blank">Télécharger mon CV</a></h3>
				<h3><a href="http://remi-lanney.com/site-web/galerie-de-sites/" target="_blank">Quelques unes de mes réalisations</a></h3>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <!-- ################################################################## -->
				<h3>Formations</h3>
				<div class="cadre_blanc">
					<h4>Licence Professionnelle Système Informatique et Logiciel</h4>
					<h5>IUT Nice / Sophia Antipolis<br />Septembre 2005 à septembre 2008</h5>
					<ul>
						<li>Spécialité Programmation Web</li>
						<li>Option Multimédia</li>
						<li>Mention Bien</li>
					</ul>
				</div>
				<!-- ################################################################## -->
				<div class="cadre_blanc">
					<h4>DUT Gestion des Entreprises et des Administrations</h4>
					<h5>Université Toulon Var<br />Septembre 2002 à septembre 2004 </h5>
					<ul>
						<li>Spécialité Petites et Moyennes Organisations</li>
						<li>Mentions Bien</li>
					</ul>
				</div>
                <br />
				<h3>Compétences</h3>
				<div class="cadre_blanc">
					<h4>Développement</h4>
					<ul>
						<li>PHP<div class="notes"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div></li>
						<li>Laravel<div class="notes"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></div></li>
						<li>HTML5/CSS3<div class="notes"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div></li>
						<li>Jquery<div class="notes"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></div></li>
						<li>Ajax<div class="notes"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></div></li>
						<li>Action Script 3<div class="notes"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></div></li>
						<li>Java<div class="notes"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></div></li>
					</ul>
				</div>
				<!-- ################################################################## -->
				<div class="cadre_blanc">
					<h4>Animation et formation</h4>
					<ul>
						<li>Médiation des connaissances<div class="notes"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></div></li>
						<li>Création d'un programme<div class="notes"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></div></li>
						<li>Création de support pédagogique<div class="notes"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></div></li>
						<li>Aisance en public<div class="notes"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-full"></i></div></li>
					</ul>
				</div>
				<!-- ################################################################## -->
				<div class="cadre_blanc">
					<h4>Système d'exploitation</h4>
					<ul>
						<li>Windows<div class="notes"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></div></li>
						<li>Linux<div class="notes"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></div></li>
						<li>Mac<div class="notes"><i class="fa fa-star"></i><i class="fa fa-star-half-full"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></div></li>
						<li>Android<div class="notes"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></div></li>
					</ul>
				</div>
				<!-- ################################################################## -->
				<div class="cadre_blanc">
					<h4>Gestion</h4>
					<ul>
						<li>Tenir une comptabilité<div class="notes"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></div></li>
						<li>Développer un plan marketing<div class="notes"><i class="fa fa-star"></i><i class="fa fa-star-half-full"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></div></li>
					</ul>
				</div>
				<!-- ################################################################## -->
				<br /><h3>Loisirs</h3>
				<div class="cadre_blanc">
					<h4>Sport</h4>
					<ul>
						<li>Art martiaux</li>
						<li>Roller</li>
						<li>Natation</li>
					</ul>
				</div>
				<!-- ################################################################## -->
			</div>
		</div>
	</body>
</html>
