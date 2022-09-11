<!doctype html>
<html lang="en-US">
<head>
<title>Friend Shield 2 - ticket</title>
<meta charset="utf-8">
<meta name="description" content="проходка">
<meta name="keywords" content="проходка">
<?php include 'lib/module/sys-meta.php';?>
<?php include 'lib/module/sys-css.php';?>
<?php include 'lib/module/sys-js.php';?>
</head>
<body>
<?php include 'lib/module/sys-php.php';?>
<?php
if (@include_once("lib/compat/objects/Build.php"))
	$build = Build::get_latest();
?>
<div class="page-con-content">
	<div class="banner-con-container darkmode-header">
		<div id="object-particles">
		</div>
		<div class="wavebar-con-container">
			<div class="wavebar-con-wrap">
				<div class="wavebar-svg-object">
				</div>
				<div class="wavebar-svg-object">
				</div>
			</div>
		</div>
		<div class='banner-con-title fade-up-onstart'>
			<div class='banner-tx1-title fade-up-onstart pulsate'>
				<h1>Доступ на сервер</h1>
			</div>
			<div class='banner-con-divider'>
			</div>
			<div class='banner-tx2-title fade-up-onstart'>
				<p>
                    Стоимость 50руб/месяц
				</p>
			</div>
		</div>
	</div>
	<div class="page-con-container">
		<div class="page-in-container">
		</div>
	</div>
</div>
<div class="page-con-content darkmode-slimbar" style="background:#f7f7f7">
	<div class="page-con-container">
		<div class="page-in-container">
			<div class='container-con-block darkmode-block'>
				<div class='container-con-wrapper'>
					<div class='container-tx1-block darkmode-txt'>
						<div class="container-emp-block"></div>
						<h2>Покупка</h2>
					</div>
					<div class='container-tx2-block darkmode-txt'>
<!--                        доработать-->
						<p>
							Покупая проходку, вы получаете ip-адрес сервера, ресурспак с которым удобно играть и список модов, которые нужно скачать. В комментарии по переводу нужно указать свой ник, если возникают вопросы пишите техподдержке(время ответа ~2,3 часа) <a href='https://t.me/SkytNinja' target="_blank">Skyt_Ninja. </a>Также прилагается карта <a href='' target="_blank">DynMap</a>.
						</p>
					</div>
				</div>
			</div>
			<div class="generic-con-button ">
				<a href='https://qiwi.com/payment/form/99999?extra[%27accountType%27]=nickname&extra[%27account%27]=SKYTNINJA' target="_blank">
				<div class="generic-btn-button">
					<div class="generic-ico-button" style="background: url('/img/icons/buttons/hand.png') no-repeat center">
					</div>
					<div class="generic-tx1-button">
						<span>На месяц <span class="generic-tx2-label">50руб</span></span>
					</div>
				</div>
				</a>
<!--                добавить ссылку-->
				<a href='https://qiwi.com/payment/form/99999?extra[%27accountType%27]=nickname&extra[%27account%27]=SKYTNINJA' target="_blank">
				<div class="generic-btn-button">
					<div class="generic-ico-button" style="background: url('/img/icons/buttons/hand.png') no-repeat center">
					</div>
<!--                    добавить ссылку-->
					<div class="generic-tx1-button">
						<span>На 3 месяца <span class="generic-tx2-label">150руб(рекомендуется)</span></span>
					</div>
				</div>
				</a>
			</div>
			<div class='container-con-block darkmode-block'>
				<div class='container-con-wrapper'>
					<div class='container-tx1-block darkmode-txt'>
						<div class="container-emp-block"></div>
						<h2>Общие проекты</h2>
					</div>
					<div class='container-tx2-block darkmode-txt'>
						<p>
                            Игроки сервера объединяются и воплощают свои проекты по собственным планам, чтобы оставить след на сейве сервера
						</p>
					</div>
				</div>
			</div>



            <div class='container-con-block darkmode-block'>
                <div class='container-con-wrapper'>
                    <div class='container-tx1-block darkmode-txt'>
                        <div class="container-emp-block"></div>
                        <h2>Частые, разнообразные ивенты</h2>
                    </div>
                    <div class='container-tx2-block darkmode-txt'>
                        <p>
                            Ивенты проводятся как минимум раз в 2 неделю. Участвовать, строить, организовывать могут все игроки сервера.
                        </p>
                    </div>
                </div>
            </div>
            <div class='container-con-block darkmode-block'>
                <div class='container-con-wrapper'>
                    <div class='container-tx1-block darkmode-txt'>
                        <div class="container-emp-block"></div>
                        <h2>Комьюнити</h2>
                    </div>
                    <div class='container-tx2-block darkmode-txt'>
                        <p>
                            Игроки сервера помогают друг другу, объединяются в команды, строят совместно постройки и фермы, общаются каждый день в нашем Discord сервере и получают невероятный опыт и удовольствие от игры на сервере
                        </p>
                    </div>
                </div>
            </div>
		</div>
	</div>
	<?php include 'lib/module/inc-footer.php';?>
</div>
</body>
</html>
