<?php
class CNavigation {
  public static function GenerateMenu($items, $class) {
    $html = "<nav class='$class'>\n";
    foreach($items as $key => $item) {
      //$selected = (isset($_GET['p'])) && $_GET['p'] == $key ? 'selected' : null;
      $selected = basename($_SERVER['SCRIPT_FILENAME']) == $item['url'] ? 'selected' : null;
            $html .= "<a href='{$item['url']}' class='{$selected}'>{$item['text']}</a>\n";
    }
    $html .= "</nav>\n";
    return $html;
  }
}; 
