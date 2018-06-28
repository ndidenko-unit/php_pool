insert into db_ndidenko.ft_table (login, `group`, creation_date) 
select last_name, "other", birthdate 
from db_ndidenko.user_card 
where (last_name like ("%a%")) and (char_length(last_name) < 9) 
order by last_name asc
limit 10;