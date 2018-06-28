select upper(db_ndidenko.user_card.last_name) as name, db_ndidenko.user_card.first_name, db_ndidenko.subscription.price
from db_ndidenko.member
inner join db_ndidenko.user_card
on db_ndidenko.member.id_member = db_ndidenko.user_card.id_user
inner join db_ndidenko.subscription
on db_ndidenko.member.id_sub = db_ndidenko.subscription.id_sub 
where db_ndidenko.subscription.price > 42
order by db_ndidenko.user_card.last_name asc, db_ndidenko.user_card.first_name asc;
