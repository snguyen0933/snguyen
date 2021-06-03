﻿<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="canvas.css" />
    <link rel="stylesheet" href="present.css" />
    <link rel="stylesheet" href="card.css" />
    <link rel="stylesheet" href="index.css" />
  </head>
  <body>
    <div class="parent">
      <canvas id="canvas"></canvas>
      <section class="above-fold">
        <div class="wrap-present">
          <div class="present-box" id="present">
            <div class="present">
              <div class="img-wrap" id="present-image"></div>
            </div>
            <div class="side front"></div>
            <div class="side back"></div>
            <div class="side left"></div>
            <div class="side right"></div>
            <div class="side top">
              <span class="to">
                <span class="name" id="nametag"> </span>
              </span>
            </div>
            <div class="side bottom"></div>
          </div>
        </div>
        <p class="info-text">Click to Open</p>
      </section>

      <div id="card">
        <h4>DK</h4>

        <img
          src="An.png"
          class="honey"
        />

        <h4>
          Đây là món quà mà anh tặng em dù nó hơi nhỏ và kiểu hơi có chút sến nhưng đây là điều anh có thể làm rồi huhu:(((
          Anh chúc em sinh nhật hạnh phúc, luôn vui vẻ và xinh đẹp. Chúc em luôn 
        </h4>
      </div>
    </div>
  </body>
  <script src="canvas.js"></script>
  <script src="present.js"></script>
</html>
