# testsieger.de 

# MySql 

> **Please explain the differences** 

~~~~sql 
SELECT DISTINCT p.*, d.*
FROM products p
JOIN descriptions d ON p.EAN = d.EAN
WHERE p.updated_at > NOW() - INTERVAL 3 HOUR
~~~~

~~~~sql
SELECT DISTINCT p.*, d.*
FROM products p
INNER JOIN descriptions d ON p.EAN = d.EAN
WHERE p.updated_at > NOW() - INTERVAL 3 HOUR
~~~~
~~~~sql 
SELECT DISTINCT p.*, d.*
FROM products p
INNER JOIN descriptions d ON p.EAN = d.EAN
WHERE p.EAN IN (SELECT EAN FROM products WHERE updated_at > NOW() - INTERVAL 3 HOUR)
~~~~

* which from the above is the most performant and what can you do check fact it?

----
> ## Write some code

* Write a query to find the products that have not been ordered.
~~~~sql 

~~~~

* Write a query to find the total number of products with a price greater than $50.
~~~~sql 

~~~~

* Write a query to find the customer who has placed the most orders.
~~~~sql 

~~~~

* Write a query to find the total number of orders and the total number of customers who placed at least one order.
~~~~sql 

~~~~

* Write a query to display the number of products in each category, along with the total number of products.
~~~~sql 

~~~~

* Write a query to display the average products prices per category, rounded to two decimal places. Also display the category id and name.
~~~~sql 

~~~~

* Write a query to find the top 10 customers by total purchase amount.
~~~~sql 

~~~~
