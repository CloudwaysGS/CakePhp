<h1>Raccourcir un lien</h1>
<?= $this->Form->create('Link'); ?>
<?= $this->Form->input('url', array('lable' =>
 'Votre lien', 'placeholder'=>'http://monlien.fr'
 ));?>
<?= $this->Form->end('Raccourcir'); ?>