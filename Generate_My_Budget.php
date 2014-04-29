<!DOCTYPE html>
<html>
<head> 

    <title>Form Outputs</title>

</head>

<body>
   
    
<?php

echo "<PRE>";
print_r($_POST);
echo "</PRE>";

$rates = array(600, 400, 800, 1400, 300, 500, 100, 200);


/* maybe the line items should be a multidimensional array where each category has its default
 * units, time, and rate
*/

$lineItem = array('Producer'=> array('Units'=> 0, 'Time'=> 0, 'Rate'=> $rates[0]),
                //writer goes here in printing//
                'ProductionCoordinator'=> array('Units'=> 0, 'Time'=> 0, 'Rate'=>$rates[1]),
                
                'DMProducer'=> array('Units'=> 0, 'Time'=> 0, 'Rate'=>$rates[2]),
                'Director'=> array('Units'=> 0, 'Time'=> 0, 'Rate'=>$rates[0]),
                'Cameraperson'=> array('Units'=> 0, 'Time'=> 0, 'Rate'=>$rates[3]),
                'AsstCameraperson'=> array('Units'=> 0, 'Time'=> 0, 'Rate'=>$rates[3]),
                'Soundperson'=> array('Units'=> 0, 'Time'=> 0, 'Rate'=>$rates[0]),
                'Grip'=> array('Units'=> 0, 'Time'=> 0, 'Rate'=>$rates[1]),
                'PA'=> array('Units'=> 0, 'Time'=> 0, 'Rate'=>$rates[4]),
                // options go here in printing //
                'Misc'=> array('Units'=> 0, 'Time'=> 0, 'Rate'=>$rates[6]),
                
                'Prod_Post' => array('Units'=> 0, 'Time'=> 0, 'Rate'=>$rates[0]),
                'Editor'=> array('Units'=> 0, 'Time'=> 0, 'Rate'=>$rates[2]),
                'GFX'=> array('Units'=> 0, 'Time'=> 0, 'Rate'=>$rates[2]),
                //masters goes here in printing//
                 
                //director post, post audio and music goes here//
                );

$Options = array('Teleprompter'=> array('Units'=> 0, 'Time'=> 0, 'Rate'=>$rates[0]),
                'MakeUp'=> array('Units'=> 0, 'Time'=> 0, 'Rate'=>$rates[5]),
                );

$Constants = array('Writer'=> array('Units'=> 1, 'Time'=> 3, 'Rate'=>$rates[0]),
                'Masters'=> array('Units'=> 1, 'Time'=> 1, 'Rate'=>$rates[2]),
                'Dir_Post'=> array('Units'=> 1, 'Time'=> 0, 'Rate'=>$rates[1]),
                'PostAudio'=> array('Units'=> 1, 'Time'=> 0, 'Rate'=>$rates[7]),
                'Music'=> array('Units'=> 1, 'Time'=> 1, 'Rate'=>$rates[7]),
                );

/* Take the inputs from the form and create switch statements
 * that assign values to the variables that change depending on
 * the answers to these questions
*/

$quality = $_POST[Quality];

switch ($quality) {
    case "H":
        $lineItem[Producer][Units]= 1;
        $lineItem[ProductionCoordinator][Units]= 1;
        $lineItem[Director][Units]= 1;
        $lineItem[Cameraperson][Units]= 1;
        $lineItem[AsstCameraperson][Units]= 1;
        $lineItem[Soundperson][Units]= 1;
        $lineItem[Grip][Units]= 1;
        $lineItem[PA][Units]= 1;
        $lineItem[Misc][Units]= 1;
        $lineItem[Prod_Post][Units] = .5;
        $lineItem[Editor][Units] = 2;
        $lineItem[GFX][Units] = 1;
        break;
    case "M":
        $lineItem[Producer][Units]= .5;
        $lineItem[ProductionCoordinator][Units]= 1;
        $lineItem[Director][Units]= 1;
        $lineItem[Cameraperson][Units]= 1;
        $lineItem[Soundperson][Units]= 1;
        $lineItem[Misc][Units]= 1;
        $lineItem[Prod_Post][Units] = .25;
        $lineItem[Editor][Units]= 1.5;
        $lineItem[GFX][Units] = 1;
        break;
    case "L":
        $lineItem[Producer][Units]= .25;
        $lineItem[ProductionCoordinator][Units]= .5;
        $lineItem[DMProducer][Units]= 1;
        $lineItem[Misc][Units]= .5;
        $lineItem[Editor][Units]= 1;
        $lineItem[GFX][Units] = 1;
        break;
       
    }
    
    
