-- kw1
SELECT imie, nazwisko, adres, miasto, czyrodo, czybadania FROM pracownicy WHERE id=2;
-- kw2
SELECT COUNT(*) FROM pracownicy;
-- kw3
SELECT id, imie, nazwisko FROM pracownicy WHERE id=2;
-- kw4
SELECT pracownicy.id, stanowiska.nazwa, stanowiska.opis FROM pracownicy JOIN stanowiska ON pracownicy.stanowiska_id = stanowiska.id WHERE pracownicy.id = 2;