<?php $title =" Encapsulation de données"  ; ?>
<?php include('header.part.php'); ?>
<main role="main" class="container">

  <div class="jumbotron">
  <section id="corps">
<div class="container">
  <h1>Encapsulation des données</h1>

  <p>
    Le modèle TCP/IP décrit la fonctionnalité des protocoles qui constituent la suite de protocoles TCP/IP. Ces protocoles, qui sont implémentés sur les hôtes émetteurs, interagissent pour fournir une livraison de bout d'application sur un réseau.
  </p>
  <p>
    Un processus de communication complet comprend ces étapes : 
    <ol>
      <li>Création de données sur la couche application du périphérique final d'origine.</li>
      <li>Segmentation et encapsulation des données lorsqu'elles descendent la pile de protocole dans le périphérique final source.</li>
      <li>Génération des données sur les supports au niveau de la couche d'accès au réseau de la pile</li>
      <li>Transport des données via l'inter réseau, qui est constitué de supports et de n'importe quels périphériques intermédiaires</li>
      <li>Réception des données au niveau de la couche d'accès au réseau du npériphérique final de destination</li>
      <li>Décapsulation et assemblage des données lorsqu'elle remontent la pile dans le périphérique de déstination</li>
      <li>Transmission de ses données à l'application de destination, au niveau de la couche application  du périphérique final de destination</li>
    </ol>
  </p>
  <p>
    Lorsque les données d'application descendent la pile de protocoles en vue de leur transmission sur le support réseau, différents protocoles ajoutent des informations à chaque niveau. Il s'agit du processus d'encapsulation.
  </p>
  <p>
    La forme qu'emprunte une donnée sur n'importe quelle couche est appelée unité de donnée de protocole (PDU). Au cours de l'encapsulation, chaque couche suivante encapsule l'unité de données de protocole qu'elle reçoit de la couche supérieure en respectant le protocole en cours d'utilisation. A chaque étape du processus, une unité de données de protocole possède un nom différent qui reflète sa nouvelle apparence. Bien qu'il n'existe aucune convention d'attribution de noms universelle pour les unités de données de protocole, dans ce cours , les unités de données de protocoles sont nommées en fonction des protocoles de la suite TCP/IP.
    <ul>
      <li>Données : terme général pour les unités de données de protocole utilisées au niveau de la couche application</li>
      <li>Segment : unité de données de protocole de la couche transport</li>
      <li>Paquet : unité de données de protocole de la couche inter réseau</li>
      <li>Trame : unité de données de protocole de la couche d'accès au réseau</li>
      <li>Bits : unité de données de protcole utilisée lors de la transmission physique de données à travers le support</li>
    </ul>
  </p>
  <p>
    Lors de l'envoi de messages sur un réseau, la pile de protocoles qui se trouve sur un hôte fonctionne du haut vers le bas.
  </p>
  <p>
    Le protocole de la couche application, démarre le processus en livrant à la couche transport les données. Dans la couche trznsport, les données de la couche application sont divisées en segments TCP. Chaque segment TCP rçcoit une étiquette, appelée en-tête, qui contient des informations pour désigner le processus s'exécutant sur l'ordinateur de destination qui doit recvoir le message. Il contient également les informations pour permettre au processus de destination de réassembler les données selon leur format d'origine.
  </p>
  <p>
    La couche transport encapsule les données au sein du segment et les envoies à la couche Internet, où il est implémenté le protocole IP. Dans cette couche, la totalité du segment TCP est encpsulée dans ce paquet IP, qui ajoute une autre étiquette, appelée en-tête IP. L'en-tête IP contient des adresses IP d'hôtes source et de destination, ainsi que des informations nécessaires à la livraison du paquet à son processus de destination correspondant.
  </p>
  <p>
    Ensuite, le paquet IP est envoyé au protocole Ethernet de la couche d'accès réseau, où il est encapsulé dans un en-tête de Trame et une queue de bande (ou en queue de Trame). Chaque en-tête de Trame contient une adresse physique source et de destination. L'adresse physique indentifie de manière unique les périphériques sur le réseau local. L'en-queue contient des informations de vérifications d'erreur. Enfin, les bits sont codés sur le support Ethernet par la carte réseau du serveur.
  </p>
  <p>
    Ce processus est inversé sur l'hôte de réception. Les données sont décapsulées au fur et à mésure qu'elles se déplacent vers la partie supérieure de la pile et l'application d'utilisateur final.
  </p>


  </div>
</section>
    


  </div>

</main><!-- /.container -->
<?php include('footer.part.php');?>

