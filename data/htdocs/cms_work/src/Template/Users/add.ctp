<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->control('name', ["label" => "ユーザー名"]);
            echo $this->Form->control('email', [
                "label" => "メーアルドレス",
                "type" => "email"
            ]);
            echo $this->Form->control('password',[
                "label" => "パスワード",
                "type" => "password"
            ]);
            echo $this->Form->control('role', [
                "label" => "役割",
                "options" => ["admin" => "管理者", "author" => "会員"]
            ]);

            // echo $this->Form->control('created_at', ['empty' => true]);
            // echo $this->Form->control('updated_at', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Html->link(__("アカウントをお持ちの方"), ["action" => "login"]) ?>
    <?= $this->Form->button(__('登録する')) ?>
    <?= $this->Form->end() ?>
</div>
