<a href="">aaaaa</a>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            background-color: #C04545;
            background-image:
            repeating-linear-gradient(
                to right, transparent 0 100px,
                #25283b22 100px 101px
            ),
            repeating-linear-gradient(
                to bottom, transparent 0 100px,
                #25283b22 100px 101px
            );
        }
        body::before{
            position: absolute;
            width: min(1400px, 90vw);
            top: 10%;
            left: 50%;
            height: 90%;
            transform: translateX(-50%);
            content: '';
            background-image: url(images/bgalfath.png);
            background-size: 100%;
            background-repeat: no-repeat;
            background-position: top center;
            pointer-events: none;
        }
    </style>
    <link rel="stylesheet" href="experiment2.css">
</head>
<body>
    <div class="banner">
        <div class="slider" style="--quantity: 10">
            <div class="item" style="--position: 1"><a href="masul"><img src="images/mas_ul.png" alt=""></a></div>
            <div class="item" style="--position: 2"><a href="sekjen"><img src="images/sekjen.png" alt=""></a></div>
            <div class="item" style="--position: 3"><a href="mo"><img src="images/mo.png" alt=""></a></div>
            <div class="item" style="--position: 4"><a href="korwat"><img src="images/korwat.png" alt=""></a></div>
            <div class="item" style="--position: 5"><a href="bend1"><img src="images/bendahara1.png" alt=""></a></div>
            <div class="item" style="--position: 6"><a href="kdrp"><img src="images/kdrp.png" alt=""></a></div>
            <div class="item" style="--position: 7"><a href="sekre"><img src="images/sekre.png" alt=""></a></div>
            <div class="item" style="--position: 8"><a href="mki"><img src="images/medkominfo.png" alt=""></a></div>
            <div class="item" style="--position: 9"><a href="syiar"><img src="images/syiar.png" alt=""></a></div>
            <div class="item" style="--position: 10"><a href="psdm"><img src="images/psdm.png" alt=""></a></div>
        </div>
    </div>
</body>
</html>