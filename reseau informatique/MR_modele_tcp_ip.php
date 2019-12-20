<?php $title ="Modèle TCP/IP"  ; ?>
<?php include('header.part.php'); ?>

<main role="main" class="container">

  <div class="jumbotron">
 <section id="corps">
<div class="container">
<h1>Modèle TCP/IP</h1>

  <h2>Généralité</h2>
  <p>Même si le modèle de référence OSI est universellement reconnu, historiquement et techniquement, la norme ouverte d'internet est le protocole TCP/IP (Transmission Control Protocol/Internet Protocol). Le modèle de référence TCP/IP et la pile de protocoles TCP/IP rendent possible l'échange de données entre deux ordinateurs, partout dans le monde, à une vitesse quasi équivalent à celle de la lumière. Le rôle de la pile TCP/IP est de transférer des informations d'une unité de réseau à une autre. De ce fait, elle est énormement liée au modèle de référence OSI dans les couches inférieures et prend en charge tous les protocoles physiques et de liaison de données standard. Les couches les plus étroitement liées aux protocoles TCP/IP sont les couches 7 (application), 4 (transport) et 3 (réseau). Ces couches comprennent d'autres types de protocole ayant des fonctions et des objectifs divers qui sont tous liés au transfert d'informations.</p>
  <li>Les couches du modèle TCP/IP</li>
  <p>Le modèle TCP/IP comporte quatre couches : la couche application, la couche transport, la couche internet, la couche d'accès au réseau .
  <table border="">
  <tr>
    <th colspan="4" >
  </tr>
  <tr>
    <td> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<strong>la couche Application </strong></td>
  </tr>
  <tr>
    <td> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; <strong>la couche Transport</strong></td>
  </tr>
  <tr>
    <td> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>la couche Internet</strong> </td>
  </tr>
  <tr>
    <td> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>la couche d'Accès Réseau</strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td>
  </tr>
  </table><u>Schéma du modèle TCP/IP</u>
  </p>
  <h2>La couche application</h2>
  <p>
    Les concepteurs du modèle TCP/IP estimaient que les protocoles de niveau supérieur devaient inclure les détails des couches sessions et présentation. Ils ont simplement créé une couche application qui gère les protocoles de haut niveau. Les questions de représentation, le code et le controle dialogue. Le modèle TCP/IP regroupe en une seule couche tous les aspects liés aux applications et suppose que les données sont préparées de manière adéquate pour la couche suivante.
  </p>
  <p>
    Les protocoles de couche application TCP/IP les plus connus sont ceux permettant l'échange d'informations entre les utilisateurs. Ces protocoles spécifient les informations de format et de contrôle nécessaire à un grand nombre de fonctions courantes de communication via Internet. Voici certains de ces protocoles TCP/IP :
    <ul>
      <li type="disc">Le protocole DNS (Domain Name Service) est utilisé pour traduire les adresses internet en adresses IP. </li>
      <li type="disc">Le protocole HTTP (Hypertext Transfer Protocol) est utilisé pour transférer les fichiers qui constituent les pages Web. </li>
      <li type="disc">Le protocole SMTP (Simple Mail Transfer Protocol) est utilisé pour transférer les courriels et les pièces jointes.</li>
      <li type="disc">Le protocole TELNET, protocole d'émulation de terminal, est utilisé pour permettre un accès distant aux serveurs et aux périphériques réseau.</li>
      <li type="disc">Le protocole FTP (File Transfer Protcol) est utilisé pour le transfert intéractif de fichiers entre les systèmes; TFTP; FTP; NFS </li>
    </ul>
    <p>La couche application comprend deux formes de programmes ou processus logiciels permettant d'accéder au réseau : <strong>les applications</strong>  et <strong>services</strong>.
    
    <h4>Applications orientées réseau</h4>
    Les applications orientées réseau sont les programmes logiciels qui permettent aux utilisateurs de communiquer sur le réseau. Certaines applications destinées à l'utilisateur final sont orientées réseau, à savoir qu'elles implémentent les protocoles de couche application et sont capables de communiquer directement avec les couches inférieurs de la pile de protocoles. Les clients de messagerie et les navigateurs Web sont des exemples de ces types d'applications<br>.

    <h4>Services de couche application</h4>
    D'autre programmes peuvent nécessiter l'assistance des services de couche application (par exemple, le transfert de fichiers ou la mise d'attente de tâches d'impréssion réseau). Bien que transparents pour l'utilisateur, ces services constituent les programmes ui établissent l'interface avec le réseau et préparent les données à transférer. Différents types de doonées (texte, graphique ou vidéo) nécessitent différents services pour être correctement préparés afin d'être traiter par les fonctions s'exécutant au niveau des couches inférieures du modèle OSI.
    <p>Chaque application ou service réseau est utilise des protocoles qui définissent les normes et les formats de données à utiliser. Sans protocoles, le réseau de donnée ne disposerait d'aucune méthode commune pour formater et transmettre les données. Pour comprendre le fonctionnement des divers services réseau, il est nécessaire de connaitre les procoles sous-jacents qui régissent ces services.</p>
      
    </ul>
    </p>  
  </p>
  <h2>La couche transport</h2>

  <p>La couche transport est chargée des questions de qualité de service  touchant la fiabilité, le contrôle de flux et la correction des erreurs. L'un de ses protocoles, TCP (Transmission Control Protocol, en français protocole de contrôle de transmission), fournit d'excellents moyens de créer, en souplesse, des communications réseau fiables, circulant bien et présentant un taux d'érreurs peu élevé. La couche transport (couche 4) assure avec fiabilité et exactitude le transport et la régulation du flux d'informations depuis la source jusqu'à la destination. Ses fonctions sont les suivantes :
  </p>
  <ul>
    <li>Syncronisation des connexions</li>
    <li>Contrôle de flux</li>
    <li>Correction des erreurs</li>
    <li>Fiabilité par le biais du fenêtrage</li>
  </ul>
  <p>
    La couche transport (couche 4) permet à une unité utilisateur de segmenter plusieurs applications de couche supérieure afin de les placer dans le même flux de données de couche 4. Elle permet également à l'unité receptrice de réassembler les segments de ces applications. <br>
    La couche transport fournit également deux protocoles :
    <ul>
      <li>Le protocole TCP  : fiable et non orienté connexion, assure le contrôle de flux au moyen de fenêtres glissantes et fournit des numéros de séquence et des accusés de réception. Ce protocole présente l'avantage de garantir la transmission des segments.</li>
      <li>Le protocole UDP : est non orienté connexion et non fiable. Bien que chargé de la transmission des méssages, il n'exécute aucune vérification logicielle sur l'acheminement des segments au niveau de cette couche. L'avantage de ce protocole est sa vitesse</li>

    </ul>

  </p>
  <h2>La couche internet</h2>
  <p>
    <p>Le rôle de la couche Internet consiste à envoyer ces paquets source à partir d'un réseau quelconque de l'inter réseau et à les faire parvenir à déstination, indépendamment du trajet et des réseaux traversés pour y arriver. Le protocole qui régit cette couche est appélé protocole IP (Internet Protocol). L'identification du meilleur chemin et la communutation de paquets ont lieu au niveau de cette couche. Chaque couche est chargée de transporter des paquets sur un réseau au moyen d'un adressage logiciel.</p>
  </p>
  <p>
    Plusieurs protocoles sont exécutés dans la couche Internet TCP/IP : 
    <ul>
    <li>Le protocole IP : assure un routage de datagrammes.</li>
    <li>Le protocole ICMP fournit des fonctions de contrôle et de messagerie</li>
    <li>Le protocole ARP : détermine l'adresse de couche liaison de données pour les adresses IP connues.</li>
    <li>Le protocole RARP : détermine les adresses réseau lorsque les adresses de couche liaison de données sont connues.</li>
    </ul>
  </p>
  <h2>La couche d'accès au réseau</h2>
  <p>Le nom de cette couche a un sens large et peut parfois prêter à confusion. On lui donne également le nom de couche hôte-réseau. Cette couche se charge de tout dont un paquet IP a besoin pour établir une liaison physique, puis une autre liaison physique. Cela comprend les détails sur les technologies LAN et WLAN, ainsi que tous les détails dans les couches physqiues et liaison de données du modèle.
</p>
</div>
</section> 
    


  </div>

</main><!-- /.container -->
<?php include('footer.part.php');?>