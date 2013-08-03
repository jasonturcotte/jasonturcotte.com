{assign_variable:my_weblog="default_site"}
{assign_variable:my_template_group="site"}

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" 
   "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
	
		<title>{exp:weblog:entries weblog="{my_weblog}" limit="1"}{title}{/exp:weblog:entries}</title>
	
		<link rel="stylesheet" type="text/css" media="all" href="{stylesheet={my_template_group}/stylesheet}" />
		<link rel="stylesheet" type="text/css" media="all" href="/css/ui-lightness/jquery-ui-1.7.2.custom.css" />
		<link rel="shortcut icon" type="image/ico" href="{site_url}favicon.ico" />
				
	</head>
	<body>
		<div id="wrapper">
			<div id="header">
			</div><!--end header-->
			{exp:weblog:entries weblog="{my_weblog}" sort="random"}
			<div id="content">
				<h1>{title}</h1>
				{jason}
				{body}
			</div><!--end content-->
			<div id="footer">
				{extended}
			</div><!--end footer-->
			{/exp:weblog:entries}
		</div><!--end wrapper-->
	</body>
</html>