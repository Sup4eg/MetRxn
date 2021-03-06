
















<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<!-- InstanceBegin template="/Templates/new_template_no_menus.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   <meta name="description" content="Reaction/Metabolite Standardization and Congruency Across Databases and Genome-Scale Metabolic Models"/>
   <meta name="author" content="PSU Web Team" />
   <meta name="keywords" content="chemical compounds, chemical compound, compound, ontology, biology, UniProt, ascii name, names, nomenclature, chemical, formula, IUPAC, IUPAC name, synonyms, chemical ontology, periodic table"/>
   <meta http-equiv="Content-Language" content="en" />
   <meta http-equiv="Window-target" content="_top" />
   <meta name="no-email-collection" content="http://www.unspam.com/noemailcollection/" />
   <meta name="generator" content="Dreamweaver 8" />
   <meta name="language" content="en"/>
   <meta name="revisit-after" content="14 days"/>
<!-- InstanceBeginEditable name="doctitle" -->
   <title>










    (MetRxn Home)
</title>
<!-- InstanceEndEditable -->
<script  src="http://www.ebi.ac.uk/inc/js/contents.js" type="text/javascript"></script>
   <link rel="SHORTCUT ICON" href="/chebi/images/chebi.ico" />
<!-- InstanceBeginEditable name="head" -->
<!--  start meta tags, css , javascript here   -->
   <link rel="stylesheet"  href="http://metRxn.engr.psu.edu/inc/css/sidebars.css"   type="text/css" />
   <link rel="search" href="/MetRxn/plugins/openSearch/openSearch.xml" type="application/opensearchdescription+xml" title="MetRxn" />

	<script type="text/javascript" src="/MetRxn/javascripts/MetRxn.js" ></script>
   <link rel="alternate"  type="application/rss+xml" title="MetRxn RSS feed" href="http://sourceforge.net/export/rss2_projnews.php?group_id=125463&amp;rss_fulltext=1"/>
<link href="metRxnContents.css" rel="stylesheet" type="text/css" />
<link href="anchors.css" rel="stylesheet" type="text/css" />
<link href="headings.css" rel="stylesheet" type="text/css" />
<?php
				function entnummetgrpsrc()
                {
					$con = mysql_connect("localhost","MetRxn","MetRxn");
                if (!$con)
                {
                die('Could not connect: ' . mysql_error());
                }
                
                mysql_select_db("my_db", $con);
                
                $result = mysql_query("SELECT cnt,sourceName FROM `statistical`.`entnummetgrpsrc`");
                
                echo "<table border='1'>
                <tr>
                <th>Count</th>
                <th>sourceName</th>
                </tr>";
                
                while($row = mysql_fetch_array($result))
                {
                echo "<tr>";
                echo "<td>" . $row['cnt'] . "</td>";
                echo "<td>" . $row['sourceName'] . "</td>";
                echo "</tr>";
                }
                echo "</table>";
                
                mysql_close($con);
				}
				
                ?>
</head>
<body onLoad="if(navigator.userAgent.indexOf('MSIE') != -1) {document.getElementById('head').allowTransparency = true;}">
	<div class="headerdiv" id="headerdiv" style="position:absolute; z-index: 1;">
    <img name="psu_logo" src="assets/psu logo.gif" width="106" height="57" alt="" />
		<!--iframe src="/inc/head.html" name="head" id="head" frameborder="0" marginwidth="0px" marginheight="0px" scrolling="no"  width="100%" style="position:absolute; color:#C60 z-index: 1; height: 57px;"-->
        <!--add the penn state logo here int hsi*/-->
        <!--/iframe-->
        
</div>
	<div class="contents" id="contents">
			<table class="contentspane" id="contentspane" summary="The main content pane of the page" style="width: 100%">
				<tr>
				  <td class="leftmargin"></td>










<td class="leftmenucell" id="leftmenucell">
<div class="leftmenu" id="leftmenu" style="width: 145px; visibility: visible; display: block;">


<div style="padding: 2px"></div>





<script type="text/javascript">
<!--

// -->
</script>













<ul id="sidemenuid" class="sidemenu">
<li  class="clickmeopen" style="color:#000000;">
<a href="MetRxn2.html" title="MetRxn Home" onMouseOver="(window.status='MetRxn Home'); return true;" onMouseOut="(window.status='');">MetRxn Home</a></li>
<li style="color:#000000;">
<a href="advancedSearch.html" title="Advanced search of chemical compounds" onMouseOver="(window.status='Advanced search of chemical compounds'); return true;" onMouseOut="(window.status='');">
         Advanced Search
      </a></li>
