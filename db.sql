CREATE DATABASE FUT;
USE FUT;

CREATE TABLE Club(
    id int AUTO_INCREMENT PRIMARY key,
    club varchar(100) not null,
    logo varchar(100) not null
);

CREATE TABLE Nationality(
    id int AUTO_INCREMENT PRIMARY key,
    nationality varchar(100) not null,
    flag varchar(100) not null
);

CREATE TABLE Players(
    id int AUTO_INCREMENT PRIMARY key,
    name varchar(50) NOT NULL,
    photo varchar(255) not null,
    position varchar(50) CHECK (position IN ('GK','LB','LCB','RCB','RB','LCM','CM','RCM','LW','RW','ST')),
    rating int not null,
    nationality_id int NOT null, 
    club_id int NOT null, 
    FOREIGN KEY (nationality_id) REFERENCES Nationality (id),
    FOREIGN KEY (club_id) REFERENCES Club (id)
);

CREATE TABLE Normal_Player(
    id int AUTO_INCREMENT PRIMARY key,
    pace int not null,
    shooting int not null,
    passing int not null,
    dribbling int not null,
    defending int not null,
    physical int not null,
    players_id int not null,
    FOREIGN KEY (players_id) REFERENCES Players (id)
);

CREATE TABLE GK_Player(
    id int AUTO_INCREMENT PRIMARY key,
    diving int not null,
    handling int not null,
    kicking int not null,
    reflexes int not null,
    speed int not null,
    positioning int not null,
    players_id int not null,
    FOREIGN KEY (players_id) REFERENCES Players (id)
);
