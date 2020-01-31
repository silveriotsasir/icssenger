<?php
    
    function get_Connection (){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "iccsenger";
    
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            return false;
        } 
        return $conn;
    }

    function show_messages(){
        $conn = get_Connection();
        $sql = "SELECT * FROM panel ORDER BY id desc LIMIT 20";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          
            while($row = $result->fetch_assoc()) {

                echo create_msg_bubble($row["id"], $row["username"], $row["msg"]);
            }
        }

        $conn->close();
    }
    
    function send_message($username, $message){
        $conn = get_Connection();
        $sql = "INSERT INTO panel (username, msg) VALUES ('".$username."','".$message."');";
        $result = $conn->query($sql);
        $conn->close();
    }

    function create_msg_bubble ($id, $username, $msg){
        return '<div id = '.$id.' class = "message_user">
                <b><span>'.$username.': </span></b><i><span>'.$msg.'</span>
                </div>';
    }

?>