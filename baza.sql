create database article_management;

use article_management;

create user 'article_database_user'@'localhost' identified by 'user_password_019*';
grant all privileges on article_management.* to 'article_database_user'@'localhost';

delimiter \\
create procedure add_data_to_database()
begin
    declare counter int unsigned default 0;
    
    declare title_1 varchar(50) default 'Welcome to out new blog';
	declare title_2 varchar(50) default 'Is this blog amaizing?';
    declare title_3 varchar(50) default 'How should this app be improved?';

	declare content_1 varchar(255) default 'This is just an example of how the aplication is working.';
	declare content_2 varchar(255) default 'This is a very simple and amaizing blog!';
	declare content_3 varchar(255) default 'Many new features can be added to this blog.';

    declare author varchar(50) default 'Nikola Tošić';
    declare date varchar(50) default '2021-6-2';
    
    declare exit handler for sqlexception
    begin
		rollback;
        GET DIAGNOSTICS CONDITION 1
		@p2 = MESSAGE_TEXT;
        
        select @p2 as 'msg';
    end;

    start transaction;
    
    l : while counter <= 100 do
		if MOD(counter, 3) = 0 then
			insert into articles(title, content, author, date, created_at, updated_at)
            values(title_1, content_1, author, date, now(), now());
        end if;
        
        if MOD(counter, 3) = 1 then
			insert into articles(title, content, author, date, created_at, updated_at)
            values(title_2, content_2, author, date, now(), now());
        end if;
        
        if MOD(counter, 3) = 2 then
			insert into articles(title, content, author, date, created_at, updated_at)
            values(title_3, content_3, author, date, now(), now());
        end if;
		set counter = counter + 1;
    end while l;
    commit;
end\\
delimiter ;

call add_data_to_database();
