<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='Global Site Settings' order='1' executable='0' >
	<cms:editable name='logos' label='Site Logos' type='group' />
		<cms:editable name='favicon' label='Favicon' desc='appears on browser tab' type='image' show_preview='1' preview_width='32' group='logos' order='1' />
		<cms:editable name='sitelogo' label='Site Logo' desc='appears on navbar' type='image' show_preview='1' preview_width='100' group='logos' order='2' />
		<cms:editable name='floatinglogo' label='New Temple floating logo' desc='appears on every page' type='image' show_preview='1' preview_width='75' group='logos' order='3' />
		<cms:editable name='footerlogo' label='Footer Logo' desc='appears in footer on every page' type='image' show_preview='1' preview_width='100' group='logos' order='4' />
		<cms:editable name='sitetitle' label='Site Title' desc='appears in navbar' type='text' group='logos' order='5' />
		<cms:editable name='copyright' label='Copyright' desc='appears in footer' type='text' group='logos' order='6' />
</cms:template>
<?php COUCH::invoke(); ?>