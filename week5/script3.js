function insert() {
	if(document.getElementById("name").value==""){
			document.getElementById("name").style.border = "1px solid red";

	}else if(document.getElementById("surname").value==""){
			document.getElementById("surname").style.border = "1px solid red";	
		
	}else if(document.getElementById("faculty").value=="-1"){
			document.getElementById("faculty").style.border="1px solid red";
		}
	else{
		var tableRef = document.getElementById('students');
		var newRow   = tableRef.insertRow();

	  	var newCell1  = newRow.insertCell();
		var newCell2  = newRow.insertCell();
		var newCell3  = newRow.insertCell();
		var newText1  = document.createTextNode(document.getElementById("name").value);
		var newText2  = document.createTextNode(document.getElementById("surname").value);
		var newText3  = document.createTextNode(document.getElementById("faculty").value);
				
		newCell1.appendChild(newText1);
		newCell2.appendChild(newText2);
		newCell3.appendChild(newText3);
	}	

}

document.getElementById("addStudent").addEventListener("click",insert);