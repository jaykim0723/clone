<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.js"></script>
<script type="text/javascript">	

 $( document ).ready(function(){
	 
	init();

	function init(){
	    current = 0;
	    audio = $('audio');
	    playlist = $('#playlist');
	    tracks = playlist.find('li a');
	    len = tracks.length - 1;
	    audio[0].volume = .10;
	    playlist.find('a').click(function(e){
	        e.preventDefault();
	        link = $(this);
	        current = link.parent().index();
	        run(link, audio[0]);
	    });
	    audio[0].addEventListener('ended',function(e){
	        current++;
	        if(current == len){
	            current = 0;
	            link = playlist.find('a')[0];
	        }else{
	            link = playlist.find('a')[current];    
	        }
	        run($(link),audio[0]);
	    });
	}
	function run(link, player){
	        player.src = link.attr('href');
	        par = link.parent();
	        par.addClass('active').siblings().removeClass('active');
	        audio[0].load();
	        audio[0].play();
	}
	
});
</script>


<style type="text/css">
#playlist,audio{background:#666;width:400px;padding:20px;}
.active a{color:#5DB0E6;text-decoration:none;}
li a{color:#eeeedd;background:#333;padding:5px;display:block;text-decoration:none;}
li a:hover{text-decoration:none;}
ul {list-style: none;}
</style>


</head>
<div style="position:relative;left:30%;">
    <audio id="audio" preload="auto" tabindex="0" controls="" type="audio/mpeg">
           <source type="audio/mp3" src="https://db.tt/DltJwce2">
    </audio>
  <ul id="playlist">
        <li class="active"><a href="https://db.tt/DltJwce2">태극기 휘날리며 OST - Prologue</a></li>
        <li><a href="https://db.tt/yX1Qh42n">The Island Soundtrack - My Name Is Lincoln (Steve Jablonsky)</a></li>
        <li><a href="https://db.tt/184H7iRV">달콤한 인생 (A bittersweet Life) OST - Yuhki Kuramoto - Romance</a></li>
        <li><a href="https://db.tt/tDn1dDe8">The Dark Knight OST - 8 Like A Dog Chasing Cars</a></li>
        <li><a href="https://db.tt/N7tTHVC8">Inception Soundtrack HD - #12 Time (Hans Zimmer)</a></li>
        <li><a href="https://db.tt/z0Ik2htz">Inception Soundtrack-Dream is Collapsing (Hans Zimmer)</a></li>
        <li><a href="https://db.tt/N7tTHVC8">진주만 ost - Tennessee (Hans Zimmer)</a></li>
        <li><a href="https://db.tt/svZRgEKw">Data - Verdict</a></li>
        <li><a href="https://db.tt/ureZBFqW">문명4 ost 바바예투 Piano ver.</a></li>
        <li><a href="https://db.tt/TeYw8OKt">하울의 움직이는성 ost -인생의 회전목마</a></li>
    </ul>
</div>
   <!--  <p style="text-align:center"><a href="http://jsfiddle.net/lastrose/vkMqR/light/"></a></p> -->
</html>