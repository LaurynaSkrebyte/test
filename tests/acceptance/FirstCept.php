<?php
$I = new AcceptanceTester($scenario);
        $I->amOnPage('/');
        $I->see('naudojimui'); 
        $I->wantTo('log in as regular user');
        $I->amOnPage('/lt/login');
        $I->fillField('evp_user_login_form[login_username]','admin');
        $I->fillField('login_password_tmp','admin');
        $I->click('evp_user_login_form[login]');
        $I->lookForwardTo('access website features for logged-in users');
?>
