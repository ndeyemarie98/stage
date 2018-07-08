<!DOCTYPE html>


<html>


<head>

  <title>Accueil</title>

  <link rel="stylesheet" type="text/css" href="accueil.css">
  <link rel="stylesheet" type="text/css" href="checkbox.css">
  <link href="bootstrap.min.css" rel="stylesheet" id="bootstrap-css">


  <style type="text/css">

    .row {
      width: 50%;
    }

    @import url("bootstrap-datepicker3.css");

    #inlinebox  
      {
        display: flex;
        justify-content: space-between;
      }
    #radio1,#radio2
    {
      
    }
  </style>

  <!--
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
  <script src="js/highcharts.js"></script>
  <script src="js/modules/exporting.js"></script>
  -->

</head>



<body>

  <script src="bootstrap.min.js"></script>
  <script src="jquery-1.11.1.min.js"></script>
  <script src="jquery.min.js"></script>

<!------ Include the above in your HEAD tag ---------->

  <div class="container">
    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
    <div class="mail-box">
      <aside class="sm-side">
        <div class="user-head">
          <a class="inbox-avatar" href="javascript:;">
            <img  width="200" hieght="100" src="oie_transparent3.png">
          </a>
          <div class="user-name">
                              <!--<h5><a href="#">Nom Prenom</a></h5>
                              <span><a href="#">adressemail@Gmail.com</a></span>-->
          </div>
        </div>
        <div class="inbox-body">
                          <!--<a href="#myModal" data-toggle="modal"  title="Compose"    class="btn btn-compose">
                              Compose
                          </a>-->
                          <!-- Modal -->
          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal"   class="modal fade" style="display: none;">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                  <h4 class="modal-title">Compose</h4>
                </div>
                <div class="modal-body">
                  <form role="form" class="form-horizontal">
                    <div class="form-group">
                      <label class="col-lg-2 control-label">To</label>
                        <div class="col-lg-10">
                          <input type="text" placeholder="" id="inputEmail1" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                      <label class="col-lg-2 control-label">Cc / Bcc</label>
                      <div class="col-lg-10">
                        <input type="text" placeholder="" id="cc" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-lg-2 control-label">Subject</label>
                      <div class="col-lg-10">
                        <input type="text" placeholder="" id="inputPassword1" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-lg-2 control-label">Message</label>
                      <div class="col-lg-10">
                        <textarea rows="10" cols="30" class="form-control" id="" name=""></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                        <span class="btn green fileinput-button">
                          <i class="fa fa-plus fa fa-white"></i>
                          <span>Attachment</span>
                          <input type="file" name="files[]" multiple="">
                        </span>
                        <button class="btn btn-send" type="submit">Send</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
          </div><!-- /.modal -->
        </div>

        <ul class="inbox-nav inbox-divider">
          <center><li> <h4>STATISTIQUES</h4> </li></center>
          <li class="active">
            <a href="#"><i class="fa fa-inbox"></i>Demandes par bureau </a>
          </li>
          <li >
            <a href="#"><i class="fa fa-envelope-o"></i> Demandes par âge</a>
          </li>
          <li>
            <a href="#"><i class="fa fa-bookmark-o"></i>Demandes selon le genre</a>
          </li>
          <li>
            <a href="#"><i class=" fa fa-external-link"></i>Demandes selon le niveau d'étude </a>
          </li>
          <li>
            <a href="#"><i class=" fa fa-trash-o"></i> Demandes selon le type de contrat</a>
          </li>
          <li>
            <a href="#"><i class="fa fa-external-link"></i> Carte interactive</a>
          </li>
        </ul>
      </aside>

      <aside class="lg-side">
        <div class="inbox-head">
          <h3>Plateforme de requêtage</h3>
        </div>

        <div class="inbox-body">
          <div class="mail-option">

            <form method="post" action="accueil.php?affichage=1">  

              <div class="panel panel-primary">
                <div class="panel-heading">
                  Choisir une période
                </div>
                <div class="panel-body">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="container">
                        <div class="row">
                          <div class='col-sm-2'>
                            <label>Début</label>
                          </div>
                          <div class='col-sm-4'>
                            <div class="form-group">
                              <div class='input-group date' id='datetimepicker1'>
                                <input type='text' class="form-control" name="debut" value="<?php if (isset($_POST['debut'])) echo($_POST['debut'] ) ?>" />
                                <span class="input-group-addon">
                                  <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                              </div>
                            </div>
                          </div>
                          <div class='col-sm-2'>
                            <label>Fin</label>
                          </div>
                          <div class='col-sm-4'>
                            <div class="form-group">
                              <div class='input-group date' id='datetimepicker2'>
                                <input type='text' class="form-control" name="fin" value="<?php if (isset($_POST['fin'])) echo($_POST['fin'] ) ?>" />
                                <span class="input-group-addon">
                                  <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                              </div>
                            </div>
                          </div>
                        </div>

                        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
                        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/locales/bootstrap-datepicker.es.min.js"></script>

                        <script >
                          $(function () {
                            $('#datetimepicker1').datepicker({
                              format: "yyyy/mm/dd",
                              language: "fr",
                              autoclose: true,
                              todayHighlight: true
                            });
                          });
                        </script>

                        <script >
                          $(function () {
                            $('#datetimepicker2').datepicker({
                              format: "yyyy/mm/dd",
                              language: "fr",
                              autoclose: true,
                              todayHighlight: true
                            });
                          });
                        </script>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="panel panel-primary">
                <div class="panel-heading">
                  Choisir un type de diagramme
                </div>
                <div class="panel-body">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="container">
                        <div class="row">
                          <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                            <div class="form-check-inline" id="inlinebox">
                              <div id="radio1">
                                <label class="customradio">
                                  <span class="radiotextsty">Diagramme en bâtons</span>
                                  <input type="radio" name="radio" value="diagbat"checked="checked" <?php if ((isset($_REQUEST['radio'])) && ($_REQUEST['radio'] == 'diagbat')) {echo 'checked="checked"';}?> >
                                  <span class="checkmark"></span>
                                </label>    
                              </div>     
                              <div id="radio2"> 
                                <label class="customradio">
                                  <span class="radiotextsty">Diagramme circulaire</span>
                                  <input type="radio" name="radio" value="diagcirc"  <?php if ((isset($_REQUEST['radio'])) && ($_REQUEST['radio'] == 'diagcirc')) {echo 'checked="checked"';}?> >
                                  <span class="checkmark"></span>
                                </label>
                              </div>                              
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="form-group text-center">
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                
                  <input type="submit" class="btn btn-success btn-login-submit" value="Valider" name="bouton"/>
                  <a href="accueil.php"><input type="button" class="btn btn-danger btn-login-submit" value="Annuler" name="bouton2" /></a>
                </div>
              </div>

            </form>



