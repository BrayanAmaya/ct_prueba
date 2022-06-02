<?=$this->extend('admin/main')?>

<?=$this->section('title')?>
Actualizar usuario
<?=$this->endSection()?>
<?=$this->section('css')?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css
">
<link rel="stylesheet" href="/assets/css/style_admin.css">
<?=$this->endSection()?>
<?=$this->section('content')?>
<div class="container">
    <h1><?= $mostrar->nombre ?></h1>
    <h1><?= $mostrar->apellido ?></h1>
    <h1><?= $mostrar->usuario ?></h1>
    <h1><?= $mostrar->email ?></h1>
    <h1><?= $mostrar->estado ?></h1>
    <h1><?= $mostrar->dui ?></h1>
    <h1><?= $mostrar->telefono ?></h1>
    <h1><?= $mostrar->idRol ?></h1>
</div>
<?=$this->endSection()?>