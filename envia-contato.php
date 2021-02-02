<?php
require 'PHPMailerAutoload.php';
require 'class.phpmailer.php';
//Import PHPMailer classes into the global namespace
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// require 'autoload.php';
// session_start();


if (isset($_POST['g-recaptcha-response']))
{
    $captcha_data = $_POST['g-recaptcha-response'];

    if (!$captcha_data)
    {
        echo "<script>alert('Por favor, confirme o captcha!');location.href='fale-conosco.php'</script>";
        exit;
    }
    else
    {
        $resposta = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6Lcgt8IZAAAAAH_WYidNcJ8H-rGCKmTQz9Z-enmRA&response=" . $captcha_data . "&remoteip=" . $_SERVER['REMOTE_ADDR']);

        if ($resposta . success)
        {
            $email = strval($_POST['email']);
            $nome = strval($_POST['nome']);
            $cpf = strval($_POST['cpf']);
            $tiposegurado = strval($_POST['tiposegurado']);
            $servico = strval($_POST['servico']);
            $processo = strval($_POST['processo']);
            $assunto = strval($_POST['assunto']);
            $mensagem = strval($_POST['mensagem']);

            $mail = new PHPMailer;

            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = 'tls';
            $mail->Username = 'rbprev@gmail.com';
            $mail->Password = 'rbprev.pmrb';
            $mail->Port = 587;
            $mail->CharSet = 'utf-8';

            $mail->Debugoutput = 'html';
            $mail->setLanguage('pt');

            $mail->setFrom($_POST['email'], 'Contato');
            $mail->addAddress('rbprev@gmail.com');
            $mail->isHTML(true);

            $mail->Subject = 'CONTATO SITE';
            $mail->msgHTML("
		<html>
		De: {$nome}<br />
		Email: {$email}<br />
		CPF: {$cpf}<br />
		Nro processo: {$processo}<br />
		Tipo: {$tiposegurado}<br />
		Assunto: {$assunto}<br />
		<p>{$mensagem}</p> <br />
		</html>
		");
            @$mail->AltBody = "De: {$mome}\nEmail: {$email}\nMensagem: {$mensagem}";

            // $mail->Body    = nl2br($mensagem);
            // $mail->AltBody = nl2br(strip_tags($mensagem));
            if (!$mail->send())
            {
                echo 'Não foi possível enviar a mensagem.<br>';
                echo 'Erro: ' . $mail->ErrorInfo;
            }
            else
            {
                echo "<script>alert('Mensagem enviada com sucesso! Aguarde nossa resposta.');location.href='index.php'</script>";
            }
        }
    }

}

