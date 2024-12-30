# PHP Blog

## 📝 Descrição

Um blog feito com **PHP** + **VueJS**, para estudar php e coloca-lo na web em uma VPS.

## 🚀 Passo a Passo

### 1. Clonar o Repositório

```bash
git clone https://github.com/GabrielAlvesBM/php-blog/tree/server
cd php-blog
```

### 2. Configurar o Ambiente
Crie um .env com os seguintes dados:

```bash
DB_HOST=host
DB_USER=user
DB_PASSWORD=password
DB_NAME=db_name

ALLOWED_IPS=ips_permitidos
```

### 3. Configurar o Banco de Dados
Faça a configuração básica do MySQL e logo após:

```bash
mysql -u root -p
CREATE DATABASE php_blog;
CREATE TABLE posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    short_description VARCHAR(255) NOT NULL,  
    content TEXT NOT NULL,
    date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

### 4. Configurar o Apache

```bash
sudo nano /etc/apache2/sites-available/000-default.conf
# Adicione: <Directory /var/www/html/server> AllowOverride All Require all granted </Directory>
sudo a2enmod rewrite
sudo systemctl restart apache2
```

### 5. Acessar a Aplicação
Geralmente fica em: http://localhost/server


## 🧑‍💻 Contribuidores

- [Gabriel Alves](https://github.com/GabrielAlvesBM) - Desenvolvedor.