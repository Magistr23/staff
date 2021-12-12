<nav role="navigation" class="navbar navbar-inverse"  style="background-color: #808080; border: 1px solid #808080;">
			
				<div class="container">
					<div class="navbar-header header">
						<div class="container">
							<div class="row">
								<div class="col-lg-12">
									<div class="head"><h2 style="color: hsl(50,200%,50%);" class="text-center">STAFF</h2></div>
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
                        
                      <li class="<?php if ($first_part=="correct")  {echo "active"; } else  {echo "";} ?>">
                      		<a href="?pos=1&dir=correct&go_red=<?php echo $_GET['go_red'];?>">Редактирование</a>
                      </li>
                    </ul>
                </nav>
                  </div>
              </div>
            <!-- </div> -->
        </nav>