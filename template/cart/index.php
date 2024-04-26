<div id="product-grid">
<div class="txt-heading">Products</div>
<?php
session_start();
$con = mysqli_connect('localhost','root','admin','umkm');
if(isset($_GET['action'])){
$action = $_GET['action'];

switch ($action){
	case "add":
	  if(!empty($_POST["quantity"])) {
		$pid=$_GET["pid"];
		$result=mysqli_query($con,"SELECT i.id, p.nama_barang, i.isi, i.sku, i.harga, i.gambar FROM produk_item i left join produk p on i.id_produk = p.id where i.id='$pid'");
		while($productByCode=mysqli_fetch_array($result)){
			$itemArray = array('name'=>$productByCode["nama_barang"], 'sku'=>$productByCode["sku"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode["harga"], 'image'=>$productByCode["gambar"]);
			if(!empty($_SESSION["cart_item"])) {
			  if(array_key_exists($pid, $_SESSION["cart_item"]))
				  $_SESSION["cart_item"][$pid]['quantity'] += $_POST['quantity'];
			  else 
				  $_SESSION["cart_item"][$pid] = $itemArray;
			} else {
			  $_SESSION["cart_item"][$pid] = $itemArray;
			}
		}
	  }
	break;
	case "clear":
	  $_SESSION["cart_item"] = array();
	break;
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
 }
}

$product= mysqli_query($con,"SELECT i.id, p.nama_barang, i.isi, i.harga, i.gambar FROM produk_item i left join produk p on i.id_produk = p.id ORDER BY p.id ASC");
if (!empty($product)) {
	while ($row=mysqli_fetch_array($product)) {
	?>
		<div class="product-item">
		  <form method="post" action="index.php?action=add&pid=<?php echo $row["id"]; ?>">
			<div class="product-image"><img src="<?php echo $row["gambar"]; ?>"></div>
			<div class="product-tile-footer">
				<div class="product-title"><?php echo $row["nama_barang"].": ".$row["isi"]; ?></div>
				<div class="product-price"><?php echo "Rp".$row["harga"]; ?></div>
				<div class="cart-action"><input type="text" class="product-quantity" name="quantity" value="1" size="2" />
					<input type="submit" value="Add to Cart" class="btnAddAction" />
				</div>
			</div>
		  </form>
		</div>
	<?php
	}
} else {
	echo "No Records.";
}
?>
</div>

<!-- Cart ---->

<div id="shopping-cart">
<div class="txt-heading">Shopping Cart</div>
<a id="btnEmpty" href="index.php?action=clear">Empty Cart</a>
<br>
<?php
print_r($_SESSION);
if(isset($_SESSION["cart_item"])){
$total_quantity = 0;
$total_price = 0;
?>
<table class="tbl-cart" cellpadding="10" cellspacing="1">
<tbody>
<tr>
<th style="text-align:left;">ID</th>
<th style="text-align:left;">Name</th>
<th style="text-align:left;">SKU</th>
<th style="text-align:right;" width="5%">Quantity</th>
<th style="text-align:right;" width="10%">Unit Price</th>
<th style="text-align:right;" width="10%">Price</th>
<th style="text-align:center;" width="5%">Remove</th>
</tr>
<?php
foreach ($_SESSION["cart_item"] as $id => $item){
$item_price = $item["quantity"] * $item["price"];
?>
<tr>
<td><?= $id ?></td>
<td><img src="<?php echo $item["image"]; ?>" class="cart-item-image" /><?php echo $item["name"]; ?></td>
<td><?php echo $item["sku"]; ?></td>
<td style="text-align:right;"><?php echo $item["quantity"]; ?></td>
<td style="text-align:right;"><?php echo "$ ".$item["price"]; ?></td>
<td style="text-align:right;"><?php echo "$ ". number_format($item_price,2); ?></td>
<td style="text-align:center;"><a href="index.php?action=remove&id=<?php echo $id; ?>">Remove Item</a></td>
</tr>
<?php
$total_quantity += $item["quantity"];
$total_price += ($item["price"]*$item["quantity"]);
}
?>
<tr>
<td colspan="2" align="right">Total:</td>
<td align="right"><?php echo $total_quantity; ?></td>
<td align="right" colspan="2"><strong><?php echo "$ ".number_format($total_price, 2); ?></strong></td>
<td></td>
</tr>
</tbody>
</table>
<?php
} else {
?>
<div class="no-records">Your Cart is Empty</div>
<?php
}
?>
</div>


