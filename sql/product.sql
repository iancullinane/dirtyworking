use dirtysoap

drop table soaps;

create table soaps
(
 ID       int  NOT NULL AUTO_INCREMENT,
 soap_name	VARCHAR(35)	NOT NULL,
 soap_description	VARCHAR(180)	NOT NULL,
 soap_price	DECIMAL(10,2)	NOT NULL,
 soap_size	VARCHAR(8)	NOT NULL,
 imagepath	VARCHAR(50)	NOT NULL,
 PRIMARY KEY(ID) 
 );
                                        

insert into soaps (soap_name, soap_description, soap_price, soap_size, imagepath) values ('Coffee','A soap made with soap stuff and yea we totally make soap around here', 4.99, "3oz", "./images/soaps/brown_soap_web.jpg")


/*update users
set password = md5(password);*/




/*CREATE USER 'gym_app'@'localhost' IDENTIFIED BY 'cs241';

GRANT ALL ON gym.* TO 'gym_app'@'localhost';*/

