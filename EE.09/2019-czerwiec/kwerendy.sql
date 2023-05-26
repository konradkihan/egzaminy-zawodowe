-- kw1
SELECT nazwa, wystepowanie FROM ryby WHERE styl_zycia=1;
-- kw2
SELECT ryby_id, wymiar_ochronny FROM okres_ochronny WHERE wymiar_ochronny > 50;
-- kw3
SELECT nazwa, akwen, wojewodztwo FROM ryby JOIN lowisko ON ryby.id = lowisko.ryby_id;
-- kw4
ALTER TABLE ryby ADD dobowy_limit integer;
