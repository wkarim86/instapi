<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>InstaPhoto Download</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">    
    <style type="text/css">
        body{ font-family:'Open Sans', Helvetica, Arial, sans-serif; font-size:12px; color:#464E58; margin:0px;}
        .container{display:flex; justify-content: center; flex:1; background:#F2F5F8; height:100vh; align-items: center;}
        .box{text-align: center; width:40vw;}
        h3{font-size:26px; font-weight:300;}
        input[type="text"]{ border-radius: 4px; border: 1px solid #cecdcd; width: 100%; height: 40px; margin-bottom: 10px; display: block; text-indent: 10px; font-size: 14px; font-weight: 300;}
        .download{margin: 10px 0px; padding: 10px 40px; font-size: 20px; font-weight: 300; border-radius: 4px; background: #1bb393; color: #fff; box-shadow: 0px 2px 3px 0px #00000029; cursor: pointer;}
        .download:hover{background: #049978;}
    </style>

</head>
<body>
<div class="container">
    
   <div class="box">
       <form action="download.php" method="post">
           <h3>Instagram Photo Download</h3>
           <input type="text" name="url" placeholder="Enter Instagram Url e.g https://www.instagram.com/p/BVK0u81DSID/" />
           <button type="submit" class="download">Download</button>
       </form>
       <p>Developed by: <a href="https://www.linkedin.com/in/wkarim86/" title="Staff Software Engineer">Waqas Karim</a></p>
    </div>
    
</div>

</body>
</html>