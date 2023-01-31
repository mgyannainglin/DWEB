INSERT INTO reviews
(reviewer_name,reviewer_contactno,reviewer_email,rating,reviewer_context,isAnnoymous)
VALUES
('Kyal Sin','0123456','kyalsin@example.com',5,'Relax, reconnect, and rejuvenate with Awei Pila. We invite you to forget the world outside and unravel the mysteries of an untouched island.',false);

INSERT INTO user_types
(user_type)
VALUES
('-');

INSERT INTO user_types
(user_type)
VALUES
('Admin');

INSERT INTO users
(user_type_id,username,password,user_status)
VALUES
(2,'admin@gwsc.com','7ece99e593ff5dd200e2b9233d9ba654',1);

INSERT INTO contents
(content_caption,content_description,content_page,content_sorting_number,user_id,content_status)
VALUES
('THE NEWBIE','The newbie has set up their tent in a manner which is not quite right... but will have to do. The newbie didn’t realise they were meant to bring a camping mat in addition to a sleeping bag, and has ended up sleeping on a slight incline.','type',1,1,1);

INSERT INTO contents
(content_caption,content_description,content_page,content_sorting_number,user_id,content_status)
VALUES
('THE OVER-PACKER','The over-packer goes a substantial leap further than the comfort-lover. They have brought a 12-person tent with five rooms, a balcony and central heating for your overnight in the hills. The over-packer has brought a forest-scented candle, despite the fact that you are, in fact, camping in the forest. They have brought a full double-bed air mattress and a foot-pump with which to inflate it.','type',2,1,1);

INSERT INTO contents
(content_caption,content_description,content_page,content_sorting_number,user_id,content_status)
VALUES
('THE MINIMALIST EXPERT','The minimalist has done this before. Many times. Looking at their pack, you would never guess they even have a tent in there, but they do. It’s just that it weighs <1g, packs down smaller than an atom and cost one trillion pounds. Still, if the forecast is good, they will probably sleep outside instead.','type',3,1,1);

INSERT INTO contents
(content_caption,content_description,content_page,content_sorting_number,user_id,content_status)
VALUES
('THE COMFORT-LOVER','The comfort-lover doesn’t mind carrying an extra bit of weight on the way up if it means they’ll be able to lounge when they get there. The comfort-lover has brought a spacious two-person-plus tent with no intention of sharing it with anyone else.','type',4,1,1);

INSERT INTO customers
(username,password,customer_status)
VALUES
('yamin@gmail.com','35178087308cf075f5e2b01486fcba75',1);


INSERT INTO site_preferences (total_views) VALUES (0);