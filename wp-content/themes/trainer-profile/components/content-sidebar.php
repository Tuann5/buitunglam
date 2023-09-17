<div class="sticky sidebar">
    <h3>Chuyên mục</h3>
    <ul>
        <?php 
            $categories = get_categories();

            foreach($categories as $category) {
                echo '<li class="li-space"><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
            }
        ?>
    </ul>  
</div>