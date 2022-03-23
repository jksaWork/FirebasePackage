<?php 
if(!function_exists('GetSeriverKeyFromConfig')){
     function GetSeriverKeyFromConfig(){
          return config('Firebase.jksa_code');
     }
}