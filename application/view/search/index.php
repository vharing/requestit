
<div class="container">
	<div class="row">
      
      <div class="twelve columns" style="margin-top: 1%">
      	<h3>Search Portal</h3>
      </div><!--end of twelve columns-->
    
    </div><!--end of row-->  
		<p class="subline">Please enter your request below.</p>
  		
  		<div class="row" >

  		  <form method="GET" id="search_form">
<!-- 
	LEFT column ______________________________________________________________________________ 
-->
  			<div class="one-half column" style="margin-top: 2%">

				    <label for="lastName">Last Name</label>
				    <input class="u-full-width" type="text" placeholder="Smith" id="lastName">
				    
				    <label for="firstName">First Name</label>
				    <input class="u-full-width" type="text" placeholder="John" id="firstName">
				  	
				    <label for="middleInitial">Middle Initial</label>
				    <input class="u-full-width" type="text" placeholder="J." id="middleInitial">
				    
				    <label class="example-send-yourself-copy">
					    <input type="checkbox">
					    <span class="label-body">Search all names</span>
					</label>
				  	
					<label for="requestNo">Request Number</label>
				    <input class="u-full-width" type="text" placeholder="9021omg" id="requestNo">

				  	<input type="submit" value="Search">
				  	<input type="reset" value="Reset">
			</div>
<!-- 
	RIGHT column _____________________________________________________________________________ 
--> 
			<div class="one-half column" style="margin-top: 2%"> 

			    <label for="Filters">Filters</label>
			    <label class="example-send-yourself-copy">
				    <input type="checkbox">
				    <span class="label-body">Main Campus</span>
				</label>
				<label class="example-send-yourself-copy">
				    <input type="checkbox">
				    <span class="label-body">Monroe Campus</span>
				</label>
				<label class="example-send-yourself-copy">
				    <input type="checkbox">
				    <span class="label-body">Fowler Campus</span>
				</label>
				<label class="example-send-yourself-copy">
				    <input type="checkbox">
				    <span class="label-body">Select Date Range</span>
				</label>

	<!-- DATEPICKER -->

				<label for="from">From</label>
				<input type="text" id="from" name="from">
				<label for="to">to</label>
				<input type="text" id="to" name="to">
					
			</div>

		  </form>
		</div>
</div>









