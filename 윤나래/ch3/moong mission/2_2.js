for(i=0;i<25;i++){
	if(i%5==0){
		document.write("<br>");
	}

	if(i < 9)
	{
		document.write("&nbsp;");
	}

	document.write(i+1 + "&nbsp;");
}