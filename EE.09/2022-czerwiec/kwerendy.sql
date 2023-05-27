-- kw1
SELECT imie, nazwisko, miasto FROM klient WHERE miasto LIKE 'Legionowo' OR miasto LIKE 'Warszawa';
-- kw2
SELECT nazwa FROM produkty WHERE cena_brutto > 500;
-- kw3
SELECT nazwa_kategorii, AVG(cena_brutto) FROM kategorie JOIN produkty ON kategorie.id_kat = produkty.id_kat 
-- kw4
SELECT id_zam, ilosc, wartosc, nazwa FROM zamowienia JOIN produkty ON produkty.id_prod = zamowienia.id_prod;
