<!DOCTYPE html>
<html>

<header>
 
  <style>
    div.page::-webkit-scrollbar {     
  width: 0 !important;
}

@font-face {
  font-family: 'Droid Sans';
  font-style: normal;
  font-weight: 400;
  src: local('Droid Sans'), local('DroidSans'), url(https://fonts.gstatic.com/s/droidsans/v6/s-BiyweUPV0v-yRb-cjciL3hpw3pgy2gAi-Ip7WPMi0.woff) format('woff');
}
@font-face {
  font-family: 'Droid Sans';
  font-style: normal;
  font-weight: 700;
  src: local('Droid Sans Bold'), local('DroidSans-Bold'), url(https://fonts.gstatic.com/s/droidsans/v6/EFpQQyG9GqCrobXxL-KRMXbFhgvWbfSbdVg11QabG8w.woff) format('woff');
}

@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 300;
  src: local('Lato Light'), local('Lato-Light'), url(https://fonts.gstatic.com/s/lato/v11/kcf5uOXucLcbFOydGU24WALUuEpTyoUstqEm5AMlJo4.woff) format('woff');
}
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 400;
  src: local('Lato Regular'), local('Lato-Regular'), url(https://fonts.gstatic.com/s/lato/v11/qIIYRU-oROkIk8vfvxw6QvesZW2xOQ-xsNqO47m55DA.woff) format('woff');
}
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 700;
  src: local('Lato Bold'), local('Lato-Bold'), url(https://fonts.gstatic.com/s/lato/v11/qdgUG4U09HnJwhYI-uK18wLUuEpTyoUstqEm5AMlJo4.woff) format('woff');
}


#app>header div.system-bar {
  line-height:10pt;
  font-size:6pt;
  width:100%;
  font-family:'Helvetica Neue';
  font-weight:400;
  padding-bottom:2pt;
  overflow:auto;
}
.left span, .right span {
font-size:1.5em;
line-height:1pt;
}
#app>header {
  position:absolute;
  top:0;
  left:0;
  right:0;
  height:42px;
  line-height:42px;
  background-color:#fff;
  padding:4pt 8pt 16pt 8pt;
  color:#222;
  overflow:hidden;
}

#app>footer {
  position:absolute;
  bottom:0;
  left:0;
  right:0;
  height:24px;
  line-height:24px;
  background-color:#fff;
  padding:8pt 8pt 8pt 8pt;
  color:#222;
}

#app>div.page {
  position:absolute;
  top:44pt;
   bottom:34pt;
  left:0;
  right:0;
  overflow:auto;
  padding:8pt;
  line-height:1.5;
}
#app * {
  -webkit-touch-callout: none; /* iOS Safari */
  -webkit-user-select: none;   /* Chrome/Safari/Opera */
  -khtml-user-select: none;    /* Konqueror */
  -moz-user-select: none;      /* Firefox */
  -ms-user-select: none;       /* Internet Explorer/Edge */
  user-select: none;           /* Non-prefixed version, currently
                                  not supported by any browser */
}

#app {
  width:240px;
  height:426px;
  background-color:#fefefe;
  border-radius:4px;
  border:1px solid #999;
  position:relative;
  text-align:left;
  overflow:hidden;
  font-family:'Lato';
  font-size:9pt;
  line-height:1;
    -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
   color:#333;
}

