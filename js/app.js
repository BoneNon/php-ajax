icode=[]
iname=[]
iqtyp=[]
iprice=[]


function save(){

	 window.location.href = "test1.php";
}

function addItem(){

	var pcode2 = document.getElementById("pcode").value
	var pname2 = document.getElementById("pname").value
	var l = iname.indexOf(pname2)

		
	if (iname.indexOf(pname2) >=0) {
		console.log("index:",l);
		console.log("code:",pcode2);
		console.log("name:",pname2);
		console.log("qty:",iqtyp[l]);
		qtyElement()
	}else {
		console.log("NO");
		icode.push(document.getElementById('pcode').value)
		iname.push(document.getElementById('pname').value)
		iqtyp.push(parseInt(document.getElementById('pqty').value))
		iprice.push(parseInt(document.getElementById('price').value))


		displayCart()
	}
	


	

}

function displayCart(){

	cartdata='<ul class="list-group mb-3">';

	total=0

	for (i=0; i<iname.length; i++) {
		total+=iqtyp[i]*iprice[i]
		cartdata+='<li class="list-group-item d-flex justify-content-between lh-condensed"><div><h6 class="my-0">'+iname[i]+'</h6><small class="text-muted">'+iqtyp[i]+'x'+iprice[i]+'฿</small></div><div><h6 class="text-muted ">฿'+iqtyp[i]*iprice[i]+"</h6><button class='btn btn-outline-danger btn-sm' onclick='delElement("+i+")'><svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-trash' fill='currentColor' xmlns='http://www.w3.org/2000/svg'><path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z'/><path fill-rule='evenodd' d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z'/></svg></button></div></li>"
	}

	cartdata+='<li class="list-group-item d-flex justify-content-between"><span>Total (THB)</span><strong>฿'+total+'</strong></li></ul>'



	document.getElementById('cart').innerHTML=cartdata
	document.getElementById('length').innerHTML= iname.length
	console.log(icode);
	console.log(iname);
	console.log(iqtyp);
	
}

function delElement(a){
	icode.splice(a,1);
	iname.splice(a,1);
	iqtyp.splice(a,1);
	iprice.splice(a,1);
	displayCart()
}

function qtyElement(l){

	var pname2 = document.getElementById("pname").value
	var pqty2 = document.getElementById("pqty").value
	var l = iname.indexOf(pname2)

	for (i=iqtyp[l]; i<=iqtyp[l]; i++){
		console.log("index3:",i);

	}
	console.log("------");
	console.log("i:",i);
	console.log("name2:",pname2);
	console.log("qty2:",iqtyp[l]);
	console.log("index2:",l);
	iqtyp.splice(l,1,i);
	
	displayCart()
}