<?php

if (isset($_GET['affichage'])) {
  if ($affichage=1){
           
?>

            <div class="panel panel-default">
              <div class="panel-body" style="padding:0px">


<?php  

// connexion a la base de donner
  
try {
    $bdd = new PDO('mysql:host=localhost;dbname=anpej_bd', 'root', '');
}
catch (Exception $e){
        die('Erreur : ' . $e->getMessage());
}
  
// fin de la  connexion

 
if ( !(empty($_REQUEST['debut'])) && !(empty($_REQUEST['fin'])) ) {

  $requete="SELECT count(Dem_Id) as 'Nombre' , Bur_Nom FROM td_demande LEFT JOIN td_agendarendezvous ON (Arv_Dem_Id=Dem_id) LEFT JOIN tp_bureau ON (Arv_Bur_Id=Bur_Id) WHERE Dem_Srv_Id=3 AND Dem_Sdm_Id !=1 AND Dem_DateSaisie  BETWEEN '".$_REQUEST['debut']."' AND '".$_REQUEST['fin']."' GROUP BY Bur_Nom ORDER BY count(Dem_Id) desc";

  $reponse = $bdd->query($requete);
 //echo "hello1".$requete;

}

elseif ( !(empty($_REQUEST['debut'])) ) {

  $requete="SELECT count(Dem_Id) as 'Nombre' , Bur_Nom FROM td_demande LEFT JOIN td_agendarendezvous ON (Arv_Dem_Id=Dem_id) LEFT JOIN tp_bureau ON (Arv_Bur_Id=Bur_Id) WHERE Dem_Srv_Id=3 AND Dem_Sdm_Id !=1 AND Dem_DateSaisie >= '".$_REQUEST['debut']."' GROUP BY Bur_Nom ORDER BY count(Dem_Id) desc";
  $reponse = $bdd->query($requete);

 //echo "hello2".$requete;

}

elseif ( !(empty($_REQUEST['fin'])) ) {
  $requete="SELECT count(Dem_Id) as 'Nombre' , Bur_Nom FROM td_demande LEFT JOIN td_agendarendezvous ON (Arv_Dem_Id=Dem_id) LEFT JOIN tp_bureau ON (Arv_Bur_Id=Bur_Id) WHERE Dem_Srv_Id=3 AND Dem_Sdm_Id !=1 AND Dem_DateSaisie <= '".$_REQUEST['fin']."' GROUP BY Bur_Nom ORDER BY count(Dem_Id) desc";
  $reponse = $bdd->query($requete);
  //echo "hello3".$requete;
}

else {
  $requete='SELECT count(Dem_Id) as "Nombre" , Bur_Nom FROM td_demande LEFT JOIN td_agendarendezvous ON (Arv_Dem_Id=Dem_id) LEFT JOIN tp_bureau ON (Arv_Bur_Id=Bur_Id) WHERE Dem_Srv_Id=3 AND Dem_Sdm_Id !=1 GROUP BY Bur_Nom ORDER BY count(Dem_Id) desc';
  $reponse = $bdd->query($requete);
    //echo "hello4".$requete;
}

// On affiche chaque entrée une à une

?>
                <table class="table table-striped table-bordered" style="margin:0px">

                  <thead>
                    <tr>
                      <th>Classement</th>
                      <th>Nom du bureau</th>
                      <th>effectif</th>
                    </tr>
                  </thead>

                  <tbody>

<?php 
  $compteur=1; 
  $i=0;
  $serie=array();
  $categorie=array();
  $seriebatton=array();
  $data= array();

  while ($donnees = $reponse->fetch()){

  // debut de traitemnt circulaire 
    
    $serie[$i]= array();
    $serie[$i][0]=$donnees['Bur_Nom'];
    $serie[$i][1]=intval($donnees['Nombre']);
    
//fin traitement circulaire 


    //debut traitement baton

    $categorie[$i]=$donnees['Bur_Nom'];
    $seriebatton[$i]=intval($donnees['Nombre']);


    //fintraitement baton

        $i++;

?>

                    <tr>
                      <td class=""><?php echo $compteur; $compteur++; ?></td>
                      <td class=""><?php echo $donnees['Bur_Nom']; ?></td>
                      <td class=""><?php echo $donnees['Nombre']; ?></td>
                    </tr>

<?php
  }

$reponse->closeCursor(); // Termine le traitement de la requête
//echo var_dump(json_encode($serie)); 

  
 ?> 
                  </tbody> 
                </table>
              </div>
            </div>

            <div class="panel panel-default">
              <div class="panel-body" style="padding:0px">

                <script src="highcharts.js"></script>
                <script src="exporting.js"></script>
                <script src="export-data.js"></script>
<?php 
  if(isset($_REQUEST['radio']) && $_POST['radio'] == "diagcirc") {
?>

                <div id="containerbis" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>

<?php } ?>
                <script type="text/javascript">
                  

                Highcharts.chart('containerbis', {
                  chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    type: 'pie'
                  },
                  title: {
                    text: 'Diagramme circulaire'
                  },
                  tooltip: {
                    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                  },
                  plotOptions: {
                    pie: {
                      allowPointSelect: true,
                      cursor: 'pointer',
                      dataLabels: {
                        enabled: true,
                        format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                        style: {
                          color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                        }
                      }
                    }
                  },
                  series: [{
                    name: 'Brands',
                    colorByPoint: true,
                    data: [
<?php
 
     $i=0;
    foreach($serie as $valeur)
{
  if($i!=0)
     echo  "['".$valeur[0]."',".$valeur[1]."],";
  else    
  echo  "{ name: '".$valeur[0]."', y: ".$valeur[1]." , sliced: true,
                        selected: true },";
$i++;                                                                                   
}
                                                                  ?>
                    ]
                  }]
                });
                </script>
              </div>

              <br/><br>

              <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
              <script src="https://code.highcharts.com/highcharts.js"></script>
              <script src="https://code.highcharts.com/highcharts-more.js"></script>
              <script src="https://code.highcharts.com/modules/exporting.js"></script>
