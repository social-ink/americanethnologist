<?php foreach ($page->children()->visible() as $p): ?>
  <a class="sans col-sm-3" href="<?php echo $p->url() ?>">
    <h6><?php echo $p->award_year() ?> <?php echo $p->award_type() ?></h6>
    <?php if ($p->images()->count() > 0): ?>
      <img src="<?php echo $p->images()->first()->url() ?>" class="img-fluid mb-1" alt="">
    <?php endif; ?>
    <h4><?php echo $p->awardee_title() ?></h4>
    <h6>by <?php echo $p->awardee_name() ?></h6>
  </a>
<?php endforeach; ?>