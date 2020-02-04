DROP TABLE IF EXISTS w5_family_members;
DROP TABLE IF EXISTS w5_relationships;

CREATE TABLE w5_relationships
( id             SERIAL          NOT NULL PRIMARY KEY
, description    VARCHAR(100)    NOT NULL
);

CREATE TABLE w5_family_members
( id             Serial         NOT NULL PRIMARY KEY
, first_name     VARCHAR(100)   NOT NULL
, last_name      VARCHAR(100)   NOT NULL
, relationship_id INT           NOT NULL REFERENCES w5_relationships(id)
);

INSERT INTO w5_relationships (DESCRIPTION) VALUES ('Mother');
INSERT INTO w5_relationships (DESCRIPTION) VALUES ('Father');
INSERT INTO w5_relationships (DESCRIPTION) VALUES ('Wife');
INSERT INTO w5_relationships (DESCRIPTION) VALUES ('Husband');
INSERT INTO w5_relationships (DESCRIPTION) VALUES ('Son');
INSERT INTO w5_relationships (DESCRIPTION) VALUES ('Daughter');

INSERT INTO w5_family_members ( first_name
                              , last_name
                              , relationship_id)
                    VALUES    ('Rachel'
                              , 'Phillips'
                              , 3
);

INSERT INTO w5_family_members ( first_name
                              , last_name
                              , relationship_id)
                    VALUES    ('Shawn'
                              , 'Phillips'
                              , 2
);

INSERT INTO w5_family_members ( first_name
                              , last_name
                              , relationship_id)
                    VALUES    ('Logan'
                              , 'Phillips'
                              , 5
);
