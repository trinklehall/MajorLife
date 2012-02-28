<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MajorLife - where to live on UMW's campus</title>
<link href="settings.css" rel="stylesheet" type="text/css" /><!--[if IE 5]>
<style type="text/css"> 
/* place css box model fixes for IE 5* in this conditional comment */
.twoColFixLtHdr #sidebar1 { width: 230px; }
</style>
<![endif]--><!--[if IE]>
<style type="text/css"> 
/* place css fixes for all versions of IE in this conditional comment */
.twoColFixLtHdr #sidebar1 { padding-top: 30px; }
.twoColFixLtHdr #mainContent { zoom: 1; }
/* the above proprietary zoom property gives IE the hasLayout it needs to avoid several bugs */
</style>
<![endif]-->
</head>

<body class="twoColFixLtHdr">
<div id="topthing">
  <p>Login</p></div>
<div id="container">
  <div id="header">
    <h1>MajorLife: </h1><h3 style="margin-top:-15px;">where to live on UMW's campus</h3>
  <!-- end #header --></div>
  <div id="sidebar1">
 
    <p>An interactive website where UMW students can determine ideal residential choices based upon major and academic interests. Students can determine the time distribution of their presence in certain buildings, thus allowing them to find the most convenient location to live. Along with this will be informal commentary on each building as well as the social and academic nature of each major.</p>
  <!-- end #sidebar1 --></div>
  <div id="mainContent">
   <h1><a href="update.php">Update</a></h1>
   <h1><a href="view.php">View</a></h1>
   
					<!-- CONTENT -->
		
					
					<form method = "post" action = "update2.php">
					<table>
					<tr><td>Major</td><td><input type="text" id="major" name="major" /></td></tr>
					<tr><td>Building</td><td><input type="text" id="building" name="building" /></td></tr>
					<tr><td>Skill Level</td><td><input type="number" name="skill_level" min="1" max="10" step="1" value="1" size="3"/>
					
					
					</td></tr>
					<tr><td>
					<input type="submit" value="Update MajorLife" /></td></tr>
					</table>
					
					</form>
					<!-- END CONTENT -->
	<!-- end #mainContent --></div>
	<!-- This clearing element should immediately follow the #mainContent div in order to force the #container div to contain all child floats --><br class="clearfloat" />
  <div id="footer">
    
  <!-- end #footer --></div>
<!-- end #container --></div>
</body>
</html>