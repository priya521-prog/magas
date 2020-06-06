@extends('layout.main-front')
@section('title') @if( ! empty($title)) {{ $title }} | @endif @parent @endsection

@section('main')

<?php

function PIPHP_GetYahooNews($search)
{

   $reports = array();
   /* $url     = 'https://www.economist.com/finance-and-economics/rss.xml'; */
   /* $url     = 'https://www.ft.com/world/mideast?format=rss'; */
   $url     = 'http://www.moneycontrol.com/rss/latestnews.xml';
   $xml     = @file_get_contents($url);
//   print_r($xml);
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
     //  print_r($item);
      $flag  = FALSE;
      $url   = $item->link;
      $date  = date('M jS, g:ia', strtotime($item->pubDate));
      $title = $item->title;
      $temp  = explode(' (', $title);
      $title = $temp[0];
//      $site  = str_replace(')', '', $temp[1]);
       $site= $temp;
      $desc  = $item->description;
      //$desc1=explode(' (', $desc);
     
     // print_r($content22);
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
   
<!--        <h1>HEADLINES</h1>-->
	<div class="main">
            
		<div class="custom-container">
        
               
       
			<div class="listingbody">
			    		
				<div class="innerListingbody">
				   
				    <!--<div class="innerheading red" style="float:rght">  <li> <a href="{{ route('bizz1') }}">POST A WHITEPAPER</a> </li></div>-->
					<div class="innerheading violet" style="background: #EA1C57!important;">
						HEADLINES
					</div>
<div class="main" style="margin-top:-29px">
          
		<div class="custom-container">
<div style="margin-bottom:100px;width:100%">
<div class="tab-content responsive">
	<div class="tab-pane active" id="home" role="tabpanel">
		<div class="container-fluid">
			<div class="row mt-3">
				
				<div class="col-12" style="padding: 0;">
					<!--<p class="h3" class="innerheading violet" style="margin-top:77px">HEADLINES</p>-->
						<!--<div class="innerheading violet" style="margin-top:77px">HEADLINES</div>-->
					<!--<div class="innerheading violet">-->
					<!--	HEADLINES-->
					<!--</div>-->
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
			
         
			$dates= $result[2];
	    // $a=wp_trim_words($latestne(), 20, '' )
		//	print_r($a); 
/*echo "<p class='santhosh1'>
<a class='newsheadlines' href='$result[4]' target='_blank'>".ucwords(strtolower($latestnew))."</a></br>";
			echo "(".ucwords(strtolower($latestne))."&nbsp;($dates)</p>";*/
			?>
				
			<div class="headline_outter">
                <div class="row">
                     
                     <div class="col-md-12">

                          <div class="col-md-10">
				<div style="width: 100%;">
				   
					<h3>
						<a style="color: #002e5b; font-weight: Bold; font-size: 18px" href="<?php echo $result[4]; ?>"><?php echo ucwords(strtolower($latestnew)); ?></a>
					</h3>
                    <p><b>Moneycontrol News</b></p>
                     <p><a href="https://www.moneycontrol.com/" target="_blank">@Moneycontrol.com</a></p>
					<div>
					<?php
//            $content = strip_tags($latestne); 
//echo $content;
//						echo ucwords(strtolower($content));
            
					?>
					</div>
					
				</div>
                         </div>
                          <div class="col-md-2">
				<div class="headline_footer">
					<div class="headline_readmore" style="margin-top: 26px;
   ">
						<a href="<?php echo $result[4]; ?>" target="_blank"><button  style="background:#1d1d53;color:white;padding: 6px;width:91%;
    border: #1d1d53;">READ MORE</button></a>
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
</div>
</div>
</div>
</div>
</div>
</div>
      @endsection

