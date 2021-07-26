<?php


use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Theme\ThemeSettings;
use Drupal\system\Form\ThemeSettingsForm;
use Drupal\Core\Form;

/**
 * Implements hook_form_system_theme_settings_alter().
 */
function sepia_form_system_theme_settings_alter(&$form, \Drupal\Core\Form\FormStateInterface $form_state) {

  
  $form['sepia'] = array(
    '#type' => 'vertical_tabs',
    '#prefix' => '<h2><small>' . t('Sepia Theme Settings') . '</small></h2>',
    '#weight' => -10,
  );

  // General.
  $form['general'] = array(
    '#type' => 'details',
    '#title' => t('General'),
    '#group' => 'sepia',
  );
 // Container.
  $form['general']['container'] = array(
    '#type' => 'fieldset',
    '#title' => t('General'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );
  $form['general']['container']['preloader'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show Preloader'),
    '#default_value' => theme_get_setting('preloader'),
    '#description' => t('Use the checkbox to enable or disable the preloader.'),
    );
    $form['general']['container']['scrolltop'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show scroll-to-top button'),
    '#description'   => t('Use the checkbox to enable or disable scroll-to-top button.'),
    '#default_value' => theme_get_setting('scrolltop', 'sepia'),
    //'#collapsible' => TRUE,
    //'#collapsed' => TRUE,
  );
    $form['general']['container']['dark'] = array(
    '#type' => 'checkbox',
    '#title' => t('Dark version'),
    '#description'   => t('Use the checkbox to enable Dark version.'),
    '#default_value' => theme_get_setting('dark', 'sepia'),
  );

	
}
