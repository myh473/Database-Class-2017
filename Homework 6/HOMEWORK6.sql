SELECT f.title, a.first_name, a.last_name FROM film f, actor a, film_actor fa WHERE f.rating = "G" AND f.film_id = fa.film_id AND a.actor_id = fa.actor_id;

SELECT f.title, f.rental_rate, l.name FROM film f, category c, film_category fc, language l WHERE f.film_id = fc.film_id AND fc.category_id = c.category_id AND c.name = "Sci-Fi" AND f.language_id = l.language_id;