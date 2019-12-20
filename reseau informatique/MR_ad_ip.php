<?php $title ="Adresse IP"  ; ?>
<?php include('header.part.php');?>


<main role="main" class="container">

  <div class="jumbotron">
  <div class="container">
<h1>Adresse IP</h1>
  <h2>Généralité</h2>
  <p>
    Une adresse IP du nom du protocole utilisé pour réaliser l'adressage et le routage, identifie de manière unique la machine ainsi que le réseau sur lequel elle est située. Chaque adresse est une série de quatre (4) octets dont une partie correspond à l'identificateur réseau et une autre partue à l'identificateur de la machine (ou l'hôte) .
    <div class="table-responsive">
    <table border="" >
      <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;INDENTIFICATEUR DE RESEAU&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IDENTIFICATEUR DE LA MACHINE (HOTE) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
      </tr>
    </table>
  </div>
  </div>
  </p>
  <h2>Plan d'adressage</h2>
  <p>
    Une adresse IP en version 4, est représentée avec quatre (4) octets. Suivant la valeur du premier octet, il est possible de connaître la classe de l'adresse IP, c'est-à-dire le nombre d'octets utilisés pour numéro de réseau et ceux restant pour l'hôte.
    <h2>Classes d'adresses</h2>
      <p>
        Il existe différentes classes d'adresses permettant d'identifier :<ul>
          <li>Soit des hôtes unicast (une adresse unique : classe A, B, ou C) </li>
          <li>Soit des hôtes multicast (plusieurs hôtes sont identifiés par la même classe d'adresse de classe D) </li>
          <li>Soit une diffusion (broadcast : le paquet est adressé à tout le monde) </li>
        </ul>
      </p>
      Pour identifier un hôte de manière unique, on définit 3 classes d'adresses :<ul>
        <li>Adresse de classe A</li>
        <p>
         
          <div class="table-responsive">
             En classe A, le premier octet est compris de 1 à 126
          <table border="">
            <tr>
              <td>
                &nbsp;&nbsp;O&nbsp;&nbsp;
              </td>
              <td>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              </td>
              <td>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              </td>
              <td>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              </td>
              <td>
                &nbsp;&nbsp;R&nbsp;&nbsp;
              </td>
              <td>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              </td>
              <td>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              </td>
              <td>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              </td>
              <td>
                &nbsp;&nbsp;H&nbsp;&nbsp;
              </td>
              <td>
              &nbsp;&nbsp;H&nbsp;&nbsp; 
              </td>
              <td>
                &nbsp;&nbsp;H&nbsp;&nbsp;
              </td>
            </tr>
          </table>
        </div>
          Le réseau 127.0.0.0 est utilisé pour des raisons techniques
        </p>
        <p>
         
          <div class="table-responsive">
             En classe B, le premier octet varie entre 128 et 191
            <table border="">
            <tr>
              <td>
                &nbsp;&nbsp;1&nbsp;&nbsp;
              </td>
              <td>
                &nbsp;&nbsp;0&nbsp;&nbsp;
              </td>
              <td>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              </td>
              <td>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              </td>
              <td>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              </td>
              <td>
                &nbsp;&nbsp;R&nbsp;&nbsp;
              </td>
              <td>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              </td>
              <td>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              </td>
              <td>
                &nbsp;&nbsp;H&nbsp;&nbsp;
              </td>
              <td>
              &nbsp;&nbsp;H&nbsp;&nbsp; 
              </td>
              <td>
                &nbsp;&nbsp;H&nbsp;&nbsp;
              </td>
            </tr>
          </table>
        </div>
        </p>
        <p>
          23
          <div class="table-responsive">
            En classe C, le premier octet varie entre 192 et 2
          <table border="">
            <tr>
              <td>
                &nbsp;&nbsp;1&nbsp;&nbsp;
              </td>
              <td>
                &nbsp;&nbsp;1&nbsp;&nbsp;
              </td>
              <td>
                &nbsp;&nbsp;0&nbsp;&nbsp;
              </td>
              <td>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              </td>
              <td>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              </td>
              <td>
                &nbsp;&nbsp;R&nbsp;&nbsp;
              </td>

              <td>
                &nbsp;&nbsp;R&nbsp;&nbsp;
              </td>
              
              <td>
                &nbsp;&nbsp;H&nbsp;&nbsp;
              </td>
            </tr>
          </table>
        </div>
        </p>
        <p>
          
          <div class="table-responsive">
            En classe D, le premier octet varie entre 224 et 239 : multi casting
          <table border="">
            <tr>
              <td>
                &nbsp;&nbsp;1&nbsp;&nbsp;
              </td>
              <td>
                &nbsp;&nbsp;1&nbsp;&nbsp;
              </td>
              <td>
                &nbsp;&nbsp;1&nbsp;&nbsp;
              </td>
              <td>
                &nbsp;&nbsp;0&nbsp;&nbsp;
              </td>
              <td>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              </td>
              <td>
                &nbsp;&nbsp;R&nbsp;&nbsp;
              </td>

              <td>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              </td>
              
              <td>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              </td>
              <td>
                &nbsp;&nbsp;R&nbsp;&nbsp;
              </td>
              <td>
                &nbsp;&nbsp;R&nbsp;&nbsp;
              </td>
              <td>
                &nbsp;&nbsp;H&nbsp;&nbsp;
              </td>
            </tr>
          </table>
        </div>
        </p>
        <p>
          
          <div class="table-responsive">
            En classe E, le premier  octet varie entre 240 et 255 : recherche
          <table border="">
            <tr>
              <td>
                &nbsp;&nbsp;1&nbsp;&nbsp;
              </td>
              <td>
                &nbsp;&nbsp;1&nbsp;&nbsp;
              </td>
              <td>
                &nbsp;&nbsp;1&nbsp;&nbsp;
              </td>
              <td>
                &nbsp;&nbsp;1&nbsp;&nbsp;
              </td>
              <td>
                &nbsp;&nbsp;0&nbsp;&nbsp;
              </td>
              
              <td>
                &nbsp;&nbsp;R&nbsp;&nbsp;
              </td>
              
              <td>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              </td>
              <td>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              </td>
              <td>
                &nbsp;&nbsp;R&nbsp;&nbsp;
              </td>
              <td>
                &nbsp;&nbsp;R&nbsp;&nbsp;
              </td>
              <td>
                &nbsp;&nbsp;H&nbsp;&nbsp;
              </td>
            </tr>
          </table>
        </div>

        </p>
      </ul>   
    </p><p>
    Un numéro de réseau d'hôte ne peut avoir tous ses bits à "0" et à "1". Ces cas particuliers sont réservés pour des situations précises. Lorsque tous les bits de l'hôte sont à "1", c'est un broadcast, alors que s'ils sont à "0", c'est un réseau courant.</p>
    <h2>Masque de réseau</h2>
    <p>
      On utilise un masque de réseau (sous réseau) pour identifier la partie de l'adresse IP correspondant au réseau (sous réseau), de la partie identifiant le noeud. Si on écrit l'adresse IP en binaire, tout bit associé au numéro du réseau va être marquer d'un "1" dans le masque , sinon "0". Les masques par défaut utilisés sont :<ul>
        <li>255.0.0 en classe A;</li>
        <li>255.255.0.0 en classe B;</li>
        <li>255.255.255.0 en classe c</li>
      </ul>
    </p>
    <h2>Adresses privées</h2>
    <p>
      Ce sont les adresses utilisées par des particuliers qui n'ont pas besoin d'accéder sur Internet, contrairement aux adresses publiques. Ce sont : <ul>
        <li>En classe A 10.0.0.0 - 10.255.255.255</li>
        <li>En classe B 172.16.0.0 - 172.16.255.255</li>
        <li>En classe C 192.168.0.0 - 192.168.255.255</li>
      </ul>
    </p>
    <h2>Calcul de la destination d'un paquet</h2>
    <p>
      Lorsqu'un hôte IP source veut contacter un hôte destinataire, il doit en premier lieu déterminer si ce dernier appartient ou non au même réseau que lui, car il doit en effet, soit lui adresser directement le paquet, soit sortir du réseau logique local, en utilisant l'adresse de passerelle par défaut équivalent d'un panneau autre direction. Ainsi, un hôte qui ne dispose pas d'une adresse de passerelle par défaut ne peut sortir de son réseau logique local.
    </p>
    <p>
      Le calcul de la destination d'un paquet IP c'est la réponse qui est donnée à la question de savoir si le destinataire appartient au même réseau que l'hôte source :
      
      <h4>Information disponibles sur l'hôte lui-même</h4>
        <p>
        adresse IP source; <br>
        masque source; <br>
        adresse IP passerelle par défaut.
        </p>
        <h4>Informations disponible sur le destinataire</h4>
        <p>
        adresse IP destinataire.
        <br>
        <br>
        La question que l'on se pose se traduit par : est ce qu'il y a égalité sur les numéros de réseaux utilisé d'après ma propre vision de la situation (avec mon propre masque).
        </P>
        <h4>Calcul du numéro de l'adresse réseau IP</h4>
        <p>
        On fait un "ET" logique, octet par octet entre l'adresse IP et le masque de sous réseaux source. Le numéro du réseau IP de l'hôte source vu par lui-même est :<br><br>
        @IP source&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Et&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; masque sousrce;
        <br>
        <br>
        Le numéro de réseau IP de l'hôte destinataire vu par l'hôte est :<br><br>
        @IP destinataire&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ET&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;masque source;
        <br>
        <br>
        Finalement la question, est ce que le destinataire appartient au même réseau que l'hôte source trouvera une réponse sous la forme : <br><br>
        <div class="table-responsive">
        <table>
          <tr>
            <td>
        @IP source&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ET&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;masque source&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;=&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@IP destinataire&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ET&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; masque source est vraie ?
      </td>
</tr>
          </table>
        </div>
        <br><br>

        <ul>
          <li>S'il y a égalité alors les deux hôtes sont vus sur le même réseau;</li>
          <li>S'il n'y a pas égalité, alors la source et le destinatair appartiennent à des réseaux différents, il faut sortir du réseau local par la passerelle par défaut.</li>
        </ul>

    </p>

</div>
    


  </div>

</main><!-- /.container -->
<?php include('footer.part.php');?>
