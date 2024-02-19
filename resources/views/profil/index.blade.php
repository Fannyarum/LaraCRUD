<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600&display=swap');


:root{
  --yellow:#f8d618;
}

*{
  font-family: 'Nunito', sans-serif;
  margin: 0; padding: 0;
  box-sizing: border-box;
  text-decoration:none;
  outline: none; border:none;
  text-transform: capitalize;
  transition: all .2s linear;
}

*selection{
  background:var(--yellow);
  color:#333;
}

html{
  font-size:62.5%;
  overflow-x: hidden;
}

html::webkit-scrollbar{
  width:1.4rem;
}

html::webkit-scrollbar-track{
  background:var(--yellow);
}

body{
  background:#111;
  overflow-x:hidden;
  padding-left:35rem;
}

section{
  min-height:100vh;
  padding:1rem;
}

.btn{
  padding:.7rem 3rem;
  background:var(--yellow);
  color:#fff;
  cursor:pointer;
  margin-top:1rem;
  font-size:2rem;
  border-radius:5rem;
}

.btn i{
  padding:0 .5rem;
  font-size:1.8rem;

}

.btn:hover{
  background:#af8b14;
}

.heading{
  text-align:center;
  margin:0.6rem;
  font-size:4rem;
  padding:1rem;
  border-bottom:.1rem solid #fff4;
  color:#fff;
}

.heading span{
  color:var(--yellow);
}

header{
  position:fixed;
  top:0; left:0;
  z-index:1000;
  height:100%;
  width:35rem;
  background:#1a1a1a;
  display:flex;
  align-items:center;
  justify-content:center;
  flex-flow:column;
  text-align:center;
}

header .user img{
  height:17rem;
  width:17rem;
  border-radius: 50%;
  object-fit:cover;
  margin-bottom: 1 re,;
  border:.7rem solid var(--yellow);
}

header .user .name{
  font-size:3.5rem;
  color:#fff;
}

header .user .post{
  font-size:2rem;
  color:#eee;
}

header .navbar{
  width:100%;
}

header .navbar ul{
  list-style:none;
  padding:1 rem 3 rem;
}

header .navbar ul li a{
  display:block;
  padding:1rem;
  margin:1.5rem 0;
  background:#333;
  color:#fff;
  font-size:2rem;
  border-radius:5rem;
}

header .navbar ul li a:hover{
  background:var(--yellow);
}

header .navbar ul li a:hover{
  background:var(--yellow);
}

#menu{
  position:fixed;
  top:2 rem; right:2rem;
  background:#333;
  color:#fff;
  cursor:pointer;
  font-size:2.5rem;
  padding:1rem 1.5rem;
  z-index:1000;
  display:none;
}

.home{
  display:flex;
  justify-content:center;
  flex-flow:column;
  padding:0 15rem;
}

.home h3{
  font-size:2.5rem;
  color:#fff;
}

.home h1{
  font-size:5rem;
  color:#fff;
}

.home h1 span{
  color:var(--yellow);
}

.home p{
  font-size:2rem;
  color:#eee;
  padding:1rem 0;
}
.about .row{
  display:flex;
  align-items:center;
  justify-content: center;
  flex-wrap:wrap;
  padding:1rem 0;
}

.about .row .info{
  flex:1 1 48rem;
  padding:2rem 1rem;
  padding-left: 6rem;
}

.about .row .info h3{
  font-size:2rem;
  color: var(--yellow);
  padding: 1rem 0;
  font-weight: normal;
}

.about .row .info h3 span{
  color: #eee;
  padding:0 .5rem;
}

.about .row .counter{
  flex:1 1 48rem;
  display:flex;
  justify-content: center;
  flex-wrap:wrap;
}

.about .row .counter .box{
  width: 20rem;
  background: #222;
  text-align: center;
  padding: 2rem;
  margin: 2rem;
}

.about .row .counter .box span{
  font-size:4rem;
  color: var(--yellow);
}

.about .row .counter .box h3{
  font-size:2rem;
  color:#fff;
}

.education .box-container{
  display:flex;
  align-items:center;
  justify-content:space-between;
  flex-wrap:wrap;
  padding-left:1rem 0;
  padding-left:3rem;
}

.education .box-container .box{
  width: 27rem;
  margin: 4rem 1rem;
  padding-left: 4rem;
  border-left: .2rem solid #fff;
  position:relative;
}

.education .box-container .box span{
  font-size: 1.3rem;
  background: #222;
  color: #fff;
  border-radius: 5rem;
  padding: .5rem 2.5rem;
}

.education .box-container .box h3{
  font-size: 2rem;
  background: #fff;
  padding-top:1.5rem;
}

.education .box-container .box p{
  font-size: 1.4rem;
  background: #eee;
  padding:1rem 0;
}

.education .box-container .box i{
  position: absolute;
  top:-1.5rem; left:-2.5rem;
  height: 5rem;
  width: 5rem;
  border-radius: 50%;
  line-height: 5rem;
  text-align: center;
  font-size: 2rem;
  color: #fff;
  background: var(--yellow);
}

