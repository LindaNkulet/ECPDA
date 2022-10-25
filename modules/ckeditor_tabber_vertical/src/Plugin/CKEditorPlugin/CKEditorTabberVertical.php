<?php

/**
 * @file
 * Contains \Drupal\ckeditor_tabber_vertical\Plugin\CKEditorPlugin\CKEditorTabber.
 */

namespace Drupal\ckeditor_tabber_vertical\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "CKEditorTabberVertical" plugin.
 *
 * @CKEditorPlugin (
 *   id = "tabber_vertical",
 *   label = @Translation("CKEditorTabberVertical"),
 *   module = "ckeditor_tabber_vertical"
 * )
 */
class CKEditorTabberVertical extends CKEditorPluginBase {
  /**
   * {@inheritdoc}
   */
  public function getConfig(Editor $editor) {
    $config = array();
    return $config;
  }

  /**
   * {@inheritdoc}
   */
  public function getDependencies(Editor $editor) {
    return array(
    );
  }

  /**
   * {@inheritdoc}
   */
  public function getFile() {
	return drupal_get_path('module', 'ckeditor_tabber_vertical') . '/js/plugins/tabber/plugin.js';
  }

  /**
   * {@inheritdoc}
   */
  public function getButtons() {
	$path = drupal_get_path('module', 'ckeditor_tabber_vertical') . '/js/plugins/tabber/icons';
    return array(
      'tabber_vertical' => array(
        'label' => t('Add Tab Vertical'),
		'image' => $path . '/tabber_vertical.png',
      ),
    );
  }
}