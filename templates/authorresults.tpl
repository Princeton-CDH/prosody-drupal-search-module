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

<p>Search term "<i>{q}</i>" returned {hits} hits in {records} works.</p>
{pagination_nav}
<p>Sort: Year: <a href="prosodysearch?{querystr}&sort=year asc">&#9660</a> <a href="prosodysearch?{querystr}&sort=year desc">&#9650;</a>
Title: <a href="prosodysearch?{querystr}&sort=title asc">&#9660</a> <a href="prosodysearch?{querystr}&sort=title desc">&#9650;</a></p>

{mask:results}
  {mask:authors}{name}<br />{/mask}
{/mask}

{/mask}
