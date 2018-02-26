$(document).ready(function(){
	$("#mk").click(function(){
		if (!($("#mko").text()=="")) {
			var mkprice = $("#mkp").text();
			var totalPrice = $("#tp").text();
			totalPrice = Number(totalPrice);
			var mkquantity = $("#mkq").text();
			mkquantity = Number(mkquantity);
			mkquantity++;
			mkprice = Number(mkprice);
			totalPrice += 1100;
			$("#tp").text(totalPrice);
			mkprice += 1100;
			$("#mkp").text(mkprice);
			$("#mkq").text(mkquantity);
		}
		else{
			$("#order_table").append("<tr id='mkrow'><td id='mko'>Mutton Karhai</td><td id='mkq'>1</td><td><span id='mkp'>1100</span><span>/=</span></td><td><button class='btn btn-warning' id='mkc'>Cencel</button></td></tr>");
			var totalPrice = $("#tp").text();
			totalPrice = Number(totalPrice);
			totalPrice += 1100;
			$("#tp").text(totalPrice);
		}
		//cencel order
		$("#mkc").click(function(){
			var quantity, price, tprice;
			quantity = $("#mkq").text();
			quantity = Number(quantity);
			price    = $("#mkp").text();
			price    = Number(price);
			tprice   = $("#tp").text();
			tprice   = Number(tprice);
			if (quantity == 1) {
				$("#mkrow").remove();
				$("#tp").text("0");
			} else {
				
				price  = price - 1100;
				tprice = tprice - 1100;
				$("#mkp").text(price);
				$("#tp").text(tprice);
				quantity--;
				$("#mkq").text(quantity);
			}
			$(this).removeeventlistener();
		});	
	});
});