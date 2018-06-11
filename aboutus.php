<?php session_start();?>

<!DOCTYPE html >
<head>
		<?php
			include("includes/head.inc.php");
		?>
</head>

<body>
			
				<div id="header">
					<div id="menu">
						<?php
							include("includes/menu.inc.php");
						?>
					</div>
				</div>
				
				<div id="logo-wrap">
					<div id="logo">
							<?php
								include("includes/logo.inc.php");
							?>
					</div>
				</div>
			
			
			

				<div id="page">
		
					<div id="content">
						<div class="post">
							<h1 class="title">About Us</h1>
							<div class="entry" style="height:auto">
								<p>book shop </p>
							</div>
							
						</div>
						
					</div>
					<div id="sidebar">
							<?php
								include("includes/search.inc.php");
							?>
					</div>
					<div style="clear: both;">&nbsp;</div>
				</div>
				<div id="footer">
							<?php
								include("includes/footer.inc.php");
							?>
				</div>
</body>
</html>
