<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <div class="col-sm-4 col-sm-offset-4 padding-right">
                
                <?php if ($result): ?>
                    <p>Вы зарегистрированы!</p>
                <?php else: ?>
                    <?php if (isset($errors) && is_array($errors)): ?>
                        <ul>
                            <?php foreach ($errors as $error): ?>
                                <li> - <?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>

                    <div class="signup-form"><!--sign up form-->
                        <h2>Регистрация на сайте</h2>
                        <form action="#" method="post">
                            <input type="text" name="name" placeholder="Имя" value="<?php echo $name; ?>"/>
                            <input type="text" name="surname" placeholder="Фамилия" value="<?php echo $surname; ?>"/>
                            <input type="text" name="secondname" placeholder="Отчество" value="<?php echo $secondname; ?>"/>
                            <input type="email" name="email" placeholder="E-mail" value="<?php echo $email; ?>"/>
                            <input type="password" name="password" placeholder="Пароль" value="<?php echo $password; ?>"/>
                            <label class="container1">Я подтверждаю согласие на обработку персональных данных в соотвествии с федеральным законом <a href="http://www.consultant.ru/cons/cgi/online.cgi?req=doc&base=LAW&n=286959&fld=134&dst=1000000001,0&rnd=0.21050761970264387#019597009181987213">№152-ФЗ «О персональных данных»</a>.
                                <input type="checkbox" name="check" checked="checked">
                                <span class="checkmark"></span>
                            </label>
                            <br><br>
                            <input type="submit" name="submit" class="btn btn-default" value="Регистрация" />
                        </form>
                    </div><!--/sign up form-->
                
                <?php endif; ?>
                <br/>
                <br/>
            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>