<?php 
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

      <div class="region-wrapper clearfix top"><div class="region-inner">
        <div class="region region-top">
    <div id="block-platform-homequeue-top" class="block block-platform right">

    
  <div class="content">
    <div id="node-22" class="node node-element has-text has-media clearfix" about="/content/home-feature-main-top-text" typeof="sioc:Item foaf:Document">
  <div class="content">
    <div class="field field-name-field-element-image field-type-image field-label-hidden"><div class="field-items">
<div class="field-item even">


<div id="sliderFrame">
        <div id="slider">
            <img src="images/img.jpg"  width="640" height="350" />
            <img src="images/img1.jpg"  width="640" height="350" />
            <img src="images/img2.jpg" alt=""  width="640" height="350" />
            <img src="images/img3.jpg" alt=""  width="640" height="350" />
            <img src="images/img4.jpg"  width="640" height="350" />
            <img src="images/img5.jpg"  width="640" height="350" />
            <img src="images/img6.jpg"  width="640" height="350" />
            <img src="images/img7.jpg"  width="640" height="350" />
            <img src="images/img8.jpg"  width="640" height="350" />
            <img src="images/img9.jpg"  width="640" height="350" />
            <img src="images/img10.jpg"  width="640" height="350" />
            <img src="images/img11.jpg"  width="640" height="350" />
        </div>
    </div>


</div>

</div></div></div>    <div class="side-content">      <div class="field field-name-body field-type-text-with-summary field-label-hidden"><div class="field-items"><div class="field-item even" property="content:encoded"><p>The ministries of the Government of India have come up with various schemes and policies from time to time. Your search for the appropriate policies ends here. Just sign up with your aadhar card number and some general information and what next?? We will provide you the filtered list of policies that you could utilise. The government is already doing enough for us. What we do is, not realising and utilising them!! <b>mygovpolicy</b> is an initiative to help you in utilising the government schemes and policies that exist for YOU.</p>

    


</div></div></div>    </div>
</div></div>
  </div>
</div>
  </div>
    </div><!-- /top -->
  
  <div class="region-wrapper clearfix main-content"><div class="region-inner">
    <a id="main-content"></a>
        <div class="main-content-nest">
                  
      
        <div class="region region-content">
    <div id="block-platform-homequeue-maincontent" class="block block-platform">

    
  <div class="content">
    <div id="node-23" class="node node-element has-text no-media clearfix" about="/content/homepageuniversity-policy-library" typeof="sioc:Item foaf:Document">

  
  
  <div class="content">
    <div class="field field-name-field-header field-type-text field-label-hidden"><div class="field-items"><div class="field-item even"><p>mygovpolicy</p>
</div></div></div><div class="field field-name-body field-type-text-with-summary field-label-hidden"><div class="field-items"><div class="field-item even" property="content:encoded"><p>The NDA government under the leadership of Shri Narendra Modi completes two years in office. Way back in May 2014 what it inherited was a socio-economic climate of hopelessness and a catastrophic spiral into economic gloom. Successive governments in the past facilitated an import-driven regime to meet domestic consumption. Such a policy framework not only depleted our foreign exchange reserves but took away manufacturing and agricultural activity abroad. It is a no brainer that when we import less, domestic economic activity gets its fair share of new jobs and business opportunities.

It therefore, took some time to deal with a governance architecture which simply needed drastic make-over resulting in a corruption free, efficient and a development driven executive. Reform is a relatively slow but effective process wherein all stakeholders participate in a constructive framework of blending skills, capital and regulatory mechanisms to create jobs and businesses that propel economic prosperity. The three Ds of Demand, Democracy and Demography are in favour of India.</p><p><a href="f2loggedin.html">mygovpolicy</a> is an initiative to provide the Indians easy access to the present government policies applicable for them. Narendra Modi Government after taking over in May 2014 has launched many welfare schemes and policies including the popular Jan Dhan Yojana, PM Awas Yojana, Suraksha Bima Yojana, Smart City Mission among many more. Here we bring you the complete list of  major schemes and policies launched by Narendra Modi Government. You can search the various policies and schemes launched by the government yearwise, sectorwise and what more?? Also you can sign up to get the applicable policies notified. Once you login, we provide you with a filtered list of policies that you are eligible to apply. So your search for the filtered list ends here. One more thing, to appreciate the work of the government do....</p>
<p><b>UTILISE THE ACCHHE DIN</b></p>
</div></div></div>  </div>

  
  
</div>
  </div>
</div>
  </div>

                <div class="region region-sidebar-first sidebar">
    <div id="block-platform-homequeue-rightsidebar" class="block block-platform">

    
  <div class="content">
    <div id="node-24" class="node node-element has-text no-media clearfix" about="/content/hompagesidebarcontact-us" typeof="sioc:Item foaf:Document">

  
  
  <div class="content">
    <div class="field field-name-field-header field-type-text field-label-hidden"><div class="field-items"><div class="field-item even"><p>Contact Us</p>
</div></div></div><div class="field field-name-body field-type-text-with-summary field-label-hidden"><div class="field-items"><div class="field-item even" property="content:encoded"><p class="contact-block">Office of the Secretary<br />
Hall 1<br />
PDPM IIITDM<br />
Jabalpur, MP<br />
482005<br />
Phone: (+91) 8765432100<br />
Fax: 732-932-1245<br />
Email: secretarymygovpolicy@<br />
gmail.com</p>
</div></div></div>  </div>

  
  
</div>
  </div>
</div>
<div id="block-menu-quick-links" class="block block-menu">

    <h2>Quick Links</h2>
  
  <div class="content">
    <ul class="menu"><li class="first last leaf"><a target="_blank" href="https://india.gov.in/" title="">Official Government Website</a></li>
</ul>  </div>
</div>
  </div>
        <!-- /sidebar_first -->
          </div>
    <!-- /main-content-nest -->
    
      </div></div><!-- /main-content -->

      <div class="region-wrapper clearfix bottom"><div class="region-inner">
        <div class="region region-bottom">
    <div id="block-platform-site-footer" class="block block-platform">

    
   <div class="content">
    <p>For questions or comments about this&nbsp;site, contact US.</p>
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

