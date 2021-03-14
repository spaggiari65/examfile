<!DOCTYPE html>
<html>
    <head>
        <title>WAT Phase Test 2021</title>
    </head>
    <body>
        <h1>Generate Statements</h1>
        <?php
        /* Output your name and ID to the screen on separate lines 
         */
        $name = "Utsuk Paudayal";
        $id = "C7227233";
        echo "$name";
        echo "<br>";
        echo "$id";
        
        ?>
        <?php
        /*The form below is for converting Pounds to Euros.  You should produce code to 
         *gather an amount in pounds and calculate the equivalent in Euros.  The exchange rate you
         *you should use is 1GBP = 1.14Euros
         *Output the result below the form as shown in the screengrab
        */
        ?>
        <h1>Work with HTML forms </h1>
        <form method="post" action="">
        	<label>GBP:</label>
        	<input type="text" name="txtGBP" />
        	<input type="submit" value="Submit" name="subCash"/>
        </form>
        <?php
        	if(isset($_POST['subCash'])){
		$GBP = $_POST['txtGBP'];
		$GBP_EURO = 1.14 * $GBP ;
		echo "GBP to Euro=".$GBP_EURO;
	}
                    
        ?>
        <h1>Use Conditional Statements</h1>
        <?php
        
        /* Declare a variable called temp and assign it a value of 21
         *Use an IF statement to test the temp variable to assess 
         * whether it is greater than 20.  Output 'more than 20' or 'less than or equal to 20'
         * 
         */
        $temp = 21;
        
        if($temp >20){
            echo"more than 20. <br>";
        }
        else{
            echo"less than or equal to 20";
        }
 
        /* Declare a variable called time and assign a value of 8.  Write code to assess
         * temp and time to produce the following outputs
         * Time before 8 output 'Heating off, lights off';
         * Time 8 or higher and temp less than 20 output 'Heating on, lights on';
         * Time 8 or higher and temp 20 or more output 'Heating off, lights on';
         */
         $time = 8;
         if($time<8){
             echo"Heating off, lights off";
         }   
         if($temp<20 && $time>=8){
             echo"Heating on, lights on";
         } 
         if($temp>=20 && $time>=8){
            echo"Heating off, lights on";
        }       
        		
        ?>
        <h1>Using Loops</h1>
        <?php
        /* Declare an associative array and put in key value pairs of student names and ID's
         * e.g. Amin/c123456, Lisa/c234567, Matthew/c345678
         * use a loop to iterate through the array and output the key=> value pairs to produce:
         * Amin:  c123456
         * Lisa: c234567
         * Matthew: c345678
         */
         $s_names = array("Amin"=> "c123456","Lisa"=> "c234567","Matthew"=> "c345678");
         echo"<br>";

         foreach($s_names as $s => $id_value){
            echo "". $s . ":". $id_value;
            echo "<br>";
        }
        ?>
        
      
        <?php
        /*The form below will be used to insert a new record into an events table
         *First create the events table on phpmyadmin using the structure below
         *eventID    | eventName    | eventCategory   |  eventLocation
         *----------------------------------------------------
         * 1        | Fun           |     Theatre    |   Leeds
         * 2        | Boring        |     Sport      |   Bradford
         * 3        | Interesting   |     Theatre    |   Wakefield
         * 4        | Just OK       |     Sport      |   Huddersfield
         *complete the form as necessary and produce a separate file to
         *complete the insert and return to this page
         *you will need a copy of your connection.php file
        */
        ?>
        <h1>Work with databases </h1>
        <form method="post" action="insertEvent.php">
        	<label>Event Name:</label>
        	<input type="text" name="txtName" />
        	<label>Event Category:</label>
        	<input type="text" name="txtCat" />
        	<label>Event Location:</label>
        	<input type="text" name="txtLoc" />
        	<input type="submit" value="Submit" name="subEvent"/>
        </form>
        <h2>Display All Events </h2>
        <?php
        /*All current events should be displayed at this point
         *produce a separate file to display all events and include that file
         *here
        */
        include 'displayAllEvents.php';
        ?>
         <h2>Display Sporting Events </h2>
         <?php
        /*Sporting events should be displayed at this point 
         *produce a separate file to display sporting events and include that file
         *here
        */
        include 'displaySportEvents.php';
        ?>
    </body>
</html>