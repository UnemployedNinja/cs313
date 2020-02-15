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
                  , 'https://www.google.com/search?q=tmnt+season+1&tbm=isch&sxsrf=ACYBGNTfgb0gI5MxpND6PQ9h8y7IsvP4Vw:1581128730233&source=lnms&sa=X&ved=0ahUKEwj32rzC88DnAhViOX0KHXAMAhcQ_AUIswIoAQ&biw=1280&bih=885#imgrc=tqUHZy_HU17MWM');

INSERT INTO movie ( title
                  , year
                  , cover) 
           VALUES ( 'Anime'
                  , '2003'
                  , 'https://www.google.com/search?q=tmnt+season+1&tbm=isch&sxsrf=ACYBGNTfgb0gI5MxpND6PQ9h8y7IsvP4Vw:1581128730233&source=lnms&sa=X&ved=0ahUKEwj32rzC88DnAhViOX0KHXAMAhcQ_AUIswIoAQ&biw=1280&bih=885#imgrc=tqUHZy_HU17MWM');

---------- POPULATE THE list TABLE ----------
INSERT INTO list ( user_id
                        , movie_id) 
                 VALUES ( '1'
                        , '1');

INSERT INTO list ( user_id
                        , movie_id) 
                 VALUES ( '1'
                        , '37');


---------- POPULATE THE episode_tracker TABLE ----------
INSERT INTO user_profile ( user_id
                        , movie_id
                        , season
                        , episode) 
                 VALUES ( ''
                        , '');