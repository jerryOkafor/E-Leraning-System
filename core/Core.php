<?php
ob_start();

	require_once 'config.php';
	require_once "$path/classes/Connection.php";
	$current_file =$_SERVER["SCRIPT_NAME"];	
	$script = trim(substr($current_file,10,-4)); 
	$core = new Core();
	$sid = $core->getsid();
	
	
	/*if(!empty($_SERVER["HTTP_REFERER"]))
	{
		//$current_ref = $_SERVER["HTTP_REFERER"];
	}
	
    if(isset($_SERVER["HTTP_REFERER"])&& !empty($_SERVER["HTTP_REFERER"]))
			{
				$http_referer = $_SERVER["HTTP_REFERER"];
			}
	*/
			 
class Core{
	
  public function getHost()
	{
	return $_SERVER["HTTP_HOST"];	
	
	}
	function getsid()
		{
			if(isset($_SESSION['studentlogin'])&&!empty($_SESSION['studentlogin']))
					{ 
			  $ssid = sha1(session_regenerate_id());
			  return $ssid;
						
			} 
			else{
			 
			  return null; 
			
			}
		}//end function
	function studentlogedin()
		{
			if(isset($_SESSION['user_id'])&&!empty($_SESSION['user_id']))
					{ 
			
			  return true;
			
			} 
			else{
			  return false;
			 
			
			}
		}//end function
	function adminlogedin()
		{
			if(isset($_SESSION['user_id'])&&!empty($_SESSION['user_id']))
					{ 
			return true;
			
			} 
			else{
			  return false;
			
			}
		}//end function
		
		
	function speclogedin($type)
		{
			if(isset($_SESSION[$type])&&!empty($_SESSION[$type]))
					{ 
			return getuserfield('type',$type);} 
			else{return null;}
		}//end function
		
		//this function shows profile parameters
		

	function checkEnabled($status)
	{
	  if($status==1)
	  {
	    return TRUE;
	  }
	 else {
	  return FALSE;  
	  }

	}
	
	function updateLastLogin($userId)
	{
	  
	  return;
	  
	}
   public function verifyImageExtension($extension,$type)
	     {
     if ($extension=="jpg"||$extension=="jpeg"||$extension=="gif"||$extension=="png"&&$type=="image/jpg"||$type=="image/jpeg"||$type=="image/gif"||$type=="image/png")
       {
       return true ;
       }
       else
	 {
	 return false;
	 }
     }
     
   public function randomString($length = 10)
	  {
	$characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
	$string ="";    
		
	for ($p = 0; $p < $length; $p++) {
		$string .= $characters[mt_rand(0, 61)];
	}
		
      	return $string;
	  }
	  
	  public function matchResource($extension,$type)
	 {
	   
      if($extension=="jpg"||$extension=="jpeg"||$extension=="gif"||$extension=="png"||$extension=="pdf"||$extension=="flv"||$extension=="mp3"&& $type="image/jpg"||$type="image/jpeg"||$type="image/gif"||$type="image/png"||$type="application/pdf"||$type="image/png"||$type="application/vnd.ms-excel"||$type="application/vnd.openxmlformats-officedocument.word"||$type=="video/mp4"||$type=="application/octet-stream")
	{
	return true;	}
      else
	{
	return true;
	}
	    }
}//end of classn=="ppt"||$extension=="doc"||$extension=="docx"||$extension=="xls"||$extension=="xlxs"||$extension=="mp4"||$extension=="3gp"||$extension=="xvid"