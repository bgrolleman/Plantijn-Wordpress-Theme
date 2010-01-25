<script>
function sfocus() {
if (document.getElementById('s').value=='Zoeken') {
document.getElementById('s').value='';
}
}
function sblur() {
if (document.getElementById('s').value=='') {
document.getElementById('s').value='Zoeken';
}
}
</script>
<?php if (wp_specialchars($s, 1)!='') {
$svalue=wp_specialchars($s, 1);
} else {
$svalue='Zoeken';
}?>
<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
<div><input type="text" class="s" value="<?php echo $svalue; ?>" name="s" id="s" onBlur="sblur()" onFocus="return sfocus()" />
</div>
</form>
