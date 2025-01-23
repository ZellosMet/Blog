<div class="d-flex flex-column flex-shrink-0 text-white bg-dark" >
                    <hr>                
                    <h3 class="px-3">Most popular</h3>
                <?foreach ($most_popular_posts as $link) : ?>
                  <a href=<?=$link["slug"]?> class="nav-link text-white active" aria-current="page"><?=$link["title"]?></a>
                <? endforeach; ?>
                
    </div>