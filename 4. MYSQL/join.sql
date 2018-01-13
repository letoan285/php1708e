select 
	p.name,
	p.slug,
	p.description,
	p.image,
	p.created_at,
	c.name,
	c.slug,
	c.content
from post p
join category c
	on p.cate_id = c.id