<?php
class Query{
	public $field = [20];
	public $data = [20];
	public function insert($len, $tablename){
		#connection..............
		try {
        $user = "ishimwe";
        $password = "D1 ";
        $pdo = new PDO("mysql:host=localhost;dbname=testing", $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
         }
        catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
         }

         #building query............................

		$dataholder = $this->data[0];
	    for ($i=1; $i < $len; $i++) {
	    	# code...
	    	$dataholder = $dataholder.", ".$this->data[$i];
	    }
	    $fieldholder = $this->field[0];
	    for ($i=1; $i < $len; $i++) {
	    	# code...
	    	$fieldholder = $fieldholder.", ".$this->field[$i];
	    }
	    #executing query...................................

	    $sql = "INSERT INTO ".$tablename."(".$fieldholder.") VALUES(".$dataholder.")";
	    $pdo->exec($sql);
        if($sql)
        {
	    echo '<script>alert("data well registered")</script>';
        }
        else{
        echo '<script>alert("data not registered")</script>';
        }
	}
}
?>
