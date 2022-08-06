# Mini-aplikacija-Studentski-Servis
Aplikacija rađena za predmet Programiranje web aplikacija i web servisi

# Zadatak:
1.Pomoću PHPa realizovati mini aplikaciju koja omogućava studentu sljedeće opcije: logovanje na sistem, nakon toga prikaz svih predmeta koje može da sluša
(može da sluša samo predmete koji su sa istog smjera kao i student). U okviru informacija o studentu potrebno je definisati i upisani smjer. 
Takođe za svaki predmet definisati smjer na kome se predaje. Potrebno je u okviru aplikacije napisati i PHP kod koji pravi potrebnu bazu podataka,
formira potrebne tabele i popunjava ih inicijalnim podacima.

# Kreiranje baze podataka:
Kada se svi fajlovi prebace u željenu lokaciju kao što je u mom slučaju htdocs (wamp) možemo početi sa kreiranjem baze, tabela i na kraju podataka.
-Bazu smo kreirali sa http://localhost/web/create.php 
-Tabele: http://localhost/web/table.php
-Unos podataka: http://localhost/web/insert.php

# Prijava i odjava
-Login: http://localhost/web/login.php
Nakon što unesemo tačnu lozinku i korisničko ime i ako je pritisnuto dugme submit,pozivamo stranicu http://localhost/web/root.php Podatke saljemo POST metodom.
Ispisaće nam predmete koje student može da sluša na datom smjeru.
Klikom na dugme Odjava vraćamo se na Login: http://localhost/web/login.php