.portofolio .box-container{
  display: flex;
  align-items: center;
  justify-content: center;
  flex-wrap: wrap;
  padding: 2rem 0;
}

.portofolio .box-container .box{
  height: 20rem;
  width:26rem;
  border-radius: 1rem;
  margin: 2rem;
  overflow: hidden;
  cursor: pointer;
}

.portofolio .box-container .box img{
  height: 100%;
  width: 100%;
  object-fit: cover;
}

.portofolio .box-container .box:hover{
  transform: scale(1.2);
}

.contact .row{
  display:flex;
  align-items:center;
  justify-content:center;
  flex-wrap: wrap;
}

.contact .row .content{
  flex:1 1 30rem;
  padding: 4rem;
  padding-bottom:0;
}

.contact .row form{
  flex:1 1 45rem;
  padding: 2rem;
  margin: 2rem;
  margin-bottom:4rem;
}

.contact .row form .box{
  padding: 1.5rem;
  margin: 1rem 0;
  background: #3333;
  color:#fff;
  text-transform:none;
  font-size:1.7rem ;
  width:100%;
}

.contact .row form .box::placeholder{
  text-transform: capitalize;
}

.contact .row form .message{
  height: 15rem;
  resize: none;

}

.contact .row .content .title{
  text-transform:uppercase;
  color: #fff;
  font-size: 3rem;
  padding-bottom: 2rem;
}

.contact .row .content .info h3{
  display: flex;
  align-items: center;
  font-size: 2rem;
  color: #eee;
  padding:1rem 0;
  font-weight:normal;
}

.contact .row .content .info h3 i{
  padding-right: 3rem;
  color: var(--yellow);
}

.top{
  position: fixed;
  bottom: 7.5rem; right: 2rem;
  z-index: 100;
  display: none;
}


footer {
  position: relative;
  width: 100%;
  height: 400px;
  background-color: #191919;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}

footer span{
  color:var(--blue);
  padding:0 .5rem;
}

footer p:nth-child(1) {
  font-size: 30px;
  color: white;
  text-align: center;
  margin-bottom: 20px;
  font-weight: bold;
}
footer p:nth-child(2) {
  color: #fcfcfc;
  font-size: 17px;
  position: absolute;
  width: 500px;
  text-align: center;
  line-height: 26px;
}
.sosial {
  display: flex;
}
.sosial a {
  width: 35px;
  height: 35px;
  display: flex;
  align-items: center;
  justify-content: center;
  background: var(--yellow);
  border-radius: 50%;
  margin: 22px 10px;
  color: #101105;
  border: 2px solid white;
}
.sosial a:hover {
  transform: scale(1.3);
  background-color: #af8b14;
  
}
.end{
  position: absolute;
  color: #eee;
  font-size:18px;
  margin-top: 22rem;
  }









/*media queries */

@media (max-width:1200px){
  html{
    font-size:55%;
  }
}

@media (max-width:991px){
  header{
    left:-120%;
  }
  #menu{
    display:block;
  }
  header.toggle{
    left:0%;
  }
  body{
    padding:0;
  }
}

@media (max-width:768px){
  html{ 
    font-size :50%;
  }
}

@media (max-width:400px){
  header{
    width:100vw;
  }
  .heading{
    margin:0 3rem;
  }

  .about .row .counter .box{
    width: 100%;
  }
  .education .box-container .box{
    width: 100%;
  }
  .portofolio .box-container .box{
    width: 100%;
   }
  .contact .row form{
    margin:3rem 0;
  }
  .dudi{
    font-size:100%;
  }
  .dudi .sosial .p{
    width: 50%;
    height: 50%;
  }
}

    </style>
</head>
<body>
<!--Header section start-->

<header>
<div class="user">
    <img src="assets/fotoprofil/fanny.jpg" alt="">
    <h3 class="name">Fannysia Arum Sari</h3>
    <p class="post">web develover</p>
</div>

<nav class="navbar">
    <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#education">Skill</a></li>
        <li><a href="#portofolio">Portofolio</a></li>
        <li><a href="#contact">Contact</a></li>
    </ul>
</nav>

</header>


<!--header section end-->

<div id="menu" class="fas fa-bars"></div>

<!--Home section start-->
<section class="home" id="home">
    <h3>HI THERE !</h3>
    <h1>I'M <span>Fannysia Arum Sari</span></h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed odio facere nostrum amet nemo. A ea quia libero consequatur aperiam?Lorem ipsum dolor sit amet.</p>
    <a href="#about"><button class="btn">about me <i class="fas fa-user"></i></button></a>
