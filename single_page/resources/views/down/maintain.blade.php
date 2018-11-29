<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Japan&Danang HUB</title>
  <link rel="shortcut icon" href="img/title.png" type="image/x-icon" />
  <meta name="description" content="particles.js is a lightweight JavaScript library for creating particles.">
  <meta name="author" content="Vincent Garreau" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link rel="stylesheet" media="screen" href="css/style1.css">
</head>
<body>

<!-- count particles -->
<div class="count-particles">
  <span class="js-count-particles">--</span> particles
</div>


<!-- particles.js container -->
<div id="particles-js">
  <style>
  body { text-align: center;}
  h1 { font-size: 50px; text-align: center;left:80px; top:20px;}
  body { font: 20px Helvetica, sans-serif; color: rgb(255, 255, 255); }
  article { display: block; text-align: left; width: 650px; margin: 0 auto; }
  a { color: #dc8100; text-decoration: none; }
  a:hover { color:rgb(3, 3, 3); text-decoration: none; }
</style>
  <article>
    <h1>Chúng tôi sẽ trở lại sớm!</h1>
    <div>
        <p>Xin lỗi vì sự bất tiện này nhưng chúng tôi đang thực hiện một số bảo trì vào lúc này. Nếu bạn cần bạn luôn có thể liên hệ với chúng tôi, nếu không chúng tôi sẽ trực tuyến trở lại ngay!<a href="#">Liên hệ</a> với chúng tôi để biết thêm chi tiết!</p>
        <p>&mdash; JDHUB Company'</p>
    </div>
</article>
</div>

<!-- scripts -->
<script src="../particles.js"></script>
<script src="js/app1.js"></script>

<!-- stats.js -->
<script src="js/lib1/stats.js"></script>
<script>
  var count_particles, stats, update;
  stats = new Stats;
  stats.setMode(0);
  stats.domElement.style.position = 'absolute';
  stats.domElement.style.left = '0px';
  stats.domElement.style.top = '0px';
  document.body.appendChild(stats.domElement);
  count_particles = document.querySelector('.js-count-particles');
  update = function() {
    stats.begin();
    stats.end();
    if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
      count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
    }
    requestAnimationFrame(update);
  };
  requestAnimationFrame(update);
</script>

</body>
</html>