  <?PHP  
      /** mysql_conenct prøver å logge på en MySql database,  
        * 3 parametre,  
        * 1: navn på database_server 
        * 2: brukernavn 
        * 3: passord 
        * funksjonen returnerer TRUE hvis vellykket innlogging 
        * returnerer FALSE hvis IKKE innlogging 
      */       
      $result = mysql_connect("boltit", "andet12", "5u9E9yhaqyjYpepe"); 
      if ($result == FALSE) 
        echo "Connect NOT OK"; 
         
      /*  mysql_select_db velger hvilken base vi skal bruke, 
        * en bruker kan ha flere databaser, og hver database 
        * kan ha mange tabeller 
        * Funksjonen returnerer TRUe hvis databasen finnes, 
        * FALSE hvis den ikke finnes, eller ikke kontakt. 
      */      
        $result = mysql_select_db("andet12"); 
        if (!$result) 
        echo "Select DB NOT OK"; 
?>