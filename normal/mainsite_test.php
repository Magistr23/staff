<?php 
  $title = "Главная";
  $post_title = "Ознакомление"; 
  $urlpos = '?pos=mainsite_test';
  $directoryURI = $_GET['pos'];
  $path = parse_url($directoryURI, PHP_URL_PATH);
  $components = explode('$urlpos', $path);
  $first_part = $components[0];
 ?>
<!DOCTYPE html>
<html lang="ru">
 <?php include 'block/head.php';?>
<body>

  <style>
    .fas {
    	margin-top: 190%;
    }
  </style>
	<div class="container_fluid">
		<div class="row">
			<?php include 'block/nav.php'?>
        </div>
    </div>
    <div class="wrapper">

      <div class="container">
        <div class="block1">
        <div class="row">
          <div class="col-sm-3">
              <div class="panel panel-info">
                <div class="panel-heading"><div class="sidebar-header text-center">Builders: MegaCraft</div></div>
                <div class="panel-body">
                   	<ul>
                   	<li>Степан Демиденко</li>
                   	<li>Аля Бессмертная</li>
                	<li>Кирилл Миронов</li>
                	</ul>
                </div>
              </div>
              <div class="panel panel-info">
                <div class="panel-heading"><div class="sidebar-header text-center">Builders: MegaCraft | MCPE</div></div>
                <div class="panel-body">
                    <ul>
                    <li>Владислав Журбенко</li>
                    <li>Николай Бордюг</li>
                    <li>Тёма Артёмов</li>
                    <li>Вова Фомин</li>
                	</ul>
                </div>
              </div>
              
          </div>
             <div class="col-sm-9">
             	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
    <li data-target="#carousel-example-generic" data-slide-to="5"></li>
    <li data-target="#carousel-example-generic" data-slide-to="6"></li>
    <li data-target="#carousel-example-generic" data-slide-to="7"></li>
    <li data-target="#carousel-example-generic" data-slide-to="8"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img style="width: 100%;" src="img/alfa.png" alt="...">
      <div class="carousel-caption">
        <h3><span style="color: red;"><i><b>Альфа</b></i></span></h3>
      </div>
    </div>
    <div class="item">
      <img style="width: 100%; " src="img/beta1.png" alt="...">
      <div class="carousel-caption">
      	<h3><span style="color: red;"><i><b>Бета</b></i></span></h3>
      </div>
    </div>
    <div class="item">
      <img src="img/BWimage.jpg" alt="...">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
      <img src="img/sb.png" alt="...">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
      <img src="img/EWimage.jpg" alt="...">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
      <img src="img/HGimage.jpg" alt="...">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
      <img src="img/ANNIimage.jpg" alt="...">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
      <img src="img/GRAVimage.jpg" alt="...">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
      <img style="width: 1280px; height: auto;" src="img/ew.png" alt="...">
      <div class="carousel-caption">
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="fas fa-chevron-left"></span>
    <span class="sr-only"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="fas fa-chevron-right"></span>
    <span class="sr-only"></span>
  </a>
</div>

