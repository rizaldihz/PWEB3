<!DOCTYPE html>
<html>
<head>
    {% include 'layout\head.volt' %}
</head>
<body>
    {% include 'layout\navbar.volt' %}
    <div id="container">
    	<div class="poster">
    		<div class="judul">
    			<h3>TILIK DESA</h3>
    			<p>Kunjungi Destinasi Wisata Impianmu</p>
    		</div>
    		<div class="gradient-background"></div>
    	</div>

    </div>
</body>
<style>
.poster{
    width: 100%;
    height: 720px;
    background-image: url("{{ url("img/g1.jpg") }}");
    background-position: center;
    border-bottom: 8px solid #FFA500; 
    border-bottom-right-radius: 5px;
    border-bottom-left-radius: 5px;
    box-shadow: 0px 0px 20px grey;
    animation: change 15s infinite;
}


/*Safari*/
@-webkit-keyframes change {
    32.9%{background-image: url({{ url("img/g1.jpg") }});}
    33%   {background-image:url({{ url("img/g2.jpg") }});}
    65.9%{background-image:url({{ url("img/g2.jpg") }});}
    66%  {background-image: url({{ url("img/g3.jpg") }});}
    98.9%  {background-image: url({{ url("img/g3.jpg") }});}
    99% {background-image: url({{ url("img/g1.jpg") }});}
}

@keyframes change {
    2.9%{background-image: url({{ url("img/g1.jpg") }});}
    33%   {background-image:url({{ url("img/g2.jpg") }});}
    65.9%{background-image:url({{ url("img/g2.jpg") }});}
    66%  {background-image: url({{ url("img/g3.jpg") }});}
    98.9%  {background-image: url({{ url("img/g3.jpg") }});}
    99% {background-image: url({{ url("img/g1.jpg") }});}
}
</style>
</html>