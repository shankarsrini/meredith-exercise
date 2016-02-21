<?php
/**
 * @file
 * meredith_customer_features.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function meredith_customer_features_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_node_info().
 */
function meredith_customer_features_node_info() {
  $items = array(
    'customer' => array(
      'name' => t('Customer'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Customer Name'),
      'help' => '',
    ),
  );
  drupal_alter('node_info', $items);
  return $items;
}
