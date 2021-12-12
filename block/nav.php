<nav role="navigation" class="navbar navbar-inverse"  style="background-color: #808080; border: 1px solid #808080;">
			
				<div class="container">
					<div class="navbar-header header">
						<div class="container">
							<div class="row">
								<div class="col-lg-12">
									<div class="head"><h2 style="color: hsl(50,200%,50%);" class="text-center"><font face="algerian">STAFF</font></h2></div>
									<p class="text-center" style="font-family: serif;"><?=$post_title?></p>
									<hr>
								</div>
                    </div>
                  </div>
                  <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle navbar-center">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                </div>
                  <div id="navbarCollapse" class="collapse navbar-collapse navbar-center">
                    				<nav>
                    <ul class="nav nav-pills">
                        <li class="<?php if ($first_part=="main")  {echo "active"; } else  {echo "";} ?>"> <a href="https://helperstaff.ru/?pos=main">Главная</a> </li>
                        <li class="<?php if ($first_part=="seller")  {echo "active"; } else  {echo "";} ?>"> <a href="https://helperstaff.ru/?pos=seller">Продавцы</a> </li>
                        <li class="<?php if ($first_part=="helper")  {echo "active"; } else  {echo "";} ?>"> <a href="https://helperstaff.ru/?pos=helper">Хелперы</a> </li>
                        <li> <div class="btn-group" role="group">
    <button type="button" class="btn <?php if ($first_part=="moder" || $first_part=="stm" || $first_part=="glm")  {echo "ch-li"; } else  {echo "btn-default";} ?> dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Модеры
      <span class="caret"></span>
    </button>
    <ul class="dropdown-menu">
      <li><a href="https://helperstaff.ru/?pos=moder">Модеры</a></li>
      <li><a href="https://helperstaff.ru/?pos=stm">Cт.Модеры</a></li>
      <li><a href="https://helperstaff.ru/?pos=glm">Гл.Модеры</a></li>
    </ul>
  </div> </li>
                        <li> <div class="btn-group" role="group">
    <button type="button" class="btn <?php if ($first_part=="admin" || $first_part=="gla")  {echo "ch-li"; } else  {echo "btn-default";} ?> dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Админы
      <span class="caret"></span>
    </button>
    <ul class="dropdown-menu">
      <li><a href="https://helperstaff.ru/?pos=admin">Aдмины</a></li>
      <li><a href="https://helperstaff.ru/?pos=aa">Ст. и Гл.Админы</a></li>
    </ul>
  </div> </li>
  <li class="<?php if ($first_part=="owner")  {echo "active"; } else  {echo "";} ?>"> <a href="https://helperstaff.ru/?pos=owner">Владельцы</a> </li>
                        <li class="<?php if ($first_part=="memorial")  {echo "active"; } else  {echo "";} ?>"> <a href="https://helperstaff.ru/?pos=honours">Почетные Админы</a> </li>
                    </ul>
                </nav>
                  </div>
              </div>
            <!-- </div> -->
        </nav>