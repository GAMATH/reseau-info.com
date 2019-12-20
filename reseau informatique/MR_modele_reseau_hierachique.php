<?php $title ="Modèle réseau hiérachique"  ; ?>

<?php include('header.part.php'); ?>

<main role="main" class="container">

  <div class="jumbotron">
  	 	
<div class="container">
<h1>Modèle réseau hiérachique</h1>
 
<p>
Lors de la mise en oeuvre d'un réseau local capable de satisfaire les besoins des PME, vous utilisez un modèle de conception hiérachique. Comparé à d'autres conceptions de réseau, un réseau hiérachique est plus simple à gérer et à developper, tandis que les problèmes sont résolus plus rapidement. La conception de réseau hiérachique implique la division du réseau en couches distinctes. Chaque couche fournut des fonctions spécifiques qui définissent son rôle dans le réseau global. Le modèle de conception hiérachique classique se divise en trois (3) couches : la couche d'accès, la couche de distribution et la couche coeur de réseau.
</p>

	<h2>Couche d'accès</h2>
	<p>
		Le rôle principale de la couche d'accès est de fournir un moyen de connecter des périphériques au réseau, ainsi que de contrôler les périphériques qui sont autorisés à communiquer sur le réseau. La couche d'accès sert d'interface avec les périphériques finaux, tels que les ordinateurs, les imprimantes et les télé^phones IP, afin de fournir un accès du reste réseau. La couche d'accès réseau peut inclure des routeurs, des commutateurs, des ponts, des concentrateurs et des points d'accès sans fil.
	</p>
	<h2>Couche distribution</h2>
	<p>
		La couche distribution regroupe les données reçues à partir des commutateurs de la couche d'accès, avnt qu'elles ne soient transmises vers la couche coeur du réseau, en vue de leur routage vers la destination finale. Les commutateurs de la couche de distribution sont généralement des périphériques très performants qui offrent une disponibilité et une redondance élévées afin de garantir la fiabilité. Ces commutateurs de la couche distrubition ont un rôle très important sur le réseau.
	</p>
	<h2>Couche coeur de réseau</h2>
	<p>
		La couche coeur de réseau de la conception hiérachique constitue le réseau fédérateur à haut débit de l'inter-réseau. La couche coeur de réseau est essentielle à l'inter-connectivité entre les périphériques de la couche de distribution. Par conséquent, il est important qu'elle bénifécie d'une disponibilité et d'une redondance élevée. La couche coeur de réseau regroupe le trafic provenant de tous les périphériqes de la couche de distribution. Elle doit donc être capable de réacheminer rapidement d'importantes quantité de données.
	</p>
	<h2>Avantage d'un réseau hiérachique</h2>
	
	Les conceptions de réseau hiérachiques présentent de nombreux avantages.
	<p><ul>
		<p><li>Evolutivité : Les réseau hiérachiques s'adaptent parfaitement. La modularité de la conception permet de reproduire des éléments de conception au fur et à mesure de l'évolution du réseau. Puisque chaque instance du module est cohérente, l'expansion est simple à planifier et à implémenter.</li></p>
		
		<p><li>Redondance : Au fur et à mesure de l'évolution d'un réseau, la distribution devient plus importante. Vous pouvez augmenter considérablement la disponibilité vi des implémentations redondantes faciles à gérer</li></p>
		</p>
			
		
	</ul>
	</p>
  

</div>
</section>
    


  </div>

</main><!-- /.container -->
<?php include('footer.part.php');?>