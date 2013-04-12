<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>jQuery Font Size</title>

	<meta name="description" content="The jQuery Font Size plugin was developed to facilitate the process of creating the famous buttons A+ and A-">
	<meta property="og:type" content="article">
	<meta property="og:title" content="jQuery Font Size">
	<meta property="og:site_name" content="jQuery Font Size">
	<meta property="og:url" content="http://www.vancindesign.com.br/plugins/fontsize/">
	<meta property="og:image" content="http://www.vancindesign.com.br/plugins/fontsize/img/fb-share.jpg">
	<meta property="og:description" content="The jQuery Font Size plugin was developed to facilitate the process of creating the famous buttons A+ and A-">

	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/estilo.css">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="image_src" href="http://www.vancindesign.com.br/plugins/fontsize/img/fb-share.jpg">

</head>
<body>
	<div id="page">
		<h1>jQuery Font Size</h1>
		<p>The jQuery Font Size plugin was developed to facilitate the process of creating the famous buttons A+ and A-, which alter the font size on sites with very large texts, such as blogs, journals, tutorials, etc.</p>
		<p>This tool is also used to increase the accessibility of sites, helping people who have visual problems to see better content</p>
		<div class="buttons">
			<a href="http://www.vancindesign.com.br/plugins/fontsize/js/jquery.fontsize.rar" class="btn">Download now</a>
			<a href="https://github.com/airton/Font-Size/fork_select" class="btn">Fork on Github</a>
		</div>

		<h3>Demo</h3>
		<div class="box">
			<div class="accessibility">
				<a href="#" class="increase" data-size="0">A+</a>
				<a href="#" class="decrease" data-size="0">A-</a>
			</div>
			
			<h2>Lorem ipsum dolor.</h2>
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet mattis, massa.</p>
			<h3>Lorem ipsum dolor.</h3>
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet mattis, massa.</p>
			<h4>Lorem ipsum dolor.</h4>
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet mattis, massa.</p>
			<h5>Lorem ipsum dolor.</h5>
			<p>Lorem ipsum mauris ante, elementum et, bibendum at, posuere sit amet, nibh. Duis tincidunt lectus quis dui viverra vestibulum. 
			Suspendisse vulputate aliquam dui. Nulla elementum dui ut augue. <b>Aliquam</b> vehicula mi at mauris. Maecenas <a href="#">placerat</a>, nisl at consequat rhoncus, sem nunc 
			gravida justo, quis eleifend arcu velit quis lacus. Morbi magna magna, tincidunt a, matti</p>
		</div>
		
		<article class="code">
			<h3>Html</h3>
			<pre class="prettyprint lang=html">
&lt;div class="accessibility"&gt;
  &lt;a href="#" class="increase" data-size="0"&gt;A+&lt;/a&gt;
  &lt;a href="#" class="decrease" data-size="0"&gt;A-&lt;/a&gt;
&lt;/div&gt;</pre>
		</article>
		
		<article class="code">
			<h3>Script</h3>
			<pre class="prettyprint">&lt;script src="jquery.fontsize.min.js"&gt;</script></pre>
			<pre class="prettyprint">$('body').fontsize();</pre>
			<pre class="prettyprint">
$('body').fontsize({
    tags: 'a, p, h1, h2, h3, h4',
    limit : 3,
    interval: 1,
    classIncrease: 'myClass',
    classDecrease: 'myClass',
    transition : 900
});</pre>
		</article>

		<h3>Options</h3>
		<table>
			<thead>
				<tr>
					<th>Option</th>
					<th>Default</th>
					<th>Description</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Tags</td>
					<td>"body, p, h1, h2, h3, h4, h5, blockquote"</td>
					<td>These are the tags that will get the font change</td>
				</tr>
				<tr>
					<td>Limit</td>
					<td>3</td>	
					<td>This parameter is the limit of clicks for each button</td>				
				</tr>
				<tr>
					<td>Interval</td>
					<td>1</td>
					<td>This parameter <b>"interval"</b> is the amount that the source will <b>"increase"</b> or <b>"decrease"</b>, the default is <b>"1"</b>, it is recommended to leave <b>"1" (1px)</b> or <b>"2" (2px)</b></td>					
				</tr>
				<tr>
					<td>Class button Increase</td>
					<td>"increase"</td>
					<td>Button Increase class defalut is <b>"increase"</b> change the class according to its necessity</td>					
				</tr>
				<tr>
					<td>Class button Decrease</td>
					<td>"decrease"</td>
					<td>Button Increase class defalut is <b>"decrease"</b> change the class according to its necessity</td>						
				</tr>
				<tr>
					<td>Transition</td>
					<td>800</td>
					<td>Speed ​​at which the source increases or decreases</td>						
				</tr>				
			</tbody>
		</table>
		<div class="autor">
			<h3>Author</h3>
			<a href="https://twitter.com/airtonvancin"><img src="https://si0.twimg.com/profile_images/1365134972/09022011_normal.jpg" alt=""></a>
			<a href="https://twitter.com/airtonvancin">@airtonvancin</a>

			<div class="license">
				<p>Available under the <a href="http://opensource.org/licenses/mit-license.php">MIT license</a>.</p>
				<p>Reference: <a href="http://jqueryboilerplate.com/">jQuery Boilerplate</a>.</p>
			</div>
		</div>
	</div>	
	
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="js/plugins.js"></script>
	<script>
		$(document).ready(function() {
			prettyPrint();
		});
	</script>
	<script src="js/jquery.fontsize.js"></script>
	<script>$('body').fontsize();</script>
	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-20773260-1']);
	  _gaq.push(['_trackPageview']);

	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>
</body>
</html>	