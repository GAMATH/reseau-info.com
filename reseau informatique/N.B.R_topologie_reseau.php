<?php $title ="Topologie réseau"  ; ?>


  <?php include('header.part.php');?>
 
<div id="main-content"> 

<div role="main" class="container">

  <div class="jumbotron">
	<h1>Topologies des réseaux</h1>
	
	<h2>Généralité</h2>
	<p>
		La topologie d'un réseau (également appelé structure d'un réseau), indique comment le réseau doit être conçu un réseau et organisé tant au niveau physique qu'au niveau logique.<br>
		Le niveau physique correspond aux éléments matériels tels que les ordinateurs, les cables et les connecteurs qui constituesnt le réseau c'est à ce niveau que l'on détermine :<ul>
		<li>A quel endroit les différents ordinateurs doivent être placer</li>
		<li>Comment les différents composants du réseau doivent être reliés les uns aux autres.</li>
	</ul>
		Le niveau logique détermine comment les informations doivent circuler au sein du réseau. Les quatre (4) formes de structure de réseau les plus utilisées sont les topologies (structures):<ul>
		<li>En bus</li>
		<li>En étoile</li>
		<li>En anneau</li>
		<li>Hybride</li>
	</ul>
	</p>
	
		
			<h2>Topologie en bus</h2>
			<p>Dans cette topologie, les machines sont reliées par un câble coaxial (le bus) et chaque ordinateur est connecté en série sur le bus, on dit encore qu'il forme un noeud. Les informations envoyées à partir d'une station sont transmises l'ensemble du bus à toutes les stations. L'information circulant sur le réseau (la trame) contient l'adresse de déstination et c'est aux stations de reconnaître les informations qui leur sont déstinées.</p>
			<p> Les stations ne peuvent émettre qu'à tour de rôle.Quand deux stations émettent simultanément, ensemble, il y'a collision. En effet cette méthode de communication est la principale caractéristique des Ethernet. Pour empêcher le signal de rébondir aux extrémités, on place un composant appelé bouchon de terminaison (terminator), afin d'absorber les signaux qui se sont perdus.</p>
			<p>Dans cette architecture, le débit est limité à 10 mbps. On ne pourra pas installer sur le câble plus de 30 mâchine. La limitation du débit à 10mbps est son principale inconvénient, alors que les données à partager sont de plus en plus important (images, sons, vidéos). D'autre part, en cas de rupture du câble commun, le réseau sera hors service car il y'a rebond du signal qui va provoquer la saturation </p>
			<h2>Topologie en bus</h2>
			<p>La connexion point à point concerne maintenant la majorité des réseaux, on parle de topologie en étoile. Les noeuds du réseau sont tous reliés à un noeud central, un hub(commutateur), un switch (commutateur), au centre de l'étoile. Le câble qui relie les machines au hub comporte en général 4 paires torsadés et se termine par des connecteurs nommés RJ 45. Les câbles en paires torsadées supportent un débit de 100 mbps et des hubs sophestiqués, les commutateurs peuvent diriger la trame directement â son déstinataire. </p> Les hubs peuvent être connecter entre eux (cascades) et plusieurs serveurs peuvent cohabiter sur le même réseau.
			<p>Cette topologie facilte donc une évolution hiérachisée du matériel. Dès qu'un port est libre sur le concentrateur, on peut ajouter un ordinateur au réseau en étoile. Il n'ya pas à éteindre le réseau pour éffectuer cet ajout. Lorsqu'il survient u  problème sur un ordinateur ou sur un câble du réseau en étoile, le reste du réseau n'est pas affecté. Beaucoup de concentrateurs sont capables de détecter les problèmes et d'isoler les segments à problème du reste du réseau. </p>
			<p>Lorsque c'est le concentrateur qui est défectueux, les informations ne peuvent plus circuler d'un ordinateur à un autre. Cette topologie utilise beaucoup de câble dans la mesure où chaque ordinateur doit être relié au concentrateur indépendamment. </p>
			<h2>Topologie en anneau</h2>
			<p>Les ordinateurs sont disposés en anneau et reliés les uns aux autres par un même câble circulaire interrompu. Les réseaux en anneau n'ont ni début ni fin. Sur un réseau en anneau, les informations ne circulent que dans un sens. Lorsqu'un ordinateur reçoit des informations qui ne lui sont pas destinées, il les fait suivre automatiquement à l'ordinateur auquel elles sont destinées.</p>
			<p>Les réseaux en anneau sont généralement plus difficile à agrandir que les autre types de réseau. Pour ajouter un ordinateur il faut intérrompre le câble pour intercaler le nouvel ordinateur. Le résaeu n'est plus opérationnel pendant toute cette opération </p>Lorsqu'un réseau en anneau est en panne, tous les ordinateurs situés avant l'interruption peuvent continuer à échanger des informations, ceux situés après en revanche ne peuvent plus communiquer.
			<p>Beaucoup de réseaux en anneau sont en fait constitués de 2 anneau qui leur permettent de faire circuler des informations dans les 2 sens afin de limiter les risques de pertubations de trafic en cas d'incident</p>
			h2>Topologie hybride</h2>
			<p>La topologie de réseau en hybride est un mélange de différentes structures(topologie) de réseau. Il peut à la fois reposer sur des  structures en anneau, en étoile et en bus. Une structure hybride est généralement difficile à administrer et nécessites des informations des fonctions de sécuristions très sophestiquée.</p>
			<h2>Les réseaux centralisés</h2>
			<p>Sur un réseau centralisé, les ressources principales telles que les serveurs de fichiers sont rassemblés en un même endroit. Les réseaux centralisés sont plus faciles à administrer et à protéger contre les risques de vol et d'incendie. Il est impératif de sauvegarder régulièrement l'ensemble des fichiers stockés sur un réseau. Le matériel des réseaux centralisés  est conçu pour éffectuer des traitements pariculièrement intensifs. Il est donc plus puissant. Ainsi les disques durs utilisés sur les serveurs de fichiers sont généralement plus rapides. L'inconvénient sur les réseaux centalisés c'est que le moindre incident au niveau d'un serveur peut handicaper de nombreux utilisateurs. Certains adminstrateurs créent une copie du serveur principal, appelée miroir, faisant office de serveur de secours.</p>
			<h2>Les réseaux distribués</h2>
			<p>Sur un réseau distribué, les fonctions les plus importantes telles que les serveurs de fichiers et d'impréssion sont dispersées au sein du réseau. Les réseaux distribués peuvent utiliser la puissance de traitement de plusieurs ordinateurs simultanément pour réaliser une série de tâches.</p>
			Si un réseau a été conçu pour traiter les informations d'une base de données, il pourra s'appuyer sur plusieurs ordinateurs pour traiter ces informations. Un ordinateur pourra par exemple traiter  les informations et un autre pourra imprimer et un dernier imprimer les résultats.
			<p>Les résultats distribués sont parfois extrêmement complexes à administrer. Il est souvent difficile de sauvegarder les données d'un réseau distribué. Les ordinateurs reliés à un réseau distribué possèdent souvent leur propre système de sauvegarde; Les réseaux distribués sont relativement fiables. Lorsqu'il survient un incident au niveau d'un ordinateur, il n'affecte souvent qu'un petit nombre d'utilisteurs.</p>
  



  </div>

</div><!-- /.container -->

<?php include('footer.part.php');?>

</div>