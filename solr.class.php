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
    $returnArr[$id]->content = $result->highlighting->$id->content[0];
   }
  return $returnArr;
}






}
