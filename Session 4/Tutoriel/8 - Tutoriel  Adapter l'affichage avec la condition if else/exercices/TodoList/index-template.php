<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ma Todo List</title>
  <link rel="stylesheet" href="style.css">
  <!-- FontAwesome Font for Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

  <div class="container">
    
    <!-- Header -->
    <header class="header">
      <div class="logo-box">
        <i class="fa-solid fa-clipboard-check"></i>
      </div>
      <div class="header-text">
        <h1>Ma Todo List</h1>
        <p>Gérez et suivez vos tâches quotidiennes</p>
      </div>
    </header>
<?php 

$Termine=0;
$nonTermine=0;
 foreach($taches as $tache ){
  if ($tache['terminee']==true){
    $Termine++;
  }
  else{
    $nonTermine++;
  }
  }?>
    <!-- Stats Cards -->
    <section class="stats-grid">
      <div class="stat-card">
        <div class="stat-icon icon-blue">
          <i class="fa-solid fa-layer-group"></i>
        </div>
        <div class="stat-info">
          <span class="stat-title">Total</span>
          <div class="stat-value"><?= count($taches); ?> <span class="stat-unit">tâches</span></div>
        </div>
      </div>

      <div class="stat-card">
        <div class="stat-icon icon-green">
          <i class="fa-solid fa-check"></i>
        </div>
        <div class="stat-info">
          <span class="stat-title">Terminées</span>
          <div class="stat-value"><?= $Termine ." "?><span class="stat-unit">tâches</span></div>
        </div>
      </div>

      <div class="stat-card">
        <div class="stat-icon icon-gray">
          <i class="fa-regular fa-circle"></i>
        </div>
        <div class="stat-info">
          <span class="stat-title">Non terminées</span>
          <div class="stat-value"><?= $nonTermine ." "?><span class="stat-unit">tâches</span></div>
        </div>
      </div>
    </section>

    <!-- Tasks List Section -->
    <section class="tasks-section">
      <div class="section-title">
        <i class="fa-solid fa-list-check"></i>
        <h2>Liste des tâches</h2>
      </div>

     
    <?php foreach($taches as $tache):?>
      <?php if($tache['terminee']==true):?>
      <div class="tasks-list">

        <!-- Task 1 (Terminée, Haute) -->
        <div class="task-card completed">
          <div class="task-checkbox">
            <i class="fa-solid fa-square-check"></i>
          </div>
          <div class="task-content">
            <h3 class="task-title"><?= $tache['titre'] ?></h3>
            <p class="task-desc"><?= $tache['description']?></p>
          </div>
          <div class="task-tags">
            <span class="priority-badge haute"><?=$tache['priorite'] ?></span>
            <span class="task-date"><i class="fa-regular fa-calendar"></i> <?= $tache['date_limite'] ?></span>
          </div>
        </div>
         
        
        <?php else : ?>

        <!-- Task 2 (Non terminée, Moyenne) -->
        <div class="task-card">
          <div class="task-checkbox">
            <i class="fa-regular fa-square"></i>
          </div>
          <div class="task-content">
            <h3 class="task-title"><?= $tache['titre']?></h3>
            <p class="task-desc"><?= $tache['description']?></p>
          </div>
          <div class="task-tags">
            <span class="priority-badge moyenne"><?=$tache['priorite'] ?></span>
            <span class="task-date"><i class="fa-regular fa-calendar"></i> <?= $tache['date_limite'] ?></span>
          </div>
        </div>
<?php endif; ?>
<?php endforeach;?>




      </div>
    </section>

  </div>

</body>
</html>