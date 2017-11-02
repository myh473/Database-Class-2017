SELECT * FROM film;
SELECT title, description FROM film f WHERE f.rating = "G";
SELECT f.title, a.first_name, a.last_name FROM film f, actor a, film_actor fa WHERE f.rating = "G" AND f.film_id = fa.film_id AND a.actor_id = fa.actor_id;


SELECT * FROM film_actor;
SELECT * FROM customer;
SELECT * FROM payment;
SELECT * FROM rental;
SELECT * FROM actor;
SELECT * FROM inventory;

SELECT last_name, first_name, email FROM customer ORDER BY last_name;
SELECT last_name, first_name, email FROM customer WHERE active = 0  fa, rental r WHERE 
ORDER BY last_name;
SELECT c.last_name, c.first_name, c.email, a.address, a.district, a.phone FROM customer c, address a WHERE c.address_id = a.address_id ORDER BY c.last_name;
SELECT c.last_name, c.first_name, c.email, a.phone, a.address, a.district, ci.city, a.postal_code, co.country FROM customer c, address a, city ci, country co WHERE c.address_id = a.address_id AND c.active = 0 AND a.city_id = ci.city_id AND ci.country_id = co.country_id  ORDER BY c.last_name;
INSERT INTO film (film_id, title, description, release_year, language_id, original_language_id, rental_duration, rental_rate, length, replacement_cost, rating, special_features) VALUE (1001, "1st Grade FBI Agent", "An undercover FBI agent must pretend to be
a 1st grade teacher to catch the bad guy", 2014, 2, null, 5, 4.99, 123, 20.99,"PG-13","Trailers");
SELECT title, description FROM film WHERE language_id != 1;
SELECT title, rental_duration FROM film WHERE replacement_cost >= 15 AND replacement_cost <= 23;
SELECT AVG(f.length) FROM film f, category c, film_category fc WHERE f.film_id = fc.film_id AND fc.category_id = c.category_id AND c.name = "Children";
SELECT a.last_name, a.first_name, f.title FROM actor a, film f, film_category fc, category c, film_actor fa WHERE f.film_id = fc.film_id AND fc.category_id = c.category_id AND (c.name = "Family" OR c.name = "Foreign" OR c.name = "Horror") AND a.actor_id = fa.actor_id AND f.film_id = fa.film_id ORDER BY a.last_name;
SELECT c.last_name, c.email FROM customer c, actor a, film f, film_actor fa, rental r, inventory i WHERE r.customer_id = c.customer_id AND fa.film_id = f.film_id AND fa.actor_id = a.actor_id AND r.inventory_id = i.inventory_id AND i.film_id = f.film_id AND ((a.first_name = "NICK" AND a.last_name = "WAHLBERG") OR (a.first_name = "MATTHEW" AND a.last_name = "JOHANSSON") OR (a.first_name = "RITA" AND a.last_name = "REYNOLDS")) GROUP BY c.last_name;



