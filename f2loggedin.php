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
} 


?>



<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" version="XHTML+RDFa 1.0" dir="ltr"
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
<link rel="shortcut icon" href="http://policies.rutgers.edu/profiles/ruprof/themes/scarlet/favicon.ico" type="image/vnd.microsoft.icon" />
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes" />
<meta name="description" content="The University Policy Library is the official source for the policies, approved by the university&#039;s Board of Governors, the Board of Trustees and/or executive officers, governing the academic, clinical, administrative, financial, operational, and business affairs of Rutgers, The State University of New Jersey.  The library holds policies in ten functional-based sections; subsections further define the topic areas within a given section. Under the tab “View Policies”, there are three sections:" />
<meta name="generator" content="Drupal 7 (http://drupal.org)" />
<link rel="canonical" href="http://policies.rutgers.edu/about-library/about-policy-library" />
<link rel="shortlink" href="lg1.png" />
  <title>About mygovpolicy</title>
  <link type="text/css" rel="stylesheet" href="c1.css" media="all" />
<link type="text/css" rel="stylesheet" href="c2.css" media="all" />
<link type="text/css" rel="stylesheet" href="c3.css" media="all" />
<link type="text/css" rel="stylesheet" href="c4.css" media="all" />
<link type="text/css" rel="stylesheet" href="c5.css" media="all" />
<link type="text/css" rel="stylesheet" href="c6.css" media="all" />
<link type="text/css" rel="stylesheet" href="tableimage.css" media="all"/>
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
jQuery.extend(Drupal.settings, {"basePath":"\/","pathPrefix":"","ajaxPageState":{"theme":"scarlet","theme_token":"pMD0L3TR3w27xBR_MwdDjCS_RfwVoE8XPFqSsYQnxkk","js":{"misc\/jquery.js":1,"misc\/jquery.once.js":1,"misc\/drupal.js":1,"misc\/ui\/jquery.ui.core.min.js":1,"misc\/ui\/jquery.ui.widget.min.js":1,"misc\/ui\/jquery.ui.button.min.js":1,"misc\/ui\/jquery.ui.mouse.min.js":1,"misc\/ui\/jquery.ui.draggable.min.js":1,"misc\/ui\/jquery.ui.position.min.js":1,"misc\/ui\/jquery.ui.resizable.min.js":1,"misc\/ui\/jquery.ui.dialog.min.js":1,"misc\/ajax.js":1,"sites\/all\/modules\/contrib\/linkit\/js\/linkit.js":1,"misc\/progress.js":1,"sites\/all\/modules\/contrib\/linkit\/editors\/ckeditor\/linkitDialog.js":1,"sites\/all\/modules\/contrib\/google_analytics\/googleanalytics.js":1,"0":1,"profiles\/ruprof\/themes\/scarlet\/js\/base.js":1,"profiles\/ruprof\/themes\/scarlet\/js\/respond.js":1},"css":{"modules\/system\/system.base.css":1,"modules\/system\/system.messages.css":1,"misc\/ui\/jquery.ui.core.css":1,"misc\/ui\/jquery.ui.theme.css":1,"misc\/ui\/jquery.ui.button.css":1,"misc\/ui\/jquery.ui.resizable.css":1,"misc\/ui\/jquery.ui.dialog.css":1,"sites\/all\/modules\/contrib\/ckeditor\/css\/ckeditor.css":1,"sites\/all\/modules\/contrib\/node_embed\/plugins\/node_embed\/node_embed.css":1,"profiles\/ruprof\/themes\/scarlet\/css\/content_types\/page.css":1,"profiles\/ruprof\/themes\/scarlet\/css\/base.css":1,"public:\/\/css_injector\/css_injector_1.css":1,"public:\/\/css_injector\/css_injector_2.css":1,"public:\/\/css_injector\/css_injector_4.css":1,"public:\/\/css_injector\/css_injector_6.css":1}},"linkit":{"autocompletePath":"http:\/\/policies.rutgers.edu\/linkit\/autocomplete\/___profile___?s=","dashboardPath":"\/linkit\/dashboard\/","currentInstance":{}},"googleanalytics":{"trackOutbound":1,"trackMailto":1,"trackDownload":1,"trackDownloadExtensions":"7z|aac|arc|arj|asf|asx|avi|bin|csv|doc(x|m)?|dot(x|m)?|exe|flv|gif|gz|gzip|hqx|jar|jpe?g|js|mp(2|3|4|e?g)|mov(ie)?|msi|msp|pdf|phps|png|ppt(x|m)?|pot(x|m)?|pps(x|m)?|ppam|sld(x|m)?|thmx|qtm?|ra(m|r)?|sea|sit|tar|tgz|torrent|txt|wav|wma|wmv|wpd|xls(x|m|b)?|xlt(x|m)|xlam|xml|z|zip"}});
//--><!]]>
</script>
</head>
<body class="html not-front not-logged-in no-sidebars page-node page-node- page-node-3 node-type-page" >



  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable">Skip to main content</a>
  </div>
    
