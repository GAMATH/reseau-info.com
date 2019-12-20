
<?php $title ="Architecture réseau"  ; ?>
<?php include('header.part.php'); ?>

<main role="main" class="container">

  <div class="jumbotron">
  	 	
<div class="container">
<h1>Architecture réseau</h1>
	<p>
		Une architecture de réseau determine comment les ordinateurs et les périphériques d'un réseau procèdent pour transférer les données sur le support de transmission. Elle détermine également comment les informations circulent au sein de la structure du réseau suivant que le réseau est configré en bus, en étoile ou en anneau. Les compsants d'un réseau (matériel, logiciel et support) sont conçus pour fonctionner avec une architecture de réseau précise.
	</p> 
	<h2>Ethernet</h2>
	<p>
		Le nom Ethernet vient du fait que le système amène des bits de données à toutes les stations, comme le "luminiferous ether", un système qui propagent des ondes électromagnétiques dans l'espace. Le mode d'accès au support Ethernet est le CSMA/CD. C'est le protocole des réseaux locaux à commutation de paquets, c'est un média de transmission de broadcast. C'est une technique de gestion des conflits qui essaie d'éviter les conflits et les utilisent comme une méthode d'attribution du canal.<br><br>
		CS = Carrier Sense : capacité d'une station à détecter tout trafic sur le canal (écouter avant de parler);
		<br>
		<br>
		MA = Multiple Access : chaque station a potentiellement accès au canal lorsqu'elle a besoin d'émettre, mais il faut que le canal soit libre;
		<br>
		<br>
		CD = Collision Detection : c'est une capacité d'une station à détecter le changement de niveau d'énergie et l'interpréter comme une collision.
	</p>
	<p>
		Une collision se présente lorsque deux machines émettent en même temps sur un média. Pour contrer la collision, un système utlisant le CSMA/CD peut-être dans un des trois états suivants :<ul>
			<li>En transmission</li>
			<li>En attente</li>
			<li>En contention</li>
		</ul>
		De cette façon, une machine sait quand envoyer des données sur un réseau. Dans de gros réseau, pour régler le problème de collision, l'alternative est de de diminuer les domaines de collisions en de petites parties séparées grâce au routeur ou dests.<br>
		L'architecture Ethernet est généralement utilisée pour la topologie en bus ou en étoile.
		</p>
	</p>
	<h2>Token Ring</h2>
	<p>
		Le Token Ring est l'architecture d'un réseau de transmission en anneau par une succession de liaisons point-à-point. L'architecture d'un réseau Token Ring commence par un anneau physique. Cependant dans sa mise en oeuvre les stations sont connectées à un concentrateur appelé Multistation Acess Unit (MAU). Le MAU est le coeur du réseau Token Ring. Chaque MAU a deux prts spéciaux marqués RING IN et RING OUT. Ces ports sont seulement utilisés pour interconnecter des MAU et non les PC, imprimantes ou autres équipements. Les réseaux Token Ring utilisent une topologie en anneau pour le réseau logique et une combinaison des topologies étoile et anneau pour la disposition physique du réseau. Chaque combinaison des topologies étoile et anneau pour la disposition physique du réseau. Chaque câble entre le MAU et la carte réseau du noeud est constitué de deux (2) paires : une paire qui transporte le signal transmis de la carte au MAU et une seconde qui transporte le signal reçu du MAU à la carte.
	</p>
	<p>
		La méthode d'accès au support mise en oeuvre est le passage du jeton dans l'anneau. Une station appelée le moniteur actif génère une trame spécial jeton et le transmet sur le réseau. Le prochain noeud reçoit le jeton : si cette station a des données à transmettre, il capture le jeton et commence à envoyer ses données. La station peut continuer à émettre jusqu'à ce qu'un compteur temporel, appelé Token Rolding Timer expire. Ce compteur est déclanché quand le jeton est capturé, il est de l'ordre de 10 ms. Un jeton est géré par toutes les stations qui coopèrent sur l'anneau. A un instant donné, le jeton est soit libre soit occuper.
	</p>
	<h2>ARC Net</h2>
	<p>
		Comme l'architecture Token Ring, l'architecture ARC Net utilise un jeton pour contrôler le flux d'informations qui transite sur le réseau. Si l'ordinateur souhaite transmettre il doit attendre d'avoir le jeton en sa possession. Les ordinateurs de ARC Net sont numérotés en ordre séquentiel et le jeton passe d'un ordinateur à l'autre dans cet ordre.
	</p>
	<p>
		Les réseaux ARC Net sont organisé en étoile, dont le centre est occupé par un concentateur. Les résaeux ARC Net utilisent généralement du câble coaxial comme support de transmission et la vitesse des informations peut atteindre 2,5mbps. La nouvelle architecture ARC Net appelée ARC NET PLUS permet d'atteindre des vitesses de 20mbps.
	</p>
	<h2>FDDI (Fiber Distributed Data Interface)</h2>
	<p>
		Le FDDI est un anneau à jeton à détection et correction d'erreurs. Il s'agit d'une paire d'anneaux (l'une primaire, l'autre permettant de rattraper les erreurs de la première et dite secondaire). C'est là que l'anneau secondaire prend son imporatnce. Le jeton circule entre les machines à une très grande vitesse. Si celui-ci n'arrive pas au bout d'un certain délai, la machine considère qu'il y a une erreur sur le réseau. L'architecture FDDI ressemble de près à celle de Token Ring, à la différence près que :<ul>
			<li>Un ordinateur faisant partie d'un réseau peut aussi être relié à un concentrateur MAU d'un second réseau. On parle de système bi-connecté (DAS = station à connection double); </li>
			<li>Le média utilisé est la fibre optique</li>
		</ul>
	</p>
</p>
 



</div>

    


  </div>

</main><!-- /.container -->
<?php include('footer.part.php');?>