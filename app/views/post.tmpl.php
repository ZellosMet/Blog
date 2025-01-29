<?require_once COMPONENTS."/header.php"?>

<main class="main" style="box-sizing: border-box">
  <div class="row" style="--bs-gutter-x: 0;">
    <div class="col-2 bg-dark">
      <?require_once COMPONENTS."/sidebar.php"?>
    </div>  
    <div class="col-10 py-3 px-3 bg-secondary">   
      <div class="card mb-3 text-white bg-dark">
        <div class="row g-0">
          <div class="col-md-4">
            <img src=<?=$post["img_path"]?> class="img-fluid rounded-start" alt="Image">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title"><?=$post["title"]?></h5>
              <p class="card-text"><?=$post["content"]?></p>
              <hr>
              <div style="display: flex; flex-direction: row;">
                <p class="card-text">Popularity: <?=$popular?> </p>
                <form method = POST>
                  <button class="bg-dark" type="submit" name="incr_poopulsr" style="width: 30px; height: 30px"> <img src="assets/imgs/cards/thumbs_up.png" style="width: 15px; height: 15px"> </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>               
  </div> 
</main>              
   
<?require_once COMPONENTS."/footer.php"?>