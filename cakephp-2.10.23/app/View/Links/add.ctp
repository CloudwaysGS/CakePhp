<h1>User</h1>


<?= $this->Form->submit('Ajouter'); ?>
<?= $this->Form->create('Link'); ?>
<?= $this->Form->input('url', array('lable' =>
 'Votre lien', 'placeholder'=>'http://monlien.fr'
 ));?>
<?= $this->Form->end('Raccourcir'); ?>