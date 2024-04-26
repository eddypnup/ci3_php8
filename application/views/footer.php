<style>
.center {width:100%; text-align:center; background:#eee; position:fixed; bottom:0;} /*margin: auto pengganti position*/
</style>
<div class="col-lg-12"><div class="row center">&copy; Politeknik Negeri Ujung Pandang 2024</div></div>
</div> <!-- wrapper -->
<script>
/* sidebar.php: keep toggled */
if(!$.cookie('numclick')) $.cookie('numclick',0);

if($.cookie('numclick') % 2 == 1){
	$("#wrapper").toggleClass("toggled");
	//hide collapse is not working yet
}

$("#menu-toggle").click(function(e) {
	var hsl = parseInt($.cookie('numclick'))+1;
	$.cookie('numclick',hsl);
	$("#wrapper").toggleClass("toggled");
	$("#wrapper.toggled").find("#sidebar-wrapper").find(".collapse2").collapse("hide");
});
/* sidebar.php: scroll enabled *
var topNavBar = 50;
var footer = 48;
var height = $(window).height();
$('.sidebar').css('height', (height - (topNavBar+footer)));

$(window).resize(function(){
    var height = $(window).height();
    $('.sidebar').css('height', (height - (topNavBar+footer)));
});
/**/
</script>