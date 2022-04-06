<div class="hcf_box" name="x">
    <p class="meta-options hcf_field">
        <label for="hcf_title">Title</label>
        <input id="hcf_title"
            type="text"
            name="hcf_title"
            value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'hcf_title', true ) ); ?>">
    </p>
    <p class="meta-options hcf_field">
        <label for="hcf_published_date">Published Date</label>
        <input id="hcf_published_date"
            type="date"
            name="hcf_published_date"
           value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'hcf_published_date', true ) ); ?>">
    </p>
    <p class="meta-options hcf_field">
        <label for="hcf_description">description</label>
        <input id="hcf_description"
            type="number"
            name="hcf_description"
            value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'hcf_description', true ) ); ?>">
    </p>
</div>
