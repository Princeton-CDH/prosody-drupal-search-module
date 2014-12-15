{mask:main}

<form name='search' id='search' action='prosodysearch' method='GET'>
<!--<input type='hidden' name='a' value='search' />-->
<p>Search term:<input type='text' name='s' value="{php}htmlentities({q}){/php}" style="width:350px" /></p>
<p>Start year: <input type='text' name='start' value="{start}"  style="width:100px;display:inline" /> &#160;&#160;End year: <input type='text' name='end' value="{end}"   style="width:100px;display:inline" /></p>
<p>Authors: <input type="checkbox" name="author" value="1" />
</p>
<input type='submit' value='Search' />
</form> 


{/mask}
