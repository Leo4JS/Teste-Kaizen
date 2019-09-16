<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<?php $this->load->view('Templates/header'); ?>
<div class="container-fluid rota">
<div class="container">
    <div class="col-md-12">
        <a id="bellow_nav" href="#home">Contato/</a>
    </div>
</div>
</div>
<?php $this->load->view('Templates/carousel'); ?>  
<div class='container'>
    <div class="container col-8 mt-2">
        <h4 class="display-6">Fale conosco</h4>
        <?php 
            if($formerror):
                echo "<div class='alert alert-primary' role='alert' ";
                    echo '<p>'.$formerror.'<p>';
                echo"</div>";    
            endif;    
            echo form_open('Home/Contato');

            echo "<div class='form-group'>";
                echo form_label('Insira seu nome completo:', 'nome');
                echo form_input('nome', set_value('nome'), array('class' => 'form-control'));
            echo "</div>";

            echo "<div class='form-group'>";
                echo form_label('Insira seu e-mail:', 'email');
                echo form_input('email', set_value('email'), array('class' => 'form-control'));
            echo "</div>";

            echo "<div class='form-group'>";
                echo form_label('Assunto:', 'assunto');
                echo form_input('assunto', set_value('assunto'), array('class' => 'form-control'));
            echo "</div>";

            echo "<div class='form-group'>";
                echo form_label('Digite sua mensagem', 'mensagem');
                echo form_textarea('mensagem', set_value('mensagem'), array('class' => 'form-control'));
            echo "</div>";

            echo form_submit('Enviar', 'Enviar', array('class' => 'form-control btn btn-dark'));
            echo form_close();
        ?>
    </div>
    <?php $this->load->view('modal');?>    
</div>
<?php $this->load->view('Templates/footer'); ?>