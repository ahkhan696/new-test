$(document).ready(function(){
	$("#ck").click(function(){
		if (!($("#cko").text()=="")) {
			var ckprice = $("#ckp").text();
			var ckquantity = $("#ckq").text();
			var totalPrice = $("#tp").text();
			totalPrice = Number(totalPrice);
			ckquantity = Number(ckquantity);
			ckquantity++;
			ckprice = Number(ckprice);
			totalPrice += 700;
			$("#tp").text(totalPrice);
			ckprice += 700;
			$("#ckp").text(ckprice);
			$("#ckq").text(ckquantity);
		}
		else{
			$("#order_table").append("<tr id='ckrow'><td id='cko'>Chicken Karhai</td><td id='ckq'>1</td><td><span id='ckp'>700</span><span>/=</span></td><td><button class='btn btn-warning' id='ckcencel'>Cencel</button></td></tr>");
			var totalPrice = $("#tp").text();
			totalPrice = Number(totalPrice);
			totalPrice += 700;
			$("#tp").text(totalPrice);
		}
		//cencel order
		$("#ckcencel").click(function(){
			var quantity, price, tprice;
			quantity = $("#ckq").text();
			quantity = Number(quantity);
			price  = $("#ckp").text();
			price  = Number(price);
			tprice = $("#tp").text();
			tprice = Number(tprice);
			if (quantity == 1) {
				$("#ckrow").remove();
				$("#tp").text("0");
			} else {
				
				price  = price - 700;
				tprice = tprice - 700;
				$("#ckp").text(price);
				$("#tp").text(tprice);
				quantity--;
				$("#ckq").text(quantity);
			}
			$(this).removeeventlistener();
		});	
	});
		
});