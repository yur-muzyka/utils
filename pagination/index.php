<link rel="stylesheet" href="//code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<script src="//code.jquery.com/jquery-1.9.1.js"></script>
<script src="//code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

<script src="/jq.pagination.js"></script>
<link rel="stylesheet" href="/jqPagination.css" />

<script>
    $(document).ready(function() {
        $('.pagination').jqPagination({
            max_page	: 40,
            paged		: function(page) {
                $('#output').append('<li>Requested page ' + page + '</li>');
            }
        });
    });
</script>

<p>
    Click the Arrays to navigate the jQuery pagination UI
</p>
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
    <ul id="output"></ul>
</div>  
