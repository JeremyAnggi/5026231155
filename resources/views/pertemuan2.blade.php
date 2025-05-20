<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            body {
                background-color: rgb(231, 7, 209);
            }
            @media only screen and (max-width: 600px) {
                body {
                    background-color: blue;
                }
            }
            .contoh {
                padding: 20px;
                color: white;
            }

            @media only screen and (max-width: 600px){
                .contoh {background: red;}
            }

            @media only screen and (min-width: 600px){
                .contoh {background: rgb(12, 181, 227);}
            }

            @media only screen and (min-width: 768px){
                .contoh {background: rgb(71, 213, 11);}
            }

            @media only screen and (min-width: 992px){
                .contoh {background: rgb(192, 137, 8);}
            }

            @media only screen and (min-width: 1200px){
                .contoh {background: rgb(86, 4, 149);}
            }

            div.gallery {
                margin: 5px;
                border: 1px solid #ccc;
                float: left;
                width: 180px;
            }
            div.gallery:hover {
                border: 1px solid #090909;
            }
            div.gallery img {
                width: 100%;
                height: 25%;
            }
            div.desc {
                padding: 15px;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <p class="contoh">Ini adalah pemandangan gunung-gunung di Indonesia yang sangat indah</p>

        <div class="gallery">
            <a target="_blank" href="img/gunung 1.jpg">
                <img src="img/gunung 1.jpg" alt="Gunung 1" width="600" height="400">
            </a>
            <div class="desc">Gunung 1</div>
        </div>

        <div class="gallery">
            <a target="_blank" href="img/gunung 2.jpg">
                <img src="img/gunung 2.jpg" alt="Gunung 2" width="600" height="400">
            </a>
            <div class="desc">Gunung 2</div>
        </div>

        <div class="gallery">
            <a target="_blank" href="img/gunung 3.jpg">
                <img src="img/gunung 3.jpg" alt="Gunung 3" width="600" height="400">
            </a>
            <div class="desc">Gunung 3</div>
        </div>

        <div class="gallery">
            <a target="_blank" href="img/gunung 4.jpg">
                <img src="img/gunung 4.jpg" alt="Gunung 4" width="600" height="400">
            </a>
            <div class="desc">Gunung 4</div>
        </div>
    </body>
</html>
