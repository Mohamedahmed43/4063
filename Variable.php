 <style type="text/css">
 	table{
      background:#CCC;
      margin-left: 30;
    border-top: 2px solid #444;
    border-left: 2px solid #444;
    border-collapse: collapse;
    width: 50%;  
    margin-left: 25%;

      
 	}
 	P{
    text-align: center;
    color: black;
    font-weight: bold;
    font-family:  Arial;
    TEXT text-underline-position: ASSINGMENT;
  }
 	td{
 		border-bottom: 2px solid #444;
 		border-right: 2px solid #444;
 		padding: 20px;

 	} 
 	.t{
 
 font-weight: bold;
  font-family: Arial;
 	}
td:hover {
  background: #fff;
}
.ty{
  text-align: right;
   text-align: right;
    text-align: right;
     text-align: right;
      text-align: right;
      background: yellowgreen;
}
 		.m{
      background: yellowgreen;
    }
 </style>
 	

<p> ASSIGNMENT 1</p>
<?php
$item_ID="4063";
$item_Name= "ships";
$qty="30";
$price="111";
$total=$qty*$price;
$discount="10";
$cash="320";

?>
<table border="1">
	<tr><td class="t">Item_ID</td><td class="ty"><?php echo "$item_ID";?></td></tr>
	<tr><td class="t">Item_Name</td><td class="m"><?php echo "$item_Name";?></td></tr>
	<tr><td class="t">Quantity</td><td class="ty"><?php echo "$qty";?></td></tr>
	<tr><td class="t">Price</td><td class="ty"><?php echo "$price";?></td></tr>
	<tr><td class="t">total</td><td class="ty"><?php echo "$total";?></td></tr>
	<tr><td class="t">Discount</td><td class="ty"><?php echo "$discount";?></td></tr>
	<tr><td class="t">Amount</td><td class="ty"><?php echo "$cash";?></td></tr>
  <tr><td class="t">Balance</td><td class="ty"><?php echo $total-$discount-$cash;?></td></tr>

</table>