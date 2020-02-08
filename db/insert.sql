---------- POPULATE THE USER_PROFILE TABLE ----------
INSERT INTO user_profile ( username
                        , password) 
                 VALUES ( 'Shawn'
                        , 'Phillips');

INSERT INTO user_profile ( username
                        , password) 
                 VALUES ( 'Rachel'
                        , 'Phillips');

INSERT INTO user_profile ( username
                        , password) 
                 VALUES ( 'Logan'
                        , 'Phillips');

---------- POPULATE THE Movie TABLE ----------
INSERT INTO movie ( title
                  , year
                  , cover) 
           VALUES ( 'Ninja Tutles'
                  , '1994'
                  , '/cs313-php/web/asignments/week3/season1.jpg');

---------- POPULATE THE list TABLE ----------
INSERT INTO list ( user_id
                        , movie_id) 
                 VALUES ( '1'
                        , '1');


---------- POPULATE THE episode_tracker TABLE ----------
INSERT INTO user_profile ( user_id
                        , movie_id
                        , season
                        , episode) 
                 VALUES ( ''
                        , '');