<div class="margin-8"></div>           
            <p><ul style = "list-style-type:circle">Общее 
              <li> Быть часто онлайн </li>
              <li>Грамотность, адекватность, знание правил </li>
              <li> Отвечать на вопросы игроков </li>
              <li> Рассматривать жалобы в игре </li>
              <li>Банить/Мутить/Кикать нарушителей, с доказательствами. </li>
              <li>Проводить конкурсы/Ивенты </li>
              <li>Рекламировать донат (сайт) в тот же /bc</li>
            </ul> </p>
            <hr>
            <div class="alert alert-danger" role="alert"><h2>Правила, которые вы должны знать!!</h2></div>
            <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">1. Общие правила.</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">2. Аккаунт.</a></li>
    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">3. Общие правила поведения игроков на сервере.</a></li>
    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">4. Правила для игроков купивших привилегии.</a></li>
    <li role="presentation"><a href="#settings1" aria-controls="settings" role="tab" data-toggle="tab">5. Запрещённые предметы.</a></li>
    <li role="presentation"><a href="#settings2" aria-controls="settings" role="tab" data-toggle="tab">6. Постройки.</a></li>
    <li role="presentation"><a href="#settings3" aria-controls="settings" role="tab" data-toggle="tab">7. Общий чат.</a></li>
    <li role="presentation"><a href="#settings4" aria-controls="settings" role="tab" data-toggle="tab">8. Платные устлуги.</a></li>
    <li role="presentation"><a href="#settings5" aria-controls="settings" role="tab" data-toggle="tab">9. Правила на SkyBlock.</a></li>
    <li role="presentation"><a href="#settings6" aria-controls="settings" role="tab" data-toggle="tab">10. Правила составления жалобы на игрока/донатера/администратора.</a></li>
    <li role="presentation"><a href="#settingsSeven" aria-controls="settings" role="tab" data-toggle="tab">11. Правила проведения мероприятий (ивентов).</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home"><p><ul style = "list-style-type:square"><div class="alert alert-success" role="alert">
             <li>1.1. Играя на наших серверах, игроки тем самым соглашаются со всеми правилами, перечисленными ниже. Если игрок не согласен с ними, то он обязуется прекратить использование сервисов проекта.</li>
  <li><b>ВАЖНО</b> 1.2 Начав играть на наших серверах, Вы автоматически подтверждаете своё согласие с данным сводом правил.</li>
  <li><b>ВАЖНО</b> 1.3 Администраторы, и Гл.Модераторы, находящиеся в /staff, не обязаны придерживаться данного свода правил и вправе наказать игрока по причине, не указанной в настоящих правилах.</li>
  <li><b>ВАЖНО</b> 1.4 Администрация не несет ответственности за временную или постоянную невозможность игры на сервере конкретным лицом или группой лиц.</li>
  <li>1.5 Игроки обязаны выполнять требования Администрации и предписания данных правил.</li>
  <li>1.6 Администрация ведет логи всех действий игроков на сервере и всех сообщений чата.</li>
  <li>1.7 Администрация имеет право корректировать данный свод правил без уведомления игрока.</li>
  <li>1.8 На сервере действует «Уголовный кодекс Российской Федерации». Все правила наказуемы и не могут оспариваться. За нарушение, mbanip/mban.</li>
</ul></div>
    <div role="tabpanel" class="tab-pane" id="profile"><p><ul style = "list-style-type:square;"><div class="alert alert-success" role="alert">
  <li>2.1 Запрещается использование нецензурной лексики в никнеймах, создание аккаунтов с никнеймами, схожими с никнеймами администрации (/staff) - Бан навсегда</li>
  <li><b>ВАЖНО</b> 2.2 Запрещается предоставлять свой аккаунт 3-м лицам для игры на сервере, продажа аккаунтов/привилегий - Бан/[E]Бан навсегда.</li>
  <li><b>ВАЖНО</b> 2.3 Ответственность несет владелец аккаунта, независимо от того, кто совершал действия под данным аккаунтом.</li>
  <li>2.4 Администрация сервера восстанавливает взломанные/потерянные аккаунты. Стоимость 150 рублей. Покупка у <a href="http://vk.com/summerfibbs">Миши Степанова</a></li>
  <li>2.5 Донат можно перенести на другой ник. Стоимость 300 рублей. Покупка у <a href="http://vk.com/summerfibbs">Миши Степанова</a></li>
  <li>2.6 Скины в которых обозначены половые органы,фашизм запрещены. Сначала вас просят сменить скин, если меняете, то бан на 7 дней. Не поменяли – Бан навсегда.</li>
</ul></div>
    <div role="tabpanel" class="tab-pane" id="messages"><p><ul style = "list-style-type:square"><div class="alert alert-success" role="alert">
  <li>Выживание #1 Альфа - 3.1 Запрещены любые способы гриферства, ловушки - Бан на 4 дня.</li>
  <li>Выживание #2 Бета - 3.1.1 Разрешены любые способы гриферства, ловушки.</li>
  <li>3.2 Запрещено мошенничество, намеренный обман администрации - Бан навсегда</li>
  <li>3.3 Администрация НЕ обязана возвращать вещи в следующих случаях:</li></ul>
