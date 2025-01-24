<?require_once COMPONENTS."/header.php"?>

<main class="main" style="box-sizing: border-box">
  <div class="row" style="--bs-gutter-x: 0;">
    <div class="col-2 bg-dark">
      <?require_once COMPONENTS."/sidebar.php"?>
    </div>  
    <div class="col-10 py-3 px-3 bg-secondary">   
      <h3 class="text-white bg-secondary"><?= $header ?? ""?></h3> 
      <span class="text-white bg-secondary"><?= $contacts ?? ""?></snap> 
    </div>               
  </div>               
   
<?require_once COMPONENTS."/footer.php"?>