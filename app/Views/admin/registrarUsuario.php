<?=$this->extend('admin/main')?>

<?=$this->section('title')?>
Registrar usuario
<?=$this->endSection()?>
<?=$this->section('css')?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css
">
<link rel="stylesheet" href="/assets/css/style_admin.css">
<?=$this->endSection()?>
<?=$this->section('content')?>
<section class="section">
    <?php if(session('msg')):?>
    <article class="message is-<?=session('msg.type')?>">
        <div class="message-body">
            <?=session('msg.body')?>
        </div>
    </article>
    <?php endif; ?>
    <h1 class="title">Registrar un nuevo usuario</h1>
    <h2 class="subtitle">
        Llena los siguientes datos para agregar un nuevo usuario.
    </h2>
    <form action="<?=base_url('admin/registrar')?>" method="POST">
        <div class="field">
            <label class="label">Nombres</label>
            <div class="control">
                <input name='nombre' value='<?=old('nombre')?>' class="input" type="text"
                    placeholder="Ej: Melvin Marvin">
            </div>
            <p class="is-danger help"><?=session('errors.nombre')?></p>
        </div>

        <div class="field">
            <label class="label">Apellidos</label>
            <div class="control">
                <input name='apellido' value='<?=old('apellido')?>' class="input" type="text"
                    placeholder="Ej: Quintanilla Saldivar">
            </div>
            <p class="is-danger help"><?=session('errors.apellido')?></p>
        </div>

        <div class="field">
            <label class="label">Correo Electronico</label>
            <div class="control has-icons-left has-icons-right">
                <input name='email' value='<?=old('email')?>' class="input" type="" placeholder="email@gmail.com"
                    value="">
                <span class="icon is-small is-left">
                    <i class="fas fa-envelope"></i>
                </span>
                <span class="icon is-small is-right">
                    <i class="fas fa-exclamation-triangle"></i>
                </span>
            </div>
            <p class="is-danger help"><?=session('errors.email')?></p>
        </div>

        <div class="field">
            <label class="label">Número de telefono</label>
            <div class="control">
                <input name='telefono' value='<?=old('telefono')?>' class="input" type="text" placeholder="75757575">
            </div>
            <p class="is-danger help"><?=session('errors.telefono')?></p>
        </div>

        <div class="field">
            <label class="label">Número de DUI</label>
            <div class="control">
                <input name='dui' value='<?=old('dui')?>' class="input" type="text" placeholder="00000000-0">
            </div>
            <p class="is-danger help"><?=session('errors.dui')?></p>
        </div>

        <div class="field">
            <label class="label">Contraseña</label>
            <div class="control">
                <input name='password' class="input" type="text" placeholder="Contraseña">
            </div>
            <p class="is-danger help"><?=session('errors.password')?></p>
        </div>

        <div class="field">
            <label class="label">Confirma tu contraseña</label>
            <div class="control">
                <input name='c-password' class="input" type="text" placeholder="Repite contraseña">
            </div>
        </div>

        <div class="field is-grouped">
            <div class="control">
                <button class="button is-primary">Registrar</button>
            </div>
        </div>
    </form>
</section>
<?=$this->endSection()?>