<li>
	<h3>Exercise 1</h3>
	<p>SELECT LOWER(CONCAT(FirstName,' ',LastName)) AS 'Full name' ,TitleOfCourtesy FROM employees</p>
</li>

<li>
	<h3>Exercise 2</h3>
	<p>SELECT UPPER(CONCAT(FirstName,' ',LastName)) AS 'Full name' FROM employees</p>
</li>

<li>
	<h3>Exercise 3</h3>
	<p>SELECT EmployeeID,LastName,FirstName,Title,City,Country FROM employees</p>
</li>

<li>
	<h3>Exercise 4</h3>
	<p>SELECT CustomerID,CompanyName,ContactName,ContactTitle,Country FROM customers WHERE Country = 'UK'</p>
</li>

<li>
	<h3>Exercise 5</h3>
	<p>SELECT CustomerID,CompanyName,Address,City,Country FROM customers WHERE Country = 'Mexico'</p>
</li>

<li>
	<h3>Exercise 6</h3>
	<p>SELECT CustomerID,CompanyName,Phone,Address,City,Country FROM customers WHERE Country = 'Sweden'</p>
</li>

<li>
	<h3>Exercise 7</h3>
	<p>SELECT ProductID,ProductName,UnitPrice,UnitsInStock FROM products WHERE UnitsInStock BETWEEN 5 AND 10</p>
</li>

<li>
	<h3>Exercise 8</h3>
	<p>SELECT ProductID,ProductName,UnitPrice,ReorderLevel,UnitsOnOrder FROM products WHERE UnitsOnOrder BETWEEN 60 AND 100</p>
</li>

<li>

