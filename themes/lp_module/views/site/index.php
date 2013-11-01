<div class="pick_flat">
	<div class="width_960">
		<span class="arrow"></span>
		<div class="pick_head"><h1>Хотите подобрать квартиру по</h1><h1 class="second"> программе "Молодая семья"?</h1></div>
		<div class="pick_wrap">
			<?php echo $this->renderPartial('/requests/_form', array('model' => $request_model))?>
			<div class="discount">
				<p class="discount_percent">Скидка 20% на наши услуги</p>
				<p class="discount_remaining">Предложение действует еще:</p>
				
				<!-- ///Таймер -->
				<p data-date_fix="<?=CHtml::encode(Settings::getOption('date1'))?>" class="timer"><p>
				<div id="countdown_dashboard" class="countdown">

					<div class="dash days_dash">
						<span class="dash_title">дней</span>
						<div class="digit">0</div>
						<div class="digit">0</div>
					</div>

					<div class="dash hours_dash">
						<span class="dash_title">часов</span>
						<div class="digit">0</div>
						<div class="digit">0</div>
					</div>

					<div class="dash minutes_dash">
						<span class="dash_title">минут</span>
						<div class="digit">0</div>
						<div class="digit">0</div>
					</div>

					<div class="dash seconds_dash">
						<span class="dash_title">секунд</span>
						<div class="digit">0</div>
						<div class="digit">0</div>
					</div>
				</div>
				<!-- Таймер/// -->

			</div>
			<div class="discount topline">
				<p class="discount_percent">Скидка 10% на наши услуги</p>
				<p class="discount_remaining">Предложение действует еще:</p>
				
				<!-- ///Таймер2 -->
					<p data-date_fix="<?=CHtml::encode(Settings::getOption('date2'))?>" class="timer"><p>
					<div id="countdown_dashboard2" class="countdown">

					<div class="dash days_dash">
						<span class="dash_title">дней</span>
						<div class="digit">0</div>
						<div class="digit">0</div>
					</div>

					<div class="dash hours_dash">
						<span class="dash_title">часов</span>
						<div class="digit">0</div>
						<div class="digit">0</div>
					</div>

					<div class="dash minutes_dash">
						<span class="dash_title">минут</span>
						<div class="digit">0</div>
						<div class="digit">0</div>
					</div>

					<div class="dash seconds_dash">
						<span class="dash_title">секунд</span>
						<div class="digit">0</div>
						<div class="digit">0</div>
					</div>
					</div>
				<!-- Таймер2/// -->
			</div>
		</div>
		<div class="no_time">
			<p class="no_time_head">Нет времени на поиск квартиры самостоятельно?</p>
			<p>Обратись к команде профессионалов, мы решим ваши проблемы бесплатно!</p>
		</div>
	</div>
</div>
<div class="cooperate">
	<div class="width_960">
		<div class="cooperate_header"><h2>Почему стоит работать с нами?</h2></div>
		<div class="row">
			<p class="item-1">Наша база данных содержит свыше 1000 квартир на первичном и вторичном рынках недвижимости</p>
			<p class="item-2">Мы работаем с сертификатами по любой программе: молодая семья, материнский капитал и т.д.</p>
		</div>
		<div class="row">
			<p class="item-3">Огромный выбор квартир с износом жилого фонда менее 25%</p>
			<p class="item-4">Подстраиваемся под Ваш график работы</p>
		</div>
		<div class="row">
			<p class="item-5">Подготовка пакета документов, юридическое сопровождение сделок с недвижимостью. Регистрация прав собственности.</p>
			<p class="item-6">Более 5 лет работы в сфере недвижимости</p>
		</div>
	</div>
	<span class="top_line"></span>
</div>
<div class="consult">
	<div class="width_960">
		<div class="order_consult">
			<h2>У Вас нет возможности приехать к нам в офис?</h2>
			<p class="in_time">Наши специалисты проведут выездную консультацию в удобное для Вас время</p>
			<a class="orange_button">Заказать выездную консультацию</a>
		</div>
	</div>
</div>
<div class="flats">
	<span class="bot_line"></span>
	<div class="width_960">
		<h3>Большой выбор квартир</h3><h2>Во всех районах города</h2>
		<p class="flat_rooms">Однокомнатные квартиры от <span>30</span> кв.м</p>
		<p class="flat_rooms">Двухкомнатные квартиры от <span>45</span> кв.м</p>
		<p class="flat_rooms">Трехкомнатные квартиры от <span>60</span> кв.м</p>
	</div>
	<span class="top_line"></span>
