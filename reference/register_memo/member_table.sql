CREATE TABLE member (
	mb_no int(11) NOT NULL AUTO_INCREMENT,
	mb_id varchar(20) NOT NULL DEFAULT '',
	mb_password varchar(255) NOT NULL DEFAULT '',
	mb_name varchar(255) NOT NULL DEFAULT '',
	mb_email varchar(255) NOT NULL DEFAULT '',
	mb_gender varchar(255) NOT NULL DEFAULT '',
	mb_job varchar(255) NOT NULL DEFAULT '',
	mb_language varchar(255) NOT NULL DEFAULT '',
	mb_ip varchar(255) NOT NULL DEFAULT '',
	mb_datetime datetime NOT NULL DEFAULT '1000-01-01 00:00:00',
	mb_modify_datetime datetime NOT NULL DEFAULT '1000-01-01 00:00:00',
	PRIMARY KEY (mb_no),
	UNIQUE KEY mb_id (mb_id),
	KEY mb_datetime (mb_datetime)
);


CREATE TABLE memo(
	me_id int(11) not null AUTO_INCREMENT,
	me_recv_mb_id varchar(20) NOT NULL DEFAULT '',
	me_send_mb_id varchar(20) NOT NULL DEFAULT '',
	me_send_datetime datetime not NULL DEFAULT '1000-01-01 00:00:00',
	me_read_datetime datetime not NULL DEFAULT '1000-01-01 00:00:00',
	me_memo text NOT NULL,
	primary key(me_id),
	key me_recv_mb_id(me_recv_mb_id)
);
