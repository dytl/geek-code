<?php
include_once('./WinForm.php');
include_once('./PictureComponent.php');
include_once('./ButtonComponent.php');
include_once('./FrameComponent.php');
include_once('./TextBoxComponent.php');
include_once('./PasswordBoxComponent.php');
include_once('./CheckBoxComponent.php');
include_once('./PasswordBoxComponent.php');
include_once('./LinkLableComponent.php');
include_once('./LableComponent.php');

$win_form = new WinForm('WINDOW窗口');
$win_form->addComponest(new PictureComponent('LOGO图片'));
$win_form->addComponest(new ButtonComponent('登录'));
$win_form->addComponest(new ButtonComponent('注册'));

$frame = new FrameComponent('FRAME1');
$frame->addComponest(new LableComponent('用户名'));
$frame->addComponest(new TextBoxComponent('文本框'));
$frame->addComponest(new LableComponent('密码'));
$frame->addComponest(new PasswordBoxComponent('密码框'));
$frame->addComponest(new CheckBoxComponent('复选框'));
$frame->addComponest(new TextBoxComponent('记住用户名'));
$frame->addComponest(new LinkLableComponent('忘记密码'));

$win_form->addComponest($frame);
$win_form->printFun();

