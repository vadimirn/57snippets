--
-- SQL команды
--


-- LIMIT для DELETE запроса

DELETE FROM `responses` WHERE id IN (select id from (select id  FROM `responses` LIMIT 53513, 34482) x);

