<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='Global Site Settings' order='1' executable='0' >
	<cms:editable name='logos' label='Site Logos' type='group' />
		<cms:editable name='favicon' label='Favicon' desc='appears on browser tab' type='image' show_preview='1' preview_width='32' group='logos' />
</cms:template>
<?php COUCH::invoke(); ?>