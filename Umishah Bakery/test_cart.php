<?php
session_start();
require_once("config.php");


if(!empty($_GET["action"])) {
switch($_GET["action"]) {
	//code for adding product in cart
	case "add":
	
			$name=$_POST['name'];
			$quantity=$_POST['quantity'];
			$flav=$_POST['flav'];
			$size=$_POST['size'];
			

			echo "Product Name: " . $name=$_POST['name']."<br>";
            echo "Quantity: ".$quantity=$_POST['quantity']."<br>";
            echo "Flavour: ".$flav=$_POST['flav']."<br>";
			echo "Size: ".$size=$_POST['size']."<br>";
}
}
/*//code for Cart
if(!empty($_GET["action"])) {
switch($_GET["action"]) {
	//code for adding product in cart
	case "add":
	
		if(!empty($_POST["name"])) {
			$pid=$_GET["pid"];
			$result=mysqli_query($con,"SELECT * FROM tblproduct WHERE id='$pid'");
	          while($productById=mysqli_fetch_array($result)){
			$itemArray = array($productById["id"]=>array('id'=>$productById["id"],'name'=>$productById["name"] ,'quantity'=>$_POST["quantity"],'flav'=>$_POST["flav"],'size'=>$_POST["size"]));
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productById["id"],array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productById["id"] == $k) {
								if(empty($_SESSION["cart_item"][$k]["quantity"])) {
									$_SESSION["cart_item"][$k]["quantity"] = 0;
								}
								$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
							}
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			}  else {
				$_SESSION["cart_item"] = $itemArray;
			}
		}
	}
	break;

	// code for removing product from cart
	case "remove":
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
					if($_GET["id"] == $k)
						unset($_SESSION["cart_item"][$k]);				
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
			}
		}
	break;
	// code for if cart is empty
	case "empty":
		unset($_SESSION["cart_item"]);
	break;	
}
}
*/


?>



<HTML>
<HEAD>
<TITLE>Simple PHP Shopping Cart</TITLE>
<link href="style.css" type="text/css" rel="stylesheet" />
</HEAD>
<BODY>


<!-- Cart ---->
<div id="shopping-cart">
<div class="txt-heading">Shopping Cart</div>

<a id="btnEmpty" href="cart_interface_5-7.php?action=empty">Empty Cart</a><br><br><br>
<a id="btnCheckOut" href="Order Confirmatoin.php">Check Out</a>
<?php
if(isset($_SESSION["cart_item"])){
    $total_quantity = 0;
    $total_price = 0;
?>	
<center><table class="tbl-cart" cellpadding="10" cellspacing="1" style="width:50%; align:center; border-collapse: collapse;" >
<tbody>
<tr>
<th style="text-align:left;" width="5%">Name</th>

<th style="text-align:center;" width="5%">Flavour</th>
<th style="text-align:center;" width="5%">Size</th>
<th style="text-align:center;" width="3%">Quantity</th>


</tr>


				<tr>
				<td style="text-align:center; border: 2px solid black;" width="5%">><?php echo $name["name"]; ?></td>
				
				<td style="text-align:center; border: 2px solid black;"><?php echo $flav["flav"]; ?></td>
				<td style="text-align:center; border: 2px solid black;"><?php echo $size["size"]; ?></td>
				<td style="text-align:center; border: 2px solid black;"><?php echo $quantity["quantity"]; ?></td>
		
				</tr>

	
<tr> <td> </td> <td> </td> 
<td align="center"> Total:</td>

<td align="center"><?php echo $total_quantity; ?></td>


</tr>
<tr>
<td></td><td></td><td></td>
<td><center>

          
</center>
</td>
</tr>
</tbody>
</table></center>	


      
 
		
  <?php
} else {
?>
<div class="no-records">Your Cart is Empty</div>
<?php 
}
?>
</div>




<div id="product-grid">
	<div class="txt-heading">Products</div>

		<div class="product-item">
			<form name="cart" id="cart" method="post" action="test_cart.php?action=add"><br>
			<div class="product-image" id="image"><center><img <img style="width:150px; height:150px; align:center;" src="Cupcake3.jpg" alt="" /></center></div>
			<div class="product-tile-footer">

			<div class="cart-action" style="float:left;">Quantity:<input type="text" class="product-quantity" name="quantity" value="1" size="2" />

	 <br><br><div class="cart-action">
	 
	  <div class="product-title"><input type="hidden" id="name" name="name" value="Cupcake">Cupcake</div>
	  
      <select name="flav" id="flav">
      <option name="flav" value="Vanilla">Vanilla
      <option name="flav" value="Orange">Orange

      <option name="flav" value="Strawberry">Strawberry
      <option name="flav" value="Pandan">Pandan
      <option name="flav" value="Chocolate">Chocolate
	  <option name="flav" value="Coffee">Coffee 
      </select></div>
	 <p>

      <select name="size" id="size">
      <option>Please choose size
      <option name="size" value="6 inch">6 inch
      <option name="size" value="7 inch">7 inch
			<option name="size" value="8 inch">8 inch
      </select></p>	
				<br><br>
				
				
				<input type="submit" value="Add to Cart" class="btnAddAction" /></div>
			</div>
			</form>
		</div>			


</div>



</BODY>
</HTML>


