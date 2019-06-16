<?php
class MySqlDatabase extends Database {
    /*
     * nếu không viết lại code thực thi cho các method abstract thì sẽ bị lỗi
     public function connect() {
    }
    public function disconnect() {
    }*/
    public function disconnect()
    {
    }
    public  function connect(){
        mysqli_close($this->connection);
    }
}