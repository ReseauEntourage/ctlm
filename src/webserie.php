<div class="container">
    <h2>Notre web serie Comme tout le monde</h2>
    <p class="info_ws">Cette web-série a été diffusée  dans  le Huffington-Post entre novembre 2015 et avril  2016.</p>
    <p class="info_ws">Notre chaîne Youtube : <a href="https://www.youtube.com/channel/UCJtX9XLiy695F6SRYqFqalg" target="_blank">CTLM Doc</a></p>
    <iframe src="https://www.youtube.com/embed/videoseries?list=PLdRnPjqsXDrSDo7-dF9qfZbGviKBcvfsO" frameborder="0" allowfullscreen></iframe>
</div>
<script>
$( document ).ready(function() {
    var width_screen = $(window).width();
    if (width_screen < 800){
        var height_video = $('iframe').width()/1.777;
        $(' iframe').css({'height':height_video});
    }
});
window.onresize = function(){
    var width_screen = $(window).width();
    if (width_screen < 800){
        var height_video = $(' iframe').width()/1.777;
        $('iframe').css({'height':height_video});
    }
}
</script>