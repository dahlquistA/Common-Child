<?php 

class CommonChild_model extends CI_Model
{
	public function __construct()
    {
        parent::__construct();
    }

    public function commonChildFunction ($c1, $c2)
    {
    	$max=0;
    	
        for ($k=0; $k < strlen($c1) ; $k++){
            $desp=0;
            $cont=0;

            for ($i=$k; $i < strlen($c1) ; $i++) {
        		for ($j= $desp; $j < strlen($c2) ; $j++) {
        			if ($c1[$i] == $c2[$j]) {
        				$cont++;
        				$desp = $j+1;
        				break;
        				}
        			}
        		}
                if ($cont > $max) {
                    $max = $cont;
                }
            }        
    	return $max;    	
    }
}