<li ><a href="#"></a>Browse
   <ul class="menusub">
   <li><a href="reactions.html" title="Browse the reaction equations within the MetRxn database" onMouseOver="(window.status='Browse the reaction equations within the MetRxn database'); return true;" onMouseOut="(window.status='');">
         Reactions
      </a></li>
   <li><a href="metabolites.html" title="Shows the metabolite listing within this database" onMouseOver="(window.status='Shows the metabolite listing within this database'); return true;" onMouseOut="(window.status='');" target="_blank" >
             Metabolites
    </a></li>

   </ul></li>
<li ><a href="https://metRxn.engr.psu.edu/MetRxn/submissions/" title="Submit new entries to MetRxn via our submission tool." onMouseOver="(window.status='Submit new entries to MetRxn via our submission tool.'); return true;" onMouseOut="(window.status='');" target="_blank">
         Submissions
      </a></li>
<li ><a href="downloadsForward.do" title="Download MetRxn in its entirety via FTP" onMouseOver="(window.status='Download MetRxn in its entirety via FTP'); return true;" onMouseOut="(window.status='');">
         Downloads
      </a></li>
<li ><a href="LoginForward.do" title="Login for maker and Checker" onMouseOver="(window.status='Login for maker and Checker'); return true;" onMouseOut="(window.status='');">
         Login
      </a></li>
      <li ><a href="#"></a>Tools</li>
      <li ><a href="Statistics.php"   title="MetRxn statistics" onMouseOver="(window.status='MetRxn statistics'); return true;" onMouseOut="(window.status='');">
               Statistics</a></li>
<li ><a href="#"></a>Documentation
   <ul class="menusub">
		<li ><a href="aboutMetRxnForward.do" title="Know more about the MetRxn" onMouseOver="(window.status='Know more about the MetRxn'); return true;" onMouseOut="(window.status='');">
				About MetRxn
	    	</a></li>
      <li ><a href="tutorialForward.do" title="Tutorial" onMouseOver="(window.status='Tutorial'); return true;" onMouseOut="(window.status='');">
               Tutorial
            </a></li>
		<li ><a href="faqForward.do" title="Frequently Asked Questions" onMouseOver="(window.status='Frequently Asked Questions'); return true;" onMouseOut="(window.status='');">
               FAQ's
            </a></li>
      <li ><a href="userManualForward.do" title="User manual" onMouseOver="(window.status='User manual'); return true;" onMouseOut="(window.status='');">
               User Manual
            </a></li>
            <li ><a href="entityMonthForward.do" title="Recently resolved entity" onMouseOver="(window.status='Recently resolved entity'); return true;" onMouseOut="(window.status='');">
               Recently resolved entity
            </a></li>
     
      <li><a href="http://metrxn.engr.psu.edu/forum" title="Join the discussion groups at the SourceForge site" onMouseOver="(window.status='Join the discussion groups at the SourceForge site'); return true;" onMouseOut="(window.status='');">Forum</a></li>
   </ul>
</li>
<li ><a href="#"></a>Developer Resources
   <ul class="menusub"><li ><a href="developerManualForward.do"  title="Developer Manual" onMouseOver="(window.status='Developer Manual'); return true;" onMouseOut="(window.status='');">
         Developer Manual
      </a></li>
      <li ><a href="webServices.do"  title="Web Services" onMouseOver="(window.status='Web Services'); return true;" onMouseOut="(window.status='');">
         Web Services
      </a></li>
   </ul></li>
<li ><a href="userSettingsForward.do" class="flag_en" title="Alter your language settings" onMouseOver="(window.status='Alter your language settings'); return true;" onMouseOut="(window.status='');">Preferences</a></li>

<li ><a href="emailMetRxnForward.do" title="Contact the MetRxn team" onMouseOver="(window.status='Contact the MetRxn team'); return true;" onMouseOut="(window.status='');">
         Contact MetRxn
      </a></li>
       <li class="leftmenudivider"></li>

<script type="text/javascript" src="http://metRxn.engr.psu.edu/inc/js/sidebars.js"></script>

<a href="de/init.do"></a><a href="es/init.do"></a><a href="en/init.do"></a><a href="fr/init.do"></a><a href="ru/init.do"></a>
       <li><a id="printerUrl" href="/MetRxn/init.do?printerFriendlyView=true&"

				  title="Go to the printer friendly view of this page">Printer Friendly View</a></li>
       <li class="leftmenudivider"></li>


   </ul>
<a href="/MetRxn/sitemap.xml" style="font-size:0px;">&nbsp;</a> <br />









<div class="iconboxheading" >
   User Manual
  
   <img src="http://metRxn.engr.psu.edu/inc/images/icon_help.gif" height="16" width="16" border="0" onclick="javascript:windowOpenWithSize('/MetRxn/userManualForward.do#rssFeed', 600, 500)">
</div>

<br />
<br/>
<br/>
<br/>


	
</div>

</td>





