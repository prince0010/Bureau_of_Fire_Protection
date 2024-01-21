<?php
include('include/header.php');
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
?>


    <div class="row" >
        <div class="card">
            <div id = "myPrintingArea">
            <div class="card-body" style="border: 8px solid black; margin: -10px; width: auto;" >
           
            <div name = "Words" >
               <img src="assets/img/bfp_img_1.png" alt="" srcset="" style="max-width: 10%" class="float-start mx-3" >
               <h3 class="text-center" style="margin-right: 14rem; margin-bottom: 30px;">Republic of the Philippines</h3>
              <b> <h3 class="text-center" style=" margin-right: 12rem; margin-top: -24px; margin-bottom: 10px; " >Department of the Interior and Local Government <br> Bureau of Fire Protection </h3></b>
                <h3 class="text-center" style="margin-right: 14rem; margin-top: -12px; margin-bottom: 15px;" >Region 10</h3>
                <h3 class="text-center" style="margin-right: 14rem; margin-top: -19px; margin-bottom: 15px;" >Cagayan De Oro Fire District</h3>
                <h3 class="text-center" style="margin-right: 14rem; margin-top: -18px; margin-bottom: 15px;" >Capt. Vicente Roa St. Cagayan De Oro City</h3>
            </div>

                <div>
                   <b><h3 class="my-8 " style="margin-right: 14rem;"> INSPECTION ORDER </h3></b> 
                </div>
                <div>
                <h3 class="float-start" style="margin-right:7px; "> NUMBER:  </h5> <b><h3 style="color: red; margin-top: -120px"> 2022-03-017672 </h3> </b> 
                </div>
                <div>
                    <img src="assets/img/bfp_img_2.png" alt="" class="float-end mx-3"  srcset="" style="max-width: 10%;  margin-top: -466px "  >
            </div>

                <div>
                   <u> <h3 class="float-end" style="margin-top: -100px; margin-right: 42px;">
                    <?php
                   echo date("Y/m/d") ;
                    ?>
                    </u>
                    </h3>
                    <br>
                    <h3 class="float-end" style="margin-top: -80px; margin-right: 75px;">
                        DATE
