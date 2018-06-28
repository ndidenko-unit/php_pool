select `last_name`, `first_name`, date(`birthdate`) as `birthdate` 
from db_ndidenko.user_card 
where (YEAR(`birthdate`) = 1989)
order by `last_name` asc;