<h1>Bravo</h1>

<p>Votre lien a bien ete raccourci</p>
<p>
      <a href="<?= $this->Html->url(array('action' => 'view', $id)); ?>" class="button">
            <?= $this->Html->url(array('action' => 'view', $id), true);?>
      </a>
</p>
