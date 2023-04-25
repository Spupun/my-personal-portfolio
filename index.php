<?php

$conn = mysqli_connect('localhost:3307','root','','connect_db') or die('connection failed');

if(isset($_POST['send'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = mysqli_real_escape_string($conn, $_POST['number']);
   $msg = mysqli_real_escape_string($conn, $_POST['message']);

   $select_message = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');
   
   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'message sent already!';
   }else{
      mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, message) VALUES('$name', '$email', '$number', '$msg')") or die('query failed');
      $message[] = 'message sent successfully!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Complete Responsive Personal Portfolio Website Design</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

   <!-- aos css link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php

if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message" data-aos="zoom-out">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}

?>

<!-- header section starts  -->

<header class="header">

   <div id="menu-btn" class="fas fa-bars"></div>

   <a href="#home" class="logo">Portfolio</a>

   <nav class="navbar">
      <a href="#home" class="active">home</a>
      <a href="#about">about</a>
      <a href="#services">services</a>
      <a href="#portfolio">portfolio</a>
      <a href="#contact">contact</a>
   </nav>

   <div class="follow">
      <a href="https://www.facebook.com/mohan.subudhi.5" class="fab fa-facebook-f"></a>
      <a href="https://www.instagram.com/ms_mohan__007/" class="fab fa-instagram"></a>
      <a href="https://www.linkedin.com/in/mohan-subudhi-61b61220b/" class="fab fa-linkedin"></a>
      <a href="https://github.com/Spupun" class="fab fa-github"></a>
   </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

   <div class="image" data-aos="fade-right">
      <img src="images/user-img.png" alt="">
   </div>

   <div class="content">
      <h3 data-aos="fade-up">hi, i am Mohan Subudhi</h3>
      <span data-aos="fade-up">Full Stack Web Developer</span>
      <p data-aos="fade-up">I specialize in HTML, CSS, JavaScript, React and other modern web technologies, and I love exploring new tools and frameworks to improve my skills and stay up-to-date with the latest trends in the industry.</p>
      <a data-aos="fade-up" href="#about" class="btn">about me</a>
   </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

   <h1 class="heading" data-aos="fade-up"> <span>biography</span> </h1>

   <div class="biography">

      <p data-aos="fade-up">When I'm not coding, you can find me exploring the outdoors, playing video games or reading up on the latest web development trends. I'm a firm believer in lifelong learning and I'm always looking for ways to improve my skills and expand my knowledge.

If you're looking for a frontend web developer who's passionate about creating stunning web experiences, feel free to reach out and let's discuss your project!




</p>

      <div class="bio">
         <h3 data-aos="zoom-in"> <span>name : </span> Mohan Subudhi </h3>
         <h3 data-aos="zoom-in"> <span>email : </span> mohansubudhi453@gmail.com </h3>
         <h3 data-aos="zoom-in"> <span>address : </span> Bhubaneswar, india </h3>
         <h3 data-aos="zoom-in"> <span>phone : </span> +91 7070307035 </h3>
         <h3 data-aos="zoom-in"> <span>age : </span> 23 years </h3>
         <h3 data-aos="zoom-in"> <span>experience : </span> Fresher but passionate about coding and web development. </h3>
      </div>

      <!-- <a href="/Mohan's Resume.pdf" class="btn" data-aos="fade-up">download CV</a> -->
      <a href="Mohan's Resume.pdf" class="btn" download data-aos="fade-up">Download CV</a>


   </div>
   
   <div class="skills" data-aos="fade-up">

      <h1 class="heading"> <span>skills</span> </h1>

      <div class="progress">
         <div class="bar" data-aos="fade-left"> <h3><span>HTML</span> <span>95%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>CSS</span> <span>80%</span></h3> </div>
         <div class="bar" data-aos="fade-left"> <h3><span>JavaScript</span> <span>75%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>PHP</span> <span>80%</span></h3> </div>
      </div>

   </div>

   <div class="edu-exp">

      <h1 class="heading" data-aos="fade-up"> <span>education & experience</span> </h1>

      <div class="row">

         <div class="box-container">

            <h3 class="title" data-aos="fade-right">education</h3>

            <div class="box" data-aos="fade-right">
               <span>( 2021 - 2023 )</span>
               <h3>MCA</h3>
               <p>Centurion University of Technology and Management, Bhubaneswar</p>
            </div>

            <div class="box" data-aos="fade-right">
               <span>( 2017 - 2020 )</span>
               <h3>Bsc(Mathematics)</h3>
               <p>H D V sc College, Panaspada, Puri</p>
            </div>

            <div class="box" data-aos="fade-right">
               <span>( 2015-2017 )</span>
               <h3>+2 (Sc)</h3>
               <p>A D Mohavidyalaya, Brahmagiri</p>
            </div>

         </div>

         <div class="box-container">

            <h3 class="title" data-aos="fade-left">experience</h3>

            <div class="box" data-aos="fade-left">
               <span></span>
               <h3>full-stack web developer</h3>
               <p>I am A Fresher. I specialize in HTML, CSS, JavaScript, React and other modern web technologies, and I love exploring new tools and frameworks to improve my skills and stay up-to-date with the latest trends in the industry. </p>
               <p>When I'm not coding, you can find me exploring the outdoors, playing video games or reading up on the latest web development trends.I'm always looking for ways to improve my skills and expand my knowledge.</p>
            </div>

         </div>

      </div>

   </div>

</section>

<!-- about section ends -->

<!-- services section starts  -->

<section class="services" id="services">

   <h1 class="heading" data-aos="fade-up"> <span>services</span> </h1>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-code"></i>
         <h3>web development</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, placeat veritatis accusantium nostrum rem ipsa.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-paint-brush"></i>
         <h3>graphic design</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, placeat veritatis accusantium nostrum rem ipsa.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fab fa-bootstrap"></i>
         <h3>bootstrap</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, placeat veritatis accusantium nostrum rem ipsa.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-chart-line"></i>
         <h3>seo marketing</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, placeat veritatis accusantium nostrum rem ipsa.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-bullhorn"></i>
         <h3>digital marketing</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, placeat veritatis accusantium nostrum rem ipsa.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fab fa-wordpress"></i>
         <h3>wordpress</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, placeat veritatis accusantium nostrum rem ipsa.</p>
      </div>

   </div>

</section>

<!-- services section ends -->

<!-- portfolio section starts  -->

<section class="portfolio" id="portfolio">

   <h1 class="heading" data-aos="fade-up"> <span>portfolio</span> </h1>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <img src="images/img-1.jpg" alt="">
         <h3>web development</h3>
         <span>( 2020 - 2022 )</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/img-2.jpg" alt="">
         <h3>web development</h3>
         <span>( 2020 - 2022 )</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/img-3.jpg" alt="">
         <h3>web development</h3>
         <span>( 2020 - 2022 )</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/img-4.jpg" alt="">
         <h3>web development</h3>
         <span>( 2020 - 2022 )</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/img-5.jpg" alt="">
         <h3>web development</h3>
         <span>( 2020 - 2022 )</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/img-6.jpg" alt="">
         <h3>web development</h3>
         <span>( 2020 - 2022 )</span>
      </div>

   </div>

</section>

<!-- portfolio section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

   <h1 class="heading" data-aos="fade-up"> <span>contact me</span> </h1>

   <form action="" method="post">
      <div class="flex">
         <input data-aos="fade-right" type="text" name="name" placeholder="enter your name" class="box" required>
         <input data-aos="fade-left" type="email" name="email" placeholder="enter your email" class="box" required>
      </div>
      <input data-aos="fade-up" type="number" min="0" name="number" placeholder="enter your number" class="box" required>
      <textarea data-aos="fade-up" name="message" class="box" required placeholder="enter your message" cols="30" rows="10"></textarea>
      <input type="submit" data-aos="zoom-in" value="send message" name="send" class="btn">
   </form>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-phone"></i>
         <h3>phone</h3>
         <p>+123-456-7890</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-envelope"></i>
         <h3>email</h3>
         <p>mohansubudhi453@gmail.com</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-map-marker-alt"></i>
         <h3>address</h3>
         <p>Bhubaneswar, India - 752001</p>
      </div>

   </div>

</section>

<!-- contact section ends -->

<div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>mr.tech mohan</span> </div>












<!-- custom js file link  -->
<script src="js/script.js"></script>

<!-- aos js link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>

   AOS.init({
      duration:800,
      delay:300
   });

</script>
   
</body>
</html>