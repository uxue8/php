<?php 

class Model_Jokoa{
    
    
    private $mysqli;
    
    public function conectar() {
        try {
            
            $this->mysqli = new mysqli('localhost', 'root', '', 'jokoa');
            if ($this->mysqli->connect_errno) {
                throw new Exception('Error al conectar: ' . $this->mysqli->connect_error);
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
   
    public function consulta() {
        
            $sql = "SELECT erabiltzailea, puntuazio_max FROM jokalariak ;";
            $res = $this->mysqli->query($sql);
            while($kont = mysqli_fetch_row($res)){
                $arrayAsozi[$kont[0]] = $kont[1];
            }
            return $arrayAsozi;
        
    }
    
    
    public function validado($user, $pass) {
        $sql = "SELECT * FROM jokalariak WHERE erabiltzailea = '" . $user . "' and pasahitza= '" . $pass . "'";
        $this->mysqli->query($sql);
        if ($this->mysqli->affected_rows == 1) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
}
?>