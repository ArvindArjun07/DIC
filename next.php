<?php
session_start();
?>
<html>
    <head>
    <style>
        th{
            text-align: left;
        }
        
        body {
            background-image: url(industry.jpeg);
            color: white;
            font-size: 20px;
            font-style: oblique;
        }
        .input-field input{
            border: 1px solid black;
            border-radius: 4px;
            background-color:aliceblue;
	        display:inline-block;
            font-size: 15px;
            padding: 7px 9px;
            margin: 0;
            transition: all .3s;
            box-sizing: border-box;  
        }
        .input-field input[type=submit]
        {
            width: 50%;
            margin-top: 80px;
        }
        .input-field input:focus{
            border: 2px solid black;
        }
        .edit{
            width:100px;
            position:relative;
            left:4cm;
        }
        </style></head>
    <body>
    <?php
$dbc = mysqli_connect('localhost','root','','dic') or die("Couldn't connect to database");

function edit_profile()
{
    $aadhar=$_GET['p_aadhar'];
    $data=mysqli_query($GLOBALS['dbc'],"Select * from swa1 where p_aadhar=$aadhar");
    if($data)
    {
        foreach($data as $details)
        {
            ?>
       <form action="next.php?p_aadhar=<?php echo $aadhar?>"  class="input-field" method="post">
        <table><tr><td><b>1. Name of the promoter Industrial Undertaking:</b></td><td><input type="text" name=p_name value="<?php echo $details['p_name'];?>"></td></tr>
            <tr><td>Area</td><td><input type="text" name=p_area value="<?php echo $details['p_area'];?>"></td></tr>
    <tr><td>Town</td><td><input type=text name=p_town value="<?php echo $details['p_town'];?>"></td></tr>
            <tr><td>Tehsil/Taluk</td><td><input type=text name=p_taluk value="<?php echo $details['p_taluk'];?>"></td></tr>
            <tr><td>District</td><td><input type=text name=p_district value="<?php echo $details['p_district'];?>"></td></tr>
            <tr><td>State</td><td><input type=text name=p_state value="<?php echo $details['p_state'];?>"></td></tr>
            <tr><td>Pin Code</td><td><input type=text name=p_pin value="<?php echo $details['p_pincode'];?>"></td></tr>
            <tr><td>Phone Number</td><td><input type=text name=p_phno value="<?php echo $details['p_phno'];?>"></td></tr>
            <tr><td>E-mail</td><td><input type=email name=p_email value="<?php echo $details['p_email'];?>"></td></tr>
            <tr><td>Aadhar No</td><td><input type=text disabled name=p_aadhar value="<?php echo $details['p_aadhar'];?>"></td></tr>
    
    <tr><td><b>2. This proposal is for:</b></td>
            <td><input type=text name=purpose 
                           value="<?php 
            if($details==1) 
                echo"Establishment of a new undertaking"; 
            elseif($details==2)
                echo"Effecting substantial Expansion";
            else
                echo "Manufacture of new articles/diversification";
                ?>"></td></tr>
        
            <tr><th><b>3. </b>Location of the proposal undertaking</th></tr>
            <tr><td>Place/Town</td><td><input type=text name=l_town value="<?php echo $details['l_town'];?>"></td></tr>
            <tr><td>Tehsil/Taluk</td><td><input type=text name=l_taluk value="<?php echo $details['l_taluk'];?>"></td></tr>
            <tr><td>District</td><td><input type=text name=l_district value="<?php echo $details['l_district'];?>"></td></tr>
            <tr><td>State</td><td><input type=text name=l_state value="<?php echo $details['l_state'];?>"></td></tr>
            <tr><td>Pin Code</td><td><input type=text name=l_pin value="<?php echo $details['l_pincode'];?>"></td></tr>            
        
            <tr><th colspan="2"><b>4. </b>Item(s) of manufacture: In case of more than one item, Supplementary sheet may be used:</th></tr>
            <tr><td>(a)Item of manufacture</td><td><input type=text name=item value="<?php echo $details['item_name'];?>"></td></tr>
            <tr><td>(b)Item description</td><td><input type=text name=item_desc value="<?php echo $details['item_des'];?>"></td></tr>
            <tr><td>(c)Proposed Annual Capacity</td><td><input type=text name=item_capacity value="<?php echo $details['annu_cap'];?>"></td></tr>
            <tr><td>(d)Unit of capacity</td><td><input type=text name=item_unit value="<?php echo $details['unit_cap'];?>"></td></tr>
            
    <tr><th><b>5. </b>By-products/Co-products</th><td><input type=text name=by_product value="<?php echo $details['co_product'];?>"></td></tr>
            
            <tr><th><b>6. </b>Production(projected)</th><th>Quantity</th></tr>
            <tr><td>1st year</td><td><input type=text name=year1 value="<?php echo $details['pr_year1'];?>"></td></tr>
            <tr><td>2nd year</td><td><input type=text name=year2 value="<?php echo $details['pr_year2'];?>"></td></tr>
            <tr><td>3rd year</td><td><input type=text name=year3 value="<?php echo $details['pr_year3'];?>"></td></tr>
            <tr><td>4th year</td><td><input type=text name=year4 value="<?php echo $details['pr_year4'];?>"></td></tr>
            <tr><td>5th year</td><td><input type=text name=year5 value="<?php echo $details['pr_year5'];?>"></td></tr>
            
            <tr><th><b>7. </b>Employment:(All figures in Nos.)</th><th>Existing</th><th>Proposed</th></tr>
            <tr><td>(a)Managerial</td><td><input type=text name=existing(a) value="<?php echo $details['existing_a'];?>"></td><td><input type=text name=proposed(a) value="<?php echo $details['proposed_a'];?>"></td></tr>
            <tr><td>(b)Supervisory</td><td><input type=text name=existing(b) value="<?php echo $details['existing_b'];?>"></td><td><input type=text name=proposed(b) value="<?php echo $details['proposed_b'];?>"></td></tr>
            <tr><td>(c)Skilled</td><td><input type=text name=existing(c) value="<?php echo $details['existing_c'];?>"></td><td><input type=text name=proposed(c) value="<?php echo $details['proposed(c)'];?>"></td></tr>
            <tr><td>(d)Unskilled</td><td><input type=text name=existing(d) value="<?php echo $details['existing_d'];?>"></td><td><input type=text name=proposed(d) value="<?php echo $details['proposed_d'];?>"></td></tr>
            <tr><td>(e)Total</td><td><input type=text name=existing(e) value="<?php echo $details['existing_e'];?>"></td><td><input type=text name=proposed(e) value="<?php echo $details['proposed_e'];?>"></td></tr>
            
            <tr><th><b>8. </b>Expected date of Commencement of trial Production</th></tr>
            <tr><td>Date</td><td><input type=date name=trail_date value="<?php echo $details['trail_date'];?>"></td></tr>
            
            <tr><th><b>9. </b>Expected date of Commencement of Commercial Production</th></tr>
            <tr><td>Date</td><td><input type=date name=Commercial_date value="<?php echo $details['commercial_date'];?>"></td></tr>
            
            <tr><th><b>10. </b>Cost of the Project</th><th>Rs. in lakhs</th></tr>
            <tr><td>(a)Land and Building</td><td><input type=text name=cost(a) value="<?php echo $details['cost_a'];?>"></td></tr>
            <tr><td>(b)Plant and Machinery</td><td><input type=text name=cost(b) value="<?php echo $details['cost_b'];?>"></td></tr>
            <tr><td>(c)Working Capital Margin</td><td><input type=text name=cost(c) value="<?php echo $details['cost_c'];?>"></td></tr>
            <tr><td>(d)Others</td><td><input type=text name=cost(d) value="<?php echo $details['cost_d'];?>"></td></tr>
            <tr><td>Total</td><td><input type=text name="cost_total" value="<?php echo $details['cost_total'];?>"></td></tr>
            
            <tr><th><b>11. </b>Means of Finance</th><th>Rs. in lakhs</th></tr>
            <tr><td>(a)Promoter's Equity</td><td><input type=text name=finance(a) value="<?php echo $details['finance_a'];?>"></td></tr>
            <tr><td>(b)Term Loans</td><td><input type=text name=finance(b) value="<?php echo $details['finance_b'];?>"></td></tr>
            <tr><td>(c)Institutions Equity</td><td><input type=text name=finance(c) value="<?php echo $details['finance_c'];?>"></td></tr>
            <tr><td>Total</td><td><input type=text name=finance_total value="<?php echo $details['finance_total'];?>"></td></tr>
            
            <tr><th><b>12. </b>Turnover</th><th>Amount in lakhs</th></tr>
            <tr><td>(a)Existing</td><td><input type=text name="turnover(a)" value="<?php echo $details['turnover_a'];?>"></td></tr>
            <tr><td>(b)Proposed</td><td><input type=text name="turnover(b)" value="<?php echo $details['turnover_b'];?>"></td></tr>
            <tr><td>Total</td><td><input type=text name="turnover_total" value="<?php echo $details['turnover_total'];?>"></td></tr>
            
            <tr><th><b>13. </b>Land Details</th></tr>
            <tr><td>(a)Existing</td><td><input type=text name=land(a) value="<?php echo $details['land_a'];?>"></td></tr>
            <tr><td>(b)Required</td><td><input type=text name=land(b) value="<?php echo $details['land_b'];?>"></td></tr>
            
            <tr><th><b>14. </b>Power</th></tr>
            <tr><th>KPTCL Contract Demand(in KVA)</th></tr>
            <tr><td>(a)Exisiting</td><td><input type=text name=power(a) value="<?php echo $details['power_a'];?>"></td></tr>
            <tr><td>(b)Proposed</td><td><input type=text name=power(b) value="<?php echo $details['power_b'];?>"></td></tr>
            <tr><td>Total</td><td><input type=text name=power_total value="<?php echo $details['power_total'];?>"></td></tr>
            
            <tr><th><b>15. </b>Water requirement(in litres/per day)</th></tr>
            <tr><td>(a)Required</td><td><input type=text name=water(a) value="<?php echo $details['water_a'];?>"></td></tr>
            <tr><td>(b)Available</td><td><input type=text name=water(b) value="<?php echo $details['water_b'];?>"></td></tr>
            <tr><td>(c)Source of water</td><td><input type=text name=water(c) value="<?php echo $details['water_c'];?>"></td></tr>
            
            <tr><th><b>16. </b>Present status and Assistance required from the Government</th></tr>
            <tr><td>(a)Present Status</td><td><input type=text name=status value="<?php echo $details['status'];?>"></td></tr>
            <tr><th>(b)Assistance required from Govt. of Karnataka</th></tr>
            <tr><td>(1)Land</td><td><input type=text name=land value="<?php echo $details['land'];?>"></td></tr>
            <tr><td>(2)PCB Construct/Environment Clearance</td><td><input type=text name=pcb value="<?php echo $details['pcb'];?>"></td></tr>
            <tr><td>(3)Incentives and Concessions sought</td><td><input type=text name=incentives value="<?php echo $details['incentive'];?>"></td></tr>
            <tr><td class="edit"><input type=submit name=update value=Edit></td></tr>
        </table>
        </form>
<?php
        }
    }
}
if(!isset($_GET['p_aadhar']))
{
    echo "Restricted page!!!!!! You are supposed to Login first......";
}
elseif(isset($_POST['update']))
{
    $aadhar=$_GET['p_aadhar'];
$p_name=$_POST['p_name'];
$p_area=$_POST['p_area'];
$p_town=$_POST['p_town'];
$p_taluk=$_POST['p_taluk'];
$p_district=$_POST['p_district'];
$p_state=$_POST['p_state'];
$p_pin=$_POST['p_pin'];
$p_phno=$_POST['p_phno'];
$p_email=$_POST['p_email'];
$p_purpose=$_POST['purpose'];
$l_town=$_POST['l_town'];
$l_taluk=$_POST['l_taluk'];
$l_district=$_POST['l_district'];
$l_state=$_POST['l_state'];
$l_pin=$_POST['l_pin'];
$item=$_POST['item'];
$item_desc=$_POST['item_desc'];
$item_capacity=$_POST['item_capacity'];
$item_unit=$_POST['item_unit'];
$by_product=$_POST['by_product'];
$year1=$_POST['year1'];
$year2=$_POST['year2'];
$year3=$_POST['year3'];
$year4=$_POST['year4'];
$year5=$_POST['year5'];
$existing_a=$_POST['existing(a)'];
$proposed_a=$_POST['proposed(a)'];
$existing_b=$_POST['existing(b)'];
$proposed_b=$_POST['proposed(b)'];
$existing_c=$_POST['existing(c)'];
$proposed_c=$_POST['proposed(c)'];
$existing_d=$_POST['existing(d)'];
$proposed_d=$_POST['proposed(d)'];
$existing_e=$_POST['existing(e)'];
$proposed_e=$_POST['proposed(e)'];
$trail_date=$_POST['trail_date'];
$commercial_date=$_POST['Commercial_date'];
$cost_a=$_POST['cost(a)'];
$cost_b=$_POST['cost(b)'];
$cost_c=$_POST['cost(c)'];
$cost_d=$_POST['cost(d)'];
$cost_total=$_POST['cost_total'];
$finance_a=$_POST['finance(a)'];
$finance_b=$_POST['finance(b)'];
$finance_c=$_POST['finance(c)'];
$finance_total=$_POST['finance_total'];
$turnover_a=$_POST['turnover(a)'];
$turnover_b=$_POST['turnover(b)'];
$turnover_total=$_POST['turnover_total'];
$land_a=$_POST['land(a)'];
$land_b=$_POST['land(b)'];
$power_a=$_POST['power(a)'];
$power_b=$_POST['power(b)'];
$power_total=$_POST['power_total'];
$water_a=$_POST['water(a)'];
$water_b=$_POST['water(b)'];
$water_c=$_POST['water(c)'];
$status=$_POST['status'];
$land=$_POST['land'];
$pcb=$_POST['pcb'];
$incentives=$_POST['incentives'];


$query="Update swa1 set p_name='$p_name',p_area='$p_area',p_town='$p_town',p_taluk='$p_taluk',p_district='$p_district',p_state='$p_state',p_pincode='$p_pin',p_phno='$p_phno',p_email='$p_email',l_town='$l_town',l_taluk='$l_taluk',l_district='$l_district',l_state='$l_state',l_pincode='$l_pin',item_name='$item',item_des='$item_desc',annu_cap='$item_capacity',unit_cap='$item_unit',co_product='$by_product',pr_year1='$year1',pr_year2='$year2',pr_year3='$year3',pr_year4='$year4',pr_year5='$year5',existing_a='$existing_a',proposed_a='$proposed_a',existing_b='$existing_b',proposed_b='$proposed_b',existing_c='$existing_c',proposed_c='$proposed_c',existing_d='$existing_d',proposed_d='$proposed_d',existing_e='$existing_e',proposed_e='$proposed_e',trail_date='$trail_date',commercial_date='$commercial_date',cost_a='$cost_a',cost_b='$cost_b',cost_c='$cost_c',cost_d='$cost_d',cost_total='$cost_total',finance_a='$finance_a',finance_b='$finance_b',finance_c='$finance_c',finance_total='$finance_total',turnover_a='$turnover_a',turnover_b='$turnover_b',turnover_total='$turnover_total',land_a='$land_a',land_b='$land_b',power_a='$power_a',power_b='$power_b',power_total='$power_total',water_a='$water_a',water_b='$water_b',water_c='$water_c',status='$status',land='$land',pcb='$pcb',incentive='$incentives' where p_aadhar=$aadhar";

mysqli_query($dbc,$query) or die("Query Error");
    echo "Profile Updated successfully....... Thank You!!!!!";
        edit_profile();
}
else{
        edit_profile();
            
}
?>
    </body>
</html>