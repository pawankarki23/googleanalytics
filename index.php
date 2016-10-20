<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
		<title>Test Web</title>
	
		<style>
			body {
    			background-color: lightblue;
			pawa}
	</style>
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-85644470-1', 'auto');
			ga('send', 'pageview');
		</script>
		
		<script>
			/**
			* Function to tracks a click on an outbound link in Analytics.
			* This function takes user defined urlLabel string as an argument, and uses that string
			* as the event label. Setting the transport method to 'beacon' lets the hit be sent
			* using 'navigator.sendBeacon' in browser that support it.
			*/
			function trackOutboundLink(urlLabel) {
		  		ga('send', 'event', {
		    		eventCategory: 'outboundLink',
		    		eventAction: 'click',
		    		eventLabel: urlLabel,
		    		transport: 'beacon'
		  		});
			}
		</script>

	</head>
	
	<body>
			
			<center>
<table  border="3" width="100%" >
<tr>
	<td>
		<a href="http://infokatdiscovery.uky.edu/primo_library/libweb/action/search.do?mode=Advanced&ct=AdvancedSearch&vid=UKY" onclick="trackOutboundLink('INFOKAT');">
		<span title="Provides immediate access, but it is RESTRICTED to this site. For unrestricted access use Virtual Den">
		<font color="white">InfoKat Discovery</font>
		</span>
		</a>
	</td>
	<td>
		<a href="http://Libraries.uky.edu" onclick="trackOutboundLink('LIBRARIES');">
		<span title="Provides immediate access, but it is RESTRICTED to this site. For unrestricted access use Virtual Den">
		<font color="white">Library Web Site</font>
		</span>
		</a>
	</td>
	<td>
		<a href="https://lib.uky.edu/wtyill/">
		<span title="Provides immediate access, but it is RESTRICTED to this site. For unrestricted access use Virtual Den">
		<font color="white">Interlibrary Loan Request</font>
		</span>
		</a>
	</td>
	<td>
		<a href="http://libguides.uky.edu/" onclick="trackOutboundLink('LIBGUIDES');">
		<span title="Provides immediate access, but it is RESTRICTED to this site. For unrestricted access use Virtual Den">
		<font color="white">Research Guides</font>
		</span>
		</a>
	</td>
	<td>
		<a href="http://exploreuk.uky.edu/" onclick="trackOutboundLink('EXPLOREUK');">
		<span title="Provides immediate access, but it is RESTRICTED to this site. For unrestricted access use Virtual Den">
		<font color="white">Explore UK</font>
		</span>
		</a>
	</td>


	
</tr>
<tr>
		
	<td valign="top" width="25%" colspan="1">
		<span title="HELP MENU for immediate access to selected sites and programs. Access is RESTRICTED to selected sites. For unrestricted access use Virtual Den">		
		<a href="http://lib.uky.edu/Displays/studentcomputers/Thinkiosklanding.html">
		<font color="white">
		<p><h1>UK Libraries</h1></p>
		<h2>QUICK LINKS<br/>
		InfoKat Discovery, ILL, hours, etc.<br/>
		No login needed</h2>
		<h2><font color="Red">LIMITED ACCESS!</font></h2>
		</font>
		</a>
		</span>
	
	</td>

	<td width="50%" colspan="3"><center><img src="UKLibraries_logo.png"></center></td>
	<td valign="top" width="25%" colspan="1">
		<span title="For complete Windows Desktop login to UK Virtual Den with your Link Blue account">
                <a href="http://ctxwi.uky.edu/Citrix/Kiosk/auth/login.aspx" onclick="trackOutboundLink('VIRTUALDEN');">
		<font color="white">
		<p><h1>UK Virtual Den</h1></p>
		<h2>For UK Affiliates only<br/>
		LinkBlue Login required</h2>
		<p><h2><font color="Red">FULL ACCESS!</font></h2></p>
		</font>
		</a>
		</span>
	
	</td>
</tr>

</table>
</center>
<center>
<iframe src="http://lib.uky.edu/Displays/wtyref/Signageshow.html" width="790" height="595"></iframe>
</center>
			
			<div>
				<!-- <iframe id="librarySite" src="http://libraries.uky.edu/"></iframe> -->
			</div>
	</body>
</html>