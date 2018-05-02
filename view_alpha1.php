<?php 
//Start the session to see if the user is authencticated user. 
session_start(); 
//Check if the session variable for user authentication is set, if not redirect to login page. 
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){ 
//include the menu 
//require('menu.php');


} 
else{ 
header('location:3.php'); 
exit(); 
}  ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" version="XHTML+RDFa 1.0" 
  xmlns:content="http://purl.org/rss/1.0/modules/content/"
  xmlns:dc="http://purl.org/dc/terms/"
  xmlns:foaf="http://xmlns.com/foaf/0.1/"
  xmlns:og="http://ogp.me/ns#"
  xmlns:rdfs="http://www.w3.org/2000/01/rdf-schema#"
  xmlns:sioc="http://rdfs.org/sioc/ns#"
  xmlns:sioct="http://rdfs.org/sioc/types#"
  xmlns:skos="http://www.w3.org/2004/02/skos/core#"
  xmlns:xsd="http://www.w3.org/2001/XMLSchema#">

<head profile="http://www.w3.org/1999/xhtml/vocab">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="themes/1/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="themes/1/js-image-slider.js" type="text/javascript"></script>
    <link href="generic.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="lg1.png" />
  <title>mygovpolicy</title>
  <link rel="shortcut icon" href="imq1.png" />
  <link type="text/css" rel="stylesheet" href="c2.css" media="all" />
<link type="text/css" rel="stylesheet" href="c3.css" media="all" />
<link type="text/css" rel="stylesheet" href="c4.css" media="all" />
<link type="text/css" rel="stylesheet" href="c5.css" media="all" />
<link type="text/css" rel="stylesheet" href="c1.css" media="all" />
<link type="text/css" rel="stylesheet" href="c6.css" media="all" />
  <script type="text/javascript" src="j1.js"></script>
