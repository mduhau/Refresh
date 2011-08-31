<?php

/*
	Plateforme web PPR - outil de crowdwourcing
	Copyright(C) 2011 Nicolas SEICHEPINE

	This file is part of PPR.
	
	PPR is free software: you can redistribute it and/or modify
    it under the terms of the GNU Affero General Public License as
    published by the Free Software Foundation, either version 3 of the
    License, or (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU Affero General Public License for more details.

    You should have received a copy of the GNU Affero General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
	
	Contact : contact_ppr@seichepine.org
*/

include_once("tool.php");

function about_nouvelingenieur()
{
	echo('

	<h1><img src="rep_img/nouvelingenieur.jpg" alt="Nouvel Ing&eacute;nieur" /></h1>

	<h2>Le Nouvel Ing&eacute;nieur</h2>

	<p>
		<a href="http://www.nouvelingenieur.fr/">Le Nouvel Ing&eacute;nieur</a>, partenaire de Ponts ParisTech Refresh, 
		est un mouvement national lanc&eacute; d&eacute;but 2011 par deux &eacute;l&egrave;ves-ing&eacute;nieurs ENAC, et qui vise &agrave; adapter 
		et faire &eacute;voluer la formation d\'ing&eacute;nieur, notamment gr&acirc;ce aux contributions des &eacute;l&egrave;ves en &eacute;cole.
		L\'association, qui compte d&eacute;sormais une dizaine d\'&eacute;tudiants, dont deux Ponts, a lanc&eacute; une r&eacute;flexion &agrave; 
		l\'&eacute;chelle nationale et cherche maintenant &agrave; s\'&eacute;tendre &agrave; de nouvelles &eacute;coles d\'ing&eacute;nieurs. Mais 
		avant d\'&ecirc;tre une association, le Nouvel Ing&eacute;nieur est un &eacute;tat d\'esprit : rejoignez la 
		<a href="http://www.facebook.com/LeNouvelIngenieur">page facebook</a>, 
		<a href="http://www.picbadges.com/nouvel-ingenieur/1560081/?ref=wdgt2">arborez le badge du Nouvel Ing&eacute;nieur</a> et 
		faites avancer <a href="http://www.google.com/moderator/#16/e=4cc65">le d&eacute;bat</a>, qui pourra alimenter Ponts ParisTech Refresh !
	</p>

	');
}

function about_ppr()
{

	$to_print='

	<h1>Bienvenue sur Ponts ParisTech Refresh</h1>

	<p>
		Ce site a pour but de se faire la voix des &eacute;l&egrave;ves de l\'&Eacute;cole des Ponts ParisTech aupr&egrave;s de 
		l\'administration, afin d\'accompagner le changement dans notre &Eacute;cole. Les &eacute;l&egrave;ves &eacute;tant amen&eacute;s &agrave; 
		occuper des postes &agrave; responsabilit&eacute; au c&oelig;ur d\'un monde &eacute;conomique en mouvement, qu\'ils d&eacute;couvrent 
		d&eacute;j&agrave; lors de la scolarit&eacute;, ils sont tout &agrave; fait &agrave; m&ecirc;me  de se faire force de proposition concernant 
		la scolarit&eacute; et la vie aux Ponts. Le code de la plateforme est libre et disponible <a href="./sourcecode/sourcecode.7z">ici</a>. Vous pouvez 
		
	';

	if (user_privilege_level()>0)
	{
		$to_print.='<a href="mailto:ponts_refresh@enpc.org">nous contacter</a>';
	}
	else
	{
		$to_print.='nous contacter';
	}

	$to_print.=' 

		si vous &ecirc;tes int&eacute;ress&eacute;s, rejoindre notre <a href="http://www.facebook.com/pages/Ponts-ParisTech-Refresh/207608979259601">page facebook</a> pour rester au courant de l\'avancement du projet ou vous inscrire pour participer.
		
	</p>

	<h2>Le projet et l\'&eacute;quipe</h2>

	<p>
		Le projet Ponts ParisTech Refresh a &eacute;t&eacute; lanc&eacute; en mars 2011 sur les traces de 
		<a href="http://www.facebook.com/pages/T%C3%A9l%C3%A9com-Refresh-La-bo%C3%AEte-%C3%A0-id%C3%A9es-de-T%C3%A9l%C3%A9com-ParisTech/108679235875881">Telecom Refresh</a>, un projet similaire lanc&eacute; &agrave; Telecom ParisTech et couronn&eacute; de succ&egrave;s. 
		L\'&eacute;quipe du projet est constitu&eacute;e de :
	</p>
	
	<ul>
		<li>Pierre Simonnin \'011</li>
		<li>Alexandre Combessie \'012</li>
		<li>Nicolas Seichepine \'011</li>
		<li>Sylvain Durand \'012</li>
		<li>Antoine Derch&eacute; \'011</li>
		<li>Thibault Duchemin \'013</li>
		<li>Roshan Valecha \'013</li> 
	</ul>
	';

	echo($to_print);

}

function display_userterms()
{
	echo('<h1>Conditions d\'utilisation :</h1>
		<p>
En m\'inscrivant &agrave; ce service gratuit fourni pas les &eacute;l&egrave;ves de l\'&eacute;cole des
Ponts ParisTech, je m\'engage :
</p>
<ul>
<li>A consid&eacute;rer cette plateforme d\'&eacute;change comme interne &agrave; l\'&eacute;cole,
et par cons&eacute;quent &agrave; ne pas faire mention de tout ou partie des d&eacute;bats,
id&eacute;es, votes et document pr&eacute;sents sur la plateforme &agrave; toute personne, hors
&eacute;l&egrave;ves, enseignants, chercheurs et personnel administratif de l\'&eacute;cole des
Ponts ParisTech ;</li>

<li>A ne pas reproduire (t&eacute;l&eacute;chargement, impression, copie d\'&eacute;cran,
copie manuelle...) tout ou partie des documents disponibles en consultation
sur la plateforme, et &agrave; ne pas en divulguer le contenu ;</li>

<li>A garder en toute occasion une attitude constructive, digne et
respectueuse lors des &eacute;changes sur cette plateforme, et en particulier &agrave; ne
jamais prof&eacute;rer d\'insultes, d\'incitations &agrave; la haine ou &agrave; la discorde, ou &agrave;
formuler des critiques gratuites sans argument ni proposition ;</li>

<li>A ne jamais cibler ou mentionner dans une proposition ou un
commentaire une personne interne ou externe &agrave; l\'&eacute;cole par son nom, son
pr&eacute;nom ou sa fonction, si ce n\'est pour faire &eacute;tat d\'une bonne pratique
existante ;</li>

<li>A signaler tout comportement ne respectant pas les pr&eacute;sentes
conditions.</li>
</ul>
<p>
Tout non-respect de cette charte entra&icirc;nera une radiation imm&eacute;diate de la
plateforme, et sera passible de sanctions disciplinaires.

Il est rappel&eacute; aux &eacute;l&egrave;ves de l\'&eacute;cole que cette plateforme est g&eacute;r&eacute;e par les
&eacute;l&egrave;ves pour les &eacute;l&egrave;ves, et qu\'ils sont les seuls &agrave; y avoir acc&egrave;s. Les
pr&eacute;sentes conditions correspondent aux r&egrave;gles de biens&eacute;ance n&eacute;cessaires &agrave; un
d&eacute;bat serein et constructif et au maintien de l\'int&eacute;grit&eacute; morale et de la
r&eacute;putation des personnes concern&eacute;es, tant &eacute;l&egrave;ves qu\'enseignants, chercheurs
ou personnels administratifs.</p>
<p>

L\'&eacute;quipe Ponts ParisTech Refresh

		</p>');
		
	if (isset($_GET['allow_direct_accept']) && $_GET['allow_direct_accept']="true")
	{
		echo('<a href="?action=accept_cgu">En cliquant sur ce lien, j\'accepte les conditions susmentionn&eacute;es</a>');
	}
}

?>