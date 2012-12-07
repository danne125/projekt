		<!---detta ska laddas in på kommande -->			
						<h2> Spelare </h2>
						<ul class="spelarlista"> 
							<?php
							for ($i=0; $i < $spelarquery->rowCount(); $i++) {
	
									echo "<li class='drag'>". $spelare[$i]['name'] . "</li>";
								}
						
							?>
							
						</ul>	
						
						
						<ul class="pitch"></ul>
						
<div class="comments"> 
	
	<h2>Kommentarer</h2>
		<form>
			<p>Skriv</p><input type="text" name="" />
			
		</form>
		
	
</div>