$shootDays = $_POST[NumDays];

switch ($shootDays) {
    case $shootDays>=1:
        $lineItem[Producer][Time]= $shootDays;
        $lineItem[ProductionCoordinator][Time]= $shootDays;
        $lineItem[Director][Time]= $shootDays;
        $lineItem[Cameraperson][Time]= $shootDays;
        $lineItem[AsstCameraperson][Time]= $shootDays;
        $lineItem[Soundperson][Time]= $shootDays;
        $lineItem[Grip][Time]= $shootDays;
        $lineItem[PA][Time]= $shootDays;
        $lineItem[Misc][Time]= $shootDays;
        $lineItem[Prod_Post][Time]= $shootDays;
        $lineItem[Editor][Time]= $shootDays;
        $lineItem[GFX][Time]= $shootDays;
        break;
    }


$Makeup = $_POST[Makeup];

switch($Makeup) {
    case "Yes":
        $Options[MakeUp][Units] = 1;
        $Options[MakeUp][Time] = $shootDays;
        break;
};

$Teleprompt = $_POST[Prompter];

switch ($Teleprompt) {
    case "Yes":
        $Options[Teleprompter][Units] = 1;
        $Options[Teleprompter][Time] = $shootDays;
        break;
};


$GraphicsLevel = $_POST[Graphics];

switch ($GraphicsLevel) {
    case "Basic":
        $lineItem[GFX][Units] = .25;
        break;
    case "Some":
        $lineItem[GFX][Units] = 1;
        break;
    case "Pro":
        $lineItem[GFX][Units] = 2;
        break;
    case "Animation":
        $lineItem[GFX][Units] = 3;
        break;
    
};

/*echo "<PRE>";
print_r($lineItem);
echo "</PRE>";


echo "<PRE>";
print_r($Options);
echo "</PRE>";


echo "<PRE>";
print_r($Constants);
echo "</PRE>";
*/



echo "<table border= 1px>";

$budgetTotal = array();

foreach ($lineItem as $key => $subarray) {
    
        echo "<tr>";
        echo "<td width = 100 px > $key </td>";
        echo "<td width = 100 px > $subarray[Units] </td>";
        echo "<td width = 100 px > $subarray[Time] </td>";
        echo "<td width = 100 px > $subarray[Rate] </td>";

        $lineTotal = $subarray[Units] * $subarray[Time] * $subarray[Rate];
        
        //$budgetTotal[$x] = $lineTotal;
        array_push($budgetTotal, $lineTotal);
        //$x++;
        
        echo "<td> $lineTotal </td>";
        echo "</tr>";

   }
   
foreach ($Options as $key => $subarray) {
    
        echo "<tr>";
        echo "<td width = 100 px > $key </td>";
        echo "<td width = 100 px > $subarray[Units] </td>";
        echo "<td width = 100 px > $subarray[Time] </td>";
        echo "<td width = 100 px > $subarray[Rate] </td>";

        $lineTotal = $subarray[Units] * $subarray[Time] * $subarray[Rate];
        
        array_push($budgetTotal, $lineTotal);
        
        echo "<td> $lineTotal </td>";
        echo "</tr>";
        
   }


foreach ($Constants as $key => $subarray) {
    
        echo "<tr>";
        echo "<td width = 100 px > $key </td>";
        echo "<td width = 100 px > $subarray[Units] </td>";
        echo "<td width = 100 px > $subarray[Time] </td>";
        echo "<td width = 100 px > $subarray[Rate] </td>";

        $lineTotal = $subarray[Units] * $subarray[Time] * $subarray[Rate];
        
        array_push($budgetTotal, $lineTotal);
        
        echo "<td> $lineTotal </td>";
        echo "</tr>";
        
   }       

echo "</table>";
       
        
echo "<PRE>";
print_r($budgetTotal);
echo "</PRE>";

$grandTotal = array_sum($budgetTotal);
echo $grandTotal;

echo "<p> $ " . $grandTotal . ".00 </p>";

echo "<p> what is not working here </p>";

?>
        


</body>


</html>