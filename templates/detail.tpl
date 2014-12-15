{mask:main}

<style>

.search-result-page-num {
  font-weight:bold;
  font-size:110%;
}

.search-result-kwic strong {
  font-weight:bold;
  color:red;
}

</style>


<table>
<tbody>
 <tr class="odd"><td class="biblio-row-title">Title</td><td>{title}</td> </tr>
 <tr class="even"><td class="biblio-row-title">Secondary Title</td><td>{biblio_secondary_title}</td> </tr>
 <tr class="odd"><td class="biblio-row-title">Year of Publication</td><td>{biblio_year}</td> </tr>
 <tr class="even"><td class="biblio-row-title">Author</td><td>{mask:biblio_contributors}an author {/mask}</td> </tr>
 <tr class="odd"><td class="biblio-row-title">Pages</td><td>{biblio_pages}</td></tr>
 <tr class="even"><td class="biblio-row-title">Publisher</td><td>{biblio_publisher}</td> </tr>
 <tr class="odd"><td class="biblio-row-title">City</td><td>{biblio_city}</td> </tr>
 <tr class="odd"><td class="biblio-row-title">URL</td><td><a href="{biblio_url}">{biblio_url}</a></td> </tr>
</tbody>
</table>



{mask:results}
 <div style="margin-bottom:20px;clear:both;">
 <a href="http://babel.hathitrust.org/cgi/pt?id={htid};view=1up;seq={seq}">
     <img src="http://babel.hathitrust.org/cgi/imgsrv/image?id={htid};orient=0;size=10;seq={seq}" style="float:left;margin-bottom:30px;"/></a>
  <div class='search-result-page-num' style="margin:10px;padding-left:190px;">Page {seq} ({year}) </div>
  <div class='search-result-kwic' style="margin:10px;padding-left:190px;">{content}</div>
 </div>
{/mask}
{/mask}
