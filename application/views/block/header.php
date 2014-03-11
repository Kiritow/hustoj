<link rel="stylesheet" href="<?php e::url('css/bootstrap.css');?>">
<link rel="stylesheet" href="<?php e::url('css/style.css');?>">
<link rel="stylesheet" href="<?php e::url('css/ui-lightness/jquery-ui-1.10.3.custom.min.css');?>">
<script type="text/javascript" src="<?php e::url('js/jquery-1.9.1.js');?>"></script>
<script type="text/javascript" src="<?php e::url('js/jquery-ui-1.10.3.custom.js');?>"></script>
<script type="text/javascript" src="<?php e::url('js/bootstrap.min.js');?>"></script>
<link rel="shortcut icon" href="<?php e::url('favicon.ico');?>"/>
<?php if ( ! OJ::is_backend() ):?>
<link rel="stylesheet" href="<?php e::url('js/code/prettify.css');?>">
<link rel="stylesheet" href="<?php e::url('css/nprogress.css');?>">
<script type="text/javascript" src="<?php e::url('js/page.js');?>" data-turbolinks-eval="true"></script>
<script type="text/javascript" src="<?php e::url('js/code/prettify.js');?>"></script>
<script type="text/javascript" src="<?php e::url('js/turbolinks.js');?>"></script>
<script type="text/javascript" src="<?php e::url('js/jquery.turbolinks.js');?>"></script>
<script type="text/javascript" src="<?php e::url('js/nprogress.js');?>"></script>
<script type="text/javascript" src="<?php e::url('js/respond.js');?>"></script>
<script type="text/javascript" src="<?php e::url('js/jquery.html5-placeholder-shim.js');?>"></script>
<?php if (OJ::is_admin()):?>
<script type="text/javascript" src="<?php e::url('js/front-admin.js');?>"></script>
<?php endif;?>
<?php endif;?>