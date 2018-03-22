<html xmlns="http://www.w3.org/1999/xhtml"><head>
      <link rel="icon" href="favicon.png" type="image/png"/>
    <script src="https://aframe.io/releases/0.8.0/aframe.min.js"></script>
    <script src="https://unpkg.com/aframe-line-component/dist/aframe-line-component.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto%7CRoboto+Mono" media="all" /><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto%7CRoboto+Mono" media="all" /><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto%7CRoboto+Mono" media="all" /></head>
  <body class="a-body " cz-shortcut-listen="true">
    <a-scene id="frame" class="fullscreen" inspector="" keyboard-shortcuts="" screenshot="" vr-mode-ui=""><canvas class="a-canvas" data-aframe-canvas="true" width="269" height="134"></canvas>
      <a-entity position="0 1 2">
        <a-entity camera look-controls wasd-controls="fly:true"></a-entity>
      </a-entity>
      <a-cylinder  color="#FFC65D" material="color:#000000" geometry="radius:0.01;height:10"></a-cylinder>
      <a-plane rotation="-90 0 0" material="opacity:0.5;" geometry="width:10;height:10"></a-plane>
      <a-sky color="#ECECEC" material="" geometry=""></a-sky>
    </a-sphere></a-scene>

    <script type="text/javascript">
      var demo = document.getElementById('frame')
      var points = new Array();
      var x = 0;
      var y = 0;
      var z = x + y;
      var i =0;
      for( x = -10; x < 10 ; x = x+ 0.25){
        for(y = -10; y < 10 ; y= y +0.25){
        //  z = 5*Math.exp(-Math.pow(x,2) -Math.pow(y,2));
        z = <?php echo $_GET['exp']; ?> ;
          points[i] = x.toString() + " " +z.toString() + " "  + y.toString();
          i++;
        }
      }
      for(j=0; j < points.length ; j++){
        var newSpan = document.createElement('a-sphere');
        newSpan.setAttribute('position', points[j]);
        newSpan.setAttribute('radius', "0.1");
        newSpan.setAttribute('color', "tomato");
        demo.appendChild(newSpan);
      }
        console.log(points);

    </script>



</body></html>
