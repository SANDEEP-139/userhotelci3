<?php
/**
 * 
 */
class hash extends CI_model
{
	
	public function __construct()
	{
	 
	parent::__construct();
	
	
	}
	 

	public function hash($password)
   {
       $hash = password_hash($password,PASSWORD_DEFAULT);
       return $hash;
   }

   //verify password
   public function verifyHash($password,$vpassword)
   {
 
       if(password_verify($password,$vpassword))
       {
           return TRUE;
       }
       else{
           return FALSE;
       }
   }
}
   