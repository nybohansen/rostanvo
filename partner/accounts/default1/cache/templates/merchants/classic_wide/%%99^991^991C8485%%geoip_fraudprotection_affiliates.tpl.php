<?php /* Smarty version 2.6.18, created on 2012-07-11 05:35:54
         compiled from geoip_fraudprotection_affiliates.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'localize', 'geoip_fraudprotection_affiliates.tpl', 4, false),)), $this); ?>
<!-- geoip_fraudprotection_affiliates -->
<div class="ClearBoth"></div>
<div class="Inliner SimpleCheckBox"><?php echo "<div id=\"geoip_affiliatesInput\"></div>"; ?></div>
<div class="Inliner"><div class="Label"><?php echo smarty_function_localize(array('str' => 'Blacklisted countries'), $this);?>
</div></div>
<div class="Inliner"><?php echo "<div id=\"affiliates_countries_blacklist\" class=\"BannedIps\"></div>"; ?></div>
<div class="ClearBoth"></div>

<div class="FraudProtectionAction">
	<div class="Inliner"><?php echo smarty_function_localize(array('str' => 'What to do with affiliates from blacklisted countries'), $this);?>
</div>
	<div class="Inliner"><?php echo "<div id=\"affiliates_countries_blacklist_actionInput\"></div>"; ?></div>
	<div class="ClearBoth"></div>
</div>

<div class="Line" ></div>