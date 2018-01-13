-- câu 9
SELECT a.EmployeeID, 
		a.LastName, 
		a.firstName, 
		a.title, 
		YEAR(b.OrderDate) AS 'year', 
		COUNT(*) AS 'total orders' 
FROM employees a, orders b 
WHERE a.EmployeeID=b.EmployeeID 
AND year(b.OrderDate)=1996 
GROUP BY a.EmployeeID;

-- câu 10
SELECT a.EmployeeID, 
		a.LastName, 
		a.firstName, 
		a.City, 
		a.Country, 
		COUNT(*) AS 'total orders' 
FROM employees a, orders b 
WHERE a.EmployeeID=b.EmployeeID 
AND year(b.OrderDate)=1998 
GROUP BY a.EmployeeID;

-- câu 11
SELECT a.EmployeeID, 
		a.LastName, 
		a.firstName,
		b.OrderDate , 
		COUNT(*) AS 'total orders' 
FROM employees a, orders b 
WHERE a.EmployeeID=b.EmployeeID 
AND b.OrderDate 
BETWEEN '1998-1-1' 
AND '1998-7-31' 
GROUP BY a.EmployeeID;

-- câu 12
SELECT a.EmployeeID, 
		a.LastName, 
		a.firstName,
		b.OrderDate AS 'hiredate',
		a.HomePhone, 
		COUNT(*) AS 'total orders' 
FROM employees a, orders b 
WHERE a.EmployeeID=b.EmployeeID 
AND b.OrderDate 
BETWEEN '1997-1-1' 
AND '1997-6-30' 
GROUP BY a.EmployeeID;

-- câu 13
SELECT OrderID, 
		day(OrderDate) AS OrderDay, 
		month(OrderDate) AS OrderMonth, 
		year(OrderDate) AS OrderYear,Freight,
 (CASE 
        WHEN Freight>=100 THEN '10%'
  		ELSE '5%'
    END) AS 'tax', 
    (CASE
     WHEN Freight>=100 THEN (Freight*1.1)
	ELSE (Freight*1.05)     
    END)

FROM orders 
WHERE orderdate 
BETWEEN '1996-1-8' 
AND '1996-8-5';

-- câu 14
SELECT concat(FirstName,' ',LastName) AS 'full name',
		TitleOfCourtesy, 
		(CASE WHEN TitleOfCourtesy='Mr.' THEN 'Male' ELSE 'Female' END) AS sex 
FROM `employees`;

-- câu 15
SELECT concat(FirstName,' ',LastName) AS 'full name',
		TitleOfCourtesy, (CASE WHEN TitleOfCourtesy='Mr.' THEN 'M' ELSE 'F' END) AS sex 
FROM `employees`;

-- câu 16
SELECT concat(FirstName,' ',LastName) AS 'full name',
		TitleOfCourtesy, 
		(CASE WHEN TitleOfCourtesy='Mr.' 
			THEN 'Male' WHEN (TitleOfCourtesy='Ms.' OR TitleOfCourtesy='Mrs.') 
			THEN 'Female' ELSE 'Urknown' END) AS sex 
FROM `employees`;

-- câu 17
SELECT concat(FirstName,' ',LastName) AS 'full name',
		TitleOfCourtesy, 
		(CASE WHEN TitleOfCourtesy='Mr.' 
			THEN '1' WHEN (TitleOfCourtesy='Ms.' OR TitleOfCourtesy='Mrs.') 
			THEN '0' ELSE '2' END) AS sex 
FROM `employees`