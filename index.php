<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>jQuery Font Size</title>
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700">
	<link rel="stylesheet" href="normalize.css">
	<link rel="stylesheet" href="estilo.css">

</head>
<body>
	<div id="page">
		<h1>jQuery Font Size</h1>
		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet mattis, massa. 
		Sed eleifend nonummy diam. Praesent mauris ante, elementum et, bibendum at, posuere sit amet, nibh. Duis tincidunt lectus quis dui viverra vestibulum. 
		Suspendisse vulputate aliquam dui. Nulla elementum dui ut augue. Aliquam vehicula mi at mauris. Maecenas placerat, nisl at consequat rhoncus, sem nunc 
		gravida justo, quis eleifend arcu velit quis lacus. Morbi magna magna, tincidunt a, mattis non, imperdiet vitae, tellus. Sed odio est, auctor ac, 
		sollicitudin in, consequat vitae, orci. Fusce id felis. Vivamus sollicitudin metus eget eros.</p>
		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet mattis, massa.</p>
		<div class="buttons">
			<a href="#" class="btn">Baixe agora</a>
			<a href="#" class="btn">Fork no Github</a>
		</div>

		<h3>Demo</h3>
		<div class="box">
			<div class="accessibility">
				<a data-size="0" class="increase" href="#">A+</a>
				<a data-size="0" class="decrease" href="#">A-</a>
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
   &lt;a data-size="0" class="increase" href="#"&gt;A+&lt;/a&gt;
   &lt;a data-size="0" class="decrease" href="#"&gt;A-&lt;/a&gt;
&lt;/div&gt;</pre>
		</article>
		
		<article class="code">
			<h3>Script</h3>
			<pre class="prettyprint">$('.accessibility').fontsize();</pre>
			<pre class="prettyprint">
$('.accessibility').fontsize({
   tags: 'a, p, h1, h2, h3, h4',
   limit: 4,
   interval: 2
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
					<td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet mattis, massa.</td>
				</tr>
				<tr>
					<td>Limit</td>
					<td>3</td>	
					<td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet mattis, massa.</td>				
				</tr>
				<tr>
					<td>Interval</td>
					<td>1</td>
					<td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet mattis, massa.</td>					
				</tr>				
			</tbody>
		</table>

	</div>		

</body>
<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
<script src="plugins.js"></script>
<script>
	$(document).ready(function() {
		prettyPrint();
	});
</script>
<script src="jquery.fontsize.js"></script>
<script>
	$('body').fontsize({
	});
</script>

</html>	