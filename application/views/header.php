<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title><?php echo $title?></title>

	<?php foreach ($css as $src) : ?>
		<link rel="stylesheet" type="text/css" href="<?= $src ?>">
	<?php endforeach; ?>

</head>
<body>
	<div id="wrapper">
	    <nav class="navbar-default navbar-static-side" role="navigation">
	        <div class="sidebar-collapse">
	            <ul class="nav metismenu" id="side-menu">
	                <li class="nav-header">
	                    <div class="dropdown profile-element">
	                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
	                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?php echo $nama ?></strong>
	                             </span> <span class="text-muted text-xs block"><?php echo $job ?> <b class="caret"></b></span> </span> </a>
	                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
	                                <li><a href="#"><?php echo lang('logout');?></a></li>
	                            </ul>
	                    </div>
	                    <div class="logo-element">
	                        <?php echo lang('logo_header'); ?>
	                    </div>
	                </li>

	                <li class="<?php if(isset($active_home)){echo $active_home ;}?>">
						<a href="#"><i class="fas fa-braille"></i>
							<span class="nav-label">
								<?php echo lang('judul_awal');?> 
							</span> 
						</a>
					</li>
					<li class="<?php if(isset($active_items)){echo $active_items ;}?>">
						<a href="#"><i class="fas fa-boxes"></i> 
							<span class="nav-label"> 
								<?php echo lang('master_items');?>
							</span>
							<span class="fa arrow"></span>
						</a>
						<ul class="nav nav-second-level collapse">
							<li class="<?php if(isset($active_users)){echo $active_users ;}?>"><a href="#"><?php echo lang('master_users'); ?></a></li>
							<li class="<?php if(isset($active_teams)){echo $active_teams ;}?>"><a href="#"><?php echo lang('master_teams'); ?></a></li>
							<li class="<?php if(isset($active_projects)){echo $active_projects ;}?>"><a href="#"><?php echo lang('master_projects'); ?></a></li>
							<li class="<?php if(isset($active_papers)){echo $active_papers ;}?>"><a href="#"><?php echo lang('master_papers'); ?></a></li>
						</ul>
					</li>
					<li class="<?php if(isset($active_chat)){echo $active_chat ;}?>">
						<a href=""><i class="fas fa-comments"></i>
							<span class="nav-label">
								<?php echo lang('discus_chat');?>
							</span>
						</a>
					</li>
					<li class="landing_link <?php if(isset($active_list)){echo $active_list ;}?>">
						<a href=""><i class="fas fa-code-branch"></i>
							<span class="nav-label">
								<?php echo lang('review_list');?>
							</span>
						</a>
					</li>
					<li class="special_link <?php if(isset($active_abandoned)){echo $active_abandoned ;}?>">
						<a href=""><i class="fas fa-bug"></i>
							<span class="nav-label">
								<?php echo lang('abandoned_items');?>
							</span>
						</a>
					</li>
	            </ul>

	        </div>
	    </nav>

	    <div id="page-wrapper" class="gray-bg">
	        <div class="row border-bottom">
	            <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
	                <div class="navbar-header">
	                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
	                </div>
	                <ul class="nav navbar-top-links navbar-right">
	                    <li>
	                        <a href="#">
	                            <i class="fas fa-sign-out-alt"></i> <?php echo lang('logout');?>
	                        </a>
	                    </li>
	                </ul>

	            </nav>
	        </div>