<script type="text/javascript" src="j2.js"></script>
<script type="text/javascript" src="j3.js"></script>
<script type="text/javascript">
<!--//--><![CDATA[//><!--
(function(i,s,o,g,r,a,m){i["GoogleAnalyticsObject"]=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,"script","//www.google-analytics.com/analytics.js","ga");ga("create", "UA-870616-22", {"cookieDomain":"auto"});ga("set", "anonymizeIp", true);ga("send", "pageview");
//--><!]]>
</script>
<script type="text/javascript" src="j4.js"></script>
<script type="text/javascript">
<!--//--><![CDATA[//><!--
jQuery.extend(Drupal.settings, {"basePath":"\/","pathPrefix":"","ajaxPageState":{"theme":"scarlet","theme_token":"ak4kTMLAdKpOOsOwPTusHt021fcc6V34GAm8u6qVQi0","js":{"misc\/jquery.js":1,"misc\/jquery.once.js":1,"misc\/drupal.js":1,"misc\/ui\/jquery.ui.core.min.js":1,"misc\/ui\/jquery.ui.widget.min.js":1,"misc\/ui\/jquery.ui.button.min.js":1,"misc\/ui\/jquery.ui.mouse.min.js":1,"misc\/ui\/jquery.ui.draggable.min.js":1,"misc\/ui\/jquery.ui.position.min.js":1,"misc\/ui\/jquery.ui.resizable.min.js":1,"misc\/ui\/jquery.ui.dialog.min.js":1,"misc\/ajax.js":1,"sites\/all\/modules\/contrib\/linkit\/js\/linkit.js":1,"misc\/progress.js":1,"sites\/all\/modules\/contrib\/linkit\/editors\/ckeditor\/linkitDialog.js":1,"sites\/all\/modules\/contrib\/google_analytics\/googleanalytics.js":1,"0":1,"profiles\/ruprof\/themes\/scarlet\/js\/base.js":1,"profiles\/ruprof\/themes\/scarlet\/js\/respond.js":1},"css":{"modules\/system\/system.base.css":1,"modules\/system\/system.messages.css":1,"misc\/ui\/jquery.ui.core.css":1,"misc\/ui\/jquery.ui.theme.css":1,"misc\/ui\/jquery.ui.button.css":1,"misc\/ui\/jquery.ui.resizable.css":1,"misc\/ui\/jquery.ui.dialog.css":1,"sites\/all\/modules\/contrib\/ckeditor\/css\/ckeditor.css":1,"sites\/all\/modules\/contrib\/node_embed\/plugins\/node_embed\/node_embed.css":1,"profiles\/ruprof\/themes\/scarlet\/css\/home.css":1,"profiles\/ruprof\/themes\/scarlet\/css\/content_types\/element.css":1,"profiles\/ruprof\/themes\/scarlet\/css\/base.css":1,"public:\/\/css_injector\/css_injector_1.css":1,"public:\/\/css_injector\/css_injector_2.css":1,"public:\/\/css_injector\/css_injector_4.css":1,"public:\/\/css_injector\/css_injector_6.css":1}},"linkit":{"autocompletePath":"http:\/\/policies.rutgers.edu\/linkit\/autocomplete\/___profile___?s=","dashboardPath":"\/linkit\/dashboard\/","currentInstance":{}},"googleanalytics":{"trackOutbound":1,"trackMailto":1,"trackDownload":1,"trackDownloadExtensions":"7z|aac|arc|arj|asf|asx|avi|bin|csv|doc(x|m)?|dot(x|m)?|exe|flv|gif|gz|gzip|hqx|jar|jpe?g|js|mp(2|3|4|e?g)|mov(ie)?|msi|msp|pdf|phps|png|ppt(x|m)?|pot(x|m)?|pps(x|m)?|ppam|sld(x|m)?|thmx|qtm?|ra(m|r)?|sea|sit|tar|tgz|torrent|txt|wav|wma|wmv|wpd|xls(x|m|b)?|xlt(x|m)|xlam|xml|z|zip"}});
//--><!]]>
</script>
</head>
<body class="html front not-logged-in one-sidebar sidebar-first page-node has-homequeue-top" >





  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable">Skip to main content</a>
  </div>
    
<div class="page">

  <div class="region-wrapper clearfix sliver"><div class="region-inner">
      <div class="region region-sliver">
    <div id="block-platform-sliver-menu" class="block block-platform">

    
  <div class="content">
   
<div class="sliver-menu">

  <span class="sliver-link rutgers"><a href="'"  target="_blank"></a></span>
  <span class="sliver-link nb"><a href=""  target="_blank"></a></span>
  <span class="sliver-link rbhs"><a href="" target="_blank"></a></span>

  <span class="sliver-link newark"><a href="" target="_blank"></a></span>
  <span class="sliver-link camden"><a href="" target="_blank"></a></span>
  <span class="sliver-link online"><a href="" target="_blank"></a></span>
<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UTILISATION OF YOUR ACCHHE DIN IS JUST A CLICK AWAY</b>
  <span class="sliver-link rutgers-health"><a href="" target="_blank"></a></span>
</div>
  </div>
</div>
<div id="block-platform-menu-toggle" class="block block-platform">

    
  <div class="content">
    <div class="menu-toggle"></div>  </div>
</div>
<div id="block-platform-rusearch" class="block block-platform">

    
  <div class="content">
    

  </div>
</div>
  </div>
  </div></div><!-- /sliver -->

  <div class="region-wrapper clearfix masthead menu-singleheight"><div class="region-inner">
    <a class="logo" href="f1loggedin.html" style="background: url(lg.png)" width="256" height="70">
    </a>
          <a class="site-name" href="f1loggedin.html" title="mygovpolicy">मेरा देश बदल रहा है,
आगे बढ़ रहा है|</a>
          <div class="region region-masthead">
    <div id="block-menu-block-1" class="block block-menu-block">

    
  <div class="content">
    <div class="menu-block-wrapper menu-block-1 menu-name-main-menu parent-mlid-0 menu-level-1 center">
  <ul class="menu"><li class="first leaf active menu-mlid-423"><a href="f1loggedin.php" title="" class="active">Home</a></li>
<li class="leaf menu-mlid-403"><a href="f2loggedin.php">About mygovpolicy</a></li>
<li class="expanded menu-mlid-409">View Policies<ul class="menu">
<li class="first leaf has-children menu-mlid-404"><a href="mypolicies.php"><b>My Policies</b></a></li>
<li class="first leaf has-children menu-mlid-404"><a href="view_alpha1.php">Alphabetical List</a></li>
<li class="leaf menu-mlid-407"><a href="view_year1.php">Yearwise</a></li>
<li class="last leaf menu-mlid-408"><a href="view_sector1.php">Sectorwise</a></li>

</ul></li>
<li class="expanded menu-mlid-426"><a href="profile.php" title="profile">Profile</a></li>

<li class="last leaf menu-mlid-406"><a href="logout.php">Logout</a></li>
</ul></div>
  </div>
</div>
  </div>
  </div></div><!-- /header -->
 
<?php 
//Start the session to see if the user is authencticated user. 
//session_start(); 
//Check if the user is authenticated first. Or else redirect to login page 
//if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){ 
//require('menu.php'); 
 
 /*Connect to mysql server*/ 
$link = @mysql_connect('localhost', 'root', '');  

/*Check link to the mysql server*/ 
if(!$link)
{ 
die('Failed to connect to server: ' . mysql_error());
 } 

/*Select database*/ 
$db = mysql_select_db('posses'); 
if(!$db)
{
 die("Unable to select database"); 
}

 /*Create query*/ 
$qry = "SELECT pol_name,year,main_obj,descp,off_site,sect_name,dept_name,minister_name FROM policy,sector,dept WHERE policy.sector_id=sector.sect_id AND policy.dept_id=dept.dept_id ORDER BY pol_name"; 

/*Execute query*/ 
$result = mysql_query($qry);
echo '<br/><br/><br/><center><h1> - POLICIES - </h1></center><br/><table border="1" >

<th> POLICY NAME </th> 
<th> YEAR </th>
<th> MAIN OBJECTIVE </th>
<th> DESCRIPTION </th>
<th> OFFICIAL WEBSITE </th>
<th> SECTOR NAME </th>
<th> DEPARTMENT NAME </th>
<th> MINISTER NAME </th> ';

/*Show the rows in the fetched result set one by one*/ 
while ($row = mysql_fetch_assoc($result))
{ 
echo '<tr> 

<td>'.$row['pol_name'].'</td>
<td>'.$row['year'].'</td>
<td>'.$row['main_obj'].'</td> 
<td>'.$row['descp'].'</td> 
<td>'.$row['off_site'].'</td> 
<td>'.$row['sect_name'].'</td> 
<td>'.$row['dept_name'].'</td> 
<td>'.$row['minister_name'].'</td> 
</tr>'; 
}

echo '</table>';
 

?>
      <div class="region-wrapper clearfix footer-second"><div class="region-inner">
        <div class="region region-footer-second">
    <div id="block-platform-university-footer" class="block block-platform">

    
  <div class="content">
    <p>
  Copyright &copy;2017, <strong>mygovpolicy</strong>, get the appropriate policies for you. All rights reserved.<br />
  Contact mygovpolicy at (+91) 8765432100 | Questions? Ask mygovpolicy or mail us at mygovpolicy@gmail.com. | Indian Government
</p>
  </div>
</div>
  </div>
    </div></div><!-- /footer_Second -->
  
</div><!-- /page -->
  
  <div id="respSize"></div><!-- helper for JS/media query switching-->
</body>
</html>