<h1>Task # {id}</h1>
<form role="form" action="/mtce/submit" method="post">
    {ftask}
    {fsize}
    {fgroup}
    {fstatus}
    {fpriority}
    {zsubmit}
</form>
<br/>
<div>
<a href="/mtce/cancel"><input type="button" value="Cancel the current edit"/></a>
</div>
<br/>
<div>
<a href="/mtce/delete"><input type="button" value="Delete this todo item"/></a>
</div>
{error}