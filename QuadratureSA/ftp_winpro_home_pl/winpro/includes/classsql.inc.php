<?php

class dbconnection {
	
	private $sqluser;
	private $sqlpassword;
	private $sqlhost;
	private $sqldb;
	private $sqldbid;
	
	public $sqllinkid;
	public $finallst;
	
	public function __construct($currentuser,$currentpassword,$currenthost,$currentdb){
		$this->sqluser = $currentuser;
		$this->sqlpassword = $currentpassword;
		$this->sqlhost = $currenthost;
		$this->sqldb = $currentdb;
		
		$this->connect();
		$this->selectdb();
	}
	
	private function connect(){
		if (!$this->sqllinkid = @mysql_connect($this->sqllinkid,$this->sqluser,$this->sqlpassword)) {
			echo "Connection to database server failed !\n";
			echo $this->sqllinkid."///".$this->sqluser."///".$this->sqlpassword."\n";
			exit();
		}
	}
	
	private function selectdb(){
		if (!$this->sqldbid = @mysql_select_db($this->sqldb,$this->sqllinkid)) {
			echo "Connection to database failed !\n";
			exit();
		}
	}
	
	public function __destruct(){
		if (!empty($this->sqllinkid)) {
			@mysql_close($this->sqllinkid);
		}
		
	}
}

class dbquery {
	
	private $request;
	private $datalink;
	private $result;
	public $nbrec;
	private $nbfields;
	private $index;
	
	public $lst;
	public $finallst = array();
	
	public function __construct($ln,$req) {
		$this->datalink = $ln;
		$this->request = $req;
		
		$this->dbreq();
		$this->querystat();
		$this->tst();
		
	}
	
	private function dbreq() {
		$this->result = mysql_query($this->request,$this->datalink);
		
	}
	
	public function querystat(){
		$this->nbrec = mysql_num_rows($this->result);
		$this->nbfields = mysql_num_fields($this->result);

	}
	
	private function readres(){
		$this->lst = mysql_fetch_assoc($this->result);
		
	}
	
	public function tst(){
		for ($i = 0; $i < $this->nbrec; $i++){
			$this->readres();
			$this->finallst[$i] = $this->lst;
			
		}	
	}	

	public function current(){
		return $this->finallst[$this->index];
	}
	
	public function next(){
		$this->index += 1;
	}
	
	public function valid(){
		return ($this->index + 1 <= $this->nbrec);
	}
	
	public function key(){
		return ($this->index);
	}
	
	public function rewind(){
		$this->index = 0;
	}
	
    public function __destruct(){
		
		if (!empty($this->result)) {
			mysql_free_result($this->result);
		}
	}
		
	
	
}

?>