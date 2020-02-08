DROP TABLE list;
DROP TABLE user_profile;
Drop TABLE movie;
DROP TABLE episode_tracker; 

CREATE TABLE user_profile
( id                SERIAL           NOT NULL PRIMARY KEY
, username          VARCHAR(50)      NOT NULL
, password          VARCHAR(50)      NOT NULL
);

CREATE TABLE movie
( id                SERIAL           NOT NULL PRIMARY KEY
, title             VARCHAR(100)     NOT NULL
, year              INT              NOT NULL
, cover             VARCHAR(500)     NOT NULL
);

CREATE TABLE list
( id                SERIAL           NOT NULL PRIMARY KEY
, user_id           INT              NOT NULL REFERENCES user_profile(id)
, movie_id          INT              NOT NULL REFERENCES movie(id)       
);

CREATE TABLE episode_tracker
( id                SERIAL           NOT NULL PRIMARY KEY
, user_id           INT              NOT NULL REFERENCES user_profile(id)
, movie_id          INT              NOT NULL REFERENCES movie(id)
, season            INT              NOT NULL
, episode           INT              NOT NULL
);