<ul style="list-style-type:none"><div class="alert alert-success" role="alert">
  <li> - Удаление системой очистки дропа. </li>
  <li> - Кража имущества с незаприваченной территории. </li>
  <li> - Кража имущества игроками, состоящими в привате.</li> 
  <li> - Вайп или откат карты. </li>
  <li> - Различные баги игры, произошедшие не по вине администрации.</li> 
</ul>
<ul style = "list-style-type:square"><div class="alert alert-success" role="alert">
  <li>3.4 Запрещено распространение вредоносного контента, по типу: порнографические сайты, вредоносные ссылки и т.д. Бан навсегда.</li>
  <li>3.5 Администрация не обязана осуществлять Вам помощь в виде ускорения постройки здания, выдачи предметов, ресурсов и др.</li>
  <li>3.6 Запрещено продавать игровые предметы за реальные деньги(Рубли/Доллары и прочее)/игровую валюту(МегаКоины, обычные деньги - /bal), игровые возможности (Например /fly, /gm, /god), А также запрещено совершать обмен игровой валюты на донат и кейсы - Бан Навсегда.</li>
  <li>3.7 Игрок имеет право проводить раздачи!</li>
  <li><b>ВАЖНО</b> 3.8 Никто не имеет право пользоваться сторонними программами, скриптами, модами, читами, макросами, кликерами и т.п. для облегчения или изменения игрового процесса/PvP. - Игроку бан по IP на 5 дней, Донатеру бан по IP навсегда.</li>
  <li><b>ВАЖНО</b> 3.9 Запрещается объединяться в группы на мини-играх (SkyWars, HungerGames), объединение между командами (BedWars, Annihilation) - Бан на 3 дня всем, кто будет в команде.</li>
  <li>3.10 Вызывание неполадок в работе сервера или попытки обрушить сервер, путем специально вызванных лагов или подобного - Бан/[E]Бан навсегда.</li>
  <li>3.10.1 Запрещено стоять рядом с кнопкой, закрывать ее на /warp azino. Бан на 30 минут.</li>
  <li>3.11 Запрещено подстрекать третьих лиц на нарушение правил - Бан на 1 день.</li>
  <li>3.12 Запрещено выдавать себя за администрацию - Бан навсегда. Вся команда проекта указана в /staff.</li>
  <li>3.13 Запрещено PvP во /fly, /god, /gamemode 1, /speed - Бан на 5 дней.</li>
  <li>3.14 Запрещено находиться на /warp pvp (около спавна) в: /gamemode 1, /fly, /god, /speed без команды /vanish - Бан 1 день.</li>
  <li>3.15 Запрещено инициировать сбор на спавне, группы лиц численностью превышающей 20 человек. Инициатору кик с предупреждением, при повторном нарушении бан от 1 до 3 дней. Группа лиц должна быть разогнана.</li>
  <li>3.15.1 Запрещено инициировать сбор на спавне группы лиц, численностью больше 15 человек, с целью проведения раздачи. Инициатору кик с предупреждением, при повторном нарушении бан от 1 до 3 дней. Группа лиц должна быть разогнана.</li>
  <li>3.15.2 Запрещено инициировать сбор группы лиц, численностью превышающей 100 человек ВНЕ спавна. Инициатору кик с предупреждением, при повторном нарушении бан от 1 до 3 дней. Группа лиц должна быть разогнана.</li>
  <li>3.16 Запрещена помеха игровому процессу на Мини-Играх (SkyWars Team, BedWars, EggWars). Например: Поломка блоков под союзником, его взрыв и т.д. - Бан на 2 дня.</li>
  <li>Игрок может оспорить свое наказание - подать жалобу в специальное обсуждение, но только в течение 5 дней включительно, после бана/кика/мута. К примеру, если вас забанили 1 января, а вы подаете жалобу только 6 января или позднее - вам откажут. </li>
  <li><b>ВАЖНО</b> К любому наказанию игрока, у вас должны быть доказательства. Скрины на чат {F2} и прочее/Видео на читеров {bandicam.com} и прочее! Если их не будет - Бан 5 дней.''</p></li></ul></div>
    <div role="tabpanel" class="tab-pane" id="settings"><p><ul style = "list-style-type:square"><div class="alert alert-success" role="alert">
  <li>4.1 Донатер не имеет право кикать, банить, давать мут без причины - За кик: 1 час бана, За мут: 1 час бана, За бан: 5 дней бана.
