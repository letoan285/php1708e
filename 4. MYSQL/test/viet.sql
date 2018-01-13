-- Bai 1
select 
		concat(lower(FirstName), ' ', lower(LastName)) as 'Full name',
		TitleOfCourtesy
from Employees

-- Bai 2
select 
		concat(upper(FirstName), ' ', upper(LastName)) as 'Full name'
from Employees

-- Bai 3
select 
		EmployeeID,
		LastName,
		FirstName,

		Title,
		City,
		Country
from Employees
where Country = 'USA'

-- Bai 4
select 
	CustomerID,
	CompanyName,
	ContactName,

	ContactTitle,
	Country
from Customers
where Country = 'UK'

-- Bai 5
select 
	CustomerID,
	CompanyName,
	Address,

	City,
	Country
from Customers
where Country = 'Mexico'