<?php 
/*
Template Name: CakePHP
*/

get_header(); ?>
    
    <div class="docs-wrapper">
	    <div id="docs-sidebar" class="docs-sidebar">
		    <div class="top-search-box d-lg-none p-3">
                <form class="search-form">
		            <input type="text" placeholder="Search the docs..." name="search" class="form-control search-input">
		            <button type="submit" class="btn search-btn" value="Search"><i class="fas fa-search"></i></button>
		        </form>
            </div>
		    <nav id="docs-nav" class="docs-nav navbar">
			    <ul class="section-items list-unstyled nav flex-column pb-3">
				    <li class="nav-item section-title"><a class="nav-link scrollto active" href="#section-1"><span class="theme-icon-holder mr-2"><i class="fas fa-map-signs"></i></span>Introduction</a></li>
				    <li class="nav-item"><a class="nav-link scrollto" href="#item-1-1">Section Item 1.1</a></li>
				    <li class="nav-item"><a class="nav-link scrollto" href="#item-1-2">Section Item 1.2</a></li>
				    <li class="nav-item"><a class="nav-link scrollto" href="#item-1-3">Section Item 1.3</a></li>
				    <li class="nav-item"><a class="nav-link scrollto" href="#item-1-4">Section Item 1.4</a></li>
				    <li class="nav-item"><a class="nav-link scrollto" href="#item-1-5">Section Item 1.5</a></li>
				    <li class="nav-item"><a class="nav-link scrollto" href="#item-1-6">Section Item 1.6</a></li>
				    <li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#section-2"><span class="theme-icon-holder mr-2"><i class="fas fa-arrow-down"></i></span>Installation</a></li>
				    <li class="nav-item"><a class="nav-link scrollto" href="#item-2-1">Section Item 2.1</a></li>
				    <li class="nav-item"><a class="nav-link scrollto" href="#item-2-2">Section Item 2.2</a></li>
				    <li class="nav-item"><a class="nav-link scrollto" href="#item-2-3">Section Item 2.3</a></li>
				    <li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#section-3"><span class="theme-icon-holder mr-2"><i class="fas fa-box"></i></span>APIs</a></li>
				    <li class="nav-item"><a class="nav-link scrollto" href="#item-3-1">Section Item 3.1</a></li>
				    <li class="nav-item"><a class="nav-link scrollto" href="#item-3-2">Section Item 3.2</a></li>
				    <li class="nav-item"><a class="nav-link scrollto" href="#item-3-3">Section Item 3.3</a></li>
				    <li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#section-4"><span class="theme-icon-holder mr-2"><i class="fas fa-cogs"></i></span>Integrations</a></li>
				    <li class="nav-item"><a class="nav-link scrollto" href="#item-4-1">Section Item 4.1</a></li>
				    <li class="nav-item"><a class="nav-link scrollto" href="#item-4-2">Section Item 4.2</a></li>
				    <li class="nav-item"><a class="nav-link scrollto" href="#item-4-3">Section Item 4.3</a></li>
				    <li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#section-5"><span class="theme-icon-holder mr-2"><i class="fas fa-tools"></i></span>Utilities</a></li>
				    <li class="nav-item"><a class="nav-link scrollto" href="#item-5-1">Section Item 5.1</a></li>
				    <li class="nav-item"><a class="nav-link scrollto" href="#item-5-2">Section Item 5.2</a></li>
				    <li class="nav-item"><a class="nav-link scrollto" href="#item-5-3">Section Item 5.3</a></li>
				    <li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#section-6"><span class="theme-icon-holder mr-2"><i class="fas fa-laptop-code"></i></span>Web</a></li>
				    <li class="nav-item"><a class="nav-link scrollto" href="#item-6-1">Section Item 6.1</a></li>
				    <li class="nav-item"><a class="nav-link scrollto" href="#item-6-2">Section Item 6.2</a></li>
				    <li class="nav-item"><a class="nav-link scrollto" href="#item-6-3">Section Item 6.3</a></li>
				    <li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#section-7"><span class="theme-icon-holder mr-2"><i class="fas fa-tablet-alt"></i></span>Mobile</a></li>
				    <li class="nav-item"><a class="nav-link scrollto" href="#item-7-1">Section Item 7.1</a></li>
				    <li class="nav-item"><a class="nav-link scrollto" href="#item-7-2">Section Item 7.2</a></li>
				    <li class="nav-item"><a class="nav-link scrollto" href="#item-7-3">Section Item 7.3</a></li>
				    <li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#section-8"><span class="theme-icon-holder mr-2"><i class="fas fa-book-reader"></i></span>Resources</a></li>
				    <li class="nav-item"><a class="nav-link scrollto" href="#item-8-1">Section Item 8.1</a></li>
				    <li class="nav-item"><a class="nav-link scrollto" href="#item-8-2">Section Item 8.2</a></li>
				    <li class="nav-item"><a class="nav-link scrollto" href="#item-8-3">Section Item 8.3</a></li>
				    <li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#section-9"><span class="theme-icon-holder mr-2"><i class="fas fa-lightbulb"></i></span>FAQs</a></li>
				    <li class="nav-item"><a class="nav-link scrollto" href="#item-9-1">Section Item 9.1</a></li>
				    <li class="nav-item"><a class="nav-link scrollto" href="#item-9-2">Section Item 9.2</a></li>
				    <li class="nav-item"><a class="nav-link scrollto" href="#item-9-3">Section Item 9.3</a></li>
			    </ul>

		    </nav><!--//docs-nav-->
	    </div><!--//docs-sidebar-->
	    <div class="docs-content">
		    <div class="container">
			    <article class="docs-article" id="section-1">
				    <header class="docs-header">
					    <h1 class="docs-heading">Aprendendo <span class="docs-time">Last updated: 2019-06-01</span></h1>
					    <section class="docs-intro">
						    <p>Aqui você aprende tudo sobre HTML e CSS, uma documentação completa que explica cada detalhe.</p>
						</section><!--//docs-intro-->
						
						<h5>Github Code Example:</h5>
						<p>You can <a class="theme-link" href="https://gist.github.com/"  target="_blank">embed your code snippets using Github gists</a></p>
						<div class="docs-code-block">
							<!-- ** Embed github code starts ** -->
							<script src="https://gist.github.com/fabiofreitasbr/c34233de24b037ac5b2ce31158e5e191.js"></script>
							<!-- ** Embed github code ends ** -->
						</div><!--//docs-code-block-->
						
					     <h5>Highlight.js Example:</h5>
						<p>You can <a class="theme-link" href="https://github.com/highlightjs/highlight.js" target="_blank">embed your code snippets using highlight.js</a> It supports <a class="theme-link" href="https://highlightjs.org/static/demo/" target="_blank">185 languages and 89 styles</a>.</p>
						<p>This template uses <a class="theme-link" href="https://highlightjs.org/static/demo/" target="_blank">Atom One Dark</a> style for the code blocks: <br><code>&#x3C;link rel=&#x22;stylesheet&#x22; href=&#x22;//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.2/styles/atom-one-dark.min.css&#x22;&#x3E;</code></p>
						<div class="docs-code-block">
							<pre class="shadow-lg rounded"><code class="json hljs">[
  {
    <span class="hljs-attr">"title"</span>: <span class="hljs-string">"apples"</span>,
    <span class="hljs-attr">"count"</span>: [<span class="hljs-number">12000</span>, <span class="hljs-number">20000</span>],
    <span class="hljs-attr">"description"</span>: {<span class="hljs-attr">"text"</span>: <span class="hljs-string">"..."</span>, <span class="hljs-attr">"sensitive"</span>: <span class="hljs-literal">false</span>}
  },
  {
    <span class="hljs-attr">"title"</span>: <span class="hljs-string">"oranges"</span>,
    <span class="hljs-attr">"count"</span>: [<span class="hljs-number">17500</span>, <span class="hljs-literal">null</span>],
    <span class="hljs-attr">"description"</span>: {<span class="hljs-attr">"text"</span>: <span class="hljs-string">"..."</span>, <span class="hljs-attr">"sensitive"</span>: <span class="hljs-literal">false</span>}
  }
]


