Exercise 1: 
SELECT lower(concat(`FirstName`,' ',`LastName`)) AS `Full name`, `TitleOfCourtesy` FROM employees;

Exercise 2: 
SELECT upper(concat(`FirstName`,' ',`LastName`)) AS `Full name` FROM employees;

Exercise 3:
SELECT *FROM employees WHERE `Country`='%USA%';

Exercise 4:
SELECT * FROM `customers` WHERE `Country`='UK';

Exercise 5:
SELECT * FROM `customers` WHERE `Country`='Mexico';

Exercise 6:
SELECT * FROM `customers` WHERE `Country`='Sweden';

Exercise 7:
SELECT `ProductID`,`ProductName`,`UnitPrice`,`UnitsInStock` FROM products WHERE UnitsInStock BETWEEN 5 and 10;

Exercise 8:
SELECT `ProductID`,`ProductName`,`UnitPrice`,`ReorderLevel`,`UnitsOnOrder` FROM products WHERE UnitsOnOrder BETWEEN 60 AND 100;

