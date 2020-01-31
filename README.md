# Olá!
1. Ao baixar o arquivo mude o nome da pasta "App-master" para "App"


# Iniciando o sistema
- Para iniciar o sistema, você deve acessar App\application\config\config.php e procurar pela linha $config['base_url'] = 
'http://localhost/App/'; .Substitua o caminho caso utilize servidor web ou adicione pastas, pois o caminho padrão está como http://localhost(servidor local)/App/(documentos do sistema).
- Desse modo você estará configurando a raiz do projeto onde terá acesso ao controller Home.php que irá chamar a view home.php(Página inicial)!


# Configurando envio de e-mail através de um servidor local	
* Neste caso usei o xampp.


# Assim, o usuário irá procurar pelo arquivo xampp\php\php.ini e nele pesquisará [mail function].

- Altere o valores originais pelos abaixo!
- [mail function]
- ; For Win32 only.
- ; http://php.net/smtp
- SMTP=smtp.gmail.com
- ; http://php.net/smtp-port
- smtp_port=587

- ; http://php.net/sendmail-from
- sendmail_from =avitassibanac@gmail.com

- sendmail_path = "\"C:\xampp\sendmail\sendmail.exe\" -t"
- mail.add_x_header=Off

# Assim, o usuário irá procurar pelo arquivo xampp\sendmail\sendmail.ini e nele pesquisará [sendmail].

- Altere o valores originais pelos abaixo!
- [sendmail]
- smtp_server=smtp.gmail.com
- smtp_port=587
- smtp_ssl=auto
- auth_username=seu@email
- auth_password=suaSenha@do.email

- force_sender=avitassibanac@gmail.com


