<div id="wrapper"><!-- penutup di footer -->
<!-- Navigation changes from navbar-static-top to navbar-fixed-top -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="<?php echo base_url()?>">CBT v1.0</a>
	</div>
	<ul class="nav navbar-top-links navbar-right">
		<li>
		<!--button menu toggle -->
		</li>
		<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#">
				<i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
			</a>
			<ul class="dropdown-menu dropdown-messages">
			<?php
/* Profil User */
			echo '<li><a href="#"><i class="far fa-registered fa-fw"></i> '. $this->Crypt->de($this->session->userdata('sess_simoko')['username']) .'</a></li>
				<li><a href="#"><i class="far fa-user fa-fw"></i> '. $this->session->userdata('sess_simoko')['nama'] .'</a></li>';
				if(isset($this->session->userdata('sess_simoko')['uk'])) echo "<li><a href='#'><i class='far fa-square fa-fw'></i>". $this->session->userdata('sess_simoko')['uk'] ."</a></li>";
				if(isset($this->session->userdata('sess_simoko')['foto'])) echo "<li><div style='text-align:center;'><img style='width:30%' class='img-circle' src ='".$this->session->userdata('sess_simoko')['foto']."' /></div></li>";
			echo '<li class="divider"></li>
				<li><a href="'. base_url('home/pageReset') .'"><i class="fa fa-key"></i>Ubah Password</a></li>';
			echo '<li class="divider"></li>
				<li><a href="'.base_url("home/logout").'"><i class="fa fa-sign-out-alt"></i> Logout</a></li>';
/* end profil */			
			//echo '<li><a href="#"><i class="fa fa-user fa-fw"></i>Guest</a></li>';
			?>
			</ul>
			<!-- /.dropdown-user -->
		</li>
	</ul>
	<!-- /.navbar-top-links -->
<!-- Sidebar wrapper over SB Admin 2 sidebar -->
<div id="sidebar-wrapper">
	<div class="navbar-default sidebar" role="navigation">
		<div class="sidebar-nav navbar-collapse collapse">
			<ul class="nav in" id="side-menu">
				<?php
				/* menu */
					$id_role = $this->session->userdata('sess_simoko')['id_role'];
					$main_menu = $this->M_menu->get_main_menu();
					foreach($main_menu as $main_menu){
						if($this->M_menu->cek_hak_akses($id_role, $main_menu->id) == 0){
							continue;
						}
						$arrow = "";
						if($main_menu->modul == '#') $arrow = "<i class='fa arrow'></i>";
						
						echo "<li>
						<a href='".base_url($main_menu->modul)."' title='".$main_menu->label ."'> <i class='".$main_menu->icon_class." fa-fw'></i> <span class='masked'>". $main_menu->label ." $arrow</span></a>";
						//check apa ada level2
						if($main_menu->modul == '#'){
							//getSubmenu
							echo "<ul class='nav nav-second-level collapse2'>";
								$sub_menu = $this->M_menu->get_sub_menu($main_menu->id);
								foreach($sub_menu as $sub_menu){
									if($this->M_menu->cek_hak_akses($id_role, $sub_menu->id) == 0){
										continue;
									}
									$arrow = "";
									if($sub_menu->modul == '#') $arrow = "<i class='fa arrow'></i>";
									
									echo "<li>
										<a href='".base_url($sub_menu->modul)."'><i class='".$sub_menu->icon_class." fa-fw'></i> <span class='masked'>". $sub_menu->label ."  $arrow </span></a>";
					
					 //level 3
									if($sub_menu->modul == '#'){
										//getSubmenu
										echo "<ul class='nav nav-third-level collapse2'>";
											$sub_sub_menu = $this->M_menu->get_sub_menu($sub_menu->id);
											foreach($sub_sub_menu as $sub_sub_menu){
												
												if($this->M_menu->cek_hak_akses($id_role, $sub_sub_menu->id) == 0){
													continue;
												}
												echo "<li>
													<a href='".base_url($sub_sub_menu->modul)."'><i class='".$sub_sub_menu->icon_class."' fa-fw></i> <span class='masked'>". $sub_sub_menu->label ." </span></a>
												</li>";
											}
										echo "</ul>";
									}
						//end level 3
									echo "</li>";
								}
							echo "</ul>";
						}
						echo "</li>";
					}
				/* end menu */
				?>
				<!-- --
				<div style="text-align:center;">
					<button id="menu-toggle" type="button" data-toggle="button" class="btn btn-default btn-xs"><i class="fa fa-eye fa-fw"></i>
					</button>
				</div>
				<!-- -->
			</ul>
		</div>
		<!-- /.sidebar-collapse -->
	</div>
	<!-- /.navbar-static-side -->
</div>
</nav>