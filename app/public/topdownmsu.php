<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>BurhanIntPic</title>
    <style>
        html, body {
            margin: 0;
            padding: 0;
            height: 100%;
            overflow: hidden;
        }
        .full-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('images/topdownmsu.png'); 
            background-size: cover;
            background-position: center;
            transition: filter 0.3s;
        }
        .small-image-container {
            position: absolute;
        }
        .small-image {
            cursor: pointer;
            transition: filter 0.3s ease-in-out;
        }
        .tooltip {
            visibility: hidden;
            width: 120px;
            background-color: black;
            color: #fff;
            text-align: center;
            border-radius: 5px;
            padding: 5px;
            position: absolute;
            z-index: 1;
            top: -5px;
            left: 50%;
            transform: translateX(-50%);
        }
        .small-image-container:hover .tooltip {
            visibility: visible;
        }
        .small-image:hover {
            filter: drop-shadow(0 0 10px rgba(255, 255, 255, 0.8));
        }
    </style>
</head>
<body>
    <div class="full-image"></div>
    
    <div class="small-image-container" style="bottom: -5vw; left: 35vw;">
        <a href="/experiment">
            <img src="images/depanmsu.png" class="small-image" style="width: 42vw; height: auto;">
        </a>
    </div>
    <div class="small-image-container" style="top: -5vw; left: 0vw;">
        <img src="images/kirimsu.png" class="small-image" style="width: 86vw; height: auto;">
    </div>
    <div class="small-image-container" style="top: -5vw; left: 0vw;">
        <img src="images/vipmsu.png" class="small-image" style="width: 86vw; height: auto;">
    </div>

</body>
</html>
