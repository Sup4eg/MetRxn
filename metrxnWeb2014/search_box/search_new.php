<?php
include("pathToGlobalVariables.php");
include($pathToGlobalVariables);
$connPath = relativePath(getcwd(),$conn_php);
include($connPath);
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript" src="jquery-1.5.js"></script>
<script type="text/javascript">
function getsearchValues(form)
{
	//alert(form.searchString.value);
	var1 = form.searchString.value;
	for (var i = 0; i < form.RXN_MET.length; i++) {
        if (form.RXN_MET[i].checked) {
			var2 = form.RXN_MET[i].value;
			
			if (var1 !="") {
			
				$.post("getData.php",{livesearch: var1,type: var2},
							function(data)
							{
								$("#suggestions").html(data);
								doCSS();
							}
					  );
		
	} else {
		removeSuggestions();
	}
            break;

        }
    }
	
	
}
function doCSS() {
	// parent.document.getElementById("intro").style.display = 'none';
	parent.document.getElementById("search_dismiss_1").style.display = 'none';
	parent.document.getElementById("search_dismiss_2").style.display = 'none';
	parent.document.getElementById("search_height").style.height = '2000px';
	parent.document.getElementById("iframeBox").style.height = '2000px';
	$("#suggestions").css({'border': 'solid','border-width': '1px','margin-top': '0px','border-top-color': 'white'});
}

function undoCSS() {
	parent.document.getElementById("search_dismiss_1").style.display = '';
	parent.document.getElementById("search_dismiss_2").style.display = '';
	parent.document.getElementById("search_height").style.height = '150px';
	parent.document.getElementById("iframeBox").style.height = '150px';
	$("#suggestions").css({'border': 'none'});
}

function removeSuggestions() {
	$("#suggestions").html("");
	undoCSS();
}

function addText(value) {
	$("#livesearch").val(value);
}
</script>
<title>SearchBox</title>
<link rel="stylesheet"  href="http://metRxn.engr.psu.edu/inc/css/sidebars.css"   type="text/css" />
<link href="<?php echo relativePath(getcwd(),$metRxnContents_css); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo relativePath(getcwd(),$anchors_css); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo relativePath(getcwd(),$headings_css); ?>" rel="stylesheet" type="text/css" />
<style type="text/css">
a:link {
	color: #3032a1;
}
#content_holder {
	width: 560px;
}

input#livesearch {
	width: 100%;
	
}
table {
	width: 100%;
	
}
#suggestions {
	text-align:left;
	padding-left: 3px;	
	visibility:visible;
	overflow:auto;
	z-index:40;
	
	
}

#link:hover {
	background-color: graytext;
	cursor: default;	
		
}
#suggestions:focus{
	background-color: graytext;
	cursor: default;	
}
</style>
</head>

<body>
<div align="center">
<div id="content_holder">
<form action="../searchResults/results_new.php" method="get" target="_parent" >
<br/><br/>
<table>
<tr><td>
<input type="text" name="searchString" AUTOCOMPLETE=OFF id="livesearch" onKeyUp="getsearchValues(this.form);" onBlur="setTimeout('removeSuggestions()','200')"/>
<div id="suggestions"></div>
</td><td>
<input type="submit" name="submit" />
</td></tr>
<tr><td>
<input type="radio" name="RXN_MET" value="metabolites" CHECKED/> Metabolites 
<input type="radio" name="RXN_MET" value="reactions" /> Reactions 
<input type="radio" name="RXN_MET" value="ec" /> EC 
</td></tr>
</table>
<br/><br/>
<!--<a href="/MetRxn/AdvancedSearch/advancedSearch.php" target="_parent">Advanced Search</a> |-->
<!-- a href="../Documentation.html">About MetRxn</a> -->

</form>
</div>
</body>
</html>