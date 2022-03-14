<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Test View — Flickr Web Service</title>
    <style>
        h1 {color:red; margin-left: 5px;}
        h2 {color:blue; margin: 5px;}
        p {color:green; margin-top: -10px; margin-left: 0px;}
        img {padding: 0.25rem; margin-top: 5px; margin-bottom: 5px; margin-right: 5px; border: 1px solid red; border-radius: 0.25rem; float: left; width: 20%;}
        .box {border: 2px solid green; padding: 5px; float: left; margin-top: 20px; margin-left: 5px; margin-right: 5x; margin-bottom: 5px; padding: 20px; width: 90%; height: auto;}
        .textInput{margin: 5px; float: left;}
        .btn{margin: 5px; float: left;}
    </style>
</head>
<body>
<h1> Flickr Web Service</h1>
<h2> Search on Flickr Feed</h2>
<!-- Text input box -->
<div class="textInput">
    <input type="text" id="txt" />
</div>

<div class="btn">
    <button onclick="loadImages()">Search</button>
</div>
<div class="box">
    <h1 id="title"></h1>
    <h2 id="link"></h2>
    <p id="description"></p>
    <p id="modified"></p>
    <p id="generator"></p>
    <div id="images"></div>
</div>

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="../application/js/flickrService.js"></script>
</body>
</html>