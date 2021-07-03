<?php
    function set_flash($msg,$type)
	{
		$_SESSION['flash'] = "<div class='alert alert-".$type."'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>".$msg."</div>";
	}

	function flash()
	{
		if(isset($_SESSION['flash']))
		{
			echo $_SESSION['flash'];
			unset($_SESSION['flash']);
		}
	}

    function set_logins($msg,$type){
        $_SESSION["logins"] = "<div class='alert alert-".$type."'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>".$msg."</div>";
    }
    function set_signup($msg,$type){
        $_SESSION["signup"] = "<div class='alert alert-".$type."'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>".$msg."</div>";
    }

    function logins(){
        if(isset($_SESSION["logins"])){
            echo $_SESSION["logins"];
            unset($_SESSION["logins"]);
        }
    }
    function signup(){
        if(isset($_SESSION["signup"])){
            echo $_SESSION["signup"];
            unset($_SESSION["signup"]);
        }
    }

?>