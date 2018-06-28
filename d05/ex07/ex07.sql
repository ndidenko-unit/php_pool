select `title`, `summary` from db_ndidenko.film
where (title REGEXP "42") or (summary REGEXP "42")
order by duration asc;