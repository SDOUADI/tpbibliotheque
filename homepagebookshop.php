<!DOCTYPE html>

<html>

    <head>
        <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <title>Template Sonia DOUADI-Nestr</title>

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
      <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
      <link rel="stylesheet" href="css/templateintenselastv.css" />
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    </head>

    <body>

          <?php
            require_once 'template/navigation.php';
        ?>

          <div class="container-fluid">
              <?php
            require_once 'includes/functions.php';
			@$page=securisation($_GET["page"]);
			if($page=="" || $page=="content")
			{
			//echo $page;

			   include 'template/content.php';
			}
			else if($page=="livre"){
        include 'template/livre.php';
         
      }
      
      else if($page=="emprunter"){
        include 'template/kformemprunter.php';
         
      }
              ?>
        </div>

        <?php
        include "template/footer.php";
        ?>




    <script src="../tpweb/js/scripttemplateintense.js" >
    </script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
   <script>
       $(document).ready(function(){

           var home=$("#home");
           var features=$("#features");
           var pages=$("#pages");
           var portfolio=$("#portfolio");
           var blog=$("#blog");
           var shop=$("#shop");
           var components=$("#components");
           var sousmenuhome=$("#sousmenuhome");
           var sousmenufeatures=$("#sousmenufeatures");
           var sousmenupages=$("#sousmenupages");
           var sousmenuporfolio=$("#sousmenuportfolio");
           var sousmenublog=$("#sousmenublog");
           var sousmenushop=$("#sousmenushop");
           var sousmenucomponents=$("#sousmenucomponents");
           var mborder=$(".mborder");
           var mborder2=$(".mborder2");
           var mborder3=$(".mborder3");
           var mborder4=$(".mborder4");
           var mborder5=$(".mborder5");
           var mborder6=$(".mborder6");
           var mborder7=$(".mborder7");

            home.mouseover (function(){
            sousmenuhome.attr('style','display:block');
            mborder.attr('style','display:block');

           });

            home.mouseout (function(){
            sousmenuhome.attr('style','display:none');

           });

            features.mouseover (function(){
            sousmenufeatures.attr('style','display:block');
            mborder2.attr('style','display:block');

           });

            features.mouseout (function(){
            sousmenufeatures.attr('style','display:none');

           });

            pages.mouseover (function(){
            sousmenupages.attr('style','display:block');
            mborder3.attr('style','display:block');

           });

            pages.mouseout (function(){
            sousmenupages.attr('style','display:none');

           });

            portfolio.mouseover (function(){
            sousmenuporfolio.attr('style','display:block');
            mborder4.attr('style','display:block');

           });

            portfolio.mouseout (function(){
            sousmenuporfolio.attr('style','display:none');

           });

            blog.mouseover (function(){
            sousmenublog.attr('style','display:block');
            mborder5.attr('style','display:block');

           });

            blog.mouseout (function(){
            sousmenublog.attr('style','display:none');

           });

            shop.mouseover (function(){
            sousmenushop.attr('style','display:block');
            mborder6.attr('style','display:block');

           });

            shop.mouseout (function(){
            sousmenushop.attr('style','display:none');

           });

            components.mouseover (function(){
            sousmenucomponents.attr('style','display:block');
            mborder7.attr('style','display:block');

           });

            components.mouseout (function(){
            sousmenucomponents.attr('style','display:none');

           });


       });
        </script>




    </body>
</html>
