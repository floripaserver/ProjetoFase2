<?php
/**
 * Created by PhpStorm.
 * User: paulo
 * Date: 01/07/14
 * Time: 22:21
 */

require_once 'Core/rotas.php';

$rotas = new rotas();

echo $rotas->checkPage();
?>

<section class="content-header">
    <h1>
        Contato
        <small>Pagina de contato</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="."><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Contato</li>
    </ol>
</section>

<section class="content">
    <?php
    if ($_POST) {
        ?>
        <div class="box">
            <div class="box-header">
                <i class="fa fa-archive"></i>

                <h3 class="box-title">Dados enviados com sucesso, abaixo seguem os dados que você enviou:</h3>

            </div>
            <div class="box-body">
                <?php
                echo 'Nome: ' . $nome = $_POST['nome'];
                echo '<br>Email: ' . $email = $_POST['email'];
                echo '<br>Assunto: ' . $assunto = $_POST['assunto'];
                echo '<br>Menssagem: ' . $menssagem = $_POST['menssagem'];
                ?>
            </div>
        </div>
    <?php
    }
    ?>
    <div class="row">

        <!-- quick email widget -->
        <div class="box">

            <div class="box-header">
                <i class="fa fa-envelope"></i>

                <h3 class="box-title">Email</h3>

            </div>
            <div class="box-body">
                <form action="#" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" name="nome" placeholder="Nome:"
                               value="<?php echo $nome; ?>"/>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Email:"
                               value="<?php echo $email; ?>"/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="assunto" placeholder="Assunto"
                               value="<?php echo $assunto; ?>"/>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="menssagem" placeholder="Menssagem"
                                  style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                            <?php echo $menssagem; ?>
                        </textarea>
                    </div>
                    <div class="box-footer clearfix">
                        <button class="pull-right btn btn-default" id="sendEmail">Enviar <i
                                class="fa fa-arrow-circle-right"></i></button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</section>

