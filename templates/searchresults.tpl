{mask:main}

<style>
.pagination-menu-item-active { 
   background:black;
   padding:6px;
  }
.pagination-menu-item-active a {
  color:white;
}
.pagination-menu-item {
  padding:0 6px 0 6px;
}

</style>

<div id="prosodysearch-timeline"></div>


<p>Search term "<i>{q}</i>" returned {hits} hits in {records} works.</p>
{pagination_nav}
<p>Sort: Year: <a href="prosodysearch?{querystr}&sort=year asc">&#9660</a> <a href="prosodysearch?{querystr}&sort=year desc">&#9650;</a>
Title: <a href="prosodysearch?{querystr}&sort=title asc">&#9660</a> <a href="prosodysearch?{querystr}&sort=title desc">&#9650;</a></p>

{mask:results}
 <div style="margin:10px 0 10px 0">
  <div><a href="/record/{record}?s={php}urlencode({../q}){/php}">{title}</a> ({numfound} occurrences)</div>
  <div>{author_string} {biblio_publisher} {biblio_year}</div>
 </div>
{/mask}

<script language="javascript">
 jQuery( document ).ready(function() {

    jQuery('#prosodysearch-timeline').load('/sites/all/modules/contrib/prosodysearch/timeline.php')

});
</script>
{/mask}
