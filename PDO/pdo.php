<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    try {
        $conn = new PDO("mysql:host=$servername;dbname=nhom12", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "<h1>oke rồi em</h1>";
        return $conn;
        
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
   //inset update relete
    function pdo_execute($sql){
        $sql_args=array_slice(func_get_args(),1);
        global $conn;
        try{
            $stmt=$conn->prepare($sql);
            $stmt->execute($sql_args);
        }
        catch(PDOException $e){
            throw $e;
        }
        finally{
            unset($conn);
        }
    }
    // 
    function pdo_execute1($sql, $params = array()) {
        global $conn;
        try {
            $stmt = $conn->prepare($sql);
            $stmt->execute($params);
        } catch(PDOException $e) {
            throw $e;
        } finally {
            unset($conn);
        }
    }
    //update
    function pdo_execute_up($sql, $sql_args = []) {
        global $conn;
        try {
            $stmt = $conn->prepare($sql);
            $stmt->execute($sql_args);
            return true; // Trả về true nếu thực thi thành công
        } catch (PDOException $e) {
            throw $e;
        } finally {
            unset($conn);
        }
    }
    // truy vấn nhiều dữ liệu
    function pdo_query($sql){
        $sql_args=array_slice(func_get_args(),1);
        global $conn;
        try{
            $stmt=$conn->prepare($sql);
            $stmt->execute($sql_args);
            $rows=$stmt->fetchAll();
            return $rows;
        }
        catch(PDOException $e){
            throw $e;
        }
        finally{
            unset($conn);
        }
    }
    // truy vấn  1 dữ liệu
    function pdo_query_one($sql){
        $sql_args=array_slice(func_get_args(),1);
        global $conn;
        try{
            $stmt=$conn->prepare($sql);
            $stmt->execute($sql_args);
            $row=$stmt->fetch(PDO::FETCH_ASSOC);
            // đọc và hiển thị giá trị trong danh sách trả về
            return $row;
        }
        catch(PDOException $e){
            throw $e;
        }
        finally{
            unset($conn);
        }
    }
    // truy vấn 1
    function pdo_truyVan1($sql){
        global $conn;
        try{
            $stmt=$conn->prepare($sql);
            $stmt->execute();
            $row=$stmt->fetch(PDO::FETCH_ASSOC);
            return $row;
        }
        catch(PDOException $e){
            throw $e;
        }
        finally{
            unset($conn);
        }
    }
    // truy vấn nhiều
    function pdo_truyVanAll($sql){
        global $conn;
        try{
            $stmt=$conn->prepare($sql);
            $stmt->execute();
            $rows=$stmt->fetchAll();
            return $rows;
        }
        catch(PDOException $e){
            throw $e;
        }
        finally{
            unset($conn);
        }
    }
    // thực thi không trả về
    function pdo_thucThi($sql){
        global $conn;
        try{
            $stmt=$conn->prepare($sql);
            $stmt->execute();
        }
        catch(PDOException $e){
            throw $e;
        }
        finally{
            unset($conn);
        }
    }
    ?>