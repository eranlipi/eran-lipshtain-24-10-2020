TABLE employees
   id INTEGER NOT NULL PRIMARY KEY
   mgrId INTEGER REFERENCES employees (id)
   name VARCHAR (30) NOT NULL


SELECT
    employees.name,
    manager.name 
FROM
    employees
LEFT JOIN manager ON 
    employees_id = mgrId
ORDER BY
    employees.name