body {
  text-align:center;
  padding:0;
  margin:0;
  background: #353138;
  background: -moz-radial-gradient(center, ellipse cover,  #353138 0%, #1a181c 100%);
  background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%, #353138), color-stop(100%, #1a181c));
  background: -webkit-radial-gradient(center, ellipse cover,  #353138 0%,#1a181c 100%);
  background: -o-radial-gradient(center, ellipse cover,  #353138 0%,#1a181c 100%);
  background: -ms-radial-gradient(center, ellipse cover,  #353138 0%,#1a181c 100%);
  background: radial-gradient(ellipse at center,  #353138 0%,#1a181c 100%);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr = '#353138', endColorstr='#1a181c', GradientType=1);
  font-family:'Lato';
  color:#f0f0f0;
}

body>header,body>footer {
  padding:1em 0 1em 0;
}
body>header>h1 {
  padding:0;
  margin:0;
  font-size:12pt;
}
body>header>p {
  font-size:10pt;
  margin:0;
  padding:0.5em 0 0.5em 0;
}



.left {
  float:left;
  width:20%;
  text-align:left;
}
.centre {
  float:left;
  width:60%;
  text-align:center;
}
.right {
  float:right;
  width:20%;
  text-align:right;
}

.content {
 
  bottom: 0;
  background: rgba(0, 0, 0, 0.5);
  color: #f1f1f1;
  width: 100%;
  padding: 20px;
}

#myBtn {
  width: 200px;
  font-size: 18px;
  padding: 10px;
  border: none;
  background: #000;
  color: #fff;
  cursor: pointer;

}

#myBtn:hover {
  background: #ddd;
  color: black;
}

#mylink{
  text-decoration: none; 
  color: #fff;
}
#mylink:hover{
  background: #ddd;
  color: black;
}
  </style>

<body>
  <audio autoplay hidden>
     <source src="22.mp3" type="audio/mp3">
                If you're reading this, audio isn't supported. 
    </audio>
 <video autoplay muted loop id="myVideo">
  <source src="3.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>

    <div class="content">
  
  <button id="myBtn" onclick="myFunction()">Pause</button>
  <button id="myBtn"><a id="mylink" href="">Play Music</a> </button>
</div>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d991.5961243384189!2d106.87753612914904!3d-6.212915366490727!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6d02ad6ee5c90c18!2zNsKwMTInNDYuNSJTIDEwNsKwNTInNDEuMSJF!5e0!3m2!1sid!2sid!4v1671602422794!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

</header>
<header>
  <h1>Walimatul Khitan</h1>
  <p>Assalamu alaikum Warahmatullahi Wabarakatuh</p>
  <p>Dengan memohon Rahmat dan Ridho Allah SWT
Kami sekeluarga mengharap kehadiran
Bapak/Ibu/Saudara (i) untuk memberikan
Doa Restu pada acara Walimatul Khitan Putra kami.
</p>
</br>
</br>
<h1>Ervansyah Akhtariffa (Ervan)</h1>
<p>Putra dari Bapak M. Rama T & Ibu Eka Irwati</p>
</br>
</br>

<p>Sabtu, 24 Deseember 2022</p>
<p>11:00 s/d 17:00</p>
<p>Bertempat di</p>
<p>Jl. Pisangan Lama III
No 10 Rt. 10 Rw.03
Pisangan Lama
Jakarta Timur</p>
</br>
<p>Ya Allah, Muliakanlah Anak Kami ini,
Panjangkanlah Umurnya,
Terangilah Hatinya,
Teduhkanlah Imannya,
Perbaikilah Amal Perbuatannya,
Lapangkan Rezekinya,
Dekatkanlah pada kebaikan Jauhkanlah dari keburukan dan dijadikan anak yang sholeh. Amin Ya Rabbalalamin
</p>
<p>Merupakan suatu kehormatan dan kebahagiaan bagi kami apabila Bapak/Ibu/Saudara (i) berkenan hadir pada acara tersebut. 
Atas kehadiran serta Doa Restu Bapak/Ibu/Saudara (i) kami mengucapkan banyak terima kasih.
</p>
<p>Wassalamu alaikum Warahmatullahi Wabarakatuh</p>
</header>
</body>

<script>
var video = document.getElementById("myVideo");
var btn = document.getElementById("myBtn");

function myFunction() {
  if (video.paused) {
    video.play();
    btn.innerHTML = "Pause";
  } else {
    video.pause();
    btn.innerHTML = "Play";
  }
}
</script>
<!-- <main>
  
  <header>
    <div class="feature"></div>
    <div class="feature"></div>
  </header>
  
  <div id="app">
    
    
    <header>
       <div class="system-bar">
        <div class="left">No Carrier</div>
         
        <div class="centre">12:34</div>
         <div class="right"><span class="ion-battery-full"></span></div>
      </div>
      
      <div class="left">
      <span class="ion-chevron-left"></span>
      </div>
      <div class="centre">Title</div>
      <div class="right">
       <span class="ion-navicon"></span>
      </div>
    </header>
    <div class="page"><p>PBR&B affogato humblebrag slow-carb hoodie. Irony shoreditch bushwick, readymade small batch hella cliche before they sold out sustainable keytar slow-carb franzen messenger bag kinfolk trust fund. Polaroid chambray trust fund, brooklyn distillery skateboard freegan etsy raw denim health goth XOXO. Meditation biodiesel jean shorts, wayfarers cardigan paleo green juice tote bag fixie authentic. Tattooed try-hard sustainable microdosing, man bun whatever leggings polaroid you probably haven't heard of them tumblr. Craft beer retro leggings readymade synth, keytar selvage direct trade. Church-key drinking vinegar retro, shoreditch gochujang post-ironic YOLO cardigan stumptown.</p>

<p>Artisan keytar fingerstache, pitchfork banjo fashion axe keffiyeh squid meggings tattooed retro disrupt meditation intelligentsia marfa. Banjo iPhone put a bird on it, drinking vinegar small batch squid chambray artisan bushwick twee kinfolk semiotics four loko. Tilde brooklyn fap, salvia truffaut four loko everyday carry franzen quinoa aesthetic tote bag drinking vinegar meggings ugh. Knausgaard vinyl mixtape tacos fap pug. Chambray lo-fi crucifix skateboard, synth before they sold out taxidermy pitchfork food truck. YOLO authentic fingerstache, ennui next level hoodie waistcoat meggings listicle. Gentrify flannel yr pinterest.</p>

<p>Raw denim food truck stumptown photo booth tumblr shoreditch. Shabby chic cardigan bushwick, you probably haven't heard of them blog cray cronut irony brunch green juice try-hard kinfolk food truck plaid. Twee readymade chicharrones, VHS kombucha pabst vinyl fixie 8-bit meggings leggings green juice selfies. Vinyl yr VHS, blue bottle echo park marfa vegan mlkshk pitchfork 3 wolf moon waistcoat swag jean shorts. Forage cold-pressed messenger bag wolf readymade occupy. Authentic 90's biodiesel literally. Keytar fashion axe roof party, truffaut iPhone poutine pug mlkshk selvage cliche before they sold out affogato everyday carry disrupt tousled.</p>
    </div>
    <footer>
      <div class="left">Left</div>
      <div class="centre">Center</div>
      <div class="right">Right</div
    </footer>
  </div>
 
  <footer>
    <div class="feature"></div>
  </footer>
  
</main> -->
</html>
