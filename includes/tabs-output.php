<?php
/*
	tab output on settings page
*/

/**
 * Declare the Namespace.
 */
namespace azurecurve\BBCode;

/**
 * Output tabs.
 */
?>
<div id="tabs" class="azrcrv-ui-tabs">
	<ul class="azrcrv-ui-tabs-nav azrcrv-ui-widget-header" role="tablist">
		<li class="azrcrv-ui-state-default azrcrv-ui-state-active" aria-controls="tab-panel-instructions" aria-labelledby="tab-instructions" aria-selected="true" aria-expanded="true" role="tab">
			<?php // phpcs:ignore. ?>
			<a id="tab-instructions" class="azrcrv-ui-tabs-anchor" href="#tab-panel-instructions"><?php echo $tab_instructions_label; ?></a>
		</li>
		<li class="azrcrv-ui-state-default" aria-controls="tab-panel-plugins" aria-labelledby="tab-plugins" aria-selected="false" aria-expanded="false" role="tab">
			<?php // phpcs:ignore. ?>
			<a id="tab-plugins" class="azrcrv-ui-tabs-anchor" href="#tab-panel-plugins"><?php echo $tab_plugins_label; ?></a>
		</li>
	</ul>
	<div id="tab-panel-instructions" class="azrcrv-ui-tabs-scroll azrcrv-ui-tabs" role="tabpanel" aria-hidden="false">
		<fieldset>
			<legend class='screen-reader-text'>
				<?php
				// phpcs:ignore.
				echo $tab_instructions_label;
				?>
			</legend>
			<?php
			// phpcs:ignore.
			echo $tab_instructions;
			?>
		</fieldset>
	</div>
	<div id="tab-panel-plugins" class="azrcrv-ui-tabs-scroll azrcrv-ui-tabs-hidden" role="tabpanel" aria-hidden="true">
		<fieldset>
			<legend class='screen-reader-text'>
				<?php
				// phpcs:ignore.
				echo $tab_plugins_label;
				?>
			</legend>
			<?php
			// phpcs:ignore.
			echo $tab_plugins;
			?>
		</fieldset>
	</div>
</div>
<?php
/*
	donate button on settings page
*/
?>
<div class='azrcrv-donate'>
	<?php
		esc_html_e( 'Support', 'azrcrv-bbc' );
	?>
	azurecurve | Development
	<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
		<input type="hidden" name="cmd" value="_s-xclick">
		<input type="hidden" name="hosted_button_id" value="MCJQN9SJZYLWJ">
		<input type="image" src="https://www.paypalobjects.com/en_US/GB/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online.">
		<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
	</form>
	<span>
		<?php
		esc_html_e( 'You can help support the development of our free plugins by donating a small amount of money.', 'azrcrv-bbc' );
		?>
	</span>
</div>
