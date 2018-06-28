select COUNT(db_ndidenko.film.title) as `nb_short-films`
from db_ndidenko.film
inner join db_ndidenko.genre
on db_ndidenko.film.id_genre = db_ndidenko.genre.id_genre
where (db_ndidenko.genre.name = "short film") and (db_ndidenko.film.duration <= 42);