<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name;
if(Yii::app()->user->name!="Guest"){
	$slogin = "style='display: none;'";
	$swelcome = "";
}else{
	$slogin = "";
	$swelcome = "style='display: none;'";
}
?>
<script type="text/javascript">
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
</script>


<section class="bg pd4">
<div class="container center">
  <div class="row-fluid">
    <div class="span8">	
	
          
          <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/img/logo2.png"/>
          <h4 style="font-size: 40px; color: #F00; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-weight: 900;">HOTEL DECAMESOF<span style="font-weight: 900">T</span></h4>
          <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/img/imagen4.jpg"/>
		  <h2 style="color: #666666; font-size: xx-large; font-weight: 800;">Bienvenido</h2>
		  <p style="text-align: left">&nbsp;</p>
        <h3 class="media-body" style="text-align: left; font-size: 36px; font-weight: 900;"> Mision:</h3>
<p style="text-align: justify; font-size: 18px;">Somos una organización que siempre piensa en el bienestar de nuetros huéspedes, contamos con la mejor calidad humana para hacer de su estadía una experiencia verdaderamente unica. </p>
<h3 style="text-align: left; font-size: 36px; font-weight: 900;">Visión:</h3>
<p style="text-align: justify; font-size: 18px;">Posicionamos como el mejor hotel en la ciudad de Popayán prestando un serviocio integral para nuestros clientes, estando siempre a la vabguardia del sector turístico y hotelero en el país y latinoamérica.</p>
<p style="text-align: center">&nbsp;</p>
<p style="text-align: left">&nbsp;</p>
          <p>&nbsp;</p>
    </div><!-- /.span4 -->
    <div class="span4">
  <div class="well">
	<div class="login" <?php echo $slogin; ?>>
        <?php
			$model=new LoginForm;

			// if it is ajax validation request
			if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
			{
				echo CActiveForm::validate($model);
				Yii::app()->end();
			}
	
			// collect user input data
			if(isset($_POST['LoginForm']))
			{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->renderpartial('login',array('model'=>$model));
		?>
	</div>	
    <div class="welcome" <?php echo $swelcome ?> >
    	<h2 class="form-signin-heading">Hola <?php echo Yii::app()->user->name ?> Bienvenido a Decamesoft</h2>
    </div> 
		<img src="<?php echo Yii::app()->request->baseUrl; ?>/css/img/imagen2.jpg"/> 
		<br/>
		<img src="<?php echo Yii::app()->request->baseUrl; ?>/css/img/imagen3.jpg"/> 
        <p>&nbsp;</p>
        </form>
  </div>
    </div><!-- /.span4 -->
  </div><!-- /.row -->
</div>
</section>
<!-- START THE FEATURETTES -->
  <script>
    !function ($) {
      $(function(){
        // carousel demo
        $('#myCarousel').carousel()
      })
    }(window.jQuery)
  </script>
