   <?php
   
   function generator($lunghezza) {
    
    $caratteri = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!?%&@#*+-_$';
    
   $password = ''; 

   for ($i = 0; $i < $lunghezza; $i++) {
        $posizione = rand(0, strlen($caratteri) -1);
        $password .= $caratteri[$posizione];
   } 
   return $password;
   }

   ?> 