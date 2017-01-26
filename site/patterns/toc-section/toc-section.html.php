<h2 class="mt-3 text-xs-center"><?php echo $module->title() ?></h2>
<hr>
<?php $articles = $module->articles()->toStructure(); ?>
<?php foreach ($articles as $a): ?>
  <?php $a = page($a); ?>
  <div class="row">
    <a href="<?php echo $a->url() ?>" class="mt-3 d-block text-xs-center">
      <h3 class="mb-0"><?php echo $a->title() ?></h3>
      <h4 class="mb-1 bentonsanscondensedregular"><?php echo $a->subtitle() ?></h4>
      <p class="gray--600"><em>by</em> <strong><?php echo $a->author() ?></strong></p>
      <?php if ($a->hasImages()): ?>
        <img src="<?php echo $a->images()->first()->resize(500,500)->url() ?>" alt="">
      <?php endif; ?>
    </a>
    <?php if ($a->related()->isNotEmpty()): ?>
      <?php $r = page($a->related()) ?>
      <div class="card bg-background col-sm-8 offset-sm-2 mt-1">
        <div class="card-block">
          <div class="media">
            <?php if ($r->hasImages()): ?>
              <a class="media-left" href="<?php echo $r->url() ?>">
                  <img class="media-object" src="<?php echo $r->images()->first()->resize(100,100)->url() ?>" alt="Generic placeholder image">
              </a>
            <?php endif; ?>
            <div class="media-body pl-1">
              <h6 class="bentonsansrebold" style="opacity:.65"><?php echo $r->parent()->title() ?></h6>
              <h6 class="media-heading bentonsansreregular" style="line-height:1.35;"><a href="<?php echo $r->url() ?>"><?php echo $r->title() ?></a></h6>
            </div>
          </div>
        </div>
      </div>
    <?php endif ?>
  </div>
<?php endforeach; ?>
