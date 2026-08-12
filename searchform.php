<form method="get" action="<?php echo esc_url(home_url('/')); ?>"></form>
<div class="input-group rounded">
    <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" name="s" />
    <input type="hidden" name="post_type" value="post">
    <span class="input-group-text border-0" id="search-addon">
        <button type="submit">Search</button>
    </span>
</div>
</form>