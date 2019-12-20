<?php $title ="Matériel réseau"  ; ?>
<?php include('header.part.php');?>



<main role="main" class="container">

  <div class="jumbotron">
  <section id="corps">
<div class="container">
<h1 class="jumbotron-heading">Matériel réseau</h1>

  <h2>La carte réseau</h2>
  <p>
    La carte d'interface réseau raccorde physiquement le réseau et la station de travail. La plupart des cartes réseau sont internes, avec la carte dans un slots d'extension de l'ordinateur. Certains ordinateurs tels que les ordinateurs Macintosh, utilisent des boites externes qui sont attachés à un port série ou à un port SCSI. Les ordinateurs portables utilisent généralement des adapteurs externes reliés au port parallèle ou dans un slot PCMCIA. Les cartes réseau jouent un rôle déterminant dans la vitesse et la performance d'un réseau. Il faut utiliser une carte réseau, la plus rapide possible.
    <a href="cart_r.jpg">Télécharger image carte réseau</a>
    
  </p>
  <p>
    Les cartes Ethernet sont habituellement achetées isolément de l'ordinateur bien que de nombreux que de nombreux constructeurs proposent une option pour une carte préinstallée. Les cartes Ethernet disposent de connecteurs adaptés aux câbles : <ul>
      <li>Si elle est conçue pour le câble coaxial, le raccordement sera BNC;</li>
      <li>Si elle est conçcue pour la paire torsadée, il aura un connecteur RJ-45</li>
    </ul>
    Quelques cartes disposent aussi d'un connecteur AUI ou FX pour la fibre optique.
  </p>
  <p>
    Pour que la carte résaeu insérée dans l'ordinateur puisse être utilisée par le système d'exploitation de l'ordinateur, il faut installer sur l'ordinateur un logiciel spécial appelé pilote. C'est un logiciel qui permet à un périphérique et au système d'exploitation de communiquer entre eux. Chaque carte réseau et chaque système d'exploitation nécessitent un pilote spécial. Les pilotes ne sont pas interchangeables. Pour pouvoir faire fonctionner une carte réseau sur un ordinateur, il faut également ajuster un certain nombre de paramètres sur cette carte. Certains systèmes d'exploitation sot capables de configurer automatiquement les cartes réseau.
  </p>
  <h2>Concentrateur</h2>
  <p>
    Un concentrateur ou hub est un système de connexion centralisé où se rejoignet tous les câbles d'un réseau. Un hub est destiné à connecter des équipements de 10 Mbits/s. Il est caractérisé par son débit. Quand plusieurs ordinateurs accèdent simultanément au réseau, le débit est partagé par tous les ordinateurs. On distingue deux types de hubs : le hub passif et le hub actif. <ul>
      <li>Un hub passif</li>
      <p>
        Il se contente d'assurer les connexions, il partage le débit entre tous les postes connectés.
      </p>
      <li>Un hub actif</li>
      <p>
        Il possède un électronique capable de traiter les signaux pour amplifier le signal, détecter automatiquement les erreurs et surtout conduire l'information vers le poste qui en a besoin et non vers tous les postes. On parle encore de hub switché ou commutateur. Il peut être équpé d'un module de gestion, on peut alors effectuer des mesures de traffic et d'erreurs. Le commutateur devient indispensable dès qu'un grand nombre de machines sont connectés sur le réseau. Un hub switché permet à un ordinateur d'avoir une communication privée avec le hub qui dirige la requête de l'ordinateur sur une partie du réseau : cela améliore les performances du réseau qui est moins encombré.
      </p>
    </ul>
    
  <h2>Répéteur</h2>
  <p>
    Un répéteur est un connecteur spécial qui a pour rôle de faire poursuivre les signaux transmis sur un réseau en empêchant toute perte de signal. Le répéteur sert à amplifier le signal qu'il reçoit, puis à le faire suivre le long du câble. Une fois amplifié, le signal peut parcourir une distance plus longue. Les répéteurs filtrent généralement les distorsions et les parasites avant d'amplifier et de faire suivre le signal. On parle alors de régénération du signal.<ul>
      <li>Avantages : Un répéteur n'a pour autre fonction que de répercuter tout trafic d'un bout à l'autre. Certains répéteurs sont capables de connecter deux segments avec un câblage différent : paire torsadée et brin de fibre optique, mais aussi de gérer des méthodes d'accès différents. Néanmoins, il est obligatoire de n'utiliser un répéteur que lorsque les réseaux locaux ont le même espace d'adressage. Les répéteurs travaillent au niveau de la couche physique.</li>
    </ul>
  </p>
  <h2>Multiplexeur</h2>
  <p>
    Un multiplexeur est un système de réseau qui permet de combiner différents types d'informations pour leur faire emprunter un même support de transmission simultanément. Les réseaux peuvent servir à transférer différents types d'informations, des données vocales, vidéo ou informatiques par exemple. Chaque type d'information nécessite une méthode de transport différente. Sur beaucoup de réseaux, une même connexion sert à relier plusieurs parties du réseau. Pour transférer ces différents types d'informations simultanément par l'intermédiaire d'une même connexion, il faut combiner ces informations en un seul et même signel. Cette opération est généralement prise en charge par un multiplexeur qui envoie ensuite le signal ainsi générer à son destinataire. Lorsque le signal combiné parvient à l'autre bout de la connexion, un autre multiplexeur, appelé, démultiplexeur, doit séparer les informations qui ont été combinées pour les rendre exploitables pour l'ordinateur de destination.
  </p>
  <h2>Ponts</h2>
  <p>
    Un pont est un appareil qui permet aux ordinateurs d'un réseau de petite taille ou aux différentes parties d'un réseau plus important d'échanger des informations. Il permet de relier des réseaux isolés pour leur permettre de fonctionner ensemble sous la forme d'un grand réseau. Il est également possible de subdiviser un réseau surchargé en parties plus petites. Les ponts améliorent les performances des réseaux qu'ils séparent en ne faisant suivre les informations à un réseau donné que lorsque c'est nécessaire. Ils déterminent si les informations à transmettre doivent rester au sein du même réseau. Pour pouvoir filtrer et transférer éfficacement les informations, chaque pont doit connaitre l'adresse de chaque ordinateur du réseau. Les ponts intélligents sont capables de déchiffrer et mémoriser l'adresse de chaque ordinateur qui envoie des informations d'un réseau à un autre . Les ponts ne pouvant en aucun cas modifier les informations transmises, ils ne permmettent de relier que des réseaux de même type.
  </p>
  <h2>Routeurs</h2>
  <p>
    Un routeur est un équipement qui permet de relier différents réseaux les uns aux autres. Il a pour rôle de diriger ou router les informations dans la direction appropriée. Certains routeurs sont capables de détecter automatiquement qu'une partie du réseau ne fonctionne plus ou est ralentie et contourner la zone à problème. Les routeurs capables d'identifier l'itinéraire le plus approprier sont souvent qualifiés de routeurs intélligents.
      <h4>Configuration d'un routeur</h4>
      <p> Pour faire fonctionner un routeur, il faut généralement lui commuiquer un certain nombre d'informations telles que le type de chaque réseau connecter au routeur. Beaucoup de routeur permettent de brancher directement un ordianateur pour entrer ces informations.</p>
      <p>
        Un routeur doit analyser les inforamtions qui le traversent pour identifier leur nature et déterminer ce qu'il doit faire. Le traitement des informations peut ralentir le réseau si le routeur n'est pas suffisamment performant. Les routeurs sont généralement équipés d'un processeur très puissant qui permet de ne pas ralentir le réseau. La plus part des routeurs sont capables de déterminer automatiquemet l'itinéraire le plus adapté. Avec les premiers modèles de routeurs qualifiés de statiques, l'administrateur système devrait configuerer manuellement chacun des itinéraires susceptibles d'être empruntés par les informations. Les nouveaux modèles de routeurs, qualifiés de dynamiques sont capables de détecter automatiquement les différents itinéraires possibles.
      </p>
    
  </p>
  <h2>Passerelle</h2>
  <p>
    Une passerelle est une interface qui permet de relier, de faire passer des informations sur des réseaux de types différents. Ainsi est-il possible d'utiliser une passerelle pour transferer des informations entre un réseau de Macintosh et un réseau de PC. Une passerelle se présente sous la forme d'un concentrateur relié physiquement au réseau et utilisé comme une interface pour transférer les informations entre les différents réseaux. Elle peut également se présenter sous la forme d'un logiciel conçu pour permettre à deux protocoles différents d'échanger des informations sur un même réseau. Lorsqu'un réseau ne parvient pas à reconnaitre la destination des informations, il transmet ces informations au réseau suivant en utilisant une passerelle par défaut. Les passerelles par défaut sont extrêmement utilisés sur les réseaux TCP/IO tels que l'internet. <ul>
      <li>Avantages des passerelles : Elles sont économiques à l'utilisation et ne rajoutent pas le trafic sur les lignes du réseau. Elles sont souvent utilisées pour les messageries.</li>
      <li>Inconvénients : Elles peuvent être lentes, elles sont coûteuses.</li>
    </ul>
  </p>
  <h2>Modem</h2>
  <p>
    Les modem (modulateur-démodulateur) permettent aux ordianteurs d'échanger des données par l'intemédiaire du réseau téléphonique. Le modem émetteur à pour rôle de convertir les données de l'ordinateur pour les rendre transmissibles par le biais d'une ligne téléphonique. Le modem récepteur à pour rôle de convertir les signaux qu'il reçoit de la ligne téléphonique en informations exploitbles pour l'ordinateur. Les nouveaux ordinateurs sont généralement livrés en standart avec un modem. Les modem peuvent utiliser les lignes téléphoniques existantes pour véhiculer les données. Ce procédé comporte deux étapes : <ul>
      <li>L'intérieur de l'ordinateur utilise un format parallèle, alors que les données sont envoyés bit à bit;</li>
      <li>Les données quittant l'ordinateur sont converties dans le format "série" par les circuits d'interface et entrent dans un modem. Des nombreux circuits d'interface série utilisent la norme RS-232C. Les circuits internes du modem reçoivent les donées dans le format "série" et génèrent des signaux qui peuvent être envoyés sur des lignes téléphoniques. </li>
    </ul>
    <h4>Interface RS-232C</h4>
    <p>
      L'ordinateur conserve avec le modem par une interface RS-232C. La liaison RS-232C est une interface série, cea signifie que l'ordinateur n'envoie ou ne reçcoit qu'un seul bit de données à un instant donné. Dans un système utilisant un modem, il transite trois différents formats de données. Premièrement, les données "parallèles" sont converties au format "série" RS-232C. Ensuite, le signal numérique RS-232C est converti en signal "analogique" pour être traité par le système téléphonique.
    </p>
    <p>
      Une ligne téléphonique peut établir une liaison permanente entre les bureaux d'une entreprise entre deux modem. On parle alors de ligne dédiée. Les modem transfèrent les données beaucoup moins rapidement que les autres systèmes de mise en réseau. Les modem les plus rapides ne permettent pas de dépasser un débit de 56 kbit/s. Les modem sont des outils de bon marché, faciles à installer et à configurer.
    </p>
  </p>
  <h2>Boitier RNIS</h2>
  <p>
    Les boitiers RNIS (réseau à intégration de service) permettent aux ordinateurs d'échanger des données par l'intermédiaire du réseau téléphonique RNIS, également appelé réseau téléphonique numérique. Le boitier RNIS ressemblent à des modems, mais ils transmettent les informations beaucoup plus rapidement. Pour pouvoir utiliser un boitier RNIS, il faut impérativement disposer d'une ligne téléphonique RNIS, également appelée accès RNIS. Avant de pouvoir être transferer d'un ordinatuer à une ligne téléphonique RNIS, les informations doivent être converties par le boitier RNIS émetteur et l'inverse du côté du boitier récepteur pour pouvoir être être utiliser par l'ordinateur auquel elles sont destinées.
  </p>
  <h2>Périphérique d'accès</h2>
  <p>
    Un utilisateur domestique interconnecte généralement des périphériques sans fil à l'aide d'un petit routeur sans fil intégré. Ce petit routeur intégré sert tout à la fois de :<ul>
      <li>Point d'accès : ils fournissent l'accès fil 802.11</li>
      <li>Commutateur : ils jouent le rôle de commutateur Ethernet 10/100/1000, à quatre ports et bidirectionnel simultané, pour les périphériques filaires connectés.</li>
      <li>Routeur : ils offrent une passerelle par défaut pour la connexion à d'autres infrastructures de réseau. Un routeur domestique est un point d'accès autonome, car l'ensemble de la configuration de ce pont d'accès se trouve sur le périphérique.</li>
    </ul>
  </p>
</p>
</div>
</div>
</section>
    


  </div>

</main><!-- /.container -->
<?php include('footer.part.php');?>

