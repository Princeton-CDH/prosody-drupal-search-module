<?php

class Solr
{


    function Solr()
    {

    }



function getSOLR($solr_args) {
  $solr_url = "http://prosody-dev.princeton.edu/solr/volumes/select?";
  $args = array();
  foreach($solr_args as $key=>$val) {
   $args[] = $key."=".$val;
  }
  $argstr = implode('&',$args);
  $solr_url .= $argstr;
  //echo $solr_url;
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $solr_url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  $output = curl_exec($ch);
  curl_close($ch);
  return json_decode($output);
}


//  this function is used to sort the array of objects returned by solr. results are sorted by numfound.
function sortNumFound($a, $b)
{
   return $b->numfound - $a->numfound;
}


function sortPagesReturned($a, $b)
{
   return $a->seq - $b->seq;
}


function cleanupDetail($result) {
  foreach($result->response->docs as $doc) { 
    $id = $doc->id;
    $returnArr[$id]->seq = $doc->seq;
    $returnArr[$id]->year = $doc->year;
    $returnArr[$id]->htid = $doc->htid;
    $returnArr[$id]->content = $result->highlighting->$id->content[0];
   }
  return $returnArr;
}





function paginationMenu ($queryArr, $numpages, $current, $range) {
  $linkArr = array();
  $start = $current-$range;
  $end = $current+$range;

  if($start<1) { $start = 1; $end = ($range*2)+1; }
  if($end>$numpages) { $end = $numpages; }
  unset($queryArr['q']);
  unset($queryArr['page']);
  $queryStr = "";
  foreach($queryArr as $key=>$val) { $queryStr .= $key."=".$val."&";  }

  if($start > 1) {
     $linkArr[] = "<span class='pagination-menu-item' style='padding-right:5px;'><a href='prosodysearch?".$queryStr."page=1'>First</a></span> ... ";
  }

  for($x=$start;$x<=$end;$x++)
	{
	if($x==$current) { $linkArr[] = "<span class='pagination-menu-item-active'><a href='prosodysearch?".$queryStr."page=".$x."'>".$x."</a></span>"; }
	else {$linkArr[] =  "<span class='pagination-menu-item'><a href='prosodysearch?".$queryStr."page=".$x."'>".$x."</a></span>";  }
	}
  $linkArr[] = "... <span class='pagination-menu-item' style='padding-right:5px;'><a href='prosodysearch?".$queryStr."page=".$numpages."'>Last</a></span>";
  return implode($linkArr);
}




}
