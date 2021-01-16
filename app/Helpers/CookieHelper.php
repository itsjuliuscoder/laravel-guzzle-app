<?php
namespace App\Helpers;
/**
 * Provides function to check cookies
 */
class CookieHelper
{
  static function isAuthenticated()
  {
    if(isset($_COOKIE['authenticated']) && isset($_COOKIE['token']) && ($_COOKIE['authenticated'] == true)){
      return true;
    }
    return false;
  }

  static function destroyAuthCookies()
  {
    setcookie("authenticated","",time()-36000000);
    setcookie("fullname","",time()-36000000);
    setcookie("email","",time()-36000000);
    setcookie("password","",time()-36000000);
    setcookie("id","",time()-36000000);
    setcookie("profileImg","",time()-36000000);
    setcookie("about","",time()-36000000);
    setcookie("token","",time()-36000000);
  }
}