<?php 

  if(isset($_REQUEST['radio']) && $_POST['radio'] == "diagbat") {

?>

              <div id="container3"></div>
              <button id="plain">Plain</button>
              <button id="inverted">Inverted</button>
              <button id="polar">Polar</button>
<?php }  ?>

              <script type="text/javascript">
                
            var chart = Highcharts.chart('container3', {

                title: {
                    text: 'Diagramme en bâtons'
                },

                subtitle: {
                    text: 'Plain'
                },

                xAxis: {
                    categories: <?php  echo json_encode($categorie); ?>
                },

                series: [{
                    type: 'column',
                    colorByPoint: true,
                    data: <?php  echo json_encode($seriebatton); ?>,
                    showInLegend: false
                }]

            });


            $('#plain').click(function () {
                chart.update({
                    chart: {
                        inverted: false,
                        polar: false
                    },
                    subtitle: {
                        text: 'Plain'
                    }
                });
            });

            $('#inverted').click(function () {
                chart.update({
                    chart: {
                        inverted: true,
                        polar: false
                    },
                    subtitle: {
                        text: 'Inverted'
                    }
                });
            });

            $('#polar').click(function () {
                chart.update({
                    chart: {
                        inverted: false,
                        polar: true
                    },
                    subtitle: {
                        text: 'Polar'
                    }
                });
            });

              </script>
            </div>

<?php }}
?>

          </div>
        </div>
      </aside>
    </div>
  </div>
</body>


</html>