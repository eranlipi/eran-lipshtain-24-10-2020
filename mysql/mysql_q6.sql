TABLE products
id INTEGER NOT NULL PRIMARY KEY,
name INTEGER NOT NULL,
price INTEGER NOT NULL


SELECT name
products
WHERE price = (SELECT MIN(price) FROM products);