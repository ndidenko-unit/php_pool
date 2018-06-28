select `title` as `Title`, `summary` as `Summary`, `prod_year`
from db_ndidenko.film
inner join db_ndidenko.genre
on db_ndidenko.film.id_genre = db_ndidenko.genre.id_genre
where (db_ndidenko.genre.name = "erotic")
order by `prod_year` desc;