update db_ndidenko.ft_table 
set `creation_date` = DATE_ADD(`creation_date`, INTERVAL 20 YEAR)
where id > 5;