<?php
session_start();

include('lib/menu.inc');
?>

</head>

<body lang=RU>

<div align="center">

<p><b>“Повторение слов”</b></p>
</div>

<div align="left">&nbsp; &nbsp; &nbsp; &nbsp;Поворение слов происходит методом<a href="FlashCards.php" id="c1" >"Flash cards (карточки)"</a> по <a href="memCalendar.php" id="c1" >календарной/интервальной схеме.</a><BR><BR>
&nbsp; &nbsp; &nbsp; &nbsp;В этой вкладке показано , сколько слов уникальных вы повторили за день. Сколько из них вспомнили и сколько нет. 
Так же показана статистика по текущему слову.  Сколько всего нажато НЕ ЗНАЮ, ЗНАЮ и сколько было ЗНАЮ подряд. Так же когда последний раз появлялось слово и какой был ответ.
</div><BR>

<p class=MsoNormal style='text-indent:35.4pt'><b>УПРАВЛЕНИЕ КЛАВИШАМИ:</b></p>


<p>ENTER или 5– отметить слово, как ”ЗНАЮ СЛОВО”.</p>
<p class=MsoNormal style='text-indent:35.4pt'>Стрелка вниз - НЕ ЗНАЮ.</p>

<p class=MsoNormal style='text-indent:35.4pt'>Стрелка вправо - показать перевод.</p>
<p class=MsoNormal style='text-indent:35.4pt'>Стрелка влево – скрыть перевод.</p>

<p class=MsoNormal style='text-indent:35.4pt'>&nbsp;</p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal>&nbsp;</p>

</body>
</html>