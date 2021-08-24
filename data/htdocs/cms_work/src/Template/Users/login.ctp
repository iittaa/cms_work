<div class="users form large-9 medium-8 columns content">
    <?= $this->Flash->render() ?>
    <?= $this->Form->create() ?>
        <fieldset>
            <?= $this->Form->control("email", [
                "label" => "メールアドレス",
                "type" => "email"
            ]) ?>
            <?= $this->Form->control("password", [
                "label" => "パスワード",
                "type" => "password"
                ]) ?>
        </fieldset>
        <?= $this->Form->button("ログイン") ?>
    <?= $this->Form->end() ?>
</div>
