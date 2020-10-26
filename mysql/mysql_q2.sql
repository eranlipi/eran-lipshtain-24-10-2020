TABLE fsia
   companyName VARCHAR (30) NOT NULL PRIMARY KEY
   marketCapitalization FLOAT NOT NULL

TABLE fsib
   companyName VARCHAR (30) NOT NULL PRIMARY KEY
   sharePrice FLOAT NOT NULL
   shareOutstanding  INTEGER NOT NULL


SELECT
    fsib.companyName,
    `sharePrice` * `shareOutstanding` AS marketCapitalization
FROM
    fsib
LEFT JOIN fsia ON fsib.companyName = fsib.companyName
order by marketCapitalization DESC