</section>
<!--Home section end-->
<!--About section start-->
<section class="about" id="about">
    <h1 class="heading"> <span>about</span> me</h1>
    <div class="row">
        <div class="info">
            <h3><span>nama:</span> Fannysia Arum Sari</h3>
            <h3><span>umur:</span> 16 tahun</h3>
            <h3><span>email:</span> fannysiarumsari@gmail.com</h3>
            <h3><span>asal:</span> Tanjung Enim, Sumatera Selatan</h3>
            <a href="#"><button class="btn">Download<i class="fas fa-download"></i></button></a>
        </div>
        <div class="counter">
            <div class="box">
                <span>1+</span>
                <h3>years of experience</h3>
            </div>
            <div class="box">
                <span>10+</span>
                <h3>project completed</h3>
            </div>
        </div>
    </div>
</section>
<!--About senction end -->

<!--skill section start-->
<section class="education" id="education">
    <h1 class="heading">my<span>skill</span> </h1>
    <div class="box-container">
        <div class="box">
            <i class="fas fa-graduation-cap"></i>
            <span>php</span>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero molestias quibusdam tenetur consequatur adipisci fugit voluptatum non unde quidem facilis.</p>
        </div>
        <div class="box">
            <i class="fas fa-graduation-cap"></i>
            <span>html</span>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero molestias quibusdam tenetur consequatur adipisci fugit voluptatum non unde quidem facilis.</p>
        </div>

        <div class="box">
            <i class="fas fa-graduation-cap"></i>
            <span>css</span>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero molestias quibusdam tenetur consequatur adipisci fugit voluptatum non unde quidem facilis.</p>
        </div>

        <div class="box">
            <i class="fas fa-graduation-cap"></i>
            <span>javascript</span>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero molestias quibusdam tenetur consequatur adipisci fugit voluptatum non unde quidem facilis.</p>
        </div>

        <div class="box">
            <i class="fas fa-graduation-cap"></i>
            <span>laravel</span>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero molestias quibusdam tenetur consequatur adipisci fugit voluptatum non unde quidem facilis.</p>
        </div>

        <div class="box">
            <i class="fas fa-graduation-cap"></i>
            <span>git</span>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero molestias quibusdam tenetur consequatur adipisci fugit voluptatum non unde quidem facilis.</p>
        </div>
    </div>
</section>
<!--skill section end-->

<!--portofolio section start-->
<section class="portofolio" id="portofolio">
<h1 class="heading">my<span>portofolio</span> </h1>
     <div class="box-container">
        <div class="box">
            <img src="assets/fotoprofil/hologram.jpg" alt="">
        </div>
        <div class="box">
            <img src="assets/fotoprofil/uno.jpg" alt="">
        </div>
        <div class="box">
            <img src="assets/fotoprofil/leaf.jpg" alt="">
        </div>
        <div class="box">
            <img src="assets/fotoprofil/lab.jpeg" alt="">
        </div>
        <div class="box">
            <img src="assets/fotoprofil/uno3.jpg" alt="">
        </div>
        <div class="box">
            <img src="assets/fotoprofil/point.jpeg" alt="">
        </div>
     </div>
</section>
<!--portofolio section end-->

<!--contact section start-->
<section class="contact" id="contact">
    <h1 class="heading"><span>contact</span> me</h1>

    <div class="row">

    <div class="content">
        <h3 class="title">Contact info</h3>

        <div class="info">
            <h3><i class="fas fa-envelope"></i>fannysiarumsari@gmail.com</h3>
            <h3><i class="fas fa-phone"></i>08989212664</h3>
            <h3><i class="fas fa-map-marker-alt"></i>Tanjung enim, Sumatera Selatan</h3>
        </div>
    </div>

    <form action=" ">
        <input type="text" placeholder="name" class="box">
        <input type="email" placeholder="email" class="box">
        <input type="text" placeholder="project" class="box">
        <textarea name="" id="" cols="30" rows="10" class="box message" placeholder="message"></textarea>
        <button type="submit" class="btn">send <i class="fas fa-paper-plane"></i></button>
    </form>
    </div>
</section>
<!--contact section end-->

<footer class="dudi">
    <p>Fannysia Arum Sari<span> @Fannyarum</span></p>
    <p></p>
    <div class="sosial">
        <a href="https://m.facebook.com/fannyarum.fannyarum?"><i class="fa-brands fa-facebook"></i></a>
        <a href="https://www.instagram.com/fannysiarum/"><i class="fa-brands fa-instagram"></i></a>
        <a href="https://github.com/fannyarum"><i class="fa-brands fa-github"></i></a>
        <a href="https://twitter.com/rumputl49426367"><i class="fa-brands fa-twitter"></i></a>
        <a href="https://fllfrtnr7.blogspot.com/?"><i class="fa-brands fa-blogger"></i></a>
    </div>
    <p class="end">Bang bang tutor dong bang</p>
</footer>

<!--scroll top button-->
 <a href="#home" class="top">
    <img src="image/paxley.jpg" alt="">
 </a>


 
<!--jquery cdn link-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.min.js"></script>

<!--custom js file link-->
<script src="script.js"></script>
</body>
</html>