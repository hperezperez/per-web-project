<?php
$CURRENT_DIR = __DIR__;
$PAGE_TITLE = "Anuncios clasificados";

require_once(dirname(__DIR__) . "/lib/head-utils.php");
?>
<body class="site">
	<!--include the <head> tag-->

	<!--include <header> tag-->
	<header>

		<?php require_once("../lib/header.php"); ?>
	</header>
	<div class="container">
		<!--I put the welcome message on top - full width-->
		<div class="row welcome-msg">
			<div class="col-xs-12">
				<h2><?php echo _("Anuncios Clasificados");?></h2>
				<p><?php echo _("The best businesses in New Mexico. ");?></p>
				<p><?php echo _("See");?> <a href="http://Afexamoneytranfers.com" target="_blank"><?php echo _("RIA Money transfers");?></a> <?php echo _("for more details and current exchange rate.");?></p>
			</div>
		</div>
		<hr>
		<!--i created a page with all the product items here-->
		<div class="products-wrapper">
			<!-- ====================== -->
			<!-- begin layout example 1 -->
			<!-- ====================== -->
			<h3><?php echo _(" Services");?> </h3>
			<div class="row row-flex row-flex-wrap">
				<div class="col-xs-12 col-sm-6 col-md-3">
					<div class="thumbnail">
						<img src="../images/cafemaria.jpg" alt="product item"  style="width:240px; height:250px;"/>
						<div class="caption">
							<h4><?php echo _("Coffee Shop");?></h4>
							<p><?php echo _("Lily Marie's Company is the first roaster and specialty coffee company in
							                 in the South Valley.");?> </p>
							<p><?php echo _("Visit us at 640 Old Coors SW B ALB. NM. 87105");?></p>
							<p><?php echo _("Call us at (505) 585-5622");?></p>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3">
					<div class="thumbnail">
						<img src="../images/tortugaleria.jpg" alt="product item"  style="width:180px; height:250px;"/>
						<div class="caption">
							<h4><?php echo  _("Tortuga Gallery");?></h4>
							<p><?php echo _("A space for Community Art  & Performance.");?></p>
							<p><?php echo _("901 Edith Blvd SE . Alb. NM> 87102");?></p>
							<p><?php echo _("Call us  at (505) 506-0820 ");?></p>
							<p><?php echo _("tortuga.gallery.abq@gmail.com");?></p>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3">
					<div class="thumbnail">
						<img src="../images/durangosergio.jpg" alt="product item" style="width:210px; height:270px;"/>
						<div class="caption">
							<h4><?php echo _("Venta de autos usados");?></h4>
							<p><?php echo _("Durango 2005 buenas condiciones 4x4. Precio de remate 4500. Hable al 505 463-2943 con Sergio");?></p>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3">
					<div class="thumbnail">
						<img src="../images/terrenoriorancho.jpg" alt="product item" style="width:220px; height:270px;" />
						<div class="caption">
							<h4><?php echo _("Land for Sale");?></h4>
							<p><?php echo _("We sale  one piece of land in Rio Rancho NM. Life time opportunity.Only 20,000");?></p>
							<p><?php echo _("Call us at (505) 304-2018");?></p>
						</div>
					</div>
				</div>
			</div>

			<h3><?php echo _(" Services");?> </h3>
			<div class="row row-flex row-flex-wrap">
				<div class="col-xs-12 col-sm-6 col-md-3">
					<div class="thumbnail">
						<img src="../images/milusos.jpg" alt="product item"  style="width:240px; height:250px;"/>
						<div class="caption">
							<h4><?php echo _("Compra conmigo ");?></h4>
							<p><?php echo _(" Miriam Chavez le ayudara a encontrar su nueva casa en Nuevo Mexico.
							               llamenos al 505 506-6292. Le daremos el mejor precio.
							                 en el South Valley.");?> </p>
							<p><?php echo _("The handy man");?></p>
							<p><?php echo _("Affodable price the best results.");?></p>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3">
					<div class="thumbnail">
						<img src="../images/tortugaleria.jpg" alt="product item"  style="width:180px; height:250px;"/>
						<div class="caption">
							<h4><?php echo  _("Tortuga Gallery");?></h4>
							<p><?php echo _("A space for Community Art  & Performance.");?></p>
							<p><?php echo _("901 Edith Blvd SE . Alb. NM> 87102");?></p>
							<p><?php echo _("Call us  at (505) 506-0820 ");?></p>
							<p><?php echo _("tortuga.gallery.abq@gmail.com");?></p>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3">
					<div class="thumbnail">
						<img src="../images/durangosergio.jpg" alt="product item" style="width:210px; height:270px;"/>
						<div class="caption">
							<h4><?php echo _("Venta de autos usados");?></h4>
							<p><?php echo _("Durango 2005 buenas condiciones 4x4. Precio de remate 4500. Hable al 505 463-2943 con Sergio");?></p>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3">
					<div class="thumbnail">
						<img src="../images/terrenoriorancho.jpg" alt="product item" style="width:220px; height:270px;" />
						<div class="caption">
							<h4><?php echo _("Land for Sale");?></h4>
							<p><?php echo _("We sale  one piece of land in Rio Rancho NM. Life time opportunity.");?></p>
							<p><?php echo _("Call us at (505) 304-2018");?></p>
						</div>
					</div>
				</div>
			</div>

			<h3><?php echo _("Tortilleria La Poblana");?></h3>
		  	<div class="row row-flex row-flex-wrap">
				<div class="col-xs-12 col-md-6">
					<div class="thumbnail item-horiz">
						<img src="../images/tortillas.jpg" alt="product item"/>
						<div class="caption">
							<h1><?php echo _("Las mejores tortillas y masa de Albuquerque ");?></h1>
							<h1><?php echo _("La Tortilleria La Poblana le ofrece en estas fiestas navidenas
							                 la mejor masa preparada para tamales.Ademas Hojas y chiles secos.
							                 Le brindamos el mejor servicio a restaurantes. Hablenos al (505) 352-8880
							                 o visitenos en el 143A de La Old Coors SW en ALbuquerque. NM. 87121
										");?></h1>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="col-xs-12 col-md-6">
					<div class="thumbnail item-horiz">
						<img src="../images/cerrajeria.jpg" alt="product item"/>
						<div class="caption">
							<h1><?php echo _("ABQ Locksmith");?></h1>
							<h1><?php echo _(" Cerrajeria ABQ");?></h1>
							<h3><?php echo _(" Daniel Pena (505) 353-6147");?></h3>
							<h2><?php echo _(" Aperturas, Cambios de Combinacion. Reparacion  y Cambio de Switch");?></h2>
							<h2><?php echo _(" Extracion de Llaves Quebradas. Programacion  de Controles Remotos, LLaves con Chip");?></h2>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<h3><?php echo _("Solar  Works Energy");?></h3>
			<div class="row row-flex row-flex-wrap">
				<div class="col-xs-12 col-md-6">
					<div class="thumbnail item-horiz">
						<img src="../images/solar.jpg" alt="product item"/>
						<div class="caption">
							<h1><?php echo _("Solar Works Energy");?></h1>
							<h3><?php echo _("La compania Solar Works Energy  instala paneles solares
							                 en su casa. Empieze a  ahorrar dinero desde el primer dia y no pague nada
							                 para ponerlos en su techo. Contacte a Ryan Wallace at (505) 4156172 or  e-mail
							                 ryan.wallace@solarworksenergy.com
										");?></h3>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="col-xs-12 col-md-6">
					<div class="thumbnail item-horiz">
						<img src="../images/house_before_after.jpg" alt="product item"/>
						<div class="caption">
							<h4><?php echo _("A Reliable Roof, LLC");?></h4>
							<p><?php echo _(" Lic# 350432");?></p>
							<h3><?php echo _(" TPO Specialists and Modified Bitumen");?></h3>
							<h2><?php echo _(" Metal Propanel, Shingles,Title, EPDM.");?></h2>
							<h2><?php echo _("Phone(505) 250-2171  Owner Ramiro Flores");?></h2>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>



			<h3><?php echo _("Improve your Health  ");?></h3>
			<div class="row row-flex row-flex-wrap">
				<div class="col-xs-12 col-md-6">
					<div class="thumbnail item-horiz">
						<img src="../images/herbalife1.jpg" alt="product item"/>
						<div class="caption">
							<h4><?php echo _("Boost your Energy");?></h4>
							<p><?php echo _("Discover the benefits of GOOD NUTRITION. Improve  your health.
										Boost your energy. Control your weight and enjoy life to the fullest.
										Ask for Alicia Saenz. Tel : 505 492-5958 . We  are locate at  318 Isleta SW ,South Valley ,Alb NM.
										");?></p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="col-xs-12 col-md-6">
					<div class="thumbnail item-horiz">
						<img src="../images/herbalife1.jpg" alt="product item"/>
						<div class="caption">
							<h4><?php echo _("With our personalized program of kickboxing  and RIPPED we guaranted amazing results");?></h4>
							<p><?php echo _("Descubra los beneficios de una BUENA NUTRICION. Mejore su salud.
							                 Aumente su energia.Controle su peso y disfrute la vida al maximo.");?></p>
							<h3><?php echo _("Pregunte por Alicia Saenz al tel 505 492-5958. Estamos en el 318 Isleta SW alb ");?></h3>
							<h2><?php echo _("  Cambie su vida.");?></h2>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>


			<h3><?php echo _("CONSTRUYENDO EL FUTURO, LOS EMPRESARIOS DEL  SIGLO XXI  ");?></h3>
			<div class="row row-flex row-flex-wrap">
				<div class="col-xs-12 col-md-6">
					<div class="thumbnail item-horiz">
						<img src="../images/empresarios.jpg" alt="product item"/>
						<div class="caption">
							<h4><?php echo _("LIBERTAD FINANCIERA");?></h4>
							<p><?php echo _(" La vida puede ser una aventura maravillosa si descubres tu capacidad de sonar..
							          y hscer realidad tus suenos.
				                   Ven a escuchar a los profesionales  de la industria mejor pagada del  mundo.
									Empresarios del Siglo XXI compartiran  sus  experiencias para logras ese !exito!
									Queremos compartir una oportunidad que puede mejorar la calidad de vida de tu familia.
									Crecimiento personal, desarrollo profesional y !!LIBERTAD FINANCIERA!!
									Informacion Mauricio Hernandez cell (505) 710-9903.
										");?></p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="col-xs-12 col-md-6">
					<div class="thumbnail item-horiz">
						<img src="../images/empresarios.jpg  " alt="product item"/>
						<div class="caption">
							<h4><?php echo _("FINANTIAL FREEDOM");?></h4>
							<p><?php echo _("Life can be a wonderful aventure if you discover your how to dream big ... and how to make
							                 your dreams come true. Come to listen the profesinals of industry best paid  in the world.
							                 XXI Century Enterpenuirs will  share theirs experience to get the success !.
							                 We want  to share  the oportunity  that can improve  the quality of life of your family.
							                 Personal growth, professional development , !! Finantial Freedom!!
							                 For  information call  to Maurico Hernandez at (505) 710-9903.");?></p>
							<h3><?php echo _(" ");?></h3>
							<h2><?php echo _(" ");?></h2>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>




			<h3><?php echo _("Services of Arriba Mexico");?></h3>
			<div class="row row-flex row-flex-wrap">
				<div class="col-xs-12 col-md-6">
					<div class="thumbnail item-horiz">
						<img src="../images/zumba.jpg" alt="product item"/>
						<div class="caption">
							<h4><?php echo _("Fitness Services");?></h4>
							<p><?php echo _("Arriba Mexico provides Zumba and RIPPED classes Business.We just start to offers this service. We have certified instructors for Zumba and RIPPED
										Classes every day from 6 to 7 pm and 7 to 8 pm. If you need a personal trainer call us to make an appoitment .
										Morning class every day from 9 to 10 am at 910 Isleta SW ,South Valley ,Alb NM call 505 4892104
										");?></p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="col-xs-12 col-md-6">
					<div class="thumbnail item-horiz">
						<img src="../images/kickboxing.jpg" alt="product item"/>
						<div class="caption">
							<h4><?php echo _("With our personalized program of kickboxing  and RIPPED we guaranted amazing results");?></h4>
							<p><?php echo _("Con el programa personalizado de Kickboxing y RIPPED le garantizamos una figura fenomenal");?></p>
							<h3><?php echo _("Clases todos los dias de 6 a 7 en el 910 Isleta SW alb.llame al 3042018 ");?></h3>
							<h2><?php echo _("  Venga y diviertance haciendo ejercicio.");?></h2>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>

		</div><!--.products-wrapper-->
	</div><!--.container-->
  </div>	<!--.site-content-->

	<!--footer include-->
	<?php require_once(dirname(__DIR__) . "/lib/footer.php"); ?>
</body>
</html>