<?php $title ="Support de transmission"  ; ?>
<?php include('header.part.php');?>




<main role="main" class="container">

  <div class="jumbotron">
  <section id="corps">
<div class="container">
<h1 class="jumbotron-heading">Support de transmission</h1>

  <h2>Généralité</h2>
  Le support de transmission est le moyen (médium) par lequel l'information est véhiculée d'un dispositif réseau à un autre. Il doit répondre à un certains npmbre de contraites : il doit être fiable, peu coûteux, facile à installer et à entretenir. Il doit avoir la meilleur bande passante et le plus faible taux d'erreur possible. Le chois d'un support dépend de la technologie utilisée. La technologie utilisée se fait en fonction :<ul>
    <li>De la bande passante</li>
    <li>Des distances</li>
    <li>Des pertubations</li>
    <li>De la sécurité nécessaire</li>
  </ul>
  <p>
    Il ne faut surtout pas s'attacher uniquement au critère de la vitesse de transmission. La majorité des réseaux locaux existants sont conçus pour utiliser les services d'un support permettant la transmission en série de bits d'information.
  </p>
  <h2>Le câble coaxial</h2>
  <p>
    C'est un câble qui a un seul conducteur de cuivre à son centre. Une couche plastique fournit l'isolation entre le conducteur centré et une tresse de métal. La tresse aide à bloquer toutes interférences de lumières fluorescentes, moteurs et autres ordinateurs. Bien que difficile à installer, il permet de plus grandes longueurs  de câble entre les dispositifs de réseau. Il existe deux types de câble coaxial : la câble coaxial fin et le câble coaxial épais.
  </p>
  <p>
    Le câble coaxial fin est aussi appelé 10 Base 2. Le chiffre 2 se réfère à la longueur approximative de segment maximum de 200 mètres. En réalité la longueur maximum de segment est 185 mètres. Le chiffre 10 c'est le débit de 10 mbps. Tandique le câble coaxial épais est aussi appelé 10 Base 5. Le chiffre 5 se réfère à la longueur approximative de segment maximum de 500 mètres. Le chiffre 10 c'est le débit de 10 mbps.
  </p>
  <p>
    Le câble coaxial est utilisé dans les topologies en réseaux en bus. Pour ce câble, différents connecteurs sont disponibles tels que les connecteurs BNC (Bayonne Neil Concelman) encore appelé connecteur en T, les connecteurs baril et de résistance (terminator). Le connecteur recommandé pour ce cable est le connecteur BNC.
  </p>
  <h2>La paire torsadée</h2>
  <p>Il existe deux (2) variétés de cable en paire torsadée : la paire torsadé protégée, blidée (STP : Shielded Twisted pair) et la paire torsadée non protégée (UTP : Unshielded Twisted Pair).</p>
  <p>
    La paire torsadée à quatre (4) paires de fils électriques à l'intérieur. Pour améliorer l'immunité aux pertubations électromagnétiques, on la blinde. Son taux d'erreur peut être inférieur à 10^-6. Chaque paire est torsadée avec un nombre différents de torsion par pouce (2,5 cm) afin d'éliminer les interférences de paires adjacentes et d'autres dispositifs. La différence entre catégories est due à l'étroitesse de la torsion des paires de cuivre. Plus la torsade est serrée, plus haut est le taux de transmission et le plus élevé est le coût par mètre. La catégorie 5 est hautement recommandée car elle s'adaptera à l'évolution de la technologie. La longueur maximale autorisée par segment est de 100 mètres. La paire torsadée protégée (STP) est adapté pour les environnements avec des interférences et est utilisée sur des réseaux utilisant la topologie Token Ring. <br>
    Le connecteur standard s'appelle RJ 45.
  </p>
  <h2>La fibre optique</h2>
  <p>
    Considérée comme le support idéal, la fibre optique est une technologie relativement nouvelle. Elle transmet la lumière plutôt que des signaux électromagnétiques, éliminant le problème d'interférence électrique. La fibre optique comprend :<ul>
      <li>Le coeur fait de verre ou fibres plastiques avec un fort indice de réfraction;</li>
      <li>Un enduit en plastique pour matelasser le centre de la fibre;</li>
      <li>Les fibres de Kevlar pour renforcer le câble et empêcher la cassure;</li>
      <li>La gaine isolante extérieure faite de Téflon ou PVC</li>
    </ul>
    <br>
    Les informations numériques sont modulées par un émetteur de lumière qui peut être : 
    <ul>
      <li>Une diode électroluminescence;</li>
      <li>Une diode laser;</li>
      <li>Une diode modulée.</li>
    </ul>
    <br>
    Le faisceau lumineux émis est ensuite guidé à l'intérieur de la fibre et est décodée par une photodiode qui peut être :
    <ul>
      <li>Une diode PIN</li>
      <li>Une diode à avalanche</li>
    </ul>
    <br>
    La fibre optique présente de nombreux avantages :
    <ul>
      <li>Débit binaire allant jusqu'à des centaines de mbps</li>
      <li>Distance jusqu'à 100 Km</li>
      <li>Insensible aux parasites électromagnétiques;</li>
      <li>Bonne résistance à la chaleur et au froid;</li>
      <li>Faible volume, faible poids</li>
      <li>Taux d'erreur pouvant être inférieur à 10^-9;</li>
    </ul>
    <br>
    Il y a trois types de fibre optique :
    <ul>
      <li>La fibre monomode dont le coeur est si fin que le chemin de progation est pratiquement direct. Cette fibre est utilisée essentiellement pour les sites à distances.</li>
      <li>La fibre à saut d'indice 200/380. L'importance du coeur provoque une grande dispersion des signaux, ce qui génère une déformation du signal reçcu</li>
      <li>La fibre à gradient d'indice, le coeur est constitué de couches de verre successives ayant un indice de réfraction proche : la dispersion est réduite</li>
    </ul>
    <br>
    Le connecteur le plus utilisé avec la fibre optique est  le connecteur ST
  </p>
  <h2>Le réseau sans fil</h2>
  <p>
    Tous les réseaux ne sont pas câblés, certains sont sans fil; Ils utilisent les signaux radio de hautes fréquences ou ondes infrarouges pour communiquer. Chaque poste sur un réseau sans fil est doté d'un émetteur-récepteur-antenne pour envoyer et recevoir des données. Le réseau sans fil est très coûteux, peu sécurisant, sensible aux interférences électriques de la lumière et des ondes radio. Il est plus lent que les réseaux câblés.
  </p>
