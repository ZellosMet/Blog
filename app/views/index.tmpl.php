<?require_once COMPONENTS."/header.php"?>

      
      <main class="main" style="box-sizing: border-box">
        <div class="row" style="--bs-gutter-x: 0;">
          
            <!-- СайдБар -->
          
            <div class="col-2 bg-dark">
            <?require_once COMPONENTS."/sidebar.php"?>
            </div>  

              <!-- Посты -->   
              <div class="col-10 py-3 px-3 bg-secondary">   
                <h3 class="text-white"><?= $headers ?? ""?></h3>
                <? foreach($posts as $post) :?>
                  <div class="card mb-3 text-white bg-dark">
                  <div class="row g-0">
                    <div class="col-md-4">
                      <img src=<?=$post["img"]?> class="img-fluid rounded-start" alt="Image">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title"><?=$post["title"]?></h5>
                        <p class="card-text"><?=$post["desc"]?></p>
                        <p class="card-text"><small class="text-muted">Обновлено 3 минуты назад</small></p>
                      </div>
                    </div>
                  </div>
                </div>
                <?endforeach;?>

              </div>                
            </div>
        </main>  
       
<?require_once COMPONENTS."/footer.php"?>
    
 