<td class="contentsarea" id="contentsarea">
   <div class="breadcrumbs"><a href="http://metRxn.engr.psu.edu/" class="firstbreadcrumb">psu</a><a href ="http://metRxn.engr.psu.edu/Databases/">engr</a><a href ="http://metRxn.engr.psu.edu/Databases/smallmolecules.html">MetRxn</a><a href="init.do">Metabolites</a><a href="#">Home</a></div>









<!-- HEADER TITLES-->





    	<h1>
      		Database statitics
      	</h1>












<!--
   - Allows to forward to the main page of the webapps.
   -
   - @author Akhil Kumar
-->
			<div class="tocTotalLong2">
<!--ul class="tocTotalLong2">
<a onclick=<?php entnummetgrpsrc(); ?> title="Advanced search of chemical compounds" onMouseOver="(window.status='Advanced search of chemical compounds'); return true;" onMouseOut="(window.status='');">
         Sourcewise number of metabolite entity listing
      </a></li>
</ul-->

            
            <h2>Entity listing </h2>
            <ul>
            <li onclick="<?php
				entnummetgrpsrc();
                ?>">Sourcewise, number of metabolite entity listing</li>
            </ul>
            
                <?php 
				entnummetgrpsrc();
                ?> 
			<!--div class="tocHeaderLong2" id="entityMonthTocHeader">
			   Recently resolved reaction entity
			</div-->
			<!--div class="tocContentLong2 iconboxcontents" id="entityMonthTocContent">
				<a href="/MetRxn/entityMonthForward.do">
					<font class="emblBlue">'NADPH + 2 Aquacob(III)alamin <=> NADP+ + 2 Cob(II)alamin + 2 H2O + H+'</font>
				</a>
				<a href="/MetRxn/entityMonthForward.do">
					<img src="assets/Reaction1.png"/>
				</a>
    <p class="eomSummary">
			The text will display the curation steps involved in identifying the structural information for the reaction data		
	      </p>
				<a href="/MetRxn/entityMonthForward.do">
					Read more ...
				</a>
			</div-->
			</div>

			<br/><br/>

			<center>
				<form action="/MetRxn/advancedSearchFT.do" method="get" name="searchFreeText">

					<br/><br/><br/>
   					<input type="text" name="searchString" size=50 maxlength="100" title="Enter your search keywords here eg. oxygen.">
					<input type="submit" alt="Search Button" title="Search MetRxn for reactions" value="Search MetRxn for reactions">

					<a href="javascript:windowOpenWithSize('/MetRxn/userManualForward.do?printerFriendlyView=true#quickSearch', 600, 500)" title="Go the MetRxn help pages to learn more about 'Quick Search'."><img src="http://metRxn.engr.psu.edu/inc/images/icon_help.gif" height="16" width="16" border="0" onclick="javascript:windowOpenWithSize('/MetRxn/userManualForward.do?printerFriendlyView=true#quickSearch', 600, 500)">
<!--
						Help
--></a>

					<br/><b>Search for <img src="images/goldenstar.gif"/><img src="images/goldenstar.gif"/><img src="images/goldenstar.gif"/> only</b>

					<input type="checkbox" name="queryBean.stars" value="3" checked="checked">
					<input type="hidden" name="queryBean.stars" value="-1">

					<br/><br/>Wildcard character is <em>*</em>
					<br/>Example: "<a href="advancedSearchFT.do?searchString=iron*">phosporus*</a>", "<a href="advancedSearchFT.do?searchString='InChI=1/H2O/h1H2'">InChI=1/H2O/h1H2</a>"

                    <br/><br/>

					<a href="/MetRxn/advancedSearchForward.do">Advanced Search</a> |
					<a href="/MetRxn/aboutMetRxnForward.do">About MetRxn</a>

					<br/>
					<br/> (MetRxn) is a dictionary of molecular entities focused on aggregating and curating metabolomic data .

			  </form>
			</center>






</td>
					<td class="rightmenucell" id="rightmenucell">
					  <div class="rightmenu" id="rightmenu"><img src="http://metRxn.engr.psu.edu/inc/images/spacer.gif" class="spacer" alt="spacer" /></div>
				  	</td>
				</tr>
				</table>




<table class="footerpane" id="footerpane" summary="The main footer pane of the page">
				<tr>
				  <td colspan ="4" class="footerrow">
					<div class="footerdiv" id="footerdiv"  style="z-index:2;">
						<iframe src="/inc/foot.html" name="foot" frameborder="0" marginwidth="0px" marginheight="0px" scrolling="no"  height="22px" width="100%"  style="z-index:2;"></iframe>
					</div>
				  </td>
				</tr>
	  </table>
	   <script  src="http://metRxn.engr.psu.edu/inc/js/footer.js" type="text/javascript"></script>
	</div>
</body>
<!-- InstanceEnd -->
</html>

