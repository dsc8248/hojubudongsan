<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

    <?php hide($content['field_type']); ?>
    <?php hide($content['comments']); ?>
    <?php hide($content['links']); ?>
    <?php hide($content['field_tags']); ?>
    <?php hide($content['field_general_amenities']); ?>
		<?php hide($content['field_address']); ?>

    <div class="pull-left overview">
        <div class="row">
            <div class="span3">
                <div class="table">
										<?php print render($content['field_sales_type']); ?>
                    <?php print render($content['field_contract_type']); ?>
                    <?php print render($content['field_type']); ?>
										<?php print render($content['field_price']); ?>
                    <?php	print render($content['field_location']); ?>
                    <?php print render($content['field_bathrooms']); ?>
                    <?php print render($content['field_bedrooms']); ?>
                    <?php print render($content['field_area']); ?>
                </div><!-- /.table -->
            </div><!-- /.span2 -->
        </div><!-- /.row -->
    </div><!-- /.overview -->

    <?php print render($content); ?>

		<?php if (!empty($content['field_general_amenities']['#items'])): ?>
    <h2 class="general-amenities"><?php print t('General amenities'); ?></h2>
    <?php print render($content['field_general_amenities']); ?>
		<?php endif; ?>

		<?php if (!empty($content['field_address']['#items'])): ?>
		<h2 class="map"><?php print t('Map'); ?></h2>
		<?php print render($content['field_address']); ?>
		<?php endif; ?>

		<?php if (!empty($content['field_tags']) || !empty($content['links'])): ?>

    <footer>
        <?php print render($content['field_tags']); ?>
        <?php print render($content['links']); ?>
    </footer>

    <?php endif; ?>

    <?php print render($content['comments']); ?>

</article> <!-- /.node -->
