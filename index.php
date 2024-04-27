<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<html lang="ru">
		<title>Animal Crossing</title>
		<link rel="stylesheet" href="./style.css">
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=Amatic SC' rel='stylesheet'>
		<!--<link rel="icon" href="./favicon.ico" type="image/x-icon"> -->
		
		<script>
			const checkpoint = 150;

			window.addEventListener("scroll", () => {
			
			const currentScroll = window.pageYOffset;
			var bodyRect = document.body.getBoundingClientRect();

			let kek = document.getElementsByTagName("img")
			for(i = 1; i < kek.length; ++i)
			{
				var rect = kek[i].getBoundingClientRect();
				var offset = rect.top;
				console.log(offset);

				opacity = 1 - ( (rect.top) / (window.innerHeight*4));

				kek[i].style.opacity = opacity
				kek[i].style.scale = opacity
			}
			
			});		

		</script>
		
	</head>
	<body>
		<?php
        $servername = "sql208.infinityfree.com";
        $username = "if0_36437418";
        $password = "rZj0YkyXkR0W3nY";
        // Create connection
        $conn = mysqli_connect($servername, $username, $password, "if0_36437418_db");
		mysqli_set_charset($conn, 'utf8mb4');
        ?> 
			<div id="top">
					
			<header>
					<div id="container-header-table" class="padding-common">
					<a class="button button-left">О НАС</a>
					<a class="button button-left">УЧАСТНИКИ</a>
					<i class="button button-right glyphicon glyphicon glyphicon-align-justify"></i>
					<a class="button button-right">КОНТАКТЫ</a>
					</div>
			</header>

			<div id="top-body" class="padding-common">
				<div>
					<div class="portfolio-text">
						<h1 class="ama-font">Портфолио</h1>
						<p class="ama-font">Группы №5</p>
					</div>
					<img src="images/el.png" />
				</div>
			</div>

			</div>

			<div id="motto">
				<p class="inter-font">"Образование - это самое мощное оружие, которое вы можете использовать для изменения мира." - Нельсон Мандела</p>
			</div>

			<div id="about-us">
				<div id="subheader">
					<p class="ama-font">О нас</p>
				</div>
				<div class="">
					<div id="about-us-1" class="padding-common white-back-text inter-font" >
						<p><b>Группа №5</b> - это энергичная группа студентов, объединенных общей страстью к знаниям, творчеству и достижениям. В каждом из нас горит искра любопытства и жажды познания, и мы стремимся к саморазвитию и совершенствованию. Наша группа нацелена на достижение креативных и умственных вершин в сферах академической деятельности. Мы стремимся не просто к успешной учебе, но и к созданию инновационных проектов.</p>
					</div>
					<div id="about-us-2" class="padding-common p2 inter-font">
						<p><b>Инновационный подход:</b> Мы не боимся экспериментировать, стремимся к новым идеям и ищем нестандартные решения для самых сложных задач.</p>
						<p><b>Коллективный дух:</b> Мы работаем как единое целое, поддерживаем друг друга и вдохновляем на новые свершения, уважая индивидуальные сильные стороны каждого члена команды.</p>
					</div>
					<div id="about-us-3" class="padding-common white-back-text inter-font" >
						<p><b>Многосторонний подход: </b>Мы гордимся разнообразием наших интересов - от точных наук до искусства, что позволяет нам видеть проблемы с разных сторон.</p>
					</div>
				</div>
			</div>

			<div id="members">
				<div id="subheader">
					<p class="ama-font">Участники</p>
				</div>
				<div id="members-body">
					<div id="member-container" class="padding-common">
						<div id="member" class="member_left">
							<table>
								<tr><td><p class="member-name inter-font">
									<?php 
									$result = mysqli_query($conn, "SELECT NAME FROM info where ID=0");
									while( $row = mysqli_fetch_array($result) ){
										$meaning = $row["NAME"];
										echo $meaning;
										}
									?>
								</p></td></tr>
								<tr><td><p class="member-text">
								<?php 
									$result = mysqli_query($conn, "SELECT TEXT FROM info where ID=0");
									while( $row = mysqli_fetch_array($result) ){
										$meaning = $row["TEXT"];
										echo $meaning;
										}
									?>
								</p></td></tr>
							</table>							
							<img src="images/mavpa.png"/>
						</div>
						<div id="member" class="member_right">
							<img src="images/quak.png"/>
							<table>
								<tr><td><p class="member-name inter-font">
								<?php 
									$result = mysqli_query($conn, "SELECT NAME FROM info where ID=1");
									while( $row = mysqli_fetch_array($result) ){
										$meaning = $row["NAME"];
										echo $meaning;
										}
									?>
								</p></td></tr>
								<tr><td><p class="member-text">
								<?php 
									$result = mysqli_query($conn, "SELECT TEXT FROM info where ID=1");
									while( $row = mysqli_fetch_array($result) ){
										$meaning = $row["TEXT"];
										echo $meaning;
										}
									?>
								</p></td></tr>
							</table>							
						</div>
						<div id="member" class="member_left">
							<table>
								<tr><td><p class="member-name inter-font"><?php 
									$result = mysqli_query($conn, "SELECT NAME FROM info where ID=2");
									while( $row = mysqli_fetch_array($result) ){
										$meaning = $row["NAME"];
										echo $meaning;
										}
									?>
									</p></td></tr>
								<tr><td><p class="member-text">
								<?php 
									$result = mysqli_query($conn, "SELECT TEXT FROM info where ID=2");
									while( $row = mysqli_fetch_array($result) ){
										$meaning = $row["TEXT"];
										echo $meaning;
										}
									?>
								</p></td></tr>
							</table>							
							<img src="images/los.png"/>
						</div>
						<div id="member" class="member_right">
							<img src="images/slon.png"/>
							<table>
								<tr><td><p class="member-name inter-font">
								<?php 
									$result = mysqli_query($conn, "SELECT NAME FROM info where ID=3");
									while( $row = mysqli_fetch_array($result) ){
										$meaning = $row["NAME"];
										echo $meaning;
										}
									?>
								</p></td></tr>
								<tr><td><p class="member-text">
								<?php 
									$result = mysqli_query($conn, "SELECT TEXT FROM info where ID=3");
									while( $row = mysqli_fetch_array($result) ){
										$meaning = $row["TEXT"];
										echo $meaning;
										}
									?>
								</p></td></tr>
							</table>							
						</div>
						<div id="member" class="member_left">
							<table>
								<tr><td><p class="member-name inter-font">
								<?php 
									$result = mysqli_query($conn, "SELECT NAME FROM info where ID=4");
									while( $row = mysqli_fetch_array($result) ){
										$meaning = $row["NAME"];
										echo $meaning;
										}
									?>
								</p></td></tr>
								<tr><td><p class="member-text">
								<?php 
									$result = mysqli_query($conn, "SELECT TEXT FROM info where ID=4");
									while( $row = mysqli_fetch_array($result) ){
										$meaning = $row["TEXT"];
										echo $meaning;
										}
									?>
								</p></td></tr>
							</table>							
							<img src="images/dyatel.png"/>
						</div>
					</div>
				</div>
			</div>

			<div id="contacts">
				<div id="subheader">
					<p class="ama-font">Контакты</p>
				</div>
				<div id="contacts-body" class="inter-font">
					<p>ВК: ****</p>
					<p>Телеграм: ****</p>
				</div>
			</div>

			<div id="subheader"></div>
	</body>
</html>
