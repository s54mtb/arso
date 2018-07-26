<?php

  if(!isset($_GET["txt"]))    
  /* ******************************** HTML GLAVA **************************** */
  echo '
            <!DOCTYPE html>
            <html xmlns="http://www.w3.org/1999/xhtml" lang="en">
            <head>
            
              <meta charset="utf-8">
              <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
            
              <title>Pregled vremenskih podatkov</title>
              
            <style>
            
            p.odstavek {
                font: 15px arial, sans-serif;
            }
            
            
            #tabela {
                font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                width: 100%;
                border-collapse: collapse;
                
            }
            
            #tabela td, #tabela th {
                font-size: 1em;
                border: 1px solid #';

                /***** border color *******/
                if(!isset($_GET["bordercolort"]))
                {
                    echo '2198bf;
                    ';
                }
                else
                {
                    echo $_GET["bordercolort"].';
                    ';
                }
                
                
                echo 'padding: 3px 7px 2px 7px;
                ';
                
                
                /******* table font color **********/
                
                echo 'color: ';
                if(!isset($_GET["txtcolort"]))
                {
                    echo '#0000000;
                    ';
                }
                else
                {
                    echo '#'.$_GET["txtcolort"].';
                    ';
                }



                /******* table background color **********/
                
                echo 'background-color: ';
                if(!isset($_GET["bgcolort"]))
                {
                    echo '#0000000;
                    ';
                }
                else
                {
                    echo '#'.$_GET["bgcolort"].';
                    ';
                }




            echo'    
            }
            
            #tabela th {
                font-size: 1.1em;
                text-align: left;
                padding-top: 5px;
                padding-bottom: 4px;
                background-color: ';
                if(!isset($_GET["bgcolorh"]))
                {
                    echo '#42A7C9;
                    ';
                }
                else
                {
                    echo '#'.$_GET["bgcolorh"].';
                    ';
                }
                echo 'color: ';
                if(!isset($_GET["txtcolorh"]))
                {
                    echo '#ffffff;
                    ';
                }
                else
                {
                    echo '#'.$_GET["txtcolorh"].';
                    ';
                }
            
            
            echo '
            #tabela tr.alt td {
                color: #ff0000;
                background-color: #D3EAF2;
            }
            </style>
            </head>
            <body>
            <pre>';
  /* ******************************** HTML GLAVA **************************** */

    /* *********** Priprava podatkov iz url naslova ************************* */
    if(!isset($_GET["wx"])) die("Kraj ni podan (parameter wx).");
    $url = 'http://meteo.arso.gov.si/uploads/probase/www/observ/surface/text/sl/observationAms_'.$_GET["wx"].'_latest.xml';
    //$url = 'http://meteo.arso.gov.si/uploads/probase/www/observ/surface/text/sl/observationAms_NOVO-MES_latest.xml';
    $xml = simplexml_load_file($url) or die("Podatki niso na voljo ali niso dostopni.");

  /* ******************************** HTML vsebina **************************** */
  if(!isset($_GET["txt"]))    
  {
      echo '</pre>';
      
      if(!isset($_GET["noimg"])) 
      {
          echo '<img src='.$xml->image_url.'> <br>';
      }
      
      echo '<p class="odstavek">
        Vreme za:'.$xml->metData->domain_longTitle.'<br>
        Odčitano:'.$xml->metData->tsValid_issued.'<br>
        Posodobljeno:'.$xml->metData->tsUpdated.','.$xml->metData->tsUpdated_UTC.'<br>
        </p>
        <hr>
        <table id="tabela">
          <tr>
            <th>Parameter</th>
            <th>Vrednost</th>
            <th>Enota</th>
          </tr>';
          
      echo '  
        <tr><td>'.$xml->metData->tavg_var_desc.'</td>
        <td>'.$xml->metData->tavg.'</td>
        <td>'.$xml->metData->tavg_var_unit.'</td></tr>
        
        <tr class="alt"><td>'.$xml->metData->tx_var_desc.'</td>
        <td>'.$xml->metData->tx.'</td>
        <td>'.$xml->metData->tx_var_unit.'</td></tr>
        
        <tr><td>'.$xml->metData->tn_var_desc.'</td>
        <td>'.$xml->metData->tn.'</td>
        <td>'.$xml->metData->tn_var_unit.'</td></tr>
        
        <tr class="alt"><td>'.$xml->metData->rh_var_desc.'</td>
        <td>'.$xml->metData->rh.'</td>
        <td>'.$xml->metData->rh_var_unit.'</td></tr>
        
        <tr><td>'.$xml->metData->rhavg_var_desc.'</td>
        <td>'.$xml->metData->rhavg.'</td>
        <td>'.$xml->metData->rhavg_var_unit.'</td></tr>
        
        <tr class="alt"><td>'.$xml->metData->dd_var_desc.'</td>
        <td>'.$xml->metData->dd_val.'</td>
        <td>'.$xml->metData->dd_var_unit.'</td></tr>
        
        <tr><td>'.$xml->metData->ddavg_var_desc.'</td>
        <td>'.$xml->metData->ddavg_val.'</td>
        <td>'.$xml->metData->ddavg_var_unit.'</td></tr>
        
        <tr class="alt"><td>'.$xml->metData->ddmax_var_desc.'</td>
        <td>'.$xml->metData->ddmax_val.'</td>
        <td>'.$xml->metData->ddmax_var_unit.'</td></tr>
        
        <tr><td>'.$xml->metData->ff_var_desc.'</td>
        <td>'.$xml->metData->ff_val.'</td>
        <td>'.$xml->metData->ff_var_unit.'</td></tr>
        
        <tr class="alt"><td>'.$xml->metData->ffavg_var_desc.'</td>
        <td>'.$xml->metData->ffavg_val.'</td>
        <td>'.$xml->metData->ffavg_var_unit.'</td></tr>
        
        <tr><td>'.$xml->metData->ffmax_var_desc.'</td>
        <td>'.$xml->metData->ffmax_val.'</td>
        <td>'.$xml->metData->ffmax_var_unit.'</td></tr>
        
        <tr class="alt"><td>'.$xml->metData->msl_var_desc.'</td>
        <td>'.$xml->metData->msl.'</td>
        <td>'.$xml->metData->msl_var_unit.'</td></tr>
        
        <tr><td>'.$xml->metData->mslavg_var_desc.'</td>
        <td>'.$xml->metData->mslavg.'</td>
        <td>'.$xml->metData->mslavg_var_unit.'</td></tr>
        
        <tr class="alt"><td>'.$xml->metData->p_var_desc.'</td>
        <td>'.$xml->metData->p.'</td>
        <td>'.$xml->metData->p_var_unit.'</td></tr>
        
        <tr><td>'.$xml->metData->pavg_var_desc.'</td>
        <td>'.$xml->metData->pavg.'</td>
        <td>'.$xml->metData->pavg_var_unit.'</td></tr>
        
        <tr class="alt"><td>'.$xml->metData->rr_var_desc.'</td>
        <td>'.$xml->metData->rr_val.'</td>
        <td>'.$xml->metData->rr_var_unit.'</td></tr>
        
        <tr><td>'.$xml->metData->tp_12h_acc_var_desc.'</td>
        <td>'.$xml->metData->tp_12h_acc.'</td>
        <td>'.$xml->metData->tp_12h_acc_var_unit.'</td></tr>
        
        <tr class="alt"><td>'.$xml->metData->tw_var_desc.'</td>
        <td>'.$xml->metData->tw.'</td>
        <td>'.$xml->metData->tw_var_unit.'</td></tr>
        
        <tr><td>'.$xml->metData->gSunRad_var_desc.'</td>
        <td>'.$xml->metData->gSunRad.'</td>
        <td>'.$xml->metData->gSunRad_var_unit.'</td></tr>
        
        <tr class="alt"><td>'.$xml->metData->gSunRadavg_var_desc.'</td>
        <td>'.$xml->metData->gSunRadavg.'</td>
        <td>'.$xml->metData->gSunRadavg_var_unit.'</td></tr>
        
        <tr><td>'.$xml->metData->tg_5_cm_var_desc.'</td>
        <td>'.$xml->metData->tg_5_cm.'</td>
        <td>'.$xml->metData->tg_5_cm_var_unit.'</td></tr>
        
        <tr class="alt"><td>'.$xml->metData->tgavg_5_cm_var_desc.'</td>
        <td>'.$xml->metData->tgavg_5_cm.'</td>
        <td>'.$xml->metData->tgavg_5_cm_var_unit.'</td></tr>
        
        <tr><td>'.$xml->metData->tg_10_cm_var_desc.'</td>
        <td>'.$xml->metData->tg_10_cm.'</td>
        <td>'.$xml->metData->tg_10_cm_var_unit.'</td></tr>
        
        <tr class="alt"><td>'.$xml->metData->tgavg_10_cm_var_desc.'</td>
        <td>'.$xml->metData->tgavg_10_cm.'</td>
        <td>'.$xml->metData->tgavg_10_cm_var_unit.'</td></tr>
        
        <tr><td>'.$xml->metData->tg_30_cm_var_desc.'</td>
        <td>'.$xml->metData->tg_30_cm.'</td>
        <td>'.$xml->metData->tg_30_cm_var_unit.'</td></tr>
        
        <tr class="alt"><td>'.$xml->metData->tgavg_30_cm_var_desc.'</td>
        <td>'.$xml->metData->tgavg_30_cm.'</td>
        <td>'.$xml->metData->tgavg_30_cm_var_unit.'</td></tr>';

    echo '        
        <table>
        <hr>
        <pre>';
  }

  if(isset($_GET["xml"])) 
  {
        echo "Cloten XML...\n";
        print_r($xml );
  }
  
  if(!isset($_GET["txt"])) 
  {
      echo '</pre>
            </body>
            </html>';
  }
  
  if(isset($_GET["json-compact"])) 
  {
    echo'
      {
        "timestamp": '.strtotime($xml->metData->tsUpdated_UTC).'>,
        "wind": {
            "speed": '.$xml->metData->ffavg_val_kmh.',  
            "direction": '.$xml->metData->ddavg_val.',
            "gust": '.$xml->metData->ffmax_val_kmh."\n".'
        },
        "temperature": '.$xml->metData->tavg.',
        "rainfall": '.$xml->metData->rr_val.',
        "sun": '.$xml->metData->gSunRad.',
        "humidity": '.$xml->metData->rhavg.',
        "pressure": '.$xml->metData->pavg.'}';
  }
  
  
  if(isset($_GET["json"])) 
  {
        $json = json_encode($xml);

    print_r($json);
  }  

?>

