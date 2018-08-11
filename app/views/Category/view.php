<?php foreach ($articles as $article): ?>
    <div class="col-md-12 col-lg-12 col-sm-12 col-xl-12 ">
        <div class="panel-heading"><a href="/news/index?id=<?=$article['id'];?>&page=<?=$_GET['page'];?>"><?= $article['name']; ?></a></div>
        <div class="panel-body">
            <?= $article['hits'] ?>
        </div>
        <br />
    </div>
<?php endforeach; ?>

<div align="center">
    <nav aria-label="Page navigation example">
      <ul class="pagination">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
        <li id="paga" class="page-item"><a class="page-link" href="/category/view/?id=<?=$_GET['id'];?>&page=1">1</a></li>
        <li id="vert" class="page-item"><a class="page-link" onclick="pagination()">...</a></li>
        <div id="pag" style="display: none;">
            <?php for ($i=2; $i <= $count_page - 1; $i++): ?>
                <li class="page-item"><a class="page-link" href="/category/view/?id=<?=$_GET['id'];?>&page=<?=$i;?>"><?php echo $i; ?></a></li>
            <?php endfor; ?>
        </div>
        <li class="page-item"><a class="page-link" href="/category/view/?id=<?=$_GET['id'];?>&page=<?=$count_page; ?>"><?=$count_page; ?></a></li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
      </ul>
    </nav>
</div>



