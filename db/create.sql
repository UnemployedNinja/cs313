CREATE TABLE series_list
( id                SERIAL           NOT NULL PRIMARY KEY
, series_title      VARCHAR(100)     NOT NULL
);

CREATE TABLE user_profile
( id                SERIAL           NOT NULL PRIMARY KEY
, username          VARCHAR(50)      NOT NULL
, password          VARCHAR(50)      NOT NULL
, series_id       INT              NOT NULL REFERENCES series_list(id) -- no size because this could be really long
);

CREATE TABLE movie_list
( id                SERIAL           NOT NULL PRIMARY KEY
, movie_title       VARCHAR(100)     NOT NULL
);

CREATE TABLE episode_tracker
( id                SERIAL           NOT NULL PRIMARY KEY
, series_id         INT              NOT NULL REFERENCES series_list(id)
, season            INT              NOT NULL
, episode           INT              NOT NULL
);
