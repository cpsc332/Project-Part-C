SHELL := /bin/bash

check: 
	find . -type f -name "*.php" -print0 | xargs -0 -n1 php -l

setup-codespace:
	sudo apt update
	sudo apt install mariadb-server mariadb-client
	sudo service mariadb start
	sudo apt install php-mysql
	export PATH=/usr/bin:$PATH
	php -m | grep mysql