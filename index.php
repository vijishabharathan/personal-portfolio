
<!DOCTYPE html>
<html>
<head><title>Vijisha's Portfolio</title>
<style>
    body {
       margin: 0; 
    }
    nav {
        position: absolute;
        top:10px;
        right:20px;
    }
    nav ul{
        list-style: none;
        margin: 0;
        padding:0
            }
    nav ul li {
        display:inline-block;
        margin-left:15px;
    }
    nav ul li a{
        text-decoration:none;
        color:gray;
        font-size: 20px;
        font-weight:bold;
        font-family:Arial, Helvetica, sans-serif;
    }
    html,body {
        height:100%;
        margin:0;
    }
    body {
      
        background-image:url('bbgg.jpg');
        background-repeat: no-repeat;
        background-position: center;
        background-size:cover;
        min-height:100vh
        
    }
    h1{
        font-family:Verdana, Geneva, Tahoma, sans-serif;
        color:gray;
        font-size:40px;
        margin-top:125px;
        text-align:center;
        text-shadow:2px 2px 5px black;
    }
    h3{
        font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        color:gray;
        font-size:30px;
        text-align:center;
        text-shadow:2px 2px 5px black;
    }
    section {
        text-align:justify;
        margin-top:20px;
            }
section p{ 
    font-family: sans-serif;
    text-align:justify;
    font-size:23px;
    width:60%;
    margin:auto;
    line-height:1.8;
    color:#555;
    text-shadow:1px 1px 3px rgba(0,0,0,0.3);
}
</style>
</head>
<body>
     <?php include 'menu.php'; ?>
     
<h1>
   <?php
echo " HI! I AM VIJISHA BHARATHAN";?></h1>
<h3><?php echo "Welcome to my portfolio !!!!!"; ?></h3>
<section>
    <p>I'm a beginner passionate about web development.I enjoy learning new technologies and love creating simple ,creative projects.Currently,I'm improving my skills in PHP,HTML and CSS. 
        For the last ten years, I carried a dream of entering the world of web development—and today, I have finally made that dream a reality.<br> I am deeply passionate about the artistry of code, finding true beauty in the way simple lines of text can be transformed into vibrant, functional websites. But my journey doesn’t stop at building; it extends to empowering others. My mission is to share this knowledge with students, making them aware of the incredible potential of source code and the logic behind it. As both a dedicated web developer and an aspiring trainer, I am here to create beautiful digital experiences and inspire the next generation of creators to do the same."
</p>
</section>
</body>
<footer style="margin-top: 60px; padding: 20px 0; border-top: 1px solid #eee; text-align: center;">
    <p style="color: #888; font-size: 14px; font-family: sans-serif;">
        &copy; 2026 Vijisha Bharathan. All Rights Reserved.
    </p>
    <p style="color: #bbb; font-size: 12px; font-family: sans-serif; margin-top: 5px;">
        Designed & Developed with Passion.
    </p>
</footer>
</html>