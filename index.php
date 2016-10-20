<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
		<title>Test Web</title>
	
		<style>
			body{
    				background-color: lightblue;
			    }
		</style>
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

			ga('create', 'GA Account Number', 'auto');
			ga('send', 'pageview');
		</script>
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
	</head>
	
	<body>
			
		<center>
			<table  border="3" width="100%" >
				<tr>
					<td><a href="outboundsite1" onclick="trackOutboundLink('SITE1');"/></td>
					<td><a href="outboundsite2" onclick="trackOutboundLink('SITE2');"/></td>
				</tr>
			</table>
		</center>

	</body>
</html>