</h3>
                </div>

                <div name = "table" class="my-6" >
                    <table width="100%" border="1" style="border-spacing: 0px;table-layout: fixed;">
                <tbody>

                    <?php
                         $user = getByID('request',checkParamId('id'));

                         if($user['status'] == "200"){
                    ?>
                        <tr>
                        <td  style="border: 1px solid black; padding: auto;">
                        <h3 class="mx-4 my-2 " style = " font-weight:bold;" >
                            To

                         </h3>
                           
                        </td>
                        <td style="border: 1px solid black; ">
                            <b>
                            <h3  class="text-center" style="font-weight:bold; "> 
                            :
                            </h3>
                            </b>
                            
                        </td>
                        <td style="border: 1px solid black; " >
                            <b>
                            <h3 class="text-center" style="font-weight: 600;" >
                            <?= $user['data']['inspection_name'];?>
                            </h3>
                            </b>
                        </td>
                        </tr>

                        <tr>
                        </td>
                            <td class="mx-4 my-2 " style = " border: 1px solid black;" >
                          <b>
                        <h3 class="mx-4" style=" font-weight:bold;">
                          Proceed
                            </h3>
                            </b>
                        </td>
                        <td style="border: 1px solid black;">
                            <b>
                            <h3 class="text-center" style="font-weight:bold; ">
                            :
                            </h3>
                            </b>
                        </td>
                        <td style="border: 1px solid black;">
                            <b>
                            <h3 class="text-center" style="font-weight: 600; ">
                            <?= $user['data']['proceed_info'];?>
                            </h3>
                            </b>
                        </td>
                        </tr>

                        <tr>
                        </td>
                            <td class="mx-4 my-2 " style = "border: 1px solid black; font-weight: bold; " >
                          <b>
                        <h3 class="mx-4" style=" font-weight:bold;">
                          Purpose
                            </h3>
                            </b>
                        </td>
                        <td style="border: 1px solid black;">
                            <b>
                            <h3 class="text-center" style="font-weight:bold; ">
                            :
                            </h3>
                            </b>
                        </td>
                        <td style="border: 1px solid black;">
                            <b>
                            <h3 class="text-center" style="font-weight: 600; ">
                            <?= $user['data']['purpose_info'];?>
                            </h3>
                            </b>
                        </td>
                        </tr>

                        <tr>
                        </td>
                            <td class="mx-4 my-2 " style = "border: 1px solid black; font-weight: bold; " >
                          <b>
                        <h3 class="mx-4" style=" font-weight:bold;">
                          Duration
                            </h3 >
                            </b>
                        </td>
                        <td style="border: 1px solid black;" wordwrap>
                            <b>
                            <h3 class="text-center" style="font-weight:bold; "  >
                            :
                            </h3>
                            </b>
                        </td>
                        <td style="border: 1px solid black;">
                            <b>
                            <h3 class="text-center" style="font-weight: 600; ">
                            <?= $user['data']['duration'];?>
                            </h3>
                            </b>
                        </td>
                        </tr>
                        <tr>
                        </td>
                            <td style = " border: 1px solid black;" >
                          <b>
                        <h3 class="mx-4" style="font-weight:bold;">
                          REMARKS OR ADDITIONAL INSTRUCTIONS
                         </h3>
                            </b>
                        </td>
                        <td style="border: 1px solid black; " >
                            <b>
                            <h3 class="text-center" style="font-weight:bold; ">
                            :
                            </h3>
                            </b>
                        </td>
                        <td style="border: 1px solid black; padding: auto;">
                            
                            <h3 class="text-center" style="font-weight: 600; ">
                            <?= $user['data']['remarks_IO'];?>
                         </h3>
                            
                        </td>
                        </tr>
                    </tbody>
                    </table>
                    <?php
                        }
                        else{
                            echo '<h5>'.$user['message'].'</h5>' ;
                        }
                    ?>
                </div>

                <div>
                    <!-- <b>
                        <h5>
                            RECOMMEND APPROVAL: 
                        </h5>
                    </b>
                    <b>
                        <h5 >
                            APPROVED
                        </h5>
                    </b> -->
                    <table width = "100%" colspan = "2">
                        <tr>
                            <td > <b><h3 class="mx-1 my-7" style="font-weight: bold;" >RECOMMEND APPROVAL:</h3> 
                        </b></td>
                        <td align="end">  <b><h3 class="my-7" style ="margin-right: 80px; font-weight: bold;">APPROVED:</h3> </b></td>
                        </tr>
                        <br>

                        <tr>

                        <td>
                                    <!-- <span>_________________________________________________________________</span> -->
                                    <u>
                                <h3 style="margin-top: 10px; font-weight: bold;">
                           _F/SINSP BERNIL D HAPITAN_   
                                </h3>
                                </u>
                                </td>
                                <td align="end" >
                               <!-- <span>_________________________________________________________________</span> -->
                               <u>
                                <h3 style="margin-top: 10px;font-weight: bold;">
                                _F/SINSP BERNIL D HAPITAN_       
                                </h3>
                                </u>
                           </td>
                                </tr>
                                <br>
                                <tr>
                                    <td>
                                    <b>
                                    <h3 style="margin-top: -5px;  margin-right: 30px; font-weight: bold;">
                                    OIC, Fire Safety Enforcement Section
                    </h3>
                                        </b>
                                    </td>
                                    <td align="end">
                                    <b>
                                        <h3 style="margin-top: -5px; margin-right: -10px; font-weight: bold;" >
                                      Acting District Fire Director, COFD
                    </h3>
                                         </b>
                                    </td>
                            <!-- <td>
                                <u>
                                <h5 style="margin-top: 70px">
                           _F/SINSP BERNIL D HAPITAN_   
                                </h5>
                                </u>
                               
                                <p style="margin-left: 10px; font-weight: bold; margin-top: -10px;">
                                    OIC, Fire Safety Enforcement Section
                    </p>
                             
                            </td>
                            <td>
                                <u>
                                <h5 style="margin-left: 360px;  margin-top: 70px">
                                _F/SINSP BERNIL D HAPITAN_       
                                </h5>
                                </u>
                                <p style="margin-left: 300px; font-weight: bold; margin-top: -10px;">
                                    OIC, Fire Safety Enforcement Section
                                </p>
                             
                            </td> -->
                        </tr>
                    </table>
                                    <b>
                                    <h5 class="my-5" style="font-weight: bold;">
                                      - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</h5>
                                       
                                    </b> 

                                    <b> <h2 class="text-center my-7" style="font-weight: bold;" > ACKNOWLEDGEMENT</h2></b>
                                    <h3 class="text-center mx-6" style=" font-weight: bold;"> This is to acknowledge that permission was granted to the above-named Fire Safety Inspector/s accompanied by authorized representative to conduct Fire Safety Inspection within the
                            premises in accordance with law.</h3>
                            <table>
                            <tr>
                            <td>
                                    <!-- <span>_________________________________________________________________</span> -->
                                    <p style="width: 830px; display: table; margin-top: 200px;" class="mx-2">
                                    <span style="display: table-cell; border-bottom: 1px solid black; "></span>
                                    </p>
                                </td>
                                <td class="float-end" >
                               <!-- <span>_________________________________________________________________</span> -->
                               <p style="width: 220px; display: table; margin-top: 200px; margin-left: 980px;">
                               <span style="display: table-cell; border-bottom: 1px solid black; "></span>
                               </p>
                           </td>
                                </tr>
                                <br>
                                <tr>
                                    <td>
                                    <b>
                                        <h3 style="margin-top: -10px;" class="mx-2">
                                        Signature over Printed Name/Authorized Representative 
                    </p>
                    </h3>
                                    </td>
                                    <td class="float-end" >
                                    <b>
                                        <h3 style="margin-top: -10px;  margin-right: 30px;" >
                                     Date/Time
                    </p>
                    </h3>
                                    </td>
                                    </tr>  
                                </table>

                               <div style="margin-top: 370px;">
                                <h3 style="color:red; font-weight: bold;" class="text-center"> PAALALA: "MAHIGPIT NA IPINAGBABAWAL NG PAMUNUAN NG BUREAU OF FIRE PROTECTION SA MGA KAWANI NITO ANG <br>MAGBENTA 
                                O MAGREKOMENDA NG ANUMANG BRAND NG FIRE EXTINGUISHER" </h3>
                                <b>
                                <h2 class="text-center" style="margin-bottom: 320px; margin-top: 50px;"> "FIRE SAFETY IS OUR MAIN CONCERN"</h2>
                                </b> 
                             </div>

                        <div style="margin-top: 400px; margin-bottom: 300px; margin-left: 2px;" class="my-12">
                       
                       <h3 style="font-weight:bold;">DISTRIBUTION: <br>
                    Original (Application Owner's Copy) <br>
                Duplicate (BFP Copy)
                    </h3>
                        </div>
                </div>
                </div>
                <h3 style="font-weight: bold; margin-left: 30px; margin-top: 20px" >BFP-QSF-FSED-009 Rev. 01 (07.05.19)</h3>
            <div>
            </div>
            </div>
            </div>
    </div>

    </div>

