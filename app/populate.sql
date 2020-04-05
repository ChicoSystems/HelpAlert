/*	
	Isaac Travers 
	HSU Hackaton 2020
	Design Last Modified: April 4th 2020
        Help Alert - Demo Population Script
*/

prompt delete all tables
prompt

delete
from user_rejects_meeting;

delete
from user_accepts_meeting;

delete
from user_requests_meeting;

delete 
from meeting;

delete
from appuser;



prompt
prompt CREATE FAKE USERS
prompt

insert
into appuser
VALUES('00001', '40.738179', '-124.219267');

insert
into appuser
VALUES('00002', '40.872958', '-124.077008');


insert
into appuser
VALUES('00003', '40.797683', '-124.166526');


insert
into appuser
VALUES('00004', '40.757678', '-124.178240');


insert
into appuser
VALUES('00005', '40.592865', '-124.158786');


insert
into appuser
VALUES('00006', '40.872958', '-124.077008');



prompt
prompt INSERT FAKE MEETINGS
prompt

insert
into meeting
VALUES('00001', '00001', '00002', '40.738179', '-124.219267',
       'I need help lifting a box onto a shelf. Could someone help?',
       '00001', NULL);

insert into user_requests_meeting
VALUES('00001', '00001');

insert into user_accepts_meeting
VALUES('00002', '00001');

insert into user_rejects_meeting
VALUES('00003', '00001');

insert into user_rejects_meeting
VALUES('00004', '00001');


insert
into meeting
VALUES('00002', '00002', NULL, '40.872958', '-124.077008',
       'My Car tire is flat. Can someone help me fill it up?',
       NULL, NULL);

insert into user_rejects_meeting
VALUES('00003', '00002');

insert into user_rejects_meeting
VALUES('00004', '00002');







