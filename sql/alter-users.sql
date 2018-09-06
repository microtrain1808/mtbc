ALTER TABLE users ADD
    password CHAR(60) COMMENT 'A salted hash of the password';
    
ALTER TABLE users ADD
    salt CHAR(128) COMMENT 'A user specfic salt';