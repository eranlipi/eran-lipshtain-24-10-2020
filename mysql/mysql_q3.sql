TABLE companies
   id INTEGER PRIMARY KEY,
   name VARCHAR (30) NOT NULL,
   country VARCHAR (30) NOT NULL


SELECT
    `country`
FROM
    `companies`
GROUP BY
    country
ORDER BY
    country ASC