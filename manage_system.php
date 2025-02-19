<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Passion+One:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css">
  <link rel="stylesheet" href="css/stylesheet.css">
  <link rel="stylesheet" href="css/grid.css">

  <title>tournament bracket - humblerumble.party</title>

</head>

<body>
  <div id="wrapper">
    <a id="gitIcon" href="https://github.com/kavlih/tournamentBracket" target="_blank"><i class="fab fa-github"></i></a>
  
    <div id="logo">
      <img src="assets/imgs/themeTaddl/logo.svg" alt="">
    </div>
  
    <div id="bracket">
  
      <div id="end-screen">
        <div id="second-container">
          <div id="second-box">
            <input type="text" id="second" readonly>
          </div>
          <img src="/assets/imgs/themeTaddl/medaille-second.svg">
        </div>
        <div id="trophy-container">
          <svg version="1.1" id="trophy" x="0px" y="0px"
            viewBox="0 0 38 44">
            <style type="text/css">
              .st0{fill:#1F70A0;}
              .st1{fill:#ECC643;}
              .st2{fill:#F8EB4D;}
              .st3{fill:#FDFC9F;}
              .st4{fill:#FFFFFE;}
              .st5{fill:#DBB93E;}
            </style>
            <image id="head" style="overflow:visible;" width="82" height="100" xlink:href="assets/imgs/themeTaddl/taddl.png"  transform="matrix(0.267 0 0 0.267 8.1019 8.2995)">
            </image>
            <g id="pot">
              <path id="dropshadow" class="st0" d="M30,42v2H8v-2l0,                         0v-2h6v-2h2v-2h2v-4h2v6h-2v4H30z M6,12v2H4v8H0V12H6z M38,12v10h-4v-8h-2v-2
                H38z M16,32v2h-4v-2H16z M26,32v2h-4v-2H26z M34,22v2h-4v6h-4v-2h-4v2H8v-6H4v-2h4v-4H6v-4h2v-4h22v4h2v4h-2v4H34z"/>
              <path id="shadows" class="st1" d="M12,28H8v-2v-2v-2v-3v-3v-3v-3h2h2v3v3v3v3v2v2V28z M14,38h2v-2h-2V38z M28,40v-2h-4v-2h-2v-4h4
                v-4h-4v2H12v2h4v4h2v-4h2v6h-2v4h12v-2H28z M35,12h-1v2v2v2v2h1h1v-2v-2v-2v-2H35z M26,10v9v9h2h2v-9v-9h-2H26z M10,40h2v-2h-2V40z
                M8,42h2v-2H8V42z"/>
              <path id="color" class="st2" d="M30,20v2h4v-2H30z M4,20v2h4v-2H4z M14,10v16h2v4h6v-2h4V10H14z M36,12v8h2v-8H36z M2,12v8h2v-8H2z
                "/>
              <path id="highlights" class="st3" d="M0,12v8h2v-8H0z M6,12v4h2v-4H6z M30,12v4h2v-4H30z M14,26V10h-2v20h4v-4H14z M20,32v6h-2v4
                h-8v-2h2v-2h4v-2h2v-4H20z"/>
              <path id="top" class="st4" d="M4,10H2H0v2h2h2h2v-2H4z M36,10h-2h-2v2h2h2h2v-2H36z M22.7,8h-7.4H8v2h7.3h7.4H30V8H22.7z"/>
              <polygon id="_x31_" class="st5" points="21,21 21,19 21,17 21,15 19,15 17,15 17,17 15,17 15,19 17,19 17,21 15,21 15,23 17,23 
                19,23 21,23 23,23 23,21     "/>
            </g>
            <g id="cover">
              <rect id="dropshadow_1_" x="8" y="8" class="st0" width="22" height="2"/>
              <path id="shadows_1_" class="st1" d="M8,6v2h4V6H8z M30,6v2H18V6h6V4h2v2H30z M22,2v2h2V2H22z"/>
              <polygon id="color_1_" class="st2" points="24,4 24,6 18,6 18,8 14,8 14,6 16,6 16,4 20,4 20,0 22,0 22,4    "/>
              <path id="highlights_1_" class="st3" d="M20,0v4h-4V2h2V0H20z M12,4v4h2V6h2V4H12z"/>
              <path id="top_1_" class="st4" d="M24,2v2h2V2H24z M26,4v2h2V4H26z M10,4v2h2V4H10z M18,0v2h-2V0H18z M16,2v2h-4V2H16z"/>
            </g>
          </svg>
          <div id="winnerbox">
            <input type="text" id="winner" readonly>
          </div>
        </div>
        <div id="third-container">
          <div id="third-box">
            <input type="text" id="third" readonly>
          </div>
          <img src="/assets/imgs/themeTaddl/medaille-third.svg">
        </div>
      </div>
  
      <div id="rounds-container">
        <div class="rounds eighth left">
          <div class="teams">
            <div class="textbox">
              <input type="text" class="player">
              <i class="fas fa-angle-double-right"></i>
            </div>
            <div class="textbox">
              <input type="text" class="player">
              <i class="fas fa-angle-double-right"></i>
            </div>
          </div>
          <div class="teams">
            <div class="textbox">
              <input type="text" class="player">
              <i class="fas fa-angle-double-right"></i>
            </div>
            <div class="textbox">
              <input type="text" class="player">
              <i class="fas fa-angle-double-right"></i>
            </div>
          </div>
          <div class="teams">
            <div class="textbox">
              <input type="text" class="player">
              <i class="fas fa-angle-double-right"></i>
            </div>
            <div class="textbox">
              <input type="text" class="player">
              <i class="fas fa-angle-double-right"></i>
            </div>
          </div>
          <div class="teams">
            <div class="textbox">
              <input type="text" class="player">
              <i class="fas fa-angle-double-right"></i>
            </div>
            <div class="textbox">
              <input type="text" class="player">
              <i class="fas fa-angle-double-right"></i>
            </div>
          </div>
        </div>
        <div class="rounds eighth right">
          <div class="teams">
            <div class="textbox">
              <input type="text" class="player">
              <i class="fas fa-angle-double-left"></i>
            </div>
            <div class="textbox">
              <input type="text" class="player">
              <i class="fas fa-angle-double-left"></i>
            </div>
          </div>
          <div class="teams">
            <div class="textbox">
              <input type="text" class="player">
              <i class="fas fa-angle-double-left"></i>
            </div>
            <div class="textbox">
              <input type="text" class="player">
              <i class="fas fa-angle-double-left"></i>
            </div>
          </div>
          <div class="teams">
            <div class="textbox">
              <input type="text" class="player">
              <i class="fas fa-angle-double-left"></i>
            </div>
            <div class="textbox">
              <input type="text" class="player">
              <i class="fas fa-angle-double-left"></i>
            </div>
          </div>
          <div class="teams">
            <div class="textbox">
              <input type="text" class="player">
              <i class="fas fa-angle-double-left"></i>
            </div>
            <div class="textbox">
              <input type="text" class="player">
              <i class="fas fa-angle-double-left"></i>
            </div>
          </div>
        </div>
        <div class="rounds quarter left">
          <div class="teams">
            <div class="textbox">
              <input type="text" class="player" readonly>
              <i class="fas fa-angle-double-right"></i>
            </div>
            <div class="textbox">
              <input type="text" class="player" readonly>
              <i class="fas fa-angle-double-right"></i>
            </div>
          </div>
          <div class="teams">
            <div class="textbox">
              <input type="text" class="player" readonly>
              <i class="fas fa-angle-double-right"></i>
            </div>
            <div class="textbox">
              <input type="text" class="player" readonly>
              <i class="fas fa-angle-double-right"></i>
            </div>
          </div>
        </div>
        <div class="rounds quarter right">
          <div class="teams">
            <div class="textbox">
              <input type="text" class="player" readonly>
              <i class="fas fa-angle-double-left"></i>
            </div>
            <div class="textbox">
              <input type="text" class="player" readonly>
              <i class="fas fa-angle-double-left"></i>
            </div>
          </div>
          <div class="teams">
            <div class="textbox">
              <input type="text" class="player" readonly>
              <i class="fas fa-angle-double-left"></i>
            </div>
            <div class="textbox">
              <input type="text" class="player" readonly>
              <i class="fas fa-angle-double-left"></i>
            </div>
          </div>
        </div>
        <div class="rounds semi left">
          <div class="teams">
            <div class="textbox">
              <input type="text" class="player" readonly>
              <i class="fas fa-angle-double-right"></i>
            </div>
            <div class="textbox">
              <input type="text" class="player" readonly>
              <i class="fas fa-angle-double-right"></i>
            </div>
          </div>
        </div>
        <div class="rounds semi right">
          <div class="teams">
            <div class="textbox">
              <input type="text" class="player" readonly>
              <i class="fas fa-angle-double-left"></i>
            </div>
            <div class="textbox">
              <input type="text" class="player" readonly>
              <i class="fas fa-angle-double-left"></i>
            </div>
          </div>
        </div>
        <div class="rounds final">
          <div class="teams">
            <div class="textbox top">
              <input type="text" class="player" readonly>
              <i class="fas fa-angle-double-right"></i>
            </div>
            <div class="textbox bottom">
              <input type="text" class="player" readonly>
              <i class="fas fa-angle-double-left"></i>
            </div>
          </div>
        </div>
  
        <svg version="1.1" id="connections" x="0px" y="0px"
           viewBox="0 0 1478 762.7" preserveAspectRatio= "none">
               <g id="shadow">
                 <polyline id="_8_erlines_15_" class="st0" points="1376.3,66 1275.8,58.5 1275.8,134.5 1376.3,137.9  "/>
                 <polyline id="_8_erlines_14_" class="st0" points="1376.3,248.9 1275.8,248.9 1275.8,324.9 1376.3,328.3  "/>
                 <polyline id="_8_erlines_13_" class="st0" points="1376.3,441.8 1271,441.8 1275.8,519.5 1376.3,516.2    "/>
                 <polyline id="_8_erlines_12_" class="st0" points="1376.3,630.6 1275.8,630.6 1271,716.6 1376.3,706.6    "/>
                 <polyline id="_8_erlines_11_" class="st0" points="112.5,60.3 206,66.1 207.3,138.2 112.5,138.2  "/>
                 <polyline id="_8_erlines_10_" class="st0" points="112.5,254.1 206,254.1 207.3,328.1 112.5,328.1    "/>
                 <polyline id="_8_erlines_9_" class="st0" points="112.5,435.7 210.3,441.5 206,515.8 112.5,515.8     "/>
                 <polyline id="_8_erlines_8_" class="st0" points="112.5,623.7 204.6,631.7 206,706.4 112.5,706.4     "/>
                 <polyline id="_4_erlines_7_" class="st0" points="1275.8,98.2 1057.5,98.2 1053.8,284 1275.8,288.6   "/>
                 <polyline id="_4_erlines_6_" class="st0" points="1273.4,480.7 1053.8,473.6 1057.5,673.6 1273.4,673.6   "/>
                 <polyline id="_4_erlines_5_" class="st0" points="206,99.3 421.1,101.7 421.1,284.9 206,291.1    "/>
                 <polyline id="_4_erlines_4_" class="st0" points="206,473.3 421.1,479 425.2,665.1 205.4,672.6   "/>
                 <polyline id="_2_erlines_3_" class="st0" points="1055.6,193.4 843.5,198 847.3,565.4 1055.6,573.6   "/>
                 <polyline id="_2_erlines_2_" class="st0" points="421.1,192.1 635.8,195.2 630.7,572.9 421.1,572.9   "/>
                 <line id="_1_erlines_3_" class="st0" x1="739.2" y1="480.7" x2="846.4" y2="480.7"/>
                 <line id="_1_erlines_2_" class="st0" x1="749.2" y1="288.2" x2="634.5" y2="288.2"/>
               </g>
               <g id="lines">
                 <polyline id="_8_erlines" class="st1" points="1381.3,61 1280.8,53.5 1280.8,129.5 1381.3,132.9  "/>
                 <polyline id="_8_erlines_1_" class="st1" points="1381.3,243.9 1280.8,243.9 1280.8,319.9 1381.3,323.3   "/>
                 <polyline id="_8_erlines_6_" class="st1" points="1381.3,436.8 1276,436.8 1280.8,514.5 1381.3,511.2     "/>
                 <polyline id="_8_erlines_7_" class="st1" points="1381.3,625.6 1280.8,625.6 1276,711.6 1381.3,701.6     "/>
                 <polyline id="_8_erlines_2_" class="st1" points="107.5,55.3 201,61.1 202.3,133.2 107.5,133.2   "/>
                 <polyline id="_8_erlines_3_" class="st1" points="107.5,249.1 201,249.1 202.3,323.1 107.5,323.1     "/>
                 <polyline id="_8_erlines_4_" class="st1" points="107.5,430.7 205.3,436.5 201,510.8 107.5,510.8     "/>
                 <polyline id="_8_erlines_5_" class="st1" points="107.5,618.7 199.6,626.7 201,701.4 107.5,701.4     "/>
                 <polyline id="_4_erlines_2_" class="st1" points="1280.8,93.2 1062.5,93.2 1058.8,279 1280.8,283.6   "/>
                 <polyline id="_4_erlines_3_" class="st1" points="1278.4,475.7 1058.8,468.6 1062.5,668.6 1278.4,668.6   "/>
                 <polyline id="_4_erlines" class="st1" points="201,94.3 416.1,96.7 416.1,279.9 201,286.1    "/>
                 <polyline id="_4_erlines_1_" class="st1" points="201,468.3 416.1,474 420.2,660.1 200.4,667.6   "/>
                 <polyline id="_2_erlines_1_" class="st1" points="1060.6,188.4 848.5,193 852.3,560.4 1060.6,568.6   "/>
                 <polyline id="_2_erlines" class="st1" points="416.1,187.1 630.8,190.2 625.7,567.9 416.1,567.9  "/>
                 <line id="_1_erlines_1_" class="st1" x1="744.2" y1="475.7" x2="851.4" y2="475.7"/>
                 <line id="_1_erlines" class="st1" x1="744.2" y1="283.2" x2="629.5" y2="283.2"/>
               </g>
        </svg>
  
      </div>
  
      <div id="side-bracket">
  
        <div class="rounds smallfinal left">
          <div class="textbox">
            <input type="text" class="player" readonly>
            <i class="fas fa-angle-double-right"></i>
          </div>
        </div>
  
        <div id="smallfinal-trophy">
          <img src="assets/imgs/themeTaddl/medaille-third.svg">
        </div>
  
        <div class="rounds smallfinal right">
          <div class="textbox">
            <input type="text" class="player" readonly>
            <i class="fas fa-angle-double-left"></i>
          </div>
        </div>
  
      </div>
  
    </div>
    
    <div id="settings" class="closed">
      <svg version="1.1" id="settings-icon" x="0px" y="0px"
     viewBox="0 0 50 50" xml:space="preserve">
        <path id="outline" stroke="#FFFFFF" stroke-width="2.5" d="M25,1.1c-1,0-1.8,0.2-2.7,0.7L6.3,11.1c-1.6,1-2.7,2.7-2.7,4.6v18.6c0,1.9,1.1,3.6,2.7,4.6
        l16.1,9.3c0.9,0.6,1.7,0.8,2.7,0.8s1.8-0.2,2.7-0.7L43.7,39c1.6-1,2.7-2.7,2.7-4.6V15.7c0-1.9-1.1-3.6-2.7-4.6L27.7,1.8
        C26.8,1.3,26,1.1,25,1.1L25,1.1z"/>
        <path id="gearwheel" d="M34.4,21.1c-0.6-1.4,0-2.9,1.3-3.6c-0.9-1.3-2-2.4-3.2-3.2c-0.7,1.3-2.2,1.8-3.6,1.3c-1.3-0.6-2-2-1.6-3.4
        c-1.5-0.3-3-0.3-4.5,0c0.4,1.4-0.3,2.9-1.6,3.4c-1.4,0.6-2.9,0-3.6-1.3c-1.3,0.9-2.4,2-3.2,3.2c1.3,0.7,1.8,2.2,1.3,3.6
        c-0.6,1.3-2,2-3.4,1.6c-0.3,1.5-0.3,3,0,4.5c1.4-0.4,2.9,0.3,3.4,1.6c0.6,1.4,0,2.9-1.3,3.6c0.9,1.3,2,2.4,3.2,3.2
        c0.7-1.3,2.2-1.8,3.6-1.3c1.3,0.6,2,2,1.6,3.4c1.5,0.3,3,0.3,4.5,0c-0.4-1.4,0.3-2.9,1.6-3.4c1.4-0.6,2.9,0,3.6,1.3
        c1.3-0.9,2.4-2,3.2-3.2c-1.3-0.7-1.8-2.2-1.3-3.6c0.6-1.3,2-2,3.4-1.6c0.3-1.5,0.3-3,0-4.5C36.5,23.1,35,22.4,34.4,21.1z M25,32.2
        c-4,0-7.2-3.2-7.2-7.2s3.2-7.2,7.2-7.2s7.2,3.2,7.2,7.2S29,32.2,25,32.2z M25,27.1c-1.2,0-2.1-0.9-2.1-2.1s0.9-2.1,2.1-2.1
        s2.1,0.9,2.1,2.1S26.2,27.1,25,27.1z"/>
        <path id="exit" d="M35.1,33.2c0.5,0.5,0.5,1.4,0,1.9c-0.3,0.3-0.6,0.4-1,0.4c-0.3,0-0.7-0.1-1-0.4l-6.3-6.3l1.9-1.9L35.1,33.2z
        M26.9,25l8.2-8.2c0.5-0.5,0.5-1.4,0-1.9c-0.5-0.5-1.4-0.5-1.9,0L25,23.1l-8.2-8.2c-0.5-0.5-1.4-0.5-1.9,0c-0.5,0.5-0.5,1.4,0,1.9
        l8.2,8.2l-8.2,8.2c-0.5,0.5-0.5,1.4,0,1.9c0.3,0.3,0.6,0.4,1,0.4c0.3,0,0.7-0.1,1-0.4l8.2-8.2L26.9,25z"/>
      </svg>
  
      <div id="inner-settings" class="clear-warning">
        <div id="infoBtn">
          <i class="fas fa-info-circle"></i>
        </div>

        <div id="infos">
          <img id="infoPlayers" src="/assets/imgs/infoPlayers.svg">
          <img id="infoShuffle" src="/assets/imgs/infoShuffle.svg">
          <img id="infoThird" src="/assets/imgs/infoThird.svg">
          <img id="infoThemes" src="/assets/imgs/infoThemes.svg">
          <img id="infoReset" src="/assets/imgs/infoReset.svg">
        </div>
    
        <div id="players">
          <h2>Players</h2>
          <button class="btn-wide toggle" data-index="0">
            8 Players
          </button>
          <button class="btn-wide toggle" data-index="1">
            16 Players
          </button>
        </div>
    
        <div id="mid-icons">
          <button id="btn-shuffle" class="btn-small grey">
            <i class="fas fa-random"></i>
          </button>
          <button id="btn-third" class="btn-small toggle">
            3rd
          </button>
          <button id="btn-clear" class="btn-small red">
            <i class="fas fa-trash-alt"></i>
          </button>
        </div>
    
        <div id="themes">
          <h2>Themes</h2>
          <button class="btn-wide toggle" data-index="0">
            Taddl
          </button>
          <button class="btn-wide toggle" data-index="1">
            Toni
          </button>
        </div>
  
        <div id="reset" class="hidden">
          <h3>Are you sure you<br>want to clear everything ?</h3>
          <div class="btn-container">
            <button class="btn-wide toggle cancel">
              cancel
            </button>
            <button class="btn-wide toggle confirm">
              do it
            </button>
          </div>
        </div>
      </div>
    </div>
  
    <div id="end-back-btn">
      <button class="btn-wide">
        back
      </button>
      <div id="message">
        <p>*you can still fight for the 3rd place*</p>
      </div>
    </div>
  
    <div id="background">
      <div id="gradient"></div>
      <div id="grid">
        <div class="lines-vertically overlay">
          <div class="line"></div>
          <div class="line"></div>
          <div class="line"></div>
          <div class="line"></div>
          <div class="line"></div>
          <div class="line"></div>
          <div class="line"></div>
          <div class="line"></div>
          <div class="line"></div>
          <div class="line"></div>
          <div class="line"></div>
          <div class="line"></div>
          <div class="line"></div>
          <div class="line"></div>
          <div class="line"></div>
          <div class="line"></div>
        </div>
        
        <div class="lines-vertically">
          <div class="line left"></div>
          <div class="line left"></div>
          <div class="line left"></div>
          <div class="line left"></div>
          <div class="line left"></div>
          <div class="line left"></div>
          <div class="line left"></div>
          <div class="line left"></div>
          <div class="line right"></div>
          <div class="line right"></div>
          <div class="line right"></div>
          <div class="line right"></div>
          <div class="line right"></div>
          <div class="line right"></div>
          <div class="line right"></div>
          <div class="line right"></div>
        </div>
        <div class="lines-horizontally">
          <div class="line"></div>
          <div class="line"></div>
          <div class="line"></div>
          <div class="line"></div>
          <div class="line"></div>
          <div class="line"></div>
          <div class="line"></div>
          <div class="line"></div>
          <div class="line"></div>
          <div class="line"></div>
          <div class="line"></div>
          <div class="line"></div>
          <div class="line"></div>
          <div class="line"></div>
          <div class="line"></div>
          <div class="line"></div>
          <div class="line"></div>
          <div class="line"></div>
          <div class="line"></div>
          <div class="line"></div>
          <div class="line"></div>
          <div class="line"></div>
        </div>
      </div>
    </div>
  </div>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.6/gsap.min.js"></script>
<script src="js/autoscaleFontSize.js"></script>
<script src="js/clear.js"></script>
<script src="js/logoNsettings.js"></script>
<script src="js/players.js"></script>
<script src="js/shufflePlayers.js"></script>
<script src="js/smallFinal.js"></script>
<script src="js/themes.js"></script>
<script src="js/trophy.js"></script>
<script src="js/updateWinner.js"></script>
<script src="js/confetti.min.js"></script> <!-- github.com/mathusummut/confetti.js -->
<script src="js/endScreen.js"></script>
</html>