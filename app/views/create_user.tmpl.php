<?require_once COMPONENTS."/header.php"?>

<main class="main" style="box-sizing: border-box">
  <div class="row" style="--bs-gutter-x: 0;">
    <div class="col-6 py-3 px-3">   
      <div class="card mb-3 text-white bg-dark" style=" min-height: 100%">

        <!-- Форма регистрации-->
        <form method = POST>
        <div class="form-group mb-3">
            <label for="user_login">Login:</label>
            <input id="user_login" name="user_login" type="text" class="form-control" placeholder="Login">
        </div>
        <div class="form-group mb-3">
            <label for="user_email">Email:</label>
            <input id="user_email" name="user_email" type="email" class="form-control" placeholder="Email">
        </div>
        <div class="form-group mb-3">
            <label for="user_password">Password</label>
            <input id="user_password" name="user_password" type="password" class="form-control" placeholder="Password">
        </div>
        <div class="form-group mb-3">
            <label for="confirm_password">Confirm password</label>
            <input id="confirm_password" name="confirm_password" type="password" class="form-control" placeholder="Confirm password">
        </div>           
        <button type="submit" class="btn btn-primary" name="register_btn">Registration</button>

        <!-- Выводим список ошибок-->
        <? if(!empty($errors)) foreach($errors as $error) :?>
          <div class="card mb-3 bg-dark" style="color: red">
            <p class="card-text"><?=$error?></p>
          </div>
        <?endforeach;?>

        <!-- Если пользователя удалось зарегистрировать-->
        <? if($is_success != ""):?>
            <div class="card mb-3 bg-dark" style="color: green">    
              <?= $is_success?>
            </div>  
        <?endif?>

        </form>
      </div>               
    </div>               
  </div> 
</main>              
   
<?require_once COMPONENTS."/footer.php"?>