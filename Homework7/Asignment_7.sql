SELECT * FROM film;
SELECT * FROM category;
SELECT * FROM payment;
SELECT * FROM rental;
SELECT * FROM actor;
SELECT * FROM inventory;
SELECT * FROM address;
SELECT * FROM city;


SELECT customer.first_name, customer.last_name, address.address, address.district, address.postal_code FROM customer LEFT JOIN address ON  address.address_id = customer.address_id;

SELECT film.title, film.description, category.name FROM film INNER JOIN film_category ON film.film_id = film_category.film_id INNER JOIN category ON film_category.category_id = category.category_id;