</code></pre>
						</div><!--//docs-code-block-->
						
						
				    </header>
				    <section class="docs-section" id="item-1-1">
						<h2 class="section-heading">Section Item 1.1</h2>
						<p>Vivamus efficitur fringilla ullamcorper. Cras condimentum condimentum mauris, vitae facilisis leo. Aliquam sagittis purus nisi, at commodo augue convallis id. </p>
						<p>Code Example: <code>npm install &lt;package&gt;</code></p>
						<h5>Unordered List Examples:</h5>
						<ul>
						    <li><strong class="mr-1">HTML5:</strong> <code>&lt;div id="foo"&gt;</code></li>
						    <li><strong class="mr-1">CSS:</strong> <code>#foo { color: red }</code></li>
						    <li><strong class="mr-1">JavaScript:</strong> <code>console.log(&#x27;#foo\bar&#x27;);</code></li>
						</ul>
						<h5>Ordered List Examples:</h5>
						<ol>
							<li>Download lorem ipsum dolor sit amet.</li>
							<li>Click ipsum faucibus venenatis.</li>
							<li>Configure fermentum malesuada nunc.</li>
							<li>Deploy donec non ante libero.</li>
						</ol>
                        <h5>Callout Examples:</h5>
                        <div class="callout-block callout-block-info">
                            
                            <div class="content">
                                <h4 class="callout-title">
	                                <span class="callout-icon-holder mr-1">
		                                <i class="fas fa-info-circle"></i>
		                            </span><!--//icon-holder-->
	                                Note
	                            </h4>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium <code>&lt;code&gt;</code> , Nemo enim ipsam voluptatem quia voluptas <a href="#">link example</a> sit aspernatur aut odit aut fugit.</p>
                            </div><!--//content-->
                        </div><!--//callout-block-->
                        
                        <div class="callout-block callout-block-warning">
                            <div class="content">
                                <h4 class="callout-title">
	                                <span class="callout-icon-holder mr-1">
		                                <i class="fas fa-bullhorn"></i>
		                            </span><!--//icon-holder-->
	                                Warning
	                            </h4>
                                <p>Nunc hendrerit odio quis dignissim efficitur. Proin ut finibus libero. Morbi posuere fringilla felis eget sagittis. Fusce sem orci, cursus in tortor <a href="#">link example</a> tellus vel diam viverra elementum.</p>
                            </div><!--//content-->
                        </div><!--//callout-block-->
                        
                        <div class="callout-block callout-block-success">
                            <div class="content">
                                <h4 class="callout-title">
	                                <span class="callout-icon-holder mr-1">
		                                <i class="fas fa-thumbs-up"></i>
		                            </span><!--//icon-holder-->
	                                Tip
	                            </h4>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. <a href="#">Link example</a> aenean commodo ligula eget dolor.</p>
                            </div><!--//content-->
                        </div><!--//callout-block-->
                        
                        <div class="callout-block callout-block-danger mr-1">
                            <div class="content">
                                <h4 class="callout-title">
	                                <span class="callout-icon-holder">
		                                <i class="fas fa-exclamation-triangle"></i>
		                            </span><!--//icon-holder-->
	                                Danger
	                            </h4>
                                <p>Morbi eget interdum sapien. Donec sed turpis sed nulla lacinia accumsan vitae ut tellus. Aenean vestibulum <a href="#">Link example</a> maximus ipsum vel dignissim. Morbi ornare elit sit amet massa feugiat, viverra dictum ipsum pellentesque. </p>
                            </div><!--//content-->
                        </div><!--//callout-block-->
                        
                        <h5 class="mt-5">Alert Examples:</h5>
                        <div class="alert alert-primary" role="alert">
						  This is a primary alert—check it out!
						</div>
						<div class="alert alert-secondary" role="alert">
						  This is a secondary alert—check it out!
						</div>
						<div class="alert alert-success" role="alert">
						  This is a success alert—check it out!
						</div>
						<div class="alert alert-danger" role="alert">
						  This is a danger alert—check it out!
						</div>
						<div class="alert alert-warning" role="alert">
						  This is a warning alert—check it out!
						</div>
						<div class="alert alert-info" role="alert">
						  This is a info alert—check it out!
						</div>
						<div class="alert alert-light" role="alert">
						  This is a light alert—check it out!
						</div>
						<div class="alert alert-dark" role="alert">
						  This is a dark alert—check it out!
						</div>
                        
                       
					</section><!--//section-->
					
					<section class="docs-section" id="item-1-2">
						<h2 class="section-heading">Section Item 1.2</h2>
						<p>Vivamus efficitur fringilla ullamcorper. Cras condimentum condimentum mauris, vitae facilisis leo. Aliquam sagittis purus nisi, at commodo augue convallis id. Sed interdum turpis quis felis bibendum imperdiet. Mauris pellentesque urna eu leo gravida iaculis. In fringilla odio in felis ultricies porttitor. Donec at purus libero. Vestibulum libero orci, commodo nec arcu sit amet, commodo sollicitudin est. Vestibulum ultricies malesuada tempor.</p>
						<h5>Image Lightbox Example:</h5>
						<figure class="figure docs-figure py-3">
						    <a href="<?php echo get_bloginfo('template_url'); ?>/assets/images/features/appify-theme-projects-overview-lg.jpg" data-title="Image Lightbox Example" data-toggle="lightbox"><img class="figure-img img-fluid shadow rounded" src="<?php echo get_bloginfo('template_url'); ?>/assets/images/features/appify-add-members.gif" alt="" style="width: 600px;"></a>
						    <figcaption class="figure-caption mt-3"><i class="fas fa-info-circle mr-2"></i>Credit: the above screencast is taken from <a  class="theme-link" href="https://themes.3rdwavemedia.com/bootstrap-templates/product/appify-bootstrap-4-admin-template-for-app-developers/" target="_blank"><i class="fas fa-external-link-alt"></i>Appify theme</a>.</figcaption>
						</figure>
						
						<h5>Custom Table:</h5>
						<div class="table-responsive my-4">
							<table class="table table-bordered">
								<tbody>
								    <tr>
									    <th class="theme-bg-light"><a class="theme-link" href="#">Option 1</a></th>
									    <td>Option 1 desc lorem ipsum dolor sit amet, consectetur adipiscing elit. </td>
									</tr>
									<tr>
									      <th class="theme-bg-light"><a class="theme-link" href="#">Option 2</a></th>
									      <td>Option 2 desc lorem ipsum dolor sit amet, consectetur adipiscing elit. </td>
									</tr>
									
									<tr>
									    <th class="theme-bg-light"><a class="theme-link" href="#">Option 3</a></th>
									    <td>Option 3 desc lorem ipsum dolor sit amet, consectetur adipiscing elit. </td>
									</tr>
									
									<tr>
									    <th class="theme-bg-light"><a class="theme-link" href="#">Option 4</a></th>
									    <td>Option 4 desc lorem ipsum dolor sit amet, consectetur adipiscing elit. </td>
									</tr>
								</tbody>
							</table>
						</div><!--//table-responsive-->
						<h5>Stripped Table:</h5>
						<div class="table-responsive my-4">
							<table class="table table-striped">
								<thead>
									<tr>
										<th scope="col">#</th>
										<th scope="col">First</th>
										<th scope="col">Last</th>
										<th scope="col">Handle</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row">1</th>
										<td>Mark</td>
										<td>Otto</td>
										<td>@mdo</td>
									</tr>
									<tr>
										<th scope="row">2</th>
										<td>Jacob</td>
										<td>Thornton</td>
										<td>@fat</td>
									</tr>
									<tr>
										<th scope="row">3</th>
										<td>Larry</td>
										<td>the Bird</td>
										<td>@twitter</td>
									</tr>
								</tbody>
							</table>
						</div><!--//table-responsive-->
						<h5>Bordered Dark Table:</h5>
						<div class="table-responsive my-4">
							<table class="table table-bordered table-dark">
								<thead>
									<tr>
										<th scope="col">#</th>
										<th scope="col">First</th>
										<th scope="col">Last</th>
										<th scope="col">Handle</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row">1</th>
										<td>Mark</td>
										<td>Otto</td>
										<td>@mdo</td>
									</tr>
									<tr>
										<th scope="row">2</th>
										<td>Jacob</td>
										<td>Thornton</td>
										<td>@fat</td>
									</tr>
									<tr>
										<th scope="row">3</th>
										<td>Larry</td>
										<td>the Bird</td>
										<td>@twitter</td>
									</tr>
								</tbody>
							</table>
						</div><!--//table-responsive-->
						
						
					</section><!--//section-->
					
					<section class="docs-section" id="item-1-3">
						<h2 class="section-heading">Section Item 1.3</h2>
						<p>Vivamus efficitur fringilla ullamcorper. Cras condimentum condimentum mauris, vitae facilisis leo. Aliquam sagittis purus nisi, at commodo augue convallis id. Sed interdum turpis quis felis bibendum imperdiet. Mauris pellentesque urna eu leo gravida iaculis. In fringilla odio in felis ultricies porttitor. Donec at purus libero. Vestibulum libero orci, commodo nec arcu sit amet, commodo sollicitudin est. Vestibulum ultricies malesuada tempor.</p>
						<h5>Badges Examples:</h5>
						<div class="my-4">
						    <span class="badge badge-primary">Primary</span>
							<span class="badge badge-secondary">Secondary</span>
							<span class="badge badge-success">Success</span>
							<span class="badge badge-danger">Danger</span>
							<span class="badge badge-warning">Warning</span>
							<span class="badge badge-info">Info</span>
							<span class="badge badge-light">Light</span>
							<span class="badge badge-dark">Dark</span>
						</div>
						<h5>Button Examples:</h5>
						<div class="row my-3">
                        <div class="col-md-6 col-12">
                                <ul class="list list-unstyled pl-0">
                                    <li><a href="#" class="btn btn-primary">Primary Button</a></li>
                                    <li><a href="#" class="btn btn-secondary">Secondary Button</a></li>
                                    <li><a href="#" class="btn btn-light">Light Button</a></li>
                                    <li><a href="#" class="btn btn-success">Succcess Button</a></li>
                                    <li><a href="#" class="btn btn-info">Info Button</a></li>
                                    <li><a href="#" class="btn btn-warning">Warning Button</a></li>
                                    <li><a href="#" class="btn btn-danger">Danger Button</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6 col-12">
                                <ul class="list list-unstyled pl-0">
                                    <li><a href="#" class="btn btn-primary"><i class="fas fa-download mr-2"></i> Download Now</a></li>
                                    <li><a href="#" class="btn btn-secondary"><i class="fas fa-book mr-2"></i> View Docs</a></li>
                                    <li><a href="#" class="btn btn-light"><i class="fas fa-arrow-alt-circle-right mr-2"></i> View Features</a></li>
                                    <li><a href="#" class="btn btn-success"><i class="fas fa-code-branch mr-2"></i> Fork Now</a></li>
                                    <li><a href="#" class="btn btn-info"><i class="fas fa-play-circle mr-2"></i> Find Out Now</a></li>
                                    <li><a href="#" class="btn btn-warning"><i class="fas fa-bug mr-2"></i> Report Bugs</a></li>
                                    <li><a href="#" class="btn btn-danger"><i class="fas fa-exclamation-circle mr-2"></i> Submit Issues</a></li>
                                </ul>
                            </div>
                        </div><!--//row-->
                        
                        <h5>Progress Examples:</h5>
                        <div class="my-4">
	                        <div class="progress my-4">
								<div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<div class="progress my-4">
							    <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<div class="progress my-4">
							    <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<div class="progress my-4">
							    <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
                        </div>
					</section><!--//section-->
					
					<section class="docs-section" id="item-1-4">
						<h2 class="section-heading">Section Item 1.4</h2>
						<p>Vivamus efficitur fringilla ullamcorper. Cras condimentum condimentum mauris, vitae facilisis leo. Aliquam sagittis purus nisi, at commodo augue convallis id. Sed interdum turpis quis felis bibendum imperdiet. Mauris pellentesque urna eu leo gravida iaculis. In fringilla odio in felis ultricies porttitor. Donec at purus libero. Vestibulum libero orci, commodo nec arcu sit amet, commodo sollicitudin est. Vestibulum ultricies malesuada tempor.</p>
						
						
						<h5>Pagination Example:</h5>
						<nav aria-label="Page navigation example">
						    <ul class="pagination pl-0">
							    <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
							    <li class="page-item active"><a class="page-link" href="#">1</a></li>
							    <li class="page-item"><a class="page-link" href="#">2</a></li>
							    <li class="page-item"><a class="page-link" href="#">3</a></li>
							    <li class="page-item"><a class="page-link" href="#">Next</a></li>
						    </ul>
						</nav>
						
						<p>Vivamus efficitur fringilla ullamcorper. Cras condimentum condimentum mauris, vitae facilisis leo. Aliquam sagittis purus nisi, at commodo augue convallis id. Sed interdum turpis quis felis bibendum imperdiet. Mauris pellentesque urna eu leo gravida iaculis. In fringilla odio in felis ultricies porttitor. Donec at purus libero. Vestibulum libero orci, commodo nec arcu sit amet, commodo sollicitudin est. Vestibulum ultricies malesuada tempor.</p>
						
					</section><!--//section-->
					<section class="docs-section" id="item-1-5">
						<h2 class="section-heading">Section Item 1.5</h2>
						<p>Vivamus efficitur fringilla ullamcorper. Cras condimentum condimentum mauris, vitae facilisis leo. Aliquam sagittis purus nisi, at commodo augue convallis id. Sed interdum turpis quis felis bibendum imperdiet. Mauris pellentesque urna eu leo gravida iaculis. In fringilla odio in felis ultricies porttitor. Donec at purus libero. Vestibulum libero orci, commodo nec arcu sit amet, commodo sollicitudin est. Vestibulum ultricies malesuada tempor.</p>
					</section><!--//section-->
					<section class="docs-section" id="item-1-6">
						<h2 class="section-heading">Section Item 1.6</h2>
						<p>Vivamus efficitur fringilla ullamcorper. Cras condimentum condimentum mauris, vitae facilisis leo. Aliquam sagittis purus nisi, at commodo augue convallis id. Sed interdum turpis quis felis bibendum imperdiet. Mauris pellentesque urna eu leo gravida iaculis. In fringilla odio in felis ultricies porttitor. Donec at purus libero. Vestibulum libero orci, commodo nec arcu sit amet, commodo sollicitudin est. Vestibulum ultricies malesuada tempor.</p>
					</section><!--//section-->
					
			    </article>
			    
			    <article class="docs-article" id="section-2">
				    <header class="docs-header">
					    <h1 class="docs-heading">Installation</h1>
					    <section class="docs-intro">
						    <p>Section intro goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque finibus condimentum nisl id vulputate. Praesent aliquet varius eros interdum suscipit. Donec eu purus sed nibh convallis bibendum quis vitae turpis. Duis vestibulum diam lorem, vitae dapibus nibh facilisis a. Fusce in malesuada odio.</p>
						</section><!--//docs-intro-->
				    </header>
				     <section class="docs-section" id="item-2-1">
						<h2 class="section-heading">Section Item 2.1</h2>
						<p>Vivamus efficitur fringilla ullamcorper. Cras condimentum condimentum mauris, vitae facilisis leo. Aliquam sagittis purus nisi, at commodo augue convallis id. Sed interdum turpis quis felis bibendum imperdiet. Mauris pellentesque urna eu leo gravida iaculis. In fringilla odio in felis ultricies porttitor. Donec at purus libero. Vestibulum libero orci, commodo nec arcu sit amet, commodo sollicitudin est. Vestibulum ultricies malesuada tempor.</p>
					</section><!--//section-->
					
					<section class="docs-section" id="item-2-2">
						<h2 class="section-heading">Section Item 2.2</h2>
						<p>Vivamus efficitur fringilla ullamcorper. Cras condimentum condimentum mauris, vitae facilisis leo. Aliquam sagittis purus nisi, at commodo augue convallis id. Sed interdum turpis quis felis bibendum imperdiet. Mauris pellentesque urna eu leo gravida iaculis. In fringilla odio in felis ultricies porttitor. Donec at purus libero. Vestibulum libero orci, commodo nec arcu sit amet, commodo sollicitudin est. Vestibulum ultricies malesuada tempor.</p>
					</section><!--//section-->
					
					<section class="docs-section" id="item-2-3">
						<h2 class="section-heading">Section Item 2.3</h2>
						<p>Vivamus efficitur fringilla ullamcorper. Cras condimentum condimentum mauris, vitae facilisis leo. Aliquam sagittis purus nisi, at commodo augue convallis id. Sed interdum turpis quis felis bibendum imperdiet. Mauris pellentesque urna eu leo gravida iaculis. In fringilla odio in felis ultricies porttitor. Donec at purus libero. Vestibulum libero orci, commodo nec arcu sit amet, commodo sollicitudin est. Vestibulum ultricies malesuada tempor.</p>
					</section><!--//section-->
			    </article><!--//docs-article-->
			    
			    
			    <article class="docs-article" id="section-3">
				    <header class="docs-header">
					    <h1 class="docs-heading">APIs</h1>
					    <section class="docs-intro">
						    <p>Section intro goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque finibus condimentum nisl id vulputate. Praesent aliquet varius eros interdum suscipit. Donec eu purus sed nibh convallis bibendum quis vitae turpis. Duis vestibulum diam lorem, vitae dapibus nibh facilisis a. Fusce in malesuada odio.</p>
						</section><!--//docs-intro-->
				    </header>
				     <section class="docs-section" id="item-3-1">
						<h2 class="section-heading">Section Item 3.1</h2>
						<p>Vivamus efficitur fringilla ullamcorper. Cras condimentum condimentum mauris, vitae facilisis leo. Aliquam sagittis purus nisi, at commodo augue convallis id. Sed interdum turpis quis felis bibendum imperdiet. Mauris pellentesque urna eu leo gravida iaculis. In fringilla odio in felis ultricies porttitor. Donec at purus libero. Vestibulum libero orci, commodo nec arcu sit amet, commodo sollicitudin est. Vestibulum ultricies malesuada tempor.</p>
					</section><!--//section-->
					
					<section class="docs-section" id="item-3-2">
						<h2 class="section-heading">Section Item 3.2</h2>
						<p>Vivamus efficitur fringilla ullamcorper. Cras condimentum condimentum mauris, vitae facilisis leo. Aliquam sagittis purus nisi, at commodo augue convallis id. Sed interdum turpis quis felis bibendum imperdiet. Mauris pellentesque urna eu leo gravida iaculis. In fringilla odio in felis ultricies porttitor. Donec at purus libero. Vestibulum libero orci, commodo nec arcu sit amet, commodo sollicitudin est. Vestibulum ultricies malesuada tempor.</p>
					</section><!--//section-->
					
					<section class="docs-section" id="item-3-3">
						<h2 class="section-heading">Section Item 3.3</h2>
						<p>Vivamus efficitur fringilla ullamcorper. Cras condimentum condimentum mauris, vitae facilisis leo. Aliquam sagittis purus nisi, at commodo augue convallis id. Sed interdum turpis quis felis bibendum imperdiet. Mauris pellentesque urna eu leo gravida iaculis. In fringilla odio in felis ultricies porttitor. Donec at purus libero. Vestibulum libero orci, commodo nec arcu sit amet, commodo sollicitudin est. Vestibulum ultricies malesuada tempor.</p>
					</section><!--//section-->
			    </article><!--//docs-article-->
			    
			    <article class="docs-article" id="section-4">
				    <header class="docs-header">
					    <h1 class="docs-heading">Intergrations</h1>
					    <section class="docs-intro">
						    <p>Section intro goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque finibus condimentum nisl id vulputate. Praesent aliquet varius eros interdum suscipit. Donec eu purus sed nibh convallis bibendum quis vitae turpis. Duis vestibulum diam lorem, vitae dapibus nibh facilisis a. Fusce in malesuada odio.</p>
						</section><!--//docs-intro-->
				    </header>
				     <section class="docs-section" id="item-4-1">
						<h2 class="section-heading">Section Item 4.1</h2>
						<p>Vivamus efficitur fringilla ullamcorper. Cras condimentum condimentum mauris, vitae facilisis leo. Aliquam sagittis purus nisi, at commodo augue convallis id. Sed interdum turpis quis felis bibendum imperdiet. Mauris pellentesque urna eu leo gravida iaculis. In fringilla odio in felis ultricies porttitor. Donec at purus libero. Vestibulum libero orci, commodo nec arcu sit amet, commodo sollicitudin est. Vestibulum ultricies malesuada tempor.</p>
					</section><!--//section-->
					
					<section class="docs-section" id="item-4-2">
						<h2 class="section-heading">Section Item 4.2</h2>
						<p>Vivamus efficitur fringilla ullamcorper. Cras condimentum condimentum mauris, vitae facilisis leo. Aliquam sagittis purus nisi, at commodo augue convallis id. Sed interdum turpis quis felis bibendum imperdiet. Mauris pellentesque urna eu leo gravida iaculis. In fringilla odio in felis ultricies porttitor. Donec at purus libero. Vestibulum libero orci, commodo nec arcu sit amet, commodo sollicitudin est. Vestibulum ultricies malesuada tempor.</p>
					</section><!--//section-->
					
					<section class="docs-section" id="item-4-3">
						<h2 class="section-heading">Section Item 4.3</h2>
						<p>Vivamus efficitur fringilla ullamcorper. Cras condimentum condimentum mauris, vitae facilisis leo. Aliquam sagittis purus nisi, at commodo augue convallis id. Sed interdum turpis quis felis bibendum imperdiet. Mauris pellentesque urna eu leo gravida iaculis. In fringilla odio in felis ultricies porttitor. Donec at purus libero. Vestibulum libero orci, commodo nec arcu sit amet, commodo sollicitudin est. Vestibulum ultricies malesuada tempor.</p>
					</section><!--//section-->
			    </article><!--//docs-article-->
			    
			    <article class="docs-article" id="section-5">
				    <header class="docs-header">
					    <h1 class="docs-heading">Utilities</h1>
					    <section class="docs-intro">
						    <p>Section intro goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque finibus condimentum nisl id vulputate. Praesent aliquet varius eros interdum suscipit. Donec eu purus sed nibh convallis bibendum quis vitae turpis. Duis vestibulum diam lorem, vitae dapibus nibh facilisis a. Fusce in malesuada odio.</p>
						</section><!--//docs-intro-->
				    </header>
				     <section class="docs-section" id="item-5-1">
						<h2 class="section-heading">Section Item 5.1</h2>
						<p>Vivamus efficitur fringilla ullamcorper. Cras condimentum condimentum mauris, vitae facilisis leo. Aliquam sagittis purus nisi, at commodo augue convallis id. Sed interdum turpis quis felis bibendum imperdiet. Mauris pellentesque urna eu leo gravida iaculis. In fringilla odio in felis ultricies porttitor. Donec at purus libero. Vestibulum libero orci, commodo nec arcu sit amet, commodo sollicitudin est. Vestibulum ultricies malesuada tempor.</p>
					</section><!--//section-->
					
					<section class="docs-section" id="item-5-2">
						<h2 class="section-heading">Section Item 5.2</h2>
						<p>Vivamus efficitur fringilla ullamcorper. Cras condimentum condimentum mauris, vitae facilisis leo. Aliquam sagittis purus nisi, at commodo augue convallis id. Sed interdum turpis quis felis bibendum imperdiet. Mauris pellentesque urna eu leo gravida iaculis. In fringilla odio in felis ultricies porttitor. Donec at purus libero. Vestibulum libero orci, commodo nec arcu sit amet, commodo sollicitudin est. Vestibulum ultricies malesuada tempor.</p>
					</section><!--//section-->
					
					<section class="docs-section" id="item-5-3">
							<h2 class="section-heading">Section Item 5.3</h2>
						<p>Vivamus efficitur fringilla ullamcorper. Cras condimentum condimentum mauris, vitae facilisis leo. Aliquam sagittis purus nisi, at commodo augue convallis id. Sed interdum turpis quis felis bibendum imperdiet. Mauris pellentesque urna eu leo gravida iaculis. In fringilla odio in felis ultricies porttitor. Donec at purus libero. Vestibulum libero orci, commodo nec arcu sit amet, commodo sollicitudin est. Vestibulum ultricies malesuada tempor.</p>
					</section><!--//section-->
			    </article><!--//docs-article-->
			    
			    
		        <article class="docs-article" id="section-6">
				    <header class="docs-header">
					    <h1 class="docs-heading">Web</h1>
					    <section class="docs-intro">
						    <p>Section intro goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque finibus condimentum nisl id vulputate. Praesent aliquet varius eros interdum suscipit. Donec eu purus sed nibh convallis bibendum quis vitae turpis. Duis vestibulum diam lorem, vitae dapibus nibh facilisis a. Fusce in malesuada odio.</p>
						</section><!--//docs-intro-->
				    </header>
				     <section class="docs-section" id="item-6-1">
						<h2 class="section-heading">Section Item 6.1</h2>
						<p>Vivamus efficitur fringilla ullamcorper. Cras condimentum condimentum mauris, vitae facilisis leo. Aliquam sagittis purus nisi, at commodo augue convallis id. Sed interdum turpis quis felis bibendum imperdiet. Mauris pellentesque urna eu leo gravida iaculis. In fringilla odio in felis ultricies porttitor. Donec at purus libero. Vestibulum libero orci, commodo nec arcu sit amet, commodo sollicitudin est. Vestibulum ultricies malesuada tempor.</p>
					</section><!--//section-->
					
					<section class="docs-section" id="item-6-2">
						<h2 class="section-heading">Section Item 6.2</h2>
						<p>Vivamus efficitur fringilla ullamcorper. Cras condimentum condimentum mauris, vitae facilisis leo. Aliquam sagittis purus nisi, at commodo augue convallis id. Sed interdum turpis quis felis bibendum imperdiet. Mauris pellentesque urna eu leo gravida iaculis. In fringilla odio in felis ultricies porttitor. Donec at purus libero. Vestibulum libero orci, commodo nec arcu sit amet, commodo sollicitudin est. Vestibulum ultricies malesuada tempor.</p>
					</section><!--//section-->
					
					<section class="docs-section" id="item-6-3">
							<h2 class="section-heading">Section Item 6.3</h2>
						<p>Vivamus efficitur fringilla ullamcorper. Cras condimentum condimentum mauris, vitae facilisis leo. Aliquam sagittis purus nisi, at commodo augue convallis id. Sed interdum turpis quis felis bibendum imperdiet. Mauris pellentesque urna eu leo gravida iaculis. In fringilla odio in felis ultricies porttitor. Donec at purus libero. Vestibulum libero orci, commodo nec arcu sit amet, commodo sollicitudin est. Vestibulum ultricies malesuada tempor.</p>
					</section><!--//section-->
			    </article><!--//docs-article-->
			    
			    
			    <article class="docs-article" id="section-7">
				    <header class="docs-header">
					    <h1 class="docs-heading">Mobile</h1>
					    <section class="docs-intro">
						    <p>Section intro goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque finibus condimentum nisl id vulputate. Praesent aliquet varius eros interdum suscipit. Donec eu purus sed nibh convallis bibendum quis vitae turpis. Duis vestibulum diam lorem, vitae dapibus nibh facilisis a. Fusce in malesuada odio.</p>
						</section><!--//docs-intro-->
				    </header>
				     <section class="docs-section" id="item-7-1">
						<h2 class="section-heading">Section Item 7.1</h2>
						<p>Vivamus efficitur fringilla ullamcorper. Cras condimentum condimentum mauris, vitae facilisis leo. Aliquam sagittis purus nisi, at commodo augue convallis id. Sed interdum turpis quis felis bibendum imperdiet. Mauris pellentesque urna eu leo gravida iaculis. In fringilla odio in felis ultricies porttitor. Donec at purus libero. Vestibulum libero orci, commodo nec arcu sit amet, commodo sollicitudin est. Vestibulum ultricies malesuada tempor.</p>
					</section><!--//section-->
					
					<section class="docs-section" id="item-7-2">
						<h2 class="section-heading">Section Item 7.2</h2>
						<p>Vivamus efficitur fringilla ullamcorper. Cras condimentum condimentum mauris, vitae facilisis leo. Aliquam sagittis purus nisi, at commodo augue convallis id. Sed interdum turpis quis felis bibendum imperdiet. Mauris pellentesque urna eu leo gravida iaculis. In fringilla odio in felis ultricies porttitor. Donec at purus libero. Vestibulum libero orci, commodo nec arcu sit amet, commodo sollicitudin est. Vestibulum ultricies malesuada tempor.</p>
					</section><!--//section-->
					
					<section class="docs-section" id="item-7-3">
							<h2 class="section-heading">Section Item 7.3</h2>
						<p>Vivamus efficitur fringilla ullamcorper. Cras condimentum condimentum mauris, vitae facilisis leo. Aliquam sagittis purus nisi, at commodo augue convallis id. Sed interdum turpis quis felis bibendum imperdiet. Mauris pellentesque urna eu leo gravida iaculis. In fringilla odio in felis ultricies porttitor. Donec at purus libero. Vestibulum libero orci, commodo nec arcu sit amet, commodo sollicitudin est. Vestibulum ultricies malesuada tempor.</p>
					</section><!--//section-->
			    </article><!--//docs-article-->
			    
			    
			    <article class="docs-article" id="section-8">
				    <header class="docs-header">
					    <h1 class="docs-heading">Resources</h1>
					    <section class="docs-intro">
						    <p>Section intro goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque finibus condimentum nisl id vulputate. Praesent aliquet varius eros interdum suscipit. Donec eu purus sed nibh convallis bibendum quis vitae turpis. Duis vestibulum diam lorem, vitae dapibus nibh facilisis a. Fusce in malesuada odio.</p>
						</section><!--//docs-intro-->
				    </header>
				     <section class="docs-section" id="item-8-1">
						<h2 class="section-heading">Section Item 8.1</h2>
						<p>Vivamus efficitur fringilla ullamcorper. Cras condimentum condimentum mauris, vitae facilisis leo. Aliquam sagittis purus nisi, at commodo augue convallis id. Sed interdum turpis quis felis bibendum imperdiet. Mauris pellentesque urna eu leo gravida iaculis. In fringilla odio in felis ultricies porttitor. Donec at purus libero. Vestibulum libero orci, commodo nec arcu sit amet, commodo sollicitudin est. Vestibulum ultricies malesuada tempor.</p>
					</section><!--//section-->
					
					<section class="docs-section" id="item-8-2">
						<h2 class="section-heading">Section Item 8.2</h2>
						<p>Vivamus efficitur fringilla ullamcorper. Cras condimentum condimentum mauris, vitae facilisis leo. Aliquam sagittis purus nisi, at commodo augue convallis id. Sed interdum turpis quis felis bibendum imperdiet. Mauris pellentesque urna eu leo gravida iaculis. In fringilla odio in felis ultricies porttitor. Donec at purus libero. Vestibulum libero orci, commodo nec arcu sit amet, commodo sollicitudin est. Vestibulum ultricies malesuada tempor.</p>
					</section><!--//section-->
					
					<section class="docs-section" id="item-8-3">
							<h2 class="section-heading">Section Item 8.3</h2>
						<p>Vivamus efficitur fringilla ullamcorper. Cras condimentum condimentum mauris, vitae facilisis leo. Aliquam sagittis purus nisi, at commodo augue convallis id. Sed interdum turpis quis felis bibendum imperdiet. Mauris pellentesque urna eu leo gravida iaculis. In fringilla odio in felis ultricies porttitor. Donec at purus libero. Vestibulum libero orci, commodo nec arcu sit amet, commodo sollicitudin est. Vestibulum ultricies malesuada tempor.</p>
					</section><!--//section-->
			    </article><!--//docs-article-->
			    
			    
			    <article class="docs-article" id="section-9">
				    <header class="docs-header">
					    <h1 class="docs-heading">FAQs</h1>
					    <section class="docs-intro">
						    <p>Section intro goes here. You can list all your FAQs using the format below.</p>
						</section><!--//docs-intro-->
				    </header>
				     <section class="docs-section" id="item-9-1">
						<h2 class="section-heading">Section Item 9.1 <small>(FAQ Category One)</small></h2>
						<h5 class="pt-3"><i class="fas fa-question-circle mr-1"></i>What's sit amet quam eget lacinia?</h5>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.</p>
						<h5 class="pt-3"><i class="fas fa-question-circle mr-1"></i>How to ipsum dolor sit amet quam tortor?</h5>
						<p>Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan lorem in dui. </p>
						<h5 class="pt-3"><i class="fas fa-question-circle mr-1"></i>Can I  bibendum sodales?</h5>
						<p>Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan lorem in dui. </p>
						<h5 class="pt-3"><i class="fas fa-question-circle mr-1"></i>Where arcu sed urna gravida?</h5>
						<p>Aenean et sodales nisi, vel efficitur sapien. Quisque molestie diam libero, et elementum diam mollis ac. In dignissim aliquam est eget ullamcorper. Sed id sodales tortor, eu finibus leo. Vivamus dapibus sollicitudin justo vel fermentum. Curabitur nec arcu sed urna gravida lobortis. Donec lectus est, imperdiet eu viverra viverra, ultricies nec urna. </p>
					</section><!--//section-->
					
					<section class="docs-section" id="item-9-2">
						<h2 class="section-heading">Section Item 9.2 <small>(FAQ Category Two)</small></h2>
						<h5 class="pt-3"><i class="fas fa-question-circle mr-1"></i>What's sit amet quam eget lacinia?</h5>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.</p>
						<h5 class="pt-3"><i class="fas fa-question-circle mr-1"></i>How to ipsum dolor sit amet quam tortor?</h5>
						<p>Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan lorem in dui. </p>
						<h5 class="pt-3"><i class="fas fa-question-circle mr-1"></i>Can I  bibendum sodales?</h5>
						<p>Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan lorem in dui. </p>
						<h5 class="pt-3"><i class="fas fa-question-circle mr-1"></i>Where arcu sed urna gravida?</h5>
						<p>Aenean et sodales nisi, vel efficitur sapien. Quisque molestie diam libero, et elementum diam mollis ac. In dignissim aliquam est eget ullamcorper. Sed id sodales tortor, eu finibus leo. Vivamus dapibus sollicitudin justo vel fermentum. Curabitur nec arcu sed urna gravida lobortis. Donec lectus est, imperdiet eu viverra viverra, ultricies nec urna. </p>
					</section><!--//section-->
					
					<section class="docs-section" id="item-9-3">
							<h2 class="section-heading">Section Item 9.3 <small>(FAQ Category Three)</small></h2>
						    <h5 class="pt-3"><i class="fas fa-question-circle mr-1"></i>How to dapibus sollicitudin justo vel fermentum?</h5>
							<p>Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan lorem in dui. </p>
							<h5 class="pt-3"><i class="fas fa-question-circle mr-1"></i>How long bibendum sodales?</h5>
							<p>Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan lorem in dui. </p>
							<h5 class="pt-3"><i class="fas fa-question-circle mr-1"></i>Where dapibus sollicitudin?</h5>
							<p>Aenean et sodales nisi, vel efficitur sapien. Quisque molestie diam libero, et elementum diam mollis ac. In dignissim aliquam est eget ullamcorper. Sed id sodales tortor, eu finibus leo. Vivamus dapibus sollicitudin justo vel fermentum. Curabitur nec arcu sed urna gravida lobortis. Donec lectus est, imperdiet eu viverra viverra, ultricies nec urna. </p>
					</section><!--//section-->
			    </article><!--//docs-article-->

			    <footer class="footer">
				    <div class="container text-center py-5">
					    <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
				        <small class="copyright">Designed with <i class="fas fa-heart" style="color: #fb866a;"></i> by <a class="theme-link" href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers</small>
				        <ul class="social-list list-unstyled pt-4 mb-0">
						    <li class="list-inline-item"><a href="#"><i class="fab fa-github fa-fw"></i></a></li> 
				            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
				            <li class="list-inline-item"><a href="#"><i class="fab fa-slack fa-fw"></i></a></li>
				            <li class="list-inline-item"><a href="#"><i class="fab fa-product-hunt fa-fw"></i></a></li>
				            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f fa-fw"></i></a></li>
				            <li class="list-inline-item"><a href="#"><i class="fab fa-instagram fa-fw"></i></a></li>
				        </ul><!--//social-list-->
				    </div>
			    </footer>
		    </div> 
	    </div>
    </div><!--//docs-wrapper-->
    
   
       
    <!-- Javascript -->          
    <script src="<?php echo get_bloginfo('template_url'); ?>/assets/plugins/jquery-3.4.1.min.js"></script>
    <script src="<?php echo get_bloginfo('template_url'); ?>/assets/plugins/popper.min.js"></script>
    <script src="<?php echo get_bloginfo('template_url'); ?>/assets/plugins/bootstrap/js/bootstrap.min.js"></script>  
    
    
    <!-- Page Specific JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.8/highlight.min.js"></script>
    <script src="<?php echo get_bloginfo('template_url'); ?>/assets/js/highlight-custom.js"></script> 
    <script src="<?php echo get_bloginfo('template_url'); ?>/assets/plugins/jquery.scrollTo.min.js"></script>
    <script src="<?php echo get_bloginfo('template_url'); ?>/assets/plugins/lightbox/dist/ekko-lightbox.min.js"></script> 
    <script src="<?php echo get_bloginfo('template_url'); ?>/assets/js/docs.js"></script> 

</body>
</html> 
