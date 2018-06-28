select `title`, `summary` from db_ndidenko.film
where (LOWER(`summary`) REGEXP "vincent")
order by id_film asc;