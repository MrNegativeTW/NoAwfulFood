<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
	<?php include 'head.php' ?>
<style>
.aboutbg {
	background: url("http://no-awful-food.byethost7.com/img/about_bg.jpg") no-repeat;
	background-color: #191919;
	background-attachment: fixed;
    background-position: center;
    background-size: cover;
	padding-top: 75px;
    padding-bottom: 100px;
}
	
	body {
	position: absolute;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	animation: bg-animation 7s infinite;
}

@-webkit-keyframes bg-animation {
  0% {
    background-color: #FF4136;
  }
  15% {
    background-color: #FFDC00;
  }
  30% {
    background-color: #2ECC40;
  }
  45% {
    background-color: #0074D9;
  }
  60% {
    background-color: #B10DC9;
  }
  75% {
    background-color: #F012BE;
  }
  90% {
    background-color: #001f3f;
  }
  100% {
    background-color: #FF4136;
  }
}
@keyframes bg-animation {
	0% {
    background-color: #001f3f;
  }
	10% {
    background-color: #0074D9;
  }
	20% {
    background-color: #7FDBFF;
  }
	30% {
    background-color: #39CCCC;
  }
	40% {
    background-color: #3D9970;
  }
	50% {
    background-color: #2ECC40;
  }
	60% {
    background-color: #01FF70;
  }
	70% {
    background-color: #FFDC00;
  }
	80% {
    background-color: #FF851B;
  }
	90% {
    background-color: #FF4136;
  }
	100% {
    background-color: #001f3f;
  }
}
</style>
</head>
<body class="aboutbg global-font-family">
	<div class="container">
		<div class="text-center">
			<img src="img/author.jpg" alt="作者圖片" width="150" height="150" class="center rounded-circle">
			<div class="wowTop"></div>
			<h1 style="color:white">Trevor Wu</h1>
			<P style="color:white">18歲 屏東人 大一</p>
			<P style="color:white">因為常常無法決定吃什麼好<br>所以決定做一個網站<br>讓我可以先決定好再出門</P>
			<a class="btn btn-info" href="http://no-awful-food.byethost7.com" role="button">返回 No Awful Food ›</a>
			<hr>
			<P style="color:white">99％圖片都由本人親手拍攝<br>並經過Photoshop處理和壓縮大小</P>
			<a class="btn btn-secondary" href="https://github.com/MrNegativeTW/NoAwfulFood" role="button">GitHub</a>
<!-- Button trigger modal -->
<button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#exampleModal">查看本站技術資訊 ›</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">技術資訊</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
			</div>
      		<div class="modal-body">
        	Host on ByetHost <br>
        	In the first, we use html+css+bootstrap, then switch to PHP, just because include feature, then add more Bootstrap/Font Awesome/animated.css for better looking.
        	i will add some more content soon, like Q&amp;A or something else. if i remember.
        	</div>
		</div>
	</div>
</div>
		
			<P class="wowTop" style="color:white">開發工具：<br>Dreamweaver / Sublime Text</P>
			<P style="color:white">測試裝置：<br>Chrome (Win/Mac/Android)<br>Safari (Mac/iPad)<br></P>
			<br>
		</div>
</div>
	<!--既然你都到這邊來了，我就跟你說，這一頁有彩色的小彩蛋喔-->
	<!--然後我很懶得整理程式碼，不要罵我QQ-->
	<!-- Bootstrap core JavaScript-->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>   
</body>
</html>