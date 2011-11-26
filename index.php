<!doctype html> 
<html>
<head>
	<meta charset="utf-8">
	<!-- Add "maximum-scale=1" to fix the weird iOS auto-zoom bug on orientation changes. -->
	<meta name="viewport" content="width=device-width; initial-scale=1"/> 

	<link rel="stylesheet" type="text/css" href="css/reset.css" />
	<link rel="stylesheet" type="text/css" href="css/main.css" media="all" />
	<!--[if lt IE 9]>
	<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
	<script src="js/nav.js"></script>

	<link rel="shortcut icon" href="/images/favicon.ico"/> 

	<title>Open Navigation Demo</title>	
</head>
<body>
	<div class="global-wrapper">
		<header class="global-header">
			<nav class="global-navigation">
				<ul>
					<li><a href="#1"><span>Item 1</span></a></li>
					<li><a href="#2"><span>Item 2</span></a></li>
					<li class="dropdown">
						<a href="#3" class="dropdown-toggle"><span>Item 3</span></a>
						<ul>
							<li><a href="#3a"><span>Item 3a</span></a></li>
							<li><a href="#3b"><span>Item 3b</span></a></li>
							<li><a href="#3c"><span>Item 3c</span></a></li>
						</ul>
					</li>
					<li><a href="#4"><span>Item 4</span></a></li>
					<li><a href="#5"><span>Item 5</span></a></li>
					<li class="dropdown">
						<a href="#6" class="dropdown-toggle"><span>Item 6</span></a>
						<ul>
							<li><a href="#6a"><span>Item 6a</span></a></li>
							<li><a href="#6b"><span>Item 6b</span></a></li>
							<li><a href="#6c"><span>Item 6c</span></a></li>
							<li><a href="#6d"><span>Item 6d</span></a></li>
							<li><a href="#6e"><span>Item 6e</span></a></li>
							<li><a href="#6f"><span>Item 6f</span></a></li>
							<li><a href="#6g"><span>Item 6g</span></a></li>
							<li><a href="#6h"><span>Item 6h</span></a></li>
							<li><a href="#6i"><span>Item 6i</span></a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#7" class="dropdown-toggle"><span>Item 7 has a longer name</span></a>
						<ul>
							<li><a href="#7a"><span>Item 7a</span></a></li>
							<li><a href="#7b"><span>Item 7b</span></a></li>
							<li><a href="#7c"><span>Item 7c</span></a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#8" class="dropdown-toggle"><span>Item 8</span></a>
						<ul>
							<li><a href="#8a"><span>Item 8a has a longer name too</span></a></li>
							<li><a href="#8b"><span>Item 8b</span></a></li>
							<li><a href="#8c"><span>Item 8c</span></a></li>
						</ul>
					</li>
				</ul>
			</nav>
		</header>

		<div class="global-content">
			<section class="content">
				<header class="content-header">
					<h1>This is an example page</h1>
				</header>
				<p>Consectetur exercitation chambray american apparel aesthetic sed. Veniam excepteur ullamco, leggings put a bird on it DIY enim butcher fugiat beard letterpress. Lo-fi consectetur fugiat sint. Ea laborum mixtape banksy. Et DIY thundercats, consequat lomo non portland fugiat. Mustache terry richardson nihil cliche, non chambray scenester sint et. Art party american apparel skateboard gluten-free mixtape +1.</p>

				<p>Lo-fi beard cliche thundercats stumptown jean shorts cred single-origin coffee, keffiyeh chambray dolor. Cupidatat stumptown craft beer, ad skateboard retro mcsweeney's helvetica occaecat in art party. Vero four loko assumenda, freegan sapiente locavore put a bird on it. Fixie 3 wolf moon put a bird on it, freegan leggings twee proident wes anderson aute mcsweeney's single-origin coffee. Viral leggings salvia odio retro delectus. Non portland officia master cleanse pitchfork, elit butcher culpa food truck. Locavore commodo leggings, butcher echo park accusamus iphone raw denim single-origin coffee.</p>
			</section>
		</div>
		
		<div class=".global-footer-push"></div>
	</div>
	
	<footer class="global-footer">
		<p>Hello I am a sticky footer!</p>
	</footer>
</body>
</html>
