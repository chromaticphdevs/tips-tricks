-- make the column remove some of security like case sensitiveness
-- benefits removing search case senstiveness on like and eual
ALTER TABLE products 
 MODIFY COLUMN name VARCHAR(100) CHARACTER 
 SET UTF8 COLLATE UTF8_GENERAL_CI
