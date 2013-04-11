<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>jQuery Font Size</title>
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/estilo.css">

</head>
<body>
	<div id="page">
		<h1>jQuery Font Size</h1>
		<p>The jQuery Font Size plugin was developed to facilitate the process of creating the famous buttons A+ and A-, which alter the font size on sites with very large texts, such as blogs, journals, tutorials, etc.</p>
		<p>This tool is also used to increase the accessibility of sites, helping people who have visual problems to see better content</p>
		<div class="buttons">
			<a href="#" class="btn">Baixe agora</a>
			<a href="https://github.com/airton/Font-Size/fork_select" class="btn">Fork no Github</a>
		</div>

		<h3>Demo</h3>
		<div class="box">
			<div class="accessibility"></div>
			
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
&lt;div class="accessibility"&gt;&lt;/div&gt;</pre>
		</article>
		
		<article class="code">
			<h3>Script</h3>
			<pre class="prettyprint">&lt;script src="jquery.fontsize.js"&gt;</script></pre>
			<pre class="prettyprint">$('body').fontsize();</pre>
			<pre class="prettyprint">
$('body').fontsize({
    tags: 'a, p, h1, h2, h3, h4',
    limit : 3,
    interval: 1,
    classIncrease: 'myClass',
    classDecrease: 'myClass',
    idIncrease: 'myId',
    idDecrease: 'myId'
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
					<td>ID button Increase</td>
					<td>false</td>
					<td>Button Increase ID defalut is <b>"increase"</b> change the id according to its necessity</td>					
				</tr>
				<tr>
					<td>ID button Decrease</td>
					<td>false</td>
					<td>Button Increase ID defalut is <b>"decrease"</b> change the class according to its necessity</td>						
				</tr>				
			</tbody>
		</table>
	</div>		

</body>
<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
<script src="js/plugins.js"></script>
<script>
	$(document).ready(function() {
		prettyPrint();
	});
</script>
<script src="js/jquery.fontsize.js"></script>
<script>
	$('body').fontsize();
</script>

</html>	