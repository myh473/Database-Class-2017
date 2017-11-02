SELECT * from film;
SELECT * from category;
SELECT * from film_category;

SELECT f.title, f.rental_rate, l.name FROM film f, category c, film_category fc, language l WHERE f.film_id = fc.film_id AND fc.category_id = c.category_id AND c.name = "Sci-Fi" AND f.language_id = l.language_id;
SELECT f.title FROM film f, category c, film_category fc WHERE f.film_id = fc.film_id AND fc.category_id AND fc.category_id = c.category_id AND c.name = "Action" AND (f.rating = "PG-13" OR f.rating = "R" OR "NC-17");