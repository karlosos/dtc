dtc
===

Wyszukiwarka błędów samochodowych w PHP

v 0.0.1 - Karol Działowski - 23-01-2014
Zmiany:
	Utworzone pliki:
		- core
			- init.php
			- functions
			- database
				- connect.php
		- includes
			- overall
				- footer.php
				- head.php
				- logo.php
			- search
				- default_bar.php
				- not_found.php
				- results.php
				- set_bar
		- styles
			- img
				- logo.png
			- style.css
		- index.php
		- panel.php

	Funkcjonalność:
		- brak
	Poprawki:
		- wygląd wyszukiwarki
		- wygląd wyników
		- wygląd braku wyników
		- wygląd panelu administratora
>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

v 0.0.2 - Karol Działowski - 24-01-2014
Zmiany:
	Poprawki:
		- dodanie obrysów formularzy
		- dodanie fikcyjnej funkcjonalności
>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

v 0.0.3 - Karol Działowski - 30-01-2014

Zmiany:
	Utworzone pliki:
		- dokumentacja projektu w folderze /documentation
		- wyeksportowana baza danych do pliki /database/dtc.sql
	Poprawki: 
		- zakomentowanie aktualnego kodu
	Usunięte pliki:
		- cały folder /inspiracje
>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

v 0.0.4 - Karol Działowski - 31-01-2014

Zmiany:
	Poprawki:
		- zmieniona struktura bazy danych (skrócone nazwy)
	Utworzone pliki:
		- /database/zapytania.txt
	Zapytania:
		- ulepszone zapytanie wyszukiwania danych
		- zapytanie w celu dodania danych do tabeli
>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

v 0.0.5 - Karol Działowski - 31-01-2014

Zmiany:
	Utworzone pliki:
		- core
			- functions
				- general.php
				- search.php
				- admin.php
		- includes
			- results
				- result_desc
				- result_causes
				- result_symptoms
			- panel
				-login.php
		- panel.php
	Zmiany zmiennych:
		- Zmienna superglobalna z pasku wyszikawania $_GET['s'] zmieniona na $_GET['s_e']
Do zrobienia:
		- Naprawa działania logowania. Błąd w logowaniu, nie przepisywana jest sesja.
		- Wyczyscic sciezki
>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

v 0.1.0 - Karol Działowski - 26-03-2014	

Zmiany:
		Utworzone pliki:
		- core
			- functions
				- errors.php
		- includes
			- panel
				- add.php
		- logout.php
		
		Baza danych:
		CREATE TABLE IF NOT EXISTS `admin` (
		  `user_id` int(11) NOT NULL AUTO_INCREMENT,
		  `username` varchar(32) NOT NULL,
		  `password` varchar(32) NOT NULL,
		  `active` int(11) NOT NULL DEFAULT '0',
		  PRIMARY KEY (`user_id`)
		) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;
		
		CREATE TABLE IF NOT EXISTS `def_eng` (
		  `id` int(11) NOT NULL AUTO_INCREMENT,
		  `description_eng` text NOT NULL,
		  `causes_eng` text NOT NULL,
		  `symptoms_eng` text NOT NULL,
		  PRIMARY KEY (`id`)
		) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;
		
		CREATE TABLE IF NOT EXISTS `def_pl` (
		  `id` int(11) NOT NULL AUTO_INCREMENT,
		  `description_pl` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
		  `causes_pl` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
		  `symptoms_pl` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
		  PRIMARY KEY (`id`)
		) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;
		
		CREATE TABLE IF NOT EXISTS `errors` (
		  `id` int(11) NOT NULL AUTO_INCREMENT,
		  `error` varchar(10) NOT NULL,
		  `brand` varchar(20) NOT NULL,
		  `author_id` int(11) NOT NULL,
		  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
		  PRIMARY KEY (`id`)
		) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;
		
Do zrobienia:
	- Naprawa wyświetlania błędów na hostingu (nieprawidłowe ścieżki)
		
