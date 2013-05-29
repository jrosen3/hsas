//hides tables initially
function hideTables()
{
	document.getElementById('table1').style.visibility = "hidden";
	document.getElementById('table2').style.visibility = "hidden";
	document.getElementById('table3').style.visibility = "hidden";
	document.getElementById('table4').style.visibility = "hidden";
	document.getElementById('table5').style.visibility = "hidden";
	document.getElementById('table6').style.visibility = "hidden";
}

//limits text boxes
function limitText(limitField, limitCount, limitNum) 
{
	if (limitField.value.length > limitNum) 
	{
		limitField.value = limitField.value.substring(0, limitNum);
	} 
	else 
	{
		limitCount.value = limitNum - limitField.value.length;
	}
}

//Hides previous table and shows next table
function NextSection(tableId,nextTable,index)
{ 
	if (index==0)
	{
		tableMagic(tableId,nextTable);
	}
	
	if (index==1)
	{
		if (check1())
		{
			tableMagic(tableId,nextTable);
		}
	}
	if (index==2)
	{
		if (check2())
		{
			tableMagic(tableId,nextTable);
		}
	}
	if (index==3)
	{
		if (check3())
		{
			tableMagic(tableId,nextTable);
		}
	}
	
	if (index==4)
	{
		if (check4())
		{
			tableMagic(tableId,nextTable);
		}
	}
	if (index==5)
	{
		if (check5())
		{
			tableMagic(tableId,nextTable);
		}
	}
}

function LastSection(tableId,lastTable)
{
	var t = document.getElementById(tableId);
	var l = document.getElementById(lastTable);
	t.style.visibility = 'hidden';
	var hide= false;
	var len = l.rows.length;
	var rowStyle = (hide)? "none":"";
	for(i=1 ; i< len; i++)
	{
		 l.rows[i].style.display = rowStyle;
	}	
}

function tableMagic(tableId,nextTable)
{
	var t = document.getElementById(tableId);
	var n = document.getElementById(nextTable);
	n.style.visibility = 'visible';
	var hide= true;
	var len = t.rows.length;
	var rowStyle = (hide)? "none":"";
	for(i=1 ; i< len; i++)
	{
		 t.rows[i].style.display = rowStyle;
	}
}

function check1()
{
	var name = document.getElementById('name');
	var email = document.getElementById('email');
	var cell = document.getElementById('cell');
	var school = document.getElementById('school');
	var year = document.getElementById('year');	
	var personal = document.getElementById('personal');	
	if(notEmpty(name,"Please Enter Your Name")){
		if(notEmpty(email,"Please Enter Your Email")){
			if(isNumeric(cell,"Please Enter a Valid Cell Number with Just Digits")){
				if(madeSelection(school,"Please Choose School")){
					if(madeSelection(year,"Please Choose Class")){
						if(notEmpty(personal,"Please Enter Your Personal Statement")){
							return true;
						}
					}
				}
			}
		}
	}
	return false;
}

function check2()
{
	var title = document.getElementById('title');
	var len = document.getElementById('len');
	var width = document.getElementById('width');	
	var depth = document.getElementById('depth');
	var weight = document.getElementById('weight');
	var concept = document.getElementById('concept');
	var statement = document.getElementById('statement');
	var price = document.getElementById('price');	
	var pricing = document.getElementById('pricing');	
	if(notEmpty(title,"Please Enter Title")){
		if(isNumeric(len,"Please Enter Valid Length")){
			if(isNumeric(width,"Please Enter Valid Width")){
				if(isNumeric(depth,"Please Enter Valid Depth")){
					if(isNumeric(weight,"Please Enter Valid Weight")){
						if(notEmpty(concept,"Please Enter Concept")){
							if(notEmpty(statement,"Please Enter Statement")){
								if(madeSelection(price,"Please Choose Price")){
									if(notEmpty(pricing,"Please Explain Price")){
										return true;
									}
								}
							}
						}
					}
				}
			}
		}
	}
	return false;
}

function check3()
{
	var media_category = document.getElementById('media_category');
	var media_type = document.getElementById('media_type');
	var process = document.getElementById('process');	
	var materials = document.getElementById('materials');
	if(madeSelection(media_category,"Please Select Media Category")){
		if(madeSelection(media_type,"Please Select Specific Media")){
			if(notEmpty(process,"Please Describe Your Process")){
				if(notEmpty(materials,"Please Describe Your Materials Used")){
					return true;
				}
			}
		}
	}
	return false;
}

function check4()
{
	var file = document.getElementById('file');
	if(notEmpty(file,"Please Upload a File"))
	{
		return true;
	}
	return false;
}

function check5()
{
	var signature = document.getElementById('signature');
	if(notEmpty(signature,"Please Sign"))
	{
		return true;
	}
	return false;
}


function notEmpty(elem, helperMsg){
	if(elem.value.length == 0){
		alert(helperMsg);
		elem.focus();
		return false;
	}
	return true;
}

function madeSelection(elem, helperMsg){
	if(elem.value == "Please Choose"){
		alert(helperMsg);
		elem.focus();
		return false;
	}else{
		return true;
	}
}

function isNumeric(elem, helperMsg){
	var Exp = /^[0-9]+$/;
	if(elem.value.match(Exp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}