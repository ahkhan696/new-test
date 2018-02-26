$(document).ready(function(){	
	$("#bk").click(function(){
		if (!($("#bko").text()=="")) {
			var bkprice = $("#bkp").text();
			var bkquantity = $("#bkq").text();
			var totalPrice = $("#tp").text();
			totalPrice = Number(totalPrice);
			bkquantity = Number(bkquantity);
			bkquantity++;
			bkprice = Number(bkprice);
			totalPrice += 900;
			$("#tp").text(totalPrice);
			bkprice += 900;
			$("#bkp").text(bkprice);
			$("#bkq").text(bkquantity);
		}
		else{
			$("#order_table").append("<tr id='bkrow'><td id='bko'>Beaf Karhai</td><td id='bkq'>1</td><td><span id='bkp'>900</span><span>/=</span></td><td><button class='btn btn-warning' id='bkc'>Cencel</button></td></tr>");
			var totalPrice = $("#tp").text();
			totalPrice = Number(totalPrice);
			totalPrice += 900;
			$("#tp").text(totalPrice);
		}
			//cencel order
			$("#bkc").click(function(){
				var quantity, price, tprice;
				quantity = $("#bkq").text();
				quantity = Number(quantity);
				price  = $("#bkp").text();
				price  = Number(price);
				tprice = $("#tp").text();
				tprice = Number(tprice);
				if (quantity == 1) {
					$("#bkrow").remove();
					$("#tp").text("0");
				} else {
					
					price  = price - 900;
					tprice = tprice - 900;
					$("#bkp").text(price);
					$("#tp").text(tprice);
					quantity--;
					$("#bkq").text(quantity);
				}
				$(this).removeeventlistener();
			});	
	});
});