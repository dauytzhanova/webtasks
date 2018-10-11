var a, b, c, d, e, f, g, h, i,result;

function setValues() {
	a=Number(document.getElementById("s11").value);	
	b=Number(document.getElementById("s12").value);
	c=Number(document.getElementById("s13").value);
	d=Number(document.getElementById("s21").value);
	e=Number(document.getElementById("s22").value);
	f=Number(document.getElementById("s23").value);
	g=Number(document.getElementById("s31").value);
	h=Number(document.getElementById("s32").value);
	i=Number(document.getElementById("s33").value);
	
	result=(a*((e*i)-(f*h)))-(b*((d*i)-(f*g)))+(c*((d*h)-(e*g)));
	document.getElementById("result").innerHTML = result;
}

document.getElementById("determinant").addEventListener("click",setValues);





