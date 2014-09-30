<?php
for ($i=1; $i<=100; $i++){
if ((($i%3)==0)and(($i%5)==0))
              {print 'trzy pięć'; print "\r\n";} 
              else {
                    if (($i%3)==0)
            		 {print 'trzy'; print "\r\n";} 
        			   else {
                		    if (($i%5)==0)
            					{print 'pięć'; print "\r\n";} 
            					 else {	print $i; print "\r\n";}
							}
            		 }	}	

?>

