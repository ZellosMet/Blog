<?require_once COMPONENTS."/header.php"?>

<main class="main" style="box-sizing: border-box">
  <div class="row" style="--bs-gutter-x: 0;">
    <div class="col-2 bg-dark">
      <?require_once COMPONENTS."/sidebar.php"?>
    </div>  
    <div class="col-10 py-3 px-3">   
      <div class="card mb-3 text-white bg-dark">
        <form method = POST>
        <div class="form-group mb-3">
            <label for="title">Title:</label>
            <input id="title" name="title" type="text" class="form-control" placeholder="Post title" value="<?= OldPostData('title')?>">
            <?= (isset($validator)) ? $validator->LisrErrors("title") : "" ?>            
        </div>
        <div class="form-group mb-3">
            <label for="excerpt">Excerpt:</label>
            <textarea id="excerpt" name="excerpt" type="text" class="form-control" placeholder="Post excerpt" rows="2"><?= OldPostData('excerpt')?></textarea>
            <?= (isset($validator)) ? $validator->LisrErrors("excerpt") : "" ?>
        </div>
        <div class="form-group mb-3">
            <label for="content">Content</label>
            <textarea id="content" name="content" type="text" class="form-control" placeholder="Post description" rows="10"><?= OldPostData('content')?></textarea>
            <?= (isset($validator)) ? $validator->LisrErrors("content") : "" ?>
        </div>        
        <button type="submit" class="btn btn-primary" name="publish_btn">Publish</button>
        </form>
      </div>               
    </div>               
  </div> 
</main>              
   
<?require_once COMPONENTS."/footer.php"?>