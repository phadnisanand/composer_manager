<?php
namespace Drupal\my_module\Controller;
use Drupal\Core\Controller\ControllerBase;
use Nayjest\StrCaseConverter\Str;
/**
 * Controller routines for block example routes.
 */
class CustomController extends ControllerBase {
  
  public function demo()
  {
	  
		$vardemo= 'string to uppercase';
		
	    return array(
		  '#markup' => Str::toSnakeCase('OneMoreString', '-') .  '  '.  Str::toSnakeCase('MyString')
		);
  }
  
}
