```shell
443
<VirtualHost *:443>
    DocumentRoot "/var/www/html/edu/public"
    ServerName live.1314000.cn
    SSLEngine on
    SSLCertificateFile /ssl/live.1314000.cn.cer
    SSLCertificateKeyFile /ssl/live.1314000.cn.key
    SSLCertificateChainFile /ssl/live.1314000.cn_ca.crt
    ErrorLog "/var/www/html/edu/logs/error.log"
    CustomLog "/var/www/html/edu/logs/access.log" combined
    <Directory /var/www/>
        Options Indexes FollowSymLinks
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>

80
<VirtualHost *:80>
    RewriteEngine On
    RewriteRule ^(.*)$ https://%{SERVER_NAME}$1 [R=301,L]
</VirtualHost>


nginx
server{
listen 443;
server_namewww.domain.com;//填写绑定证书的域名
ssl on;
ssl_certificate 1_www.domain.com.crt;
ssl_certificate_key 2_www.domain.com.key;
ssl_session_timeout 5m;
ssl_protocols TLSv1 TLSv1.1 TLSv1.2;#按照这个协议配置
ssl_ciphers ECDHE-RSA-AES128-GCM-SHA256:HIGH:!aNULL:!MD5:!RC4:!DHE;//按照这个套件配置
ssl_prefer_server_ciphers  on;
location / {
root html;//站点目录
index index.html index.htm;
}
	}

```

