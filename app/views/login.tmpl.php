<?require_once COMPONENTS."/header.php"?>

<main class="main" style="box-sizing: border-box">
  <div class="row" style="--bs-gutter-x: 0;">
    <div class="col-6 py-3 px-3">   
      <div class="card mb-3 text-white bg-dark" style=" min-height: 100%">
        <form method = POST>
        <div class="form-group mb-3">
            <label for="user_login">Login:</label>
            <input id="user_login" name="user_login" type="text" class="form-control" placeholder="Login">
        </div>
        <div class="form-group mb-3">
            <label for="user_password">Password</label>
            <input id="user_password" name="user_password" type="password" class="form-control" placeholder="Password">
        </div>          
        <button type="submit" class="btn btn-primary" name="register_btn">Login</button>
        <!-- Если есть ошибки-->
        <? if(!empty($errors)):?>
          <div class="card mb-3 bg-dark" style="color: red">
            <p class="card-text"><?=$errors?></p>
          </div>
        <?endif;?>
        <!-- Если пользователь найден в БД-->              
        <? if($is_success):?>
          <div class="card mb-3 bg-dark" style="color: green">    
              <p>Hello, <?= $find_user?>!</p>
            </div>
        <?endif;?>

        </form>
      </div>               
    </div>               
  </div> 
</main>              
   
<?require_once COMPONENTS."/footer.php"?>