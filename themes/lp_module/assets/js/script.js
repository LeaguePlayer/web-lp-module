jQuery(document).ready(function() {

/* Карта */
	ymaps.ready(init);
    var myMap,
        myPlacemark;

    function init(){     
        myMap = new ymaps.Map ("map", {
            center: [57.1522, 65.5320],
            zoom: 17
        });

        myPlacemark = new ymaps.Placemark([57.1522, 65.5320], {
            hintContent: 'Г.ТЮМЕНЬ УЛ. ГЕРЦЕНА 64, 8 ЭТАЖ', 
            balloonContent: 'Г.ТЮМЕНЬ УЛ. ГЕРЦЕНА 64, 8 ЭТАЖ' 
        });

        myMap.geoObjects.add(myPlacemark);
		myMap.controls.add(new ymaps.control.ZoomControl());
		myMap.controls.add('typeSelector');
    }


/* Таймеры */
$('.timer').each(function(){
	var curDate = moment().format('DD.MM.YY');
	var arrDate = moment(curDate.split("."), 'DDMMYY');
	var dateFix = $(this).data('date_fix');
	var arrFix = moment(dateFix.split('.'), 'DDMMYY');

	//Осталось дней
	var daysRemaining = arrFix.diff(arrDate, 'days');

	var targetDate = moment(arrFix).format('DD.MM.YY').split('.');

	if(daysRemaining>0){
		$(this).parent().find('.countdown').countDown({
					targetDate: {
						'day': 		targetDate[0],
						'month': 	targetDate[1],
						'year': 	20+targetDate[2],
						'hour': 	0,
						'min': 		0,
						'sec': 		0
					},
					omitWeeks: true

		});
	} else { 
		$(this).parent().find('.countdown').append('<p class="inactive"></p>');
	 }
});

/* Прокрутка страницы для кнопок */
$('a.orange_button').click(function(){
	$('body').animate({scrollTop:0}, '1000', function(){
		$('#Requests_name').focus();
	});
});

/* Вызов FancyBox */
$('.cert').fancybox();

$('.consult .orange_button').on('click', function(){
	$('#Requests_action').val(2);
});

});