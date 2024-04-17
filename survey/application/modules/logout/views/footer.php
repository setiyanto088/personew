<style>
#footer {
   position:fixed;
   left:0px;
   bottom:0px;
   height:30px;
   width:100%;
   background:#fff;
}

/* IE 6 */
* html #footer {
   position:absolute;
   top:expression((0-(footer.offsetHeight)+(document.documentElement.clientHeight ? document.documentElement.clientHeight : document.body.clientHeight)+(ignoreMe = document.documentElement.scrollTop ? document.documentElement.scrollTop : document.body.scrollTop))+'px');
}
</style>
<div id="footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.0
        </div>
        <strong>Copyright &copy; 2015-2016 <a href="http://www.swamedia.co.id/">PT. Swamedia</a>.</strong> All rights reserved.

</div>

