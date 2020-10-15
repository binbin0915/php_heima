@echooff

setPHP_FCGI_MAX_REQUESTS=1000
 
echo Starting PHPFastCGI...
RunHiddenConsole c:/php/php-cgi.exe -b 127.0.0.1:9000 -c c:/php/php.ini
 
echo Starting nginx...
RunHiddenConsole c:/nginx/nginx.exe -p c:/nginx