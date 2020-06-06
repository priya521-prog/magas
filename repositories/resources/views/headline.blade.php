<!DOCTYPE>
<html>
<head> <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script></head>

<?php

function PIPHP_GetYahooNews($search)
{

   $reports = array();
   /* $url     = 'https://www.economist.com/finance-and-economics/rss.xml'; */
   /* $url     = 'https://www.ft.com/world/mideast?format=rss'; */
   $url     = 'http://www.moneycontrol.com/rss/latestnews.xml';
   $xml     = @file_get_contents($url);
  if (!strlen($xml)) return array(FALSE);
  $xml  = str_replace('<![CDATA[',        '', $xml);
  $xml  = str_replace(']]>',              '', $xml);
  $xml  = str_replace('&amp;', '[ampersand]', $xml);
  $xml  = str_replace('&',           '&amp;', $xml);
  $xml  = str_replace('[ampersand]', '&amp;', $xml);
  $xml  = str_replace('<b>',     '&lt;b&gt;', $xml);
  $xml  = str_replace('</b>',   '&lt;/b&gt;', $xml);
  $xml  = str_replace('<wbr>', '&lt;wbr&gt;', $xml);
  $sxml = simplexml_load_string($xml);
   foreach($sxml->channel->item as $item)
   {
      $flag  = FALSE;
      $url   = $item->link;
      $date  = date('M jS, g:ia', strtotime($item->pubDate));
      $title = $item->title;
      $temp  = explode(' (', $title);
      $title = $temp[0];
//      $site  = str_replace(')', '', $temp[1]);
       $site= $temp;
      $desc  = $item->description;
      for ($j = 0 ; $j < count($reports) ; ++$j)
      {
         similar_text(strtolower($reports[$j][0]),
            strtolower($title), $percent);
         if ($percent > 70)
         {
            $flag = TRUE;
            break;
         }
      }
      if (!$flag && strlen($desc))
         $reports[] = array($title,$site, $date, $desc, $url);
     }
   return array(count($reports), $reports);
}
          ?>
    <body>
<!--        <h1>HEADLINES</h1>-->
<div style="margin-bottom:100px;width:100%">
<div class="tab-content responsive" style="margin-top: -20px;">
	<div class="tab-pane active" id="home" role="tabpanel">
		<div class="container-fluid">
			<div class="row mt-3">
				
				<div class="col-12" style="padding: 0;">
					<p class="h3"></p>
					<div id="firstdivajax">
<?php 
$results ='';
$search = "";
$results = PIPHP_GetYahooNews($search);
//                        $results="http://www.moneycontrol.com/rss/latestnews.xml";
if (!$results[0]) { echo "No Records found $search."; }
else {
$i=1;
   foreach($results[1] as $result) {
		if($i<=20){
			$latestnew= $result[0];
			$latestne= strip_tags($result[3]);
            //print_r($latestne); 
			$dates= $result[2];
/*echo "<p class='santhosh1'>
<a class='newsheadlines' href='$result[4]' target='_blank'>".ucwords(strtolower($latestnew))."</a></br>";
			echo "(".ucwords(strtolower($latestne))."&nbsp;($dates)</p>";*/
			?>
			
			<div class="headline_outter">
                <div class="row">
                     <div class="col-md-12">
                          <div class="col-md-9">
				<div style="width: 100%;">
					<h3>
						<a style="color: #002e5b; font-weight: Bold; font-size: 18px" href="<?php echo $result[4]; ?>"><?php echo ucwords(strtolower($latestnew)); ?></a>
					</h3>

					<div>
					<?php
//            $content = strip_tags($latestne); 
//echo $content;
//						echo ucwords(strtolower($content));
            
					?>
					</div>
					
				</div>
                         </div>
                          <div class="col-md-3">
				<div class="headline_footer">
					<div class="headline_readmore" style="margin-top: 26px;
   ">
						<a href="<?php echo $result[4]; ?>" target="_blank"><button>READ MORE</button></a>
<!--						<span>↓</span>-->
					</div>
				</div>
</div>
                    </div>
                    
                </div>
               
			</div>
                         <hr style="color:pink">
			<?php
			
			
			
		$i++;	
		}		
	}
 }

						?>
</div>
				</div>
			</div>
		</div>
	</div>
	<div class="tab-pane" id="profile" role="tabpanel">
		<div class="container-fluid">
			<div class="row mt-3">
				<div class="col-12">

					<p id="seconddivajax"></p>
				</div>
				
			</div>
		</div>
	</div>
	<div class="tab-pane" id="messages" role="tabpanel">
		<div class="container-fluid">
			<div class="row mt-3">
				<div class="col-12">

					<div class="row mt-3">
				<div class="col-12">
          <!--
					<p class='santhosheeee' ><img src='images/pointimg.png' />&nbsp;&nbsp;
<a class='newsheadlines' href='downloads/MAGASBrochure.pdf' target='_blank'>Magas Brochure</a>
			</p>
    -->
      
<!--<p class='santhosheeee'><img src='images/pointimg.png' />&nbsp;&nbsp;-->
<!--<a class='newsheadlines' href='downloads/MagasTeaser.pdf' target='_blank'>Magas Teaser</a>-->
<!--			</p>-->

<!--
<p class='santhosheeee'><img src='images/pointimg.png' />&nbsp;&nbsp;
<a class='newsheadlines' href='downloads/Whitepapers/VATPresentation.pdf' target='_blank'>VAT Presentation</a>
-->

<!--			</p>-->
		
					
				</div>
			</div>
				</div>
			</div>
		</div>
	</div>
</div>

</div>
        </body>
    </html>
<style>
.nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
/*background: #C233FD !important;*/
color: white !important;
}

</style>
<script>


function showUsertwo(str) {
    
        document.getElementById("firstdivajax").innerHTML = "<img src='<?php echo JURI::base();?>btn-ajax-loader.gif'>";
      
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("firstdivajax").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","newsajax/ajaxdefault.php?nocache="+Math.random(),true);
        xmlhttp.send();
    
}


</script>
