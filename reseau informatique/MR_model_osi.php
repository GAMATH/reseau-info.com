<?php $title ="Modèle OSI"  ; ?>

<?php include('header.part.php'); ?>

<main role="main" class="container">

  <div class="jumbotron">
  <section id="corps">
<div class="container">
  <h1>Modèle OSI</h1>

    <h3>Généraités</h3>
    <p>Le modèle OSI est un outil qui permet de décrire l'envoi et la réception des données sur un réseau, donc de comprendre comment les informations circulent à travers le réseau. </p>
    <p>Le modèle OSI a nécessité la mise en place d'un modèle de réseau.</p>
    <p>
    Le principe du modèle OSI consiste à décomposer un système complexe en petites tâches distinctes. Le modèle OSI :
    <ul>
      <li>Aide les concepteurs des plates formes matérielles et logicielles différentes de mettre en oeuvre des réseaux capables de communiquer entre eux et fonctionner correctement;</li>
      <li>Assure la comptabilité et l'interopérabilité entre divers technologies réseaux;</li>
      <li>Permet la circulation des informations à travers un programme d'application en passant par un média jusqu'à un autre programme d'application situé sur un autre ordinateur au sein du réseau.</li>
    </ul>
    </p>
    <h3>Avantages</h3>
    <p>
      <ul>
        <li>Divsier les communications en éléments plus pétits, plus simples;</li>
        <li>Uniformiser les éléments du réseau afin de permettre le développement et le soutien multiconstructeurs;</li>
        <li>Permettre la communication entre les types de matériel et de logiciel différents;</li>
        <li>Empêcher que les changements apportés à une couche n'affectent les autres couches ce qui assure un développement plus rapide;</li>
        <li>Faciliter la connexion</li>
        <li>Simplifier l'enregistrement et l'acquisition des connaissances;</li>
      </ul>
    </p>
    <h3>Composition</h3>
    <p>Le problème consistant à déplacer les informations entre ordinateurs est divisé en 7 problèmes plus petits et plus faciles à gérer. Les 7 problèmes constituent les 7 couches du modèle OSI : la couche application, la couche présentation, la couche session, la couche transport, la couche réseau, la couche liaison de données, la couche physique.</p>
    <table border="">
      <p><tr>
        <td>La couche Application</td>
      </tr>
      <tr>
        <td>La couche Présentation</td>
      </tr>
      <tr>
        <td>La couche Session</td>
      </tr>
      <tr>
        <td>La couche Transport</td>
      </tr>
      <tr>
        <td>La couche Réseau</td>
      </tr>
      <tr>
        <td>La couche Liaison de données</td>
      </tr>
      <tr>
        <td>La couche Physique</td>
      </tr>
    </table>
    &nbsp;&nbsp;Les 7 couches du modèle OSI
    </p>
    
    <h3>Description des couches du modèle OSI</h3>
    <p><ul type="disc">
      <li><h4>Couche 1: la couche Physique</h4></li>
      <p>
        Elle définie les spécifications électriques, mécaniques, procédurables et fonctionnelles permettant d'activer, de maintenir et de désactiver la liaison physique entre les systèmes d'extrémités. Les caractéristiques telles que les niveaux de tension, les débits physiques, les distances maximales de transmissions, les connecteurs physiques sont définis par cette couche.
      </p>
      <li><h4>Couche 2: la couche liaison de données</h4></li>
      <p>
        Elle s'occupe de l'adressage physique (adresse MAC: Media Access Control) de la topologie du réseau, de la notification des érreurs, de la livraison ordonnée des trames et du contrôle de flux.
      </p>
      <li>Couche 3: la couche réseau</li>
      <p>
        Assure la connectivité et la sélection du chemin entre deux systèmes d'extrémités, le routage et l'adressage logique (adresse IP)
      </p>
      <li><h4>Couche 4: la couche transport</h4></li>
        <p><ul type="circle">
          <li>Segmente le données envoyées et les rassemble en flux de données</li>
          <li>Transporte les données et contrôle le flux d'informations (grâce au fenêtrage) </li>
          <li>Etablit, maintient et ferme les circuits virtuel</li>
          <li>Assure la détection et la correction des érreurs</li>
        </ul>
        </p>
      <li><h4>Couche 5: la couche session</h4></li>
      <p>
        <ul type="circle">
          <li>Etablit, gère et ferme des sessions entre applications</li>
          <li>Assure le transport éfficace des données</li>
        </ul>
      </p>
      <li>Couche 6: la couche présentation</li>
      <p>
        Traduit les données en différents formats de représentation (ASCII, EBCDIC,...), s'occupe de la structure et de la lisibilté des données pour le destinataire
      </p>
      <li><h4>Couche 7: la couche application</h4></li>
      <p>
        Détermine la disponibilté des partenaires de communication voulus, s'occupe des services réseau fournis aux processus (courrier électronique, transfert de fichiers,...)
      </p>
    </ul>
  </p>
  

</div>
</section>
    


  </div>

</main><!-- /.container -->
<?php include('footer.part.php');?>