<?php
 require('../fpdf/fpdf.php');
 require '../config/function.php' ;
?>

<?php
   // we need to check if the ID is available or not, existed or not, or ID is given or not, or if ID is integer or not Integer
  $paramResult = checkParamId('id');
//    if the ParamResultID is not numeric type then
   if(!is_numeric($paramResult)){
       // This will check if the parameter data is correctly given or not
       // it will echo either it will $_GET the user id or it will echo the "No ID Found" or "No Id Given"
       echo '<h5>'.$paramResult.'</h5>';
       return false;
   }

   // we will get the single record from the database by using parameter value
       // Database table and the Id that has beING CHECKED

   $user = getByID('request',checkParamId('id'));
   // If its status == 200 then it means they found a data in the database table, its chgecking every data by ID of that datatable
   if($user['status'] == 200)
   {
       
   getAll('request');

   $pdf = new FPDF("P", "mm", "A4");

   $pdf->AddPage();

   $pdf->SetFont('Arial', 'B' , 20);

   $pdf->Cell(71,10,'',0,0);
   $pdf->Cell(50,5,'Reports',0,0, 'C');
   $pdf->Cell(59,15,'',0,1);

  
   $pdf->SetFont('Arial', 'B' , 10);

   $pdf->Cell(65,15,'Date ',1,0, 'C');
   $pdf->Cell(65,15, 'Owner Name',1,0, 'C');
   $pdf->Cell(65,15, 'Business Name',1,0, 'C');
   $pdf->Cell(59,15,'',0,0);
   
   $pdf->Cell(59,20,'',0,1);  
   $pdf->Cell(65,15,  $user['data']['date'],1,0, 'C');
   $pdf->Cell(65,15, $user['data']['owner_name'],1,0, 'C');
   $pdf->Cell(65,15, $user['data']['business_name'],1,0, 'C');
   $pdf->Cell(59,15,'',0,1);

   
   // $pdf->Cell(95,15,'Business Name : ',1,0, 'C');
   // $pdf->Cell(95,15, $user['data']['business_name'],1,0, 'C');
   // $pdf->Cell(59,15,'',0,1);


   $pdf->Output();

}
else 
{
  echo '<h5>'.$user['message'].'</h5>' ;
}
   ?>


 