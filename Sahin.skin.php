<?php
/**
 * SkinTemplate class for the Sahin skin
 *
 * @ingroup Skins
 */
class SkinSahin extends SkinTemplate {
	public $skinname = 'sahin', $stylename = 'Sahin',
		$template = 'SahinTemplate', $useHeadElement = true;

	/**
	 * Add CSS via ResourceLoader
	 *
	 * @param $out OutputPage
	 */
	public function initPage( OutputPage $out ) {

		$out->addMeta( 'viewport', 'width=device-width, initial-scale=1.0' );

		$out->addModuleStyles( array(
			'mediawiki.skinning.interface',
			'mediawiki.skinning.content.externallinks',
			'skins.sahin'
		) );
		$out->addModules( array(
			'skins.sahin.js'
		) );
	}

	/**
	 * @param $out OutputPage
	 */
	function setupSkinUserCss( OutputPage $out ) {
		parent::setupSkinUserCss( $out );
	}
}
