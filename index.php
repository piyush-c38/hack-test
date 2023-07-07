<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Blinker:wght@300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">

<body>
    <nav class="header">
        <div class="logo" href="#">
            <img src="./Images/openLakeLogo.png" alt="">
            <h3>Openlake.</h3>
        </div>

        <div class="mid-nav">
            <ul class="navopt">
                <li class="on-page"><a href="#" id="home">Home</a></li>
                <li><a href="#" id="our-projects">Our Projects</a></li>
                <li><a href="#" id="community">Community</a></li>
                <li><a href="#" id="mentors">Mentors</a></li>
            </ul>
        </div>

        <div class="right-nav">
            <button id="blog-btn" href="#">Blogs</button>
            <button id="subscribe-btn" href="#">Subscribe</button>
        </div>
    </nav>
    <nav class="header-mobile">
  
        <div class="logo" href="#">
            <img src="./Images/openLakeLogo.png" alt="">
            <h3>Openlake.</h3>
        </div>
  
        <input class="side-menu" type="checkbox" id="side-menu" />
        <label class="hamb" for="side-menu"><span class="hamb-line"></span></label>

        <nav class="nav">
            <ul class="menu">
                <li><a href="#">Home</a></li>
                <li><a href="#">Our Projects</a> </li>
                <li><a href="#">Community</a> </li>
                <li><a href="#">Mentors</a></li>
                <li><a href="#">Blogs</a></li>
                <li><a href="#">Subscribe</a></li>
            </ul>
        </nav>
    </nav>
<?php
    $file = fopen('blog.txt','r');
    $date = rtrim(fgets($file));

    $blog_heading = rtrim(fgets($file));
    while (strlen($test = rtrim(fgets($file)))!=0){
    $blog_heading = $blog_heading."</br>".$test;
    }

    $blog_content = rtrim(fgets($file));
    while (!feof($file)){
    $blog_content = $blog_content."</br>".rtrim(fgets($file));
    }

    fclose($file);

    echo "<article>
        <h2 id=\"blog-heading\">$blog_heading</h2>
        <h3 id=\"blog-date\">$date</h3>
        <p id=\"blog-content\">
            $blog_content
        </p>
    </article>"
?>
</body>

</html>