<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Modak&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
  <script src="events.js"></script>
  <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script> -->


  <title>Events</title>

</head>

<body>
  <div class ="grid">
  <div class=Headcontainer>
    <div class=title-box>
      <div class="title">
        <h1>EVENTS <span>REPOSOSITORY </span></h1><br>
        <br>
        <br><p> <a href =../final.html>HOME</a></p>
      </div>
     
    </div>
  </div>
  <div class=bodypage>
    <div class=form>
      <div class=form-con>
        <form method="post" action="submit.php"><br>
          <h1>Admin login</h1>
          Username
          <input type="text" name="username" placeholder="Username.."></><br>

          Password
          <input type="password" name="password" placeholder="Password.."></><br>
          <input type="submit" value="Login">
        </form><br>
        <form method="POST" action="display.php">
          <p>Click this button to head to the display page</p>
            <input type="submit" value="click">
        </form>

        <!-- name of the event and a button to fetch the data for each event when clicked  -->
        <h1>STRONG, BRITISH AND BLACK.</h1>
        <button id="con" onclick="con()">content</button>
        <h1>THREE COUNTIES OPEN ART CUBES</h1>
        <button id="con" onclick="con1()">content</button>
        <h1>KEELE MUSIC FORUM: ‘GRAVITONICITY: TOWARDS A MODEL OF THE 'GRAVITATION' IN MUSIC</h1>
        <button id="con" onclick="con2()">content</button>
        <h1>SALVAGED SHARDS INTO SCULPTURAL ARCHAEOLOGICAL MOSAICS</h1>
        <button id="con" onclick="con3()">content</button>
        <h1>SARAH DAVIDSON</h1>
        <button id="con" onclick="con4()">content</button>
      </div>
        <!-- an empty div where fetched json data gets displayed onto -->
      <div id="display"></div>
    </div>
  </div>
</div>
</body>

</html>