Примечание: бан/кик/мут себя так же относится к этому правилу.</li>
  <li>4.2 Донатер не имеет право ломать/изменять чужие дома/постройки/регионы - Бан навсегда.</li>
  <li>4.2.1 Запрещено использовать оружие (/guns, /magic) на /warp pvp - Бан 3 дня. На остальных PvP и в обычном мире - можно.</li>
  <li>Донатер имеет право проводить раздачи также, как и игрок.</li>
  <li>4.3 <b>ВАЖНО</b> Разрешена раздача игровой валюты в любом кол-ве! </li>
  <li>4.4 Телепортация к игроку без причины (Без /vanish); Телепортация и убийство без разрешения игрока; Телепортация игрока к себе без разрешения запрещены - Бан на 3 дня.</li>
  <li>4.5 Донатерам запрещено забирать у игроков какие-либо вещи и мешать игровому процессу - Бан на 1 день.</li>
  <li>ДОНАТ <b>ВАЖНО</b> 4.6 Строго запрещается разбанивать игроков, которых забанили Администраторы, указанные в /staff - Бан навсегда.</li>
  <li>4.7 Попытка нанести вред серверу - Бан навсегда.</li>
  <li>4.8 ДОНАТ <b>ВАЖНО</b> Донатеры НЕ ИМЕЮТ ПРАВА диктовать свои правила - Бан на 10 дней.</li>
  <li>4.9 ДОНАТ <b>ВАЖНО</b> Разбаны без причины, продажа разбанов/размутов запрещены - Бан навсегда.</li>
  <li>ДОНАТ <b>ВАЖНО</b> 4.10 Размуты без причины запрещены - Бан на 1 день.</li>
  <li>4.11 Запрещено превышать сроки и типы бана установленные данным сводом правил - Бан на 5 дней.</li>
  <li>4.12 Запрещено менять префикс кому либо кроме себя через какую-либо консоль - Снятие Консоли/СуперКонсоли/МегаКонсоли.</li>
  <li>4.12.1 Префикс должен быть один в [ ] или『』любого цвета, кроме красного (&4), а также запрещено делать их жирными, подчеркнутыми, зачеркнутыми и т.п - Сначала кик с предупреждение, а потом бан на 1 день. От Привилегии Гл. Администратор (Супер Донат) можно ставить любой цвет и формат скобок.</li>
  <li>4.12.2 Запрещено ставить префикс привилегии выше вашей, а также префиксы выдающие вас за администрацию проекта - Бан на 3 дня, потом их нужно сменить.</li>
  <li>4.12.3 Разрешено полностью убрать префикс и оставить цветным только ник, в этом случае скобки не нужны.</li>
  <li>4.12.4 Двойной, тройной и т.д префикс запрещен, сначала кик с предупреждением, потом бан на 2 часа.</li>
  <li>4.13 Запрещено угрожать баном, в случае если игрок нарушил вы должны забанить его, не угрожая ему иначе вы также нарушите - Бан на 1 день.</li>
  <li>4.14 Запрещено банить незарегистрированный ник - Бан на 3 дня.</li>
      <li>4.15 Донатерам через команды по типу /sudo и прочих подобных (устанавливается Owner'ом перечень в спорных ситуациях) запрещено удалять или добавлять произвольных игроков в чужие регионы, кланы и прочие образования. Чтобы это сделать, надо запросить разрешение у /staff -> Администраторы.</li></ul></p></div>
    <div role="tabpanel" class="tab-pane" id="settings1"><p><ul style = "list-style-type:square"><div class="alert alert-success" role="alert">
    <li>5.1 Предмет "Тотем Бессмертия" отныне запрещен! Людям, которые имеют доступ к Запретке, и которые будут использовать его в PvP - Бан на 3 дня.</li></ul> </p></div>
    <div role="tabpanel" class="tab-pane" id="settings2"><p><ul style = "list-style-type:square"><div class="alert alert-success" role="alert">
  <li><b>ВАЖНО</b> 6.1 Запрещены постройки создающие лаги и замедляющие работу сервера - [Е]БАН</li>
  <li>6.2 Постройки оставленные за зоной привата будут доступны для других игроков. Администрация не несет ответственность за потерю имущества.</li>
  <li>6.3 Вся незаприваченная территория попавшая под приват другого игрока становится его собственностью.</li>
  <li>6.4 Игрок обязан покинуть чужую территорию по просьбе ее хозяина - Бан на 30 минут</li>
  <li>6.5 Запрещено ставить точки дома/варпы на чужой территории без согласия владельца - Бан на 3 дня</li>
  <li>6.6 Запрещено приватить территорию над постройками других игроков.</li>
  <li>6.7 Запрещена блокировка доступа к чужим сооружениям - Бан на 3 дня</li>
  <li>6.8 Запрещается постройка половых органов, свастики - Бан на 3 дня</li></ul></p></div>
    <div role="tabpanel" class="tab-pane" id="settings3"><p><ul style = "list-style-type:square"><div class="alert alert-success" role="alert">
  <li>7.1 Игрок не имеет право материться (завуалированный мат), оскорблять кого-либо, унижать честь и достоинство, ущемлять в правах игроков и т.п. - Мут на 120 минут, на Anni-x выдаётся кик.</li>
  <li>7.2 Игрок не имеет право оскорблять, критиковать Администрацию сервера - Бан на 5 дней</li>
  <li>ДОНАТ 7.3 Запрещён спам, реклама сторонних проектов - ban по ip</li>
  <li>7.4 Запрещено разглашать ложную информацию - Мут на 30 минут</li>
  <li>7.5 Флуд (в том числе дублирование сообщений) и сообщения, не имеющие смысла, в больших количествах запрещены - Мут на 120 минут</li>
  <li>ДОНАТ 7.6 Запрещается продавать что-либо на сервере за реальные деньги (разбаны, игровые аккаунты, ключи к играм), наказание - Бан навсегда. Наш сервер не является торговой площадкой.</li>
  <li>7.7 Запрещены выражения, унижающие человеческое достоинство, дискриминирующие или разжигающие межнациональную рознь - Мут на 120 минут</li>
  <li>7.8 Запрещается попрошайничество ресурсов/платных услуг - Мут на 2 часа.</li>
  <li>7.9 Запрещён флуд в /bc (объявления) - Бан на 1 день</li>
  <li>7.10 Запрещено коверкать слова с целью обхода антимат системы чата - Мут на 120 минут</li>
  <li>7.11 Запрещено просить в чате разбанить кого-либо - Мут на 2 часа</li>
  <li>7.12 Разрешена публикация только одного сообщения рекламного характера (например, реклама варпов) раз в 2 мин. В противном случае это будет засчитано за флуд (7.5).</li>
  <li>7.13 Для просьб "кто приютит" разрешена публикация сообщений не чаще одного раза в 5 мин. В противном случае это будет засчитано за флуд (7.5).</li>
  <li>7.14 Запрещено пиарить/спамить/флудить/материться/оскорблять/критиковать сервер (услуги сервера) через команду /broadcast (/bc).</li>
  <li>7.15 Запрещено оскорблять сервер, писать про него что-то плохое и т.п. - Бан навсегда по ip</li></ul></p></div>
    <div role="tabpanel" class="tab-pane" id="settings4"><p><ul style = "list-style-type:square"><div class="alert alert-success" role="alert">
  <li><b>ВАЖНО</b> 8.1 Деньги, потраченные на услуги сервера, не возвращаются не при каких обстоятельствах.</li>
  <li>ДОНАТ 8.2 Попытки махинаций оплатами, или ввод Администрации в заблуждение наказываются баном без возврата средств.</li>
  <li>8.3 Администрация имеет полное право на отказ в предоставление услуг по причинам: неадекватность, требование несуществующих услуг, наглеж, оскорбления, и т.д.</li>
  <li>8.4 Администрация не возвращает купленные вещи, которые были потеряны в результате убийства или удалены системой очистки дропа.</li>
  <li>8.5 Предоставьте чек оплаты, если хотите написать Администрации о не появлении доната после покупки. Без данного подтверждения администрация вправе отказать Вам в предоставлении купленной услуги.</li>
  <li>8.6 Игроку может быть выдан Ебан, который ограничивает доступ к серверу на некоторый срок. Такую блокировку невозможно снять обычным разбаном (услуга на сайте). Данный вид блокировки может быть снят, если вы напишите об этом администратору и сможете доказать свою невиновность. Данная блокировка допускается только к злостным нарушителям!</li>
  <li>8.7 Мы принимаем донат в качестве пожертвований (любая сумма считается донатом), никаких возвратов не производим.</li></ul></p></div>
    <div role="tabpanel" class="tab-pane" id="settings5"><p><ul style = "list-style-type:square"><div class="alert alert-success" role="alert">
  <li>9.1 Разрешены любые способы гриферства, ловушки, обман.</li>
  <li>9.2 Запрещено мошенничество, намеренный обман администрации - Бан навсегда.</li>
  <li>9.3 Администрация НЕ обязана возвращать вещи в следующих случаях:</li></ul>
<ul style="list-style-type:none"><div class="alert alert-success" role="alert">
  <li>- Удаление системой очистки дропа. </li>
  <li>- Кража имущества с незаприваченной территории. </li>
  <li>- Кража имущества игроками, состоящими в привате. </li>
  <li>- Вайп или откат карты. </li>
  <li>- Различные баги игры, произошедшие не по вине администрации.</li></ul>
<ul style = "list-style-type:square"><div class="alert alert-success" role="alert">
  <li>9.4 Запрещается распространение вредоносного контента - Бан навсегда.</li>
  <li>9.5 Администрация не обязана осуществлять Вам помощь в виде ускорения постройки здания, выдачи предметов, ресурсов и др.</li>
  <li>9.6 Запрещено продавать игровые предметы за реальные деньги - Бан навсегда.</li>
  <li>9.7 Вызывание неполадок в работе сервера или попытки обрушить сервер, путем специально вызванных лагов или подобного, влекут за собой глобальный БАН.</li>
  <li>9.9 Запрещается постройка половых органов, свастики - Бан 3 дня.</li>
  <li>Для донатеров:</li></ul>
<ul style="list-style-type:none"><div class="alert alert-success" role="alert">
  <li> - 9.10 Запрещено нахождение в "/god" "/fly" на /warp pvp - Бан на 1 день.</li>
  <li> - 9.11 Запрещено Убийство в режиме "/fly" "god" - Бан на 5 дней.</li>
  <li> - 9.12 Донатер имеет право проводить раздачи, как и игрок, чего-угодно, так как все равны (никто не имеет доступа к креативу).</li>
  <li> - 9.13 Разрешено переводить игрокам любое количество денег.</li></ul></p></div>
  <div role="tabpanel" class="tab-pane" id="settings6"><p><ul style = "list-style-type:square"><div class="alert alert-success" role="alert">
  <li> - 10.1 Жалоба рассматривается исключительно командой проекта указанной в /staff, самостоятельное рассмотрение жалоб(ы) грозит блокировкой аккаунта в группе сервера. </li>
  <li> - 10.2 Жалоба составляется исключительно по форме, написанной в специально отведенной теме. В противном случае ваша жалоба будет аннулирована. </li>
  <li> - 10.3 Содержание в жалобе ненормативной лексики автоматически аннулирует данную жалобу, а автор получит блокировку аккаунта в группе сервера на 3 дня. </li>
  <li> - 10.4 Администрация вправе рассмотреть или же отказать в рассмотрении жалобы. </li>
  <li> - 10.5 Жалобы без доказательств не принимаются и будут сразу же аннулированы. </li>
  <li> - 10.6 Жалобы должна быть отправлена в течении 5 дней с момента получения бана. В противном случае жалоба будет аннулирована.</li></ul></p></div>
  <div role="tabpanel" class="tab-pane" id="settingsSeven"><p><ul style = "list-style-type:square"><div class="alert alert-success" role="alert">
  <li> - 11.1 Организатор обязан ознакомить участников с правилами и целью ивента. </li>
  <li> - 11.2 Правила и цель ивента не должны противоречить настоящим правилам сервера, в противном случае это будет расценено как подстрекательство к нарушению (см п. 3.11) </li>
  <li> - 11.3 Участники обязаны следовать правилам ивента. (Дисквалификация по решению организатора) </li>
  <li> - 11.4 Запрещается мешать проведению ивента. (Бан на 20 минут) </li>
  <li> - 11.5 Организатор обязан выдать соответствующую награду, если такова имеется, участникам, которые достигли поставленной цели. (Бан организатору на 3 дня) </li>
  <li> - 11.6 Команда проекта указанная в /staff не имеет право быть участниками ивента.</li></ul></p></div>
  </div>
<p><h1>По всем вопросам о правилах, обращайтесь к <a href="https://vk.com/summerfibbs">Мише Степанову</a></h1></p>
<!--<div class="curator hidden-xs" id="curator"><span>Кураторы и подчинённые</span>-->
<!--<img src=img/curator.jpg style="margin-bottom: 10px;"></div>-->

<table border="1" width="30%" id="curator" class="hidden-sm hidden-xs" style="margin-bottom: 10px;">
            <caption>Кураторы и подчинённые</caption>
            <tr align="center">
             <td width="100"></td>
             <td colspan="10" width="200" bgcolor="#D2691E">Администрация</td>
            </tr>
            <tr align="center"><td bgcolor="#cccccc">Куратор</td><td colspan="10" width="200" bgcolor="#FFDEAD">OcHoBa</td></tr>
            <tr align="center"><td rowspan="3"></td><td colspan="3" rowspan="3" bgcolor="#cccccc">Подчинённые</td><td colspan="2" rowspan="3"></td><td colspan="3" rowspan="3" bgcolor="#cccccc">Подчинённые</td></tr>
            <tr align="center"></tr>
            <tr align="center"></tr>
            <tr align="center"><td></td><td colspan="3" bgcolor="#87CEFA">Модераторы</td><td colspan="2"></td><td colspan="3"bgcolor="#FFD700">Ст. и Гл.Модераторы</td></tr>
            <tr align="center"><td bgcolor="#cccccc">Куратор</td><td bgcolor="#ADD8E6">Valushka</td><td bgcolor="#ADD8E6">lesksa</td><td bgcolor="#ADD8E6">luni444ko</td><td colspan="2" bgcolor="#cccccc">Куратор</td><td bgcolor="#FFFACD">Ellieaa</td><td bgcolor="#FFFACD">VLaDoS_1</td><td bgcolor="#FFFACD">Desppy8</td></tr>
            <tr align="center"><td rowspan="3" bgcolor="#cccccc">Подчинённые</td><td bgcolor="#90EE90">CONROL</td><td bgcolor="#90EE90">SROL</td><td bgcolor="#90EE90">tyuio8</td><td  rowspan="3" bgcolor="#cccccc" colspan="2">Подчинённые</td><td bgcolor="#ADD8E6">Valushka</td><td bgcolor="#ADD8E6">luni444ko</td><td bgcolor="#ADD8E6">lesksa</td></tr>
            <tr align="center"><td bgcolor="#90EE90">dives_wg</td><td bgcolor="#90EE90">Darklegion</td><td bgcolor="#90EE90">Podpishik_Aida</td><td></td><td></td><td></td></tr>
            <tr align="center"><td bgcolor="#90EE90">kostya23475</td><td bgcolor="#90EE90">Zintosion_YT</td><td bgcolor="#90EE90"></td><td></td><td></td><td></td></tr>
           </table>
           
          </div>
          </div>
        </div>
      </div>
    </div>
      <div class="clear"></div>
    </div>
    <?php include ("block/footer.php");?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="boot/bootstrap.min.js"></script>
  </body>
</html>
