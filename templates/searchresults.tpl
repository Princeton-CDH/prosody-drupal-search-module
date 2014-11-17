{mask:main}


<p>Search term "<i>{q}</i>" returned {hits} hits.</p>
<p>Sort: Year: <a href="prosodysearch?{querystr}&sort=year asc">&#9660</a> <a href="prosodysearch?{querystr}&sort=year desc">&#9650;</a>
Title: <a href="prosodysearch?{querystr}&sort=title asc">&#9660</a> <a href="prosodysearch?{querystr}&sort=title desc">&#9650;</a></p>



{mask:results}
 <div style="margin:10px 0 10px 0">
  <div><a href="prosodydetail?htid={htid}&s={php}urlencode({../q}){/php}">{title}</a> ({numfound} occurences)</div>
  <div>{publisher} {year}</div>
 </div>
{/mask}
{/mask}
