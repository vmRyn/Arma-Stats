# READ ME



#Run This Code on Database.

CREATE TABLE adminusers (
    usersID int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    usersUid varchar(128) NOT NULL,
    usersPwd varchar(128) NOT NULL
);

INSERT INTO adminusers(usersUid,usersPwd)
VALUES ('Ryn','Test321')
