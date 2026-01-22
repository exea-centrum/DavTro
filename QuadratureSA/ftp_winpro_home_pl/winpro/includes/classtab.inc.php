<?php
include("db.inc.php");
//include("./includes/id.inc.php");
class listingorder {
	private $taborder;
	private $tabprod;
	private $tabview;
	private $ctype;
	private $mxpt;
	private $iorder = 0;
	private $iprod = 0;

	
	public function __construct($client_type,$maxpt){
		$this->ctype = $client_type;
		$this->mxpt = $maxpt;
	}
		
	function addtotaborder($reqnum,$reqref,$reqcust,$reqdate,$reqdeliv,$reqins_dp,$reqtprod){
		$this->taborder[$this->iorder]['num'] = $reqnum;
		$this->taborder[$this->iorder]['ref'] = $reqref;
		$this->taborder[$this->iorder]['cust'] = $reqcust;
		$this->taborder[$this->iorder]['date'] = $reqdate;
		$this->taborder[$this->iorder]['delivery'] = $reqdeliv;
		if ($this->ctype == 1){
			$this->taborder[$this->iorder]['instruct'] = $reqins_dp;
		}
		elseif ($this->ctype == 2){
			$this->taborder[$this->iorder]['dateprod'] = $reqins_dp;
		}
		$this->taborder[$this->iorder]['prod'] = $reqtprod;
		
		$this->iorder +=1;
	}
	
	function addtotabprod($datedeliv,$totpointprod){
		$this->tabprod[$this->iprod]['date'] = $datedeliv;
		$this->tabprod[$this->iprod]['point'] = $totpointprod;
		
		$this->iprod +=1;
	}
	
	function buildview($date1,$date2){
		
		date_default_timezone_set('Europe/Brussels');
		$cptdate = strtotime($date1);
		$dateend = strtotime($date2);
		$i=0;
		$j=0;
		$k=0;
		$l=0;
		$max =0;
		while ($cptdate<=$dateend) {
			
			if ($this->tabprod){
				if ((array_key_exists($j,$this->tabprod))&&($this->tabprod[$j]['date']==date('Y-m-d',$cptdate))) {
					if ($this->tabprod[$j]['point'] <= $this->mxpt){
						$max = 0;
					}
					else {
						$max = 1;
					}
					$totday = $this->tabprod[$j]['point'];
					$j++;
				}
				else {

					$max = 0;
				}
			}
			else {
				$max = 0;
			}
			if ($this->taborder){		
				while ((array_key_exists($i,$this->taborder))&&($this->taborder[$i]['delivery']==date('Y-m-d',$cptdate))) {

					$this->tabview[$k]['num']=$this->taborder[$i]['num'];
					$this->tabview[$k]['ref']=$this->taborder[$i]['ref'];
					$this->tabview[$k]['cust']=$this->taborder[$i]['cust'];
					$this->tabview[$k]['date']=substr($this->taborder[$i]['date'],8,2).'-'.substr($this->taborder[$i]['date'],5,2).'-'.substr($this->taborder[$i]['date'],0,4);
					$this->tabview[$k]['delivery']=substr($this->taborder[$i]['delivery'],8,2).'-'.substr($this->taborder[$i]['delivery'],5,2).'-'.substr($this->taborder[$i]['delivery'],0,4);
					if ($this->ctype == 1){
						$this->tabview[$k]['instruction']=$this->taborder[$i]['instruct'];
						$this->tabview[$k]['prod']=$this->taborder[$i]['prod'];
					}
					elseif ($this->ctype == 2){
						$this->tabview[$k]['dprod']=substr($this->taborder[$i]['dateprod'],8,2).'-'.substr($this->taborder[$i]['dateprod'],5,2).'-'.substr($this->taborder[$i]['dateprod'],0,4);
						$this->tabview[$k]['prod']=$this->taborder[$i]['prod'].'/'.$totday;
					}
					$this->tabview[$k]['limit'] = $max;

					$tmporder=1;
					$i++;
					$k++;
				}

				if (!isset($tmporder)) {
					$this->tabview[$k]['num']='';
					$this->tabview[$k]['ref']='';
					$this->tabview[$k]['cust']='';
					$this->tabview[$k]['date']='';
					if ($this->ctype == 1){
						$this->tabview[$k]['instruction']='';
					}
					elseif ($this->ctype == 2){
						$this->tabview[$k]['dprod']='';
					}
					$this->tabview[$k]['prodday']='';
					$this->tabview[$k]['delivery'] = date('d-m-Y',$cptdate);
					$this->tabview[$k]['limit'] = $max;
					$k++;
				}
				else {
					unset($tmporder);
				}

			}
			else {
				$this->tabview[$l]['delivery'] = date('d-m-Y',$cptdate);
				$l++;
			}
			
			$cptdate += 86400;
		}
	}
	

	
	function showdata(){
		
		
		echo"<table class='tabgen' width='1000' border='0'>
		<tr class='tabadmtitle'>
			<th scope='col'>" . idstr('id_0036') . "</th>
			<th scope='col'>" . idstr('id_0037') . "</th>
			<th scope='col'>" . idstr('id_0027') . "</th>
			<th scope='col'>" . idstr('id_0039') . "</th>
			<th scope='col'>" . idstr('id_0040') . "</th>";
		if ($this->ctype == 1){
			echo "<th scope='col'>" . idstr('id_0007') . "</th>";
		}
		elseif ($this->ctype == 2){
			echo "<th scope='col'>" . idstr('id_0042') . "</th>";
		}
			
		echo "<th scope='col'>" . idstr('id_0041') . "</th>
		  </tr>";
		
		$cpt = 0;
		$totlst = 0;
		while (array_key_exists($cpt,$this->tabview)) {
			if ($cpt % 2 == 0) {
                if ($this->tabview[$cpt]['limit'] == 0) {
                    echo "<tr class='lstorder2'>";
                } else {
                    echo "<tr class='lstorder2max'>";
                }
            } else {
                if ($this->tabview[$cpt]['limit'] == 0) {
                    echo "<tr class='lstorder1'>";
                } else {
                    echo "<tr class='lstorder1max'>";
                }
            }
            echo"
				<td>".$this->tabview[$cpt]['num']."</td>
				<td>".$this->tabview[$cpt]['ref']."</td>
				<td>".$this->tabview[$cpt]['cust']."</td>
				<td>".$this->tabview[$cpt]['date']."</td>
				<td>".$this->tabview[$cpt]['delivery']."</td>";
			if ($this->ctype == 1){
			echo "<td>".$this->tabview[$cpt]['instruction']."</td>";
			}
			elseif ($this->ctype == 2){
				echo "<td>".$this->tabview[$cpt]['dprod']."</td>";
			}
			
			echo "
				<td>".$this->tabview[$cpt]['prod']."</td>
			    </tr>";
            
            $totlst += $this->tabview[$cpt]['prod'];
            $cpt++;
          
		}
		  echo"
		<tr>
		<td colspan='6' align='right'>" . idstr('id_0043') . " :</td>
		<td>$totlst</td>
		</tr>
		</table>";
		
	}
	

}



?>