<div class="page">

  <div class="region-wrapper clearfix sliver"><div class="region-inner">
      <div class="region region-sliver">
    <div id="block-platform-sliver-menu" class="block block-platform">

    
  <div class="content">
    
<div class="sliver-menu">

<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UTILISATION OF YOUR ACCHHE DIN IS JUST A CLICK AWAY</b>
  <span class="sliver-link rutgers"><a href=""  target="_blank"></a></span>
  <span class="sliver-link nb"><a href=""  target="_blank"></a></span>
  <span class="sliver-link rbhs"><a href=""  target="_blank"></a></span>
  <span class="sliver-link newark"><a href=""  target="_blank"></a></span>
  <span class="sliver-link camden"><a href=""  target="_blank"></a></span>
  <span class="sliver-link online"><a href=""  target="_blank"></a></span>
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
    <a class="logo" href="f1.html" style="background: url(lg.png)" width="256" height="70"></a>
          <a class="site-name" href="f1loggedin.html" title="mygovpolicy">मेरा देश बदल रहा है,
आगे बढ़ रहा है|</a>
          <div class="region region-masthead">
    <div id="block-menu-block-1" class="block block-menu-block">

    
  <div class="content">
    <div class="menu-block-wrapper menu-block-1 menu-name-main-menu parent-mlid-0 menu-level-1 center">
  <ul class="menu"><li class="first leaf menu-mlid-423"><a href="f1loggedin.php" title="">Home</a></li>
<li class="leaf active-trail active menu-mlid-403"><a href="f2loggedin.php" class="active-trail active">About mygovpolicy</a></li>
<li class="expanded menu-mlid-409">View Policies<ul class="menu">
<li class="first leaf has-children menu-mlid-404"><a href="mypolicies.php">My Policies</a></li>
<li class="first leaf has-children menu-mlid-404"><a href="view_alpha1.php">Alphabetical List</a></li>
<li class="leaf menu-mlid-407"><a href="view_year1.php" target="_blank">Yearwise</a></li>
<li class="last leaf menu-mlid-408"><a href="view_sector1.php" target="_blank">Sectorwise</a></li>
</ul></li>
<li class="expanded menu-mlid-426"><a href="profile.php" title="">Profile</a></li>

<li class="expanded menu-mlid-426"><a href="logout.php" title="">Logout</a></li>

</ul></div>
  </div>
</div>
  </div>
  </div></div><!-- /header -->

  
  <div class="region-wrapper clearfix main-content"><div class="region-inner">
    <a id="main-content"></a>
        <div class="main-content-nest">
                  
      
        <div class="region region-content">
    <h1 class="title page-title">About mygovpolicy</h1><div id="block-system-main" class="block block-system">

    
  <div class="content">
    <div id="node-3" class="node node-page clearfix" about="/about-library/about-policy-library" typeof="sioc:Item foaf:Document">

  
      <span property="dc:title" content="About the Policy Library" class="rdf-meta element-hidden"></span>
  
  <div class="content">
    <div class="field field-name-body field-type-text-with-summary field-label-hidden">
	<div class="field-items"><div class="field-item even" property="content:encoded">
	<p>The central government keeps on launching several policies for the people.
	We get to know about them through newspapers, radio, television, internet.
	Many of us even donot bother to notice them most of the time. Consequently,
	we miss out innumerable government opportunities to avail useful policies that could benefit us.
	Sometimes we notice it, but do not satisfy the criterion to avail it and then perhaps do not remember about it at the correct time.
	Through <b>mygovpolicy</b> we are here to provide you with the present NDA government policies applicable for you.
	You just need to sign up with your aadhar card no. and fill up some necessary details on the basis of which we will provide the policies that suits your profile.
	As soon as you login you will have the list of policies that match your profile.
	We also provide the official links to the respective sites so that on finding the appropriate policies you can proceed to avail them.</p>
<p>You can also update your profile periodically. For example, presently you are a student so you will have the policies that exist for a student. Later on, you complete your studies then the policies that were applicable for a student would be of no more use to you. So you can update your profile so as to notify us about it and then what next????? We will display the new set of policies that would be matching your profile.</p>
<p><b>mygovpolicy is maintained and managed by us...</b>
<table width="100%">
<tr>
<td><center><img src="image1.jpg" width=250 height=170><br/>Sparshi Jain</center></td>
<td><center><img src="rakshita.jpg" width=200 height=175><br/>Rakshita Karmawat</center></td>
<td><center><img src="vaishnavi.jpg" width=175 height=100><br />Vaishnavi Gunishetty</center></td>
</tr>
</table>
 </p> 





</div></div></div>  </div>

  
  
</div>
  </div>
</div>
  </div>

          </div>
    <!-- /main-content-nest -->
    
      </div></div><!-- /main-content -->

      <div class="region-wrapper clearfix bottom"><div class="region-inner">
        <div class="region region-bottom">
    <div id="block-platform-site-footer" class="block block-platform">

     <div class="content">
    <p>For questions or comments about this&nbsp;site, contact  US.</p>
  </div>
</div>
  </div>
    </div></div><!-- /bottom -->
  
  
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
