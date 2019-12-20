<?php $title ="Modèle Poste à Poste/Client-serveur"  ; ?>


  <?php include('header.part.php');?>
 
<div id="main-content"> 

<div role="main" class="container">

  <div class="jumbotron">
	<h1>Modèle Poste à Poste et Client/Serveur</h1>
	
	<h2>Généralité</h2>
	<p>Lorsque l'utilisteur tente d'accéeder aux informations situées sur son périphériques, qu'il s'agisse d'un PC, d'un ordinateur portable, d'un assistant numérique personnel, d'un téléphone portable ou un autre  périPhérique connecté au réseau, les données peuvent ne pas etre stockées sur ce périphéerique.</p>
	<p>Dans ce cas, une requete d'accès aux informations doit etre adressée au niveau du périphérique sur lequel résident les données.</p>
		
			<h2>Réseau Poste à Poste ou Peer to Peer (P2P) </h2>
			<p>Lorsqu'au minimum deux ordinateurs sont connectés via un réseau et peuvent partager des ressources  (par exemple des imprimantes et des fichiers) sans disposer de serveur dédié. Chaque périphérique final connecté (nommé homologue) peut opérer en tant que serveur ou en tant que client. Un ordinateur peut remplir le role de serveur pour transaction tout en servant simultanément de cliet pour un  autre ordinateur. Les roles de client et de serveur sont définis en fonction de chaque requete.</p>
		
			<p>Par exemple, un réseau domestique simple connectant deux ordinateurs qui partagent une imprimante est un réseau Peer to Peer. Chaque utilisateur peut configurer son ordinateur pour  partager des fichiers, exécuter des jeux en réseau ou partager une connexion internet.<br>
			Les réseaux Peer to Peer décentralisent les ressources sur u  réseau. Au lieu d'etre stockées sur des seveurs dédiés, ls informations à partager peuvent se situer n'importe ou sur un périphérique connecté. La plupart des systèmes des systèmes d'exploitations actuels prennet en chargent le partage des fichiers et des imprimantes sans nécessiter un logiciel serveur supplementaire. Les comptes et les droits d'accès utilisateur doivent etre définis individuellement sur chaque périphérique</p>
		
		<h2>Réseau Client/Serveur</h2>
		<p>Dans le modèle client/serveur, le périphérique demandant les informations est nommé client et celui répondant à la demande est nommé serveur. Les processus client et serveur sont considérés comme faisant partie de la couche appliaction. Le client commence l'échange en demandant des données au seveur, qui répond en envoyant un ou plusieurs flux de données au client. Outre le transfert de données effectif, cet échange peut également nécessiter des informations de contrôles, telles que l'authentification de l'utilistaeur et l'identification d'u  fichier de données à transférer </p>
		<p>
			Bien que les données soient généralement décrites comme étant transmises du serveur au client, certaines données sont toujours transmises du client au serveur. Par exemple, un client peut transférer un fichier  vers le serveur à des fins de stockage. Le transfert de données d'un client vers un serveur est désigné par le terme Téléchargement Montant (Upload) . Le transfert de données d'un serveur vers un client est désigné par le terme Téléchargement Descendant (Download) 
		</p>


  </div>

</div><!-- /.container -->

<?php include('footer.part.php');?>

</div>