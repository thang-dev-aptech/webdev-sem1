    <?php
        session_start();
        require_once "config.php";
        require_once "includes/functions.php";
        require_once "includes/database.php";

        $module = _MODULE;
        $action = _ACTION;
        if(!empty($_GET["module"])){
            if(is_string($_GET["module"])){
                $module = trim($_GET["module"]);
            }
        }
        if(!empty($_GET["action"])){
            if(is_string($_GET["action"])){
                $action = trim($_GET["action"]);
            }
        }
        

        $path = "modules/$module/$action.php";  
        if(file_exists($path)){
            require_once($path);
        }
        else{
            require_once("modules/error/404.php");
        }


        $db = new Database();

        // Kiểm tra xem kết nối có hoạt động không
        if ($db->isConnected()) {
            echo "✅ Kết nối MySQL thành công!<br>";
        } else {
            echo "❌ Kết nối MySQL thất bại!<br>";
        }
?>  