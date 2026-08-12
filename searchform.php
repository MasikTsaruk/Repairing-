<form
    class="search-form"
    method="get"
    action="<?php echo esc_url(home_url('/')); ?>">
    <input
        type="search"
        name="s"
        value="<?php echo esc_attr(get_search_query()); ?>"
        placeholder="Поиск...">

    <input type="hidden" name="post_type" value="post">

    <button type="submit">
        Найти
    </button>
</form>