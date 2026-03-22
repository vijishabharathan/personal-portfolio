
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
        border-bottom:2px solid #333;
        padding-bottom:5px;
        font-family:Verdana, Geneva, Tahoma, sans-serif;
        color:gray;
        font-size:45px;
        padding-left:15px;
        margin-top:100px;
        text-align:center;
        text-shadow:2px 2px 5px black;
    }
    h3{
        font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        color:gray;
        padding-left:50px;
        font-size:25px;
        text-align:left;
        
       
    }
    section {
        text-align:justify;
        margin-top:20px;
            }
section p{ 
    font-family: sans-serif;
    text-align:left;
    padding-left:0px;
    font-size:23px;
    width:60%;
    margin:auto;
    color:#555;
    text-shadow:1px 1px 3px rgba(0,0,0,0.3);
}
</style>
</head>
<body>
     <?php include 'menu.php'; ?>
 
<section >
    <h1>PROJECTS</h1><br>
          <p> <h3> <div>
        <h3>B.Tech Projects</h3>
        <ul>
            <li>
            <strong>Main Project: Network Traffic Analyzer</strong>
            <ul>
                <li><em>Focus:</em> Router Congestion & Packet Delay Detection</li>
                <li><em>Tech Stack:</em> J2EE, MySQL</li>
            </ul>
            </li>
            <br>
            <li>
            <strong>Mini Project: Online MP3 Hub</strong>
            <ul>
                <li><em>Focus:</em> MP3 Downloading & Management System</li>
                <li><em>Tech Stack:</em> Microsoft Access, JavaScript, HTML/CSS</li>
            </ul>
            </li>
        </ul>
    </div>

        <div>
        <h3>BCA Project</h3>
        <ul>
            <li>
                <strong>CodeVerifi: Rule-Based Submission & Verification</strong>
                <ul>
                    <li><em>Focus:</em> Automated code verification system</li>
                    <li><em>Tech Stack:</em> PHP, MySQL, HTML/CSS</li>
                </ul>
            </li>
        </ul>
    </div>
       
            </h3></p>
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
            
       
