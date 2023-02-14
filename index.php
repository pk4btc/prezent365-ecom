<?php include('navbar.php') ?>
<head>
    <link rel="stylesheet" href="index.css"/>
    <script>
    var i = 0 //start point
    var img=[] //aray of img
    var time=3000; //time of slide

    img[0]='./img/CzerwienNiluMala2.jpg'
    img[1]='./img/AkwamarynaMala1.jpg'
    img[2]='./img/mistycznyLasMala1.jpg'

    function changeImg(){
        document.slide.src = img[i] // slide is a #id of img html

        if(i<img.length-1){
            i++;

        }else{
            i=0;
        }
        setTimeout("changeImg()",time)

    }

    window.onload = changeImg   /// run when page loads

    </script>
</head>
<h2> Nowe Modele Bransoletek, zapraszamy do kategorii <a href="bransoletki.php">bransoletki</a></h2>
<div class="container-fluid ">
    <div class="row  justify-content-center">
        <div class="col-lg-6 col-md-10 col-sm-8">
            <img name="slide" width="400" height="300">
        </div>
    </div>
</div>
   


<?php include 'footer.php' ?>
</body>
</html> 