<h2>Les liaisons lasers</h2>
  <p>
    On peut installer une liaison LASER (Light amplification by stimulated of radiation = amplification de lumière par émission stimulée de rayonnement.) qui est un phénomène ondulatoire et optique, pour autant que les deux sites à relier soient distants de moins d'un kilomètre en liaison et qu'il n'y ait pas d'obstacle au faisceau. Néanmoins l'alignement des faisceaux est difficile et demande beaucoup de doigté. De même il faut installer les lasers hors d'atteint des mains des techniciens.
  </p>
  <h2>Liaison radio</h2>
  <p>
    Il y a trois catégorie de liaison radio : <ul>
      <li>Les liaisons permettant de relier deux segments de réseau LAN to LAN</li>
      <li>Les liaisons entre une station reliée au câble et des ordinateurs mobiles</li>
      <li>Les liaisons utilisant les téléphones portables GSM équipés de modem</li>
    </ul>
  </p>
  <h2>Liaison satellite</h2>
  <p>
    En plaçant un satellite en orbitre géostationnaire c'est-à-dire sur l'équateur, à une altitude de 36000 km, on peut réaliser des liaisons par faisceaux hertziens pour la transmission de données.
  </p>
  <h2>La connectique sur un réseau Ethernet</h2>
  <p>
  Schéma d'un câblage droit
  <table border="">
    <tr>
      <td>1</td>
      <td>Blanc-orange</td>
      <td>1</td>
    </tr>
      <tr>
      <td>2</td>
      <td>Orange</td>
      <td>2</td>
    </tr> 
    <tr>
      <td>3</td>
      <td>Blanc-vert</td>
      <td>3</td>
    </tr> 
    <tr>
      <td>4</td>
      <td>Bleu</td>
      <td>4</td>
    </tr> 
    <tr>
      <td>5</td>
      <td>Blanc-bleu</td>
      <td>5</td>
    </tr> 
    <tr>
      <td>6</td>
      <td>vert</td>
      <td>6</td>
    </tr>
    <tr>
      <td>7</td>
      <td>Blanc-marron</td>
      <td>7</td>
    </tr>
    <tr>
      <td>8</td>
      <td>Marron</td>
      <td>8</td>
    </tr>

  </table>
  </p>
  Schéma d'un câblage croisé
  <table border="">
    <tr>
      <td>1</td>
      <td>Blanc-orange</td>
      <td>3</td>
    </tr>
      <tr>
      <td>2</td>
      <td>Orange</td>
      <td>6</td>
    </tr> 
    <tr>
      <td>3</td>
      <td>Blanc-vert</td>
      <td>1</td>
    </tr> 
    <tr>
      <td>4</td>
      <td>Bleu</td>
      <td>4</td>
    </tr> 
    <tr>
      <td>5</td>
      <td>Blanc-bleu</td>
      <td>5</td>
    </tr> 
    <tr>
      <td>6</td>
      <td>vert</td>
      <td>2</td>
    </tr>
    <tr>
      <td>7</td>
      <td>Blanc-marron</td>
      <td>7</td>
    </tr>
    <tr>
      <td>8</td>
      <td>Marron</td>
      <td>8</td>
    </tr>
    
  </table>

</div>
    


  </div>

</main><!-- /.container -->
<?php include('footer.part.php');?>
