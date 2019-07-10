<?php

class Router {
    public static function route($url) {
        
        //controller
      //  dnd($url);
        $controller = (isset($url[0]) && $url[0] != '') ? ucwords($url[0]) : DEFAULT_CONTROLLER;
        $controller_name = str_replace('Controller','',$controller);
        array_shift($url);
        // $controller = (isset($url[0]) && $url[0] != '') ? ucwords($url[0]) : DEFAULT_CONTROLLER;
        // $controller_name =$controller;
        // array_shift($url);
        
         //action
        $action = (isset($url[0]) && $url[0] != '') ? $url[0] . 'Action': 'indexAction';
        $action_name = (isset($url[0]) && $url[0] != '')? $url[0] : 'index';
        array_shift($url);
        
        
  
        // //acl check
        // $grantAccess = self::hasAccess($controller_name, $action_name);
  
        // if(!$grantAccess) {
        //   $controller = ACCESS_RESTRICTED.'Controller';
        //   $controller_name = ACCESS_RESTRICTED;
        //   $action = 'indexAction';
        // }
  
        //params
        $queryParams = $url;
        // $controller = 'App\Controllers\\' . $controller;
        $dispatch = new $controller($controller_name, $action);
        // dnd($dispatch);
  
        if(method_exists($controller, $action)) {
          call_user_func_array([$dispatch, $action], $queryParams);
        } else {
          die('That method does not exist in the controller \"' . $controller_name . '\"');
        }
      }


      public static function redirect($location) {
        
        if(!headers_sent()) {
          
          header('Location: '.PROOT.$location);
          
          exit();
        } else {
          echo '<script type="text/javascript">';
          echo 'window.location.href="'.PROOT.$location.'";';
          echo '</script>';
          echo '<noscript>';
          echo '<meta http-equiv="refresh" content="0;url='.$location.'" />';
          echo '</noscript>';exit;
        }
      }
  

}