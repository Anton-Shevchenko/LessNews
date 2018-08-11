<div id="demo" class="carousel slide" data-ride="carousel" align="center">
 
  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->

  
      <div class="carousel-inner">
         <div class="carousel-item active">
          <img src="../../../public/image/news/44.jpg">
        </div>
        <?php foreach ($last as $row): ?>
        <div class="carousel-item" id="<?=$row['id']; ?>">
          <img src="../../../public/image/news/<?=$row['id'];?>.jpg">
          <div class="carousel-caption">
              <p><?php echo $row['name']; ?></p>
          </div>
        </div>
        <?php endforeach; ?>
      </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>


<?php for ($i=0; $i < count($news)+1; $i++): ?>
       
            <div class="panel-body">
                <h1><a href="/category/view/?id=<?=$news[$i][0]['category_id']?>&page=1"><?= @$news[$i][0]['category'] ?></a></h1>

            </div>
            <?php foreach (@$news[$i] as $article): ?>
               
                    <div class="panel-heading"><a href="/news/index?id=<?= $article['article_id'] ?>&page=1"><?= $article['title'] ?></a></div>
                    <div class="panel-body">
                        <?= isset($article['name']) ? $article['name'] : ' '; ?>
                    <div class="panel-body">
                        <?php if (is_array($article['tag'])): ?>

                            <?php for($k=0; $k < count($article['tag']);$k++):?>
                                <a href="/main/tag?tag=<?= $article['tag'][$k] ?>"><?= $article['tag'][$k] ?></a>
                            <?php endfor;?>

                        <?php else: ?>

                            <a href="/main/tag?tag=<?= $article['tag'] ?>"><?= $article['tag'] ?></a>
                            
                        <?php endif ?> 
                    </div>
                    <br />
                </div>
            <?php endforeach; ?>
        
<?php endfor; ?>
