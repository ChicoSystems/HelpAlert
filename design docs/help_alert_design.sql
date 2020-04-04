/*	
	Isaac Travers 
	HSU Hackaton 2020
	Design Last Modified: April 4th 2020
        Help Alert - Database Design
*/

/****************************************************
 * User Table
 * Will Track all the users in this scenario, and
 * their latitude and longitude
 *****************************************************/

drop table user cascade constraints;
create table user(
	USER_ID		char(5) NOT NULL,
        latitude	number(9, 6),
        longitude       number(9, 6),
        PRIMARY KEY(user_id)
);


/****************************************************
 * Meeting Table
 * Will Track all the meetings in this scenario, and
 * their latitude and longitude, as well as requesting_user
 * the responding_user, any text associated, and 
 * whether the requesting user affirms or denys the
 * meeting
 *****************************************************/

drop table meeting cascade constraints;
create table meeting(
	MEETING_ID		char(5) NOT NULL, 
        requesting_user		char(5), 
        responding_user		char(5),
	latitude		number(9, 6),
	longitude		number(9, 6),
        text                    varchar2(255),
        accepting_booking_user	char(5),
        deny_booking_user       char(5),
        PRIMARY KEY(meeting_id),
        FOREIGN KEY(requesting_user) references user(user_id),
        FOREIGN KEY(responding_user) references user(user_id),
	FOREIGN KEY(accept_booking_user) references user(user_id),
        FOREIGN KEY(deny_booking_user) references user(user_id)
);

/****************************************************
 * Intersection Table
 * Many to Many relationship:
 * user_requests_meeting
 *****************************************************/
drop table user_requests_meeting cascade constraints;

create table user_requests_meeting(
	USER_ID		char(5) NOT NULL,
	MEETING_ID	char(5) NOT NULL,
	PRIMARY KEY(user_id, meeting_id),
	FOREIGN KEY(user_id) references user,
	FOREIGN KEY(meeting_id) references meeting
);


/****************************************************
 * Intersection Table
 * Many to Many relationship:
 * user_accepts_meeting 
 *****************************************************/
drop table user_accepts_meeting cascade constraints;

create table user_accepts_meeting (
	USER_ID		char(5) NOT NULL,
	MEETING_ID	char(5) NOT NULL,
	PRIMARY KEY(user_id, meeting_id),
	FOREIGN KEY(user_id) references user,
	FOREIGN KEY(meeting_id) references meeting
);


/****************************************************
 * Intersection Table
 * Many to Many relationship:
 * user_rejects_meeting 
 *****************************************************/
drop table user_rejects_meeting cascade constraints;

create table user_rejects_meeting (
	USER_ID		char(5) NOT NULL,
	MEETING_ID	char(5) NOT NULL,
	PRIMARY KEY(user_id, meeting_id),
	FOREIGN KEY(user_id) references user,
	FOREIGN KEY(meeting_id) references meeting
);
