<html>
<head>
    
  <!-- Load the jQuery UI CSS -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
  
  <!-- Load jQuery and jQuery UI -->
  <script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="//code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  
  <!-- jqPagination library: http://beneverard.github.io/jqPagination/#installation -->
  <script src="/jq.pagination.js"></script>
  
  
  <!-- jqPagination styles -->
  <link rel="stylesheet" href="/jqPagination.css" />
  
  <!-- jQuery UI Slider code -->
  <script>
  
  // When the browser is ready...
  $(document).ready(function() {
  



    // Call the jqPagination constructor to start the 
    // rendering of the paginated buttons below.
    $('.pagination').jqPagination({
     // Set the max number of pages
    	max_page	: 40,
      // set the call back function for when a page change has been requested
    	paged		: function(page) {
    		$('#output').append('<li>Requested page ' + page + '</li>');
    	}
    });
    
  });
  
  
  
  
  
  
  </script>
</head>
<body>
  <p>
    Click the Arrays to navigate the jQuery pagination UI
  </p>
  
  
  
  
  <!--
    This is the jqPagination div markup 
  -->
  <br>
	<div class="pagination" style"padding-bottom: 100px">
	    <a href="#" class="first" data-action="first">
        &laquo;
      </a>
	    <a href="#" class="previous" data-action="previous">
        &lsaquo;
      </a>
	    <input type="text" readonly="readonly" />
	    <a href="#" class="next" data-action="next">
        &rsaquo;
      </a>
	    <a href="#" class="last" data-action="last">
        &raquo;
      </a>
	</div>
  
  
  
  
  
  
  
  
  <br>
  <div>
    <ul id="output">
    </ul>
  </div>  

</body>
</html>