</div>
<div class="partners">
	<div class="width_960">
		<h3>Агентство недвижимости Модуль</h3><h2>Является партнером крупных компаний страны</h2>
		<div class="left">
			<p class="sberbank">Официальный партнер</p>
		</div>
		<div class="right">
			<p class="rosgosstrah">Вы застрахованы от всех ипотечных рисков!</p>
		</div>
		<p class="banks"></p>
	</div>
</div>
<div class="comments">
	<span class="bot_line"></span>
	<div class="width_960">
		<h2>Отзывы клиентов, которым</h2><h3>Мы помогли приобрести жилье</h3>
		<div class="message">
			<img class="photo" src="<?=$this->getAssetsUrl()?>/img/face.png">
			<p class="comment">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure 
dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non 
proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
			<div class="sender">
				<div class="details"><p class="name">Мария Иванова</p><p class="city">Тюмень</p><p class="phone">8 (480) 000-00-00</p></div>
			</div>
		</div>
		<div class="video"><a href="#"><img src="<?=$this->getAssetsUrl()?>/img/video1.jpg"></a></div>
		<div class="video"><a href="#"><img src="<?=$this->getAssetsUrl()?>/img/video2.jpg"></a></div>
	</div>
	<div class="authors">
		<div class="width_960">
			<h4 class="name">Глеб Викторович</h4>
			<h4 class="name">Глеб Викторович</h4>
		</div>
	</div>
</div>
<div class="certificates">
	<div class="width_960">
		<h1>Наши сертификаты</h1>
		<a href="/upload/cert_sberbank.jpg" rel="cert" class="cert"><img src="/upload/cert_sberbank_tmb.jpg"></a>
		<a href="/upload/cert_vtb.jpg" rel="cert" class="cert"><img src="/upload/cert_vtb_tmb.jpg"></a>
		<a href="/upload/cert_delta.jpg" rel="cert" class="cert"><img src="/upload/cert_delta_tmb.jpg"></a>
		<a href="/upload/cert_sberbank_mail.jpg" rel="cert" class="cert"><img src="/upload/cert_sberbank_mail_tmb.jpg"></a>
		<a href="/upload/cert_rosgosstrah.jpg" rel="cert" class="cert"><img src="/upload/cert_rosgosstrah_tmb.jpg"></a>
	</div>
</div>
<div class="how_pick">
	<span class="bot_line"></span>
	<div class="width_960 pick">
		<h3>Как мы будем подбирать</h3><h2>вам квартиру</h2>
		<p class="step1">Вы оставляете заявку на сайте или по телефону</p>
		<p class="step2">Наш специалист связывается с Вами для получения необходимой информации</p>
		<p class="step3">Мы делаем подборку квартир по вашим параметрам</p>
		<p class="step4">Повторный звонок для согласования графика просмотра подобранных вариантов</p>
		<p class="step5">Готовим документы для оформления предстоящей сделки</p>
		<p class="step6">Поздравляем! Вы владелец вашего собственного жилья</p>
	</div>
	<span class="top_line"></span>
</div>
<div class="proposal_contents">
	<div class="width_960">
		<div class="proposal">
			<h1>Хотите подобрать квартиру по программе</h1><h1 class="prop_orange">&nbsp;"молодая семья"</h1>
			<p>Наши специалисты свяжутся с вами</p>
			<a class="orange_button">Совершенно бесплатная заявка</a>
		</div>
	</div>
</div>
<span class="top_line"></span>
<div class="map_wrap">
	<h1>Вы можете посетить наш офис в любое, удобное для Вас время</h1>
	<div id="map">
		<div class="map width_960">
			<div class="contacts">
				<p class="adress">Г.Тюмень ул. Герцена 64, 8 этаж</p>
				<p class="phone">8 (3453) 58-48-38</p>
				<p class="phone">8 (3452) 60-81-95</p>
				<p class="phone">8 (3452) 58-52-80</p>
				<span class="blackline"></span>
				<p class="work_header">Работа офиса</p>
				<p class="work-time">ПН-ПТ&nbsp;&nbsp;&nbsp;10:00-19:00</p>
				<p class="work-time">СБ-ВС&nbsp;&nbsp;&nbsp;10:00-17:00</p>
			</div>
		</div>
	</div>
</div>