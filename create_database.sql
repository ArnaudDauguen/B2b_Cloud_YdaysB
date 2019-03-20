CREATE DATABASE IF NOT EXISTS cloud;
use cloud;

-- Create table of admins
CREATE TABLE IF NOT EXISTS admins
(
    id INT NOT NULL AUTO_INCREMENT,
    pseudo VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
);

-- Create table of users
CREATE TABLE IF NOT EXISTS users
(
    id INT NOT NULL AUTO_INCREMENT,
    pseudo VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
);

-- Create table of files
CREATE TABLE IF NOT EXISTS files
(
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    hash VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
);

-- Create table of possessions
CREATE TABLE IF NOT EXISTS have
(
    id INT NOT NULL AUTO_INCREMENT,
    id_user INT NOT NULL,
    id_file INT NOT NULL,
    PRIMARY KEY (id)
);



-- Create first admin and user
INSERT INTO admins (pseudo, email, password) VALUES ('Satan', 'local.admin@cloud.fr', '$2y$10$t.Wq/507PVXirEK0KymzGOZAo217d576b/eLhFLQOkQ2r8tvYWp0C');
INSERT INTO users (pseudo, email, password) VALUES ('Nein!', 'arnaud.dauguen@ynov.com', '$2y$10$JLkfQfwE0ox.bJO1nELo9eXuvA.JHmTmJU7bjo6VPnxSuleFjx8Ji');