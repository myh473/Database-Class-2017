SELECT * FROM film_actor;
SELECT * FROM customer;
SELECT * FROM payment;
SELECT * FROM rental;
SELECT * FROM actor;
SELECT * FROM inventory;
SELECT * FROM address;
SELECT * FROM city;


SELECT customer.first_name, customer.last_name, address.address, address.district, address.postal_code FROM customer LEFT JOIN address ON  address.address_id = customer.address_id;
SELECT address.address, address.district, city.city FROM address RIGHT JOIN city ON address.city_